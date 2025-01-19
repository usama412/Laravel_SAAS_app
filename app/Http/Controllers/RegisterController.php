<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Price;


class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request)
{
    $emailExists = User::where('email', $request->email)->exists();

    if ($emailExists) {
        session()->flash('alert', 'Email Is already Used');
        return redirect()->back();
    }else{
        if ($request['password'] === $request['confirmpassword']) {
            $user = new User;
            $user->name = $request['fullname'];
            // $user->plan = $request['plan_id'];
            $user->username = $request['username'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
            $user->created_at = now();
            $user->updated_at = now();
            $user->save();
            return redirect('/login');
        } else {
            session()->flash('alert', 'Password is Not Matched With Confirm Password! Please Try Again');
            return redirect()->back();
        }
    }
    }
    // public function planname($plan_id){
    //     $id=$plan_id;
    //     $data = compact('id');

    //     return view('register')->with($data);
    // }
}
