<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the users from the database.
     */
    public function index()
    {
         $users = User::all();
        return $users;
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {

        //get all the user information from the request
        $user = [
            "name"=>$request->name,
            "secondtName" => $request->secondtName,
            "email"=>$request->email,
            "password"=>$request->password,
            "rollNumber"=>$request->rollNumber,
            "phone" => $request->phone
        ];

        //create the user here

        //check if all the fields are validated

        User::create($user);
        return $user;


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          //get all the user information from the request

       $user= User::find($id);
       $user->update($request->all());
       return $user;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     //find the user using the id
     $user = User::find($id);
     //delete the user
     $user->delete();
    }
}
