<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $roles = Role::all();
    return $roles;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        $role = $request->validate();
        Role::create($role);

        return $role;
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //find the role using the id
        $role = Role::find($id);
        //return the role
        return $role;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role,$id)
    {
          //find the role using the id
          $role = Role::find($id);
          //update the route
          $role->update($request->all());

          return $role;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role,$id)
    {
        Role::destroy($id);
        return $role;
    }
}
