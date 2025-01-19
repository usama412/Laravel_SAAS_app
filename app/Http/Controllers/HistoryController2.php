<?php

namespace App\Http\Controllers;
use App\Models\report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Models\Price;
use Carbon\Carbon;

class HistoryController2 extends Controller
{
    public function history(Request $request)
    {
        // $userid23 = Auth::id();
        // $vin = $request['vin'];
        // $rep = Report::where('user_id', $userid23)
        // ->where('vin', $vin)
        // ->exists();
        // if ($rep) {
        //     dd($rep);
        //     return back()->with('Message','Vin Already Exist');
        // }else {
            if($request->has('vin')){
                // $vin
                $vin = $request->input('vin');
                
                // $vin = '2D4RN3D15AR440271';
                // dd($vin);
            $user = "mike@chromacars.com";
            $password = "ctxc0d3";
            $format = "json";
            $key = "0C93DAXV2Z6PEJN";
            $mode = "test";
            
            // Construct API URL
            $url_vin = 'http://api.vinaudit.com/v2/pullreport?format='.$format.'&key='.$key.'&user='.$user.'&pass='.$password.'&mode='.$mode.'&vin='.$vin;
            
            // Initialize cURL session
            $curl3 = curl_init();
            curl_setopt_array($curl3, array(
                CURLOPT_URL => $url_vin,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_ENCODING => 'gzip',
                CURLOPT_FRESH_CONNECT => 1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            // Execute cURL session
            $response3 = curl_exec($curl3);
            // dd($response3);
            // Handle response
            if ($response3 === false) {
                // echo 'Curl error: ' . curl_error($curl3);
                 // Use double quotes for proper interpolation
                return response()->json(['Curl error: ' => curl_error($curl3) , 'Status'=> '0']);
            } else {

                $res3 = json_decode($response3);
                // dd($res3);
                $report_id= $res3->id;
                
            
                    // Store data in the database
                    $data = new report(); // Replace YourModel with your actual model name
                    $data->vin = $request->vin;
                    $data->user_id  = Auth::id();
                    $data->report_id  = $report_id;
                    $data->created_at = now();
                    $data->updated_at = now();
                    $data->save();
                    return view('reportpage')->with(['data' => $res3 , 'Status'=> '1']);
                
                echo $response3; 
                // Output API response (for debugging purposes)
                
                // Example of database insertion (uncomment and modify as per your database structure)
                /*
                if (isset($res3->vin) && isset($res3->id)) {
                    $his_data = mysql_query("INSERT INTO vehicle_history_report (vin, report_id, generated_date) VALUES ('". $res3->vin ."', '". $res3->id ."', '". date('Y-m-d H:i:s') ."')");
                    $id = mysql_insert_id(); // Deprecated, consider using MySQLi or PDO
                }
                */
            }
            
            curl_close($curl3); // Close cURL session
        } else {
            
            // echo 'noaccess';
             // Output if VIN is not set in POST request
             return response()->json(['Error ' => 'No Access' , 'Status'=> '0']);
        }        
        

        // Credentials for VinAudit API
        
    // }
}
    public function history2(){
        if(isset($_GET['vin'])){
            $user = "mike@chromacars.com";
            $password = "ctxc0d3";
            $format = "json";
            $key = "0C93DAXV2Z6PEJN";
            $mode = "test";
        $url = 'http://api.vinaudit.com/v2/pullreport?format='.$format.'&include=recalls&key='.$key.'&vin='.$_GET['vin'];
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_ENCODING => 'gzip',
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        // Execute cURL session
        $response = curl_exec($curl);
        
        // Handle response
        if ($response === false) {
            // Return error if cURL fails
            return response()->json(['Curl error' => curl_error($curl), 'Status' => '0']);
        } else {
            $res3 = json_decode($response);
            
            // Return the data if successful
            return response()->json(['data' => $res3, 'Status' => '1']);
        }
        
        curl_close($curl); // Close cURL session
    } else {
        // Return error if VIN is not set in GET request
        return response()->json(['Error' => 'No Access', 'Status' => '0']);
    }}
    public function showReports(){
        $user = Auth::user();
        $plan = $user->plan;
        $userId = $user ->id;
        // echo $userId;
        if($plan != "No plan" && $plan != null){
            // echo $plan;
            $planname = Price::find($plan);
            $repnum= $planname->number_of_reports;
            $genrep = Report::where('user_id', $userId)->count();
            $remrep = $repnum - $genrep;
            // echo $remrep;
        $id = Auth::id();

        $planName= $planname->title;
        $repnum = $planname->number_of_reports;
        $daynum = $planname->day_for_plan;
        // Day Remain
        
        $startDateString = $user->plan_purchased_at;
        
        $currentDate = Carbon::now();
        $eventStartDate = Carbon::parse($startDateString);
        $d1 = $eventStartDate->addDays($daynum)->format('Y-m-d');
        
        
            if ($currentDate->greaterThan($eventStartDate)) {
                $dayremaining1 = -$eventStartDate->diffInDays($currentDate);
                $dayremaining = (int)$dayremaining1;
                
                $reports = Report::where('user_id', $id)->get();
                $data = compact('reports','remrep','dayremaining');
                return view('report')->with($data);
            } else {
                $dayremaining1 = $eventStartDate->diffInDays($currentDate);
                $dayremaining = (int)$dayremaining1;
                $reports = Report::where('user_id', $id)->get();
                $data = compact('reports','remrep','dayremaining');
                return view('report2')->with($data);
            }
            
        
        }else{
            // echo $plan;
            return back()->with('message','Purchase Plan To Access This Feature');
        }
    }
    public function viewreport(Request $request){
        if ($request->has('id')) {
            $id = $request->input('id'); // Get 'id' from the request
    
            // Fetch the report from the database
            $report = Report::find($id);
    
            
            $number = $report->report_id;

            $report = Report::find($id);
            $number = $report->report_id;
            $format = "json";
            
            // Construct API URL
            $url_vin = 'https://api.vinaudit.com/v2/report?id='.$number.'&format='.$format;
            
            // Initialize cURL session
            $curl3 = curl_init();
            curl_setopt_array($curl3, array(
                CURLOPT_URL => $url_vin,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_ENCODING => 'gzip',
                CURLOPT_FRESH_CONNECT => 1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));
            
            // Execute cURL session
            $response3 = curl_exec($curl3);
            
            // Handle response
            if ($response3 === false) {
                // echo 'Curl error: ' . curl_error($curl3);
                 // Use double quotes for proper interpolation
                return response()->json(['Curl error: ' => curl_error($curl3) , 'Status'=> '0']);
            } else {

                $res3 = json_decode($response3);
                
            
                    return response()->json(['data' => $res3 , 'Status'=> '1']);
                
                echo $response3; 
                // Output API response (for debugging purposes)
                
                // Example of database insertion (uncomment and modify as per your database structure)
                /*
                if (isset($res3->vin) && isset($res3->id)) {
                    $his_data = mysql_query("INSERT INTO vehicle_history_report (vin, report_id, generated_date) VALUES ('". $res3->vin ."', '". $res3->id ."', '". date('Y-m-d H:i:s') ."')");
                    $id = mysql_insert_id(); // Deprecated, consider using MySQLi or PDO
                }
                */
            }
            
            curl_close($curl3); // Close cURL session
        } else {
            
            // echo 'noaccess';
             // Output if VIN is not set in POST request
             return response()->json(['Error ' => 'No Access' , 'Status'=> '0']);
        }     
    }
    public function viewreport2(Request $request){
        
        if ($request->has('id')) {
            $id = $request->input('id'); // Get 'id' from the request
    
            // Fetch the report from the database
            $report = Report::find($id);
    
            
            $number = $report->report_id;

            $report = Report::find($id);
            $number = $report->report_id;
            $format = "json";
           
        $url = 'https://api.vinaudit.com/v2/report?id='.$number.'&format='.$format;
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_ENCODING => 'gzip',
            CURLOPT_FRESH_CONNECT => 1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        // Execute cURL session
        $response = curl_exec($curl);
        
        // Handle response
        if ($response === false) {
            // Return error if cURL fails
            return response()->json(['Curl error' => curl_error($curl), 'Status' => '0']);
        } else {
            $res3 = json_decode($response);
            
            // Return the data if successful
            return response()->json(['data' => $res3, 'Status' => '1']);
        }
        
        curl_close($curl); // Close cURL session
    } else {
        // Return error if VIN is not set in GET request
        return response()->json(['Error' => 'No Access', 'Status' => '0']);
    }
}
public function reportcdc(Request $request){
 return view('reportpage');   
}    
}
