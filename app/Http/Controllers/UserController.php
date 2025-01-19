<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $users = User::all();
        return view("users.index")->with([
            "users" => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'name')->all();
        return view("users.create")->with([
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->syncRoles([$request->role]);

        return redirect('user')->with('status', 'Insert Successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        //
        $roles = Role::pluck('name', 'name')->all();
        $user = User::find($id);
        $userRole = $user->roles->pluck('name', 'name')->all();
        return view('users.edit')->with([
            'user' => $user,
            'roles' => $roles,
            'userRole' => $userRole

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $currentPass = $user->password;
        $password = $request->password;
        if (empty($password)) {
            $password = $user->password = $currentPass;
        } else {
            $password = Hash::make($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $password;
        $user->save();

        return redirect('user')->with('status', 'Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
