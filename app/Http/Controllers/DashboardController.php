<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\User;
use App\Models\Comment;
use App\Models\report;
use Carbon\Carbon;


class DashboardController extends Controller{
    public function index(){
        $user = auth()->user();
        $userId= $user->id;
        $planid= $user->plan;
        $plan = Price::find($planid);
       if ($plan !== null) {
   $planName= $plan->title;
        $repnum = $user->report_number;
        $daynum = $plan->day_for_plan;
        //  Report remain
        $reportCount = report::where('user_id', $userId)->count();
        $remainrep = $repnum - $reportCount;
        // Day Remain
        
            $startDateString = $user->plan_purchased_at;

            $currentDate = Carbon::now();
            $eventStartDate = Carbon::parse($startDateString);
            $d1 = date('Y-m-d', strtotime($daynum." days"));
            #if ($eventStartDate <= $currentDate) {
                // dd('sadas');
                $dayremaining1 = $eventStartDate->diffInDays($d1);
              
              if($dayremaining1 > 1){
                  $dayremaining = (int)$dayremaining1;
              }
              else{
                  $dayremaining= null;
              }
        return view('dashboard', compact('user','planName','repnum','remainrep','dayremaining'));
}else{
        
        
        $planName = "No Plan";
        $repnum = "0";
         $daynum = "0";
         $remainrep = '0';
         $dayremaining= null;
        // echo $planname;
        return view('dashboard', compact('user','planName','repnum','remainrep','dayremaining'));
    }

}
}
