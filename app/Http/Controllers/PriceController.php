<?php

namespace App\Http\Controllers;
use App\Models\Price;
use App\Models\User;
use App\Models\Comment;
use App\Models\Ratting;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        // Fetch all users
        $plan = Price::all();
        // echo '<pre>';
        // print_r($plan->toArray());
        // Pass data to view
        $data = compact('plan');
        return view('price')->with($data);
    }

    public function showuser(){
        $user = User::all();
        $data = compact('user');
        return view('admin.admin_user')->with($data);
    }

    public function adminplan(){

        $plan = Price::all();
        $data = compact('plan');
        return view('admin.adminplan')->with($data);
    }

    public function editplan(Request $request ,$Plan_id){
        // echo $Plan_id;
            $plan = Price::where('plan_id',$Plan_id)->first();
            // echo '<pre>';
            // echo ($plan);X
            $plan->title = $request['title'];
        // $plan = Price::where('plan_id',$request['plan_id']);
            $plan->price = $request['price'];
            $plan->name = $request['desc'];
            $reports = $request['number'];
            $freereports = $request['freenumber'];
            $number_of_reports = $reports + $freereports;
            $plan->number_of_reports = $number_of_reports;
            $plan->day_for_plan = $request['day'];
            $plan->updated_at = now();
            $plan->update();
            return redirect('/adminplan');
    }
    
    public function homeprice()
    {
        
        $plan = Price::all();
        echo '<pre>';
        print_r($plan->toArray());
        // Pass data to view
        // $data = compact('plan');
        // return view('home')->with($data);
    }
    public function home()
    {
        // Fetch all users
        $plan = Price::all();
        // dd($plan);
        // echo '<pre>';
        // print_r($plan->toArray());
        // Pass data to view
        $data = compact('plan');
        return view('home')->with($data);
    }
    
    public function message_submit(Request $request){
        $comment = new Comment;
        $comment->username = $request['username'];
        $comment->email = $request['email'];
        $comment->subject = $request['subject'];
        $comment->message = $request['message'];
        $comment->created_at = now();
        $comment ->save();
        return redirect('/');
       }
       
       public function ratting_submit(Request $request){
        //   dd($request);
        $ratting = new ratting;
        $ratting->ratting_value = $request['rating'];
        $ratting->name = $request['username'];
        $ratting->email = $request['email'];
        $ratting->message = $request['message'];
        $ratting->created_at = now();
        $ratting ->save();
        // return redirect('/');
       }
       
}
