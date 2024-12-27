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

     //validated the attributes
        $validate =$request->validate(
            [
                "firstName"=>"required",
                 "secondName"=> "required",
                "email"=> "required",
                "rollNumber"=>"required",
                "phone"=>"required",
                "password"=>"required",

            ]
        );

        //store the users in the database
        $user = User::create($validate);

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
          //validated the attributes
          $validate =$request->validate(
            [
                "firstName"=>"required",
                 "secondName"=> "required",
                "email"=> "required",
                "rollNumber"=>"required",
                "phone"=>"required",
                "password"=>"required",

            ]
        );

       $user= User::find($id)->update($validate);
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
