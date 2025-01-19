<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $permission = Role::get();
        return view("roles.index", [
            'roles' => $permission
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("roles.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Role::create(['name' => $request->name]);
        return redirect('roles')->with('status', 'Insert Successful');
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

        $id = Role::findOrFail($id);
        //
        return view('roles.edit', [
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $role = Role::findOrFail($id);

        $role->update(['name' => $request->name]);
        return redirect('roles')->with('status', 'Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function addPermissionToRole($id)
    {
        $selected = DB::table('role_has_permissions')->where('role_id', $id)->pluck('permission_id','permission_id')->all();

        $role = Role::findOrFail($id);
        $permission = Permission::get();

        return view('roles.addPermission', [
            'role' => $role,
            'permissions' => $permission,
            'selected'=> $selected
        ]);
    }
    public function givePermissionToRole(Request $request, $id)
    {
        $permission = $request->permission;
        $role = Role::findOrFail($id);
        $role->syncPermissions($permission);

        return redirect()->back()->with('status', 'Addsuccessfull');
    }
}
