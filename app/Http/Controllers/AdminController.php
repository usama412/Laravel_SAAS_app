<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Price;
use App\Models\report;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\Builder;

class AdminController extends Controller
{
    public function show(){
        $user = User::all();
        $usercount = $user->count();
        $reportcount = Report::count();
        // echo '<pre>';
        // print_r($plan->toArray());
        // Pass data to view
        $now = Carbon::now();
$twentyFourHoursAgo = $now->subDay(); // Get the timestamp for 24 hours ago

// Count users registered in the last 24 hours
$recentUserCount = User::where('created_at', '>', $twentyFourHoursAgo)->count();
        $data = compact('user','usercount','reportcount','recentUserCount');
        return view('admin.admin')->with($data);
    }


    public function report(Request $request){
        {
            $userId = $request->query('userId');
    
            try {
                // Find the user by ID
                // $user = User::findOrFail($userId);
    
                // Count the reports directly related to the user using the Report model
                $totalReports = report::where('user_id', $userId)->count();
    
                return response()->json(['total_reports' => $totalReports]);
            } catch (ModelNotFoundException $exception) {
                return response()->json(['error' => 'User not found'], 404);
            }
        }
    }


    public function report2($id){
        $report = Report::where('user_id',$id)->get();
        

        if ($report) {
            return response()->json(
                $report
            );
        }
    
        return response()->json(['error' => 'Report not found'], 404);
    }
    public function user2($id){
        $report = User::find($id);
        
        if ($report) {
            $plan = $report->plan;

        $plan2 = Price::where('title',$plan)->first();
        return response()->json([
            'user' => $report,
            'plan2' => $plan2
        ]);
    
        }
    
        return response()->json(['error' => 'Report not found'], 404);
    }
    
    
    public function show_comment(){
        $user = Comment::all();
        // echo '<pre>';
        // print_r($plan->toArray());
        // Pass data to view
        $data = compact('user');
        return view('admin.admin_comment')->with($data);
    }
    public function comment2($id){
        $report = Comment::find($id);
        if ($report) {
       
        return response()->json($report);
            
        }else{
    
        return response()->json(['error' => 'Comment not found'], 404);}
    }
}

