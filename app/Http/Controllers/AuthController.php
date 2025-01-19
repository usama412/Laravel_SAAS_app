<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Price;
use App\Models\Comment;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Srmklive\PayPal\Services\PayPal;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Carbon\Carbon;
use App\Models\report;
use App\Mail\PaymentSuccessMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Smtp;
use PragmaRX\Google2FALaravel\Google2FA;
class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            
            if ($user->userTypes === 'admin') {
               
                return redirect('/admin');
            } elseif ($user->userTypes === 'user') {
            //   $useremail1 = $user->email;
            //     $google2fa = new Google2FA();
            //   dd($google2fa);
            //     $otp = $google2fa->generateSecretKey();
            //     $otpdata = [
            //         "name" => $user->name,
            //         "otp" => $otp,
            //     ];
            //     Mail::to($useremail1)->send(new otp2fa($otpdata['name'], $otpdata['otp']));
                return redirect('/dashboard');
            } else {
               
                Auth::logout();
                return redirect('/login')->with('error', 'Unknown user type.');
            }
        }

        // If authentication fails, redirect back to login with error message
        $request->session()->flash('alert', 'Your credentials are incorrect. Please try again.');
        return redirect('/login');
    }  
       public function contact_show(){
        return view('contact');
        
       }

       public function contact_submit(Request $request){
        $comment = new Comment;
        $comment->username = $request['username'];
        $comment->email = $request['email'];
        $comment->subject = $request['subject'];
        $comment->message = $request['message'];
        $comment->created_at = now();
        $comment ->save();
        return redirect('/contact');
       }
       
       public function plancheckout($plan_id){
            $user = auth()->user();
            $user_id = $user->id;
            $userplan = $user -> plan;
            
            if($userplan !== null){
                # rep check
                $planname = Price::find($userplan);
                $remrep2 = $user->report_number;
                $repnum = (int)$remrep2;
                $genrep2 = Report::where('user_id', $user_id)->count();
                $genrep = (int)$genrep2;
                $remrep = $repnum - $genrep;
                
                $planName= $planname->title;
                $repnum = $planname->number_of_reports;
                $daynum = $planname->day_for_plan;
                // Day Remain
                
                $startDateString = $user->plan_purchased_at;
                
                $currentDate = Carbon::now();
                $eventStartDate = Carbon::parse($startDateString);
                $d1 = $eventStartDate->addDays($daynum)->format('Y-m-d');
                if ($currentDate->greaterThan($d1)) {
                    $dayremaining1 = -$eventStartDate->diffInDays($currentDate);
                    $dayremaining = (int)$dayremaining1;
                    // $dayremaining  = $daynum - $dayremaining2;

                    // dd($dayremaining);
                    
                    
                } else {
                    
                    $dayremaining1 = -$eventStartDate->diffInDays($currentDate);
                    $dayremaining = $dayremaining1;
                    $dayremaining = (int)$dayremaining;
                    
                    
                }

                // dd($dayremaining);
            if ($remrep > 0 && $dayremaining > 0) {
                    return back()->with('message','You Already Have Subscription');
            }else{
                    
            }
            $plan = Price::find($plan_id);
            $am = number_format($plan->price, 2);
            $Planname = $plan -> title;
            // dd($Planname);
            // $data = User::find($user_id);
            
            // $data->plan = $plan_id;
            // $data->update();
            // return redirect('/dashboard');


        // #dd(config('paypal'));
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        
        
        
        

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => 'https://homeb.maxallowance.com/success',
                "cancel_url" => 'https://homeb.maxallowance.com/cancel',
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $am,

                    ],
                    
                    "description" => $Planname,
                ]
                
            ]
        ]);
        // dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    
                    
                    DB::table('plan_payment')->insert([
                        // store paypal response id
                        'token' => $response['id'],
                        'amount' => $am,
                        'status' => 0,
                        'user_id'=>$user_id,
                        'plan_id'=>$plan_id,
                
                    ]);

                    return redirect($links['href']);
                //     return response()->json([
                //         'success' => true,
                //         'link' => return red
                //     ],200);
                // }
            }
        }
        // dd($response);
            DB::table('plan_payment')->insert([
                'token' => $response['id'],
                'amount' => $am,
                'status' => 3,
                'user_id'=>$user_id,
                'plan_id'=>$plan_id
            ]);
            // dd($response);
            
            return response()->json([

                'success' => false,
                'error' => 'Something went wrong.',
            ],555);
        } else {
            
            
            DB::table('plan_payment')->insert([
                'token' => 'NA',
                'amount' => $am,
                'status' => 3,
                'user_id'=>$user_id,
                'plan_id'=>$plan_id
            ]);
            // dd($response);
            return response()->json([
                'success' => false,
                'error' => $response['message'] ?? 'Something went wrong.',
            ],555);
        }

          }
            else{
            $plan = Price::find($plan_id);
            $am = number_format($plan->price, 2);
            $Planname = $plan -> title;
            // dd($Planname);
            // $data = User::find($user_id);
            
            // $data->plan = $plan_id;
            // $data->update();
            // return redirect('/dashboard');


        // #dd(config('paypal'));
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        
        
        
        

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => 'https://homeb.maxallowance.com/success',
                "cancel_url" => 'https://homeb.maxallowance.com/cancel',
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $am,

                    ],
                    
                    "message" => $Planname,
                ]
                
            ]
        ]);
        // dd($response);
        if (isset($response['id']) && $response['id'] != null) {
            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    
                    
                    DB::table('plan_payment')->insert([
                        // store paypal response id
                        'token' => $response['id'],
                        'amount' => $am,
                        'status' => 0,
                        'user_id'=>$user_id,
                        'plan_id'=>$plan_id,
                
                    ]);

                    return redirect($links['href']);
                //     return response()->json([
                //         'success' => true,
                //         'link' => return red
                //     ],200);
                // }
            }
        }
        // dd($response);
            DB::table('plan_payment')->insert([
                'token' => $response['id'],
                'amount' => $am,
                'status' => 3,
                'user_id'=>$user_id,
                'plan_id'=>$plan_id
            ]);
            // dd($response);
            
            return response()->json([

                'success' => false,
                'error' => 'Something went wrong.',
            ],555);
        } else {
            
            
            DB::table('plan_payment')->insert([
                'token' => 'NA',
                'amount' => $am,
                'status' => 3,
                'user_id'=>$user_id,
                'plan_id'=>$plan_id
            ]);
            // dd($response);
            return response()->json([
                'success' => false,
                'error' => $response['message'] ?? 'Something went wrong.',
            ],555);
        }

          }}
          public function successTransaction(Request $request)
            {
        
            $pdata = DB::table('plan_payment')
        ->where('token', '=', $request['token'])
        ->first();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        
        
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            
            DB::table('plan_payment')
              ->where('token', $request['token'])
              ->update(['status' => 1, 'payer_id' => $request['PayerID']]);
              $plan_id = DB::table('plan_payment')
              ->where('token', $request['token'])
              ->value('plan_id');
              $rep_num = DB::table('plan')
              ->where('plan_id', $plan_id)
              ->value('number_of_reports');
              $user = auth()->user();
              
            //   $plan_payment = payment::where('token',$request['token']);
            //   $plan_id = $plan_payment->plan_id;
            $repnu222 = $user->report_number;
             
            
            $user->report_number = $repnu222 + $rep_num; 
            $user->plan = $plan_id;
            $user->plan_purchased_at= now();
            $user->update();
            
            $user1 = Auth::user();
            $email = $user1->email;
            $plan = Price::find($plan_id);
            $am = number_format($plan->price, 2);
            $Planname = $plan -> title;
            $plandata = [
            "name" => $user1->name,
            "plan_name" => $Planname,
            "amount" => $am,
            "confirmation" => $request['token'],
        ];
        // dd($plandata);
        // Send the success email
        Mail::to($email)->send(new PaymentSuccessMail($plandata['name'], $plandata['plan_name'], $plandata['amount'],$plandata['confirmation']));

            // Send the success email
            
            return redirect('/dashboard');
        } else {
            DB::table('plan_payment')
              ->where('token', $request['token'])
              ->update(['status' => 3, 'payer_id' => $request['PayerID'], 'message' => $response['message'] ?? 'Something went wrong.' ]);

            return redirect('/');
        }
    }
    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        $pdata = DB::table('plan_payment')
        ->where('paypal_id', '=', $request['token'])
        ->first();
        
        DB::table('plan_payment')
              ->where('paypal_id', $request['token'])
              ->update(['status' => 3, 'message' => $response['message'] ?? 'Transaction Cancelled' ]);
        return redirect('/');
    }
}