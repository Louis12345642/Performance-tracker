<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAssigmentRequest;
use App\Http\Requests\UpdateAssigmentRequest;
use App\Models\Assigment;
use App\Models\Course;
use Illuminate\Http\Request;

class AssigmentController extends Controller
{

    /**
     * Display all the assigments of a user for a specific course.
     */

     public function userAssigments($course_id){
        $assigments = Course::find($course_id)->assigments;
        return $assigments;
     }

       /**
        * submits the assigment to of the user by making the stutus to true.

     */

     public function submitAssigment( Request $request,$assigment_id){
        $assigment = Assigment::find($assigment_id);
        $updated =[
          "status"=>$request->status
        ];

        $assigment->update($updated);
        $assigment->save();

     }




    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssigmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Assigment $assigment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssigmentRequest $request, Assigment $assigment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assigment $assigment)
    {
        //
    }
}
