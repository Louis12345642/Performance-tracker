<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{
    /**
     * Display a listing of the courses in the database.
     */
    public function index()
    {
        $courses = Course::all();

        return $courses;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course = [
            "title"=>$request->title,
            "catOne" =>$request->catOne,
            "catTwo"=> $request->catTwo,
            "Fat"=> $request->Fat

        ];

        Course::create($course);

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
    public function userCourses($id)
    {

        $courses = User::find($id)->courses;
        return $courses;


    }
}
