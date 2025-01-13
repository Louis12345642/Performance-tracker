<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the courses in the database.
     */
    public function index(){
        $courses = Course::with('assigments')->get();

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
    public function show(Course $course ,$id)
    {
        //find the coirse
        $course = $course->with('assigments')->find($id);

        return $course;


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course,$id)
    {

        $course = $course->find($id);
        $course->update($request->all());
        return $course;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

    //retrive
    $course = Course::find($id);
    //delete
    $course->delete();
    return [
        "message"=>"course deleted"
    ];
    }


      /**
     * return all the courses that belongs to a specific user.
     */
    public function userCourses($id, User $user, Course $course)
    {



        $courses = User::find($id)->courses;

        $this->authorize('view', $course);


        return $courses;





    }
}
