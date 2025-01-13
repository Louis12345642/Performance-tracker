<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usersController extends Controller
{

    /**
     * methods: authUser returns an array of the authenicated  from the
     * database
     */
    public function authuserinfo()
    {

     $user = Auth::user();
      return $user;
    }





    /**
     * Display a listing of the users from the database.
     * methods: index() returns a listing of all users from the
     *         database
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

        //TODO
          //implement the validation of the user

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
     $user->destroy();
    }

        /**
        * assigns a course to a user.
     */
    public function assignCourse(Request $request)
    {
     $user_id =$request->user_id;
     $course_id =$request->course_id;

     $user = User::find($user_id);
     $user->courses()->attach($course_id);

     return [
        "user_id"=> $user_id,
        "course_id"=> $course_id
     ];
    }

    public function courseStudents($course_id){
        $users = Course::find($course_id)->users;
        return $users;
    }



       /**
     * get the role of a specific user
     *
     */
    public function getRoles($id){
        $user = User::find($id);
        $roles = $user->roles;

        return $roles;

    }

}
