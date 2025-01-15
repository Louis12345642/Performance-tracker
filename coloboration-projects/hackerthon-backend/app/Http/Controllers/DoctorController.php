<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $doctor= Doctor::all();
     return $doctor;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $doctor = [
            "name"=>$request->name,
            "specialization"=>$request->specialization

        ];

        //create the doctor within the doctor database
        Doctor::create($doctor);
        return [
            "message"=>"doctor created"

        ];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //find the doctor using the id
        $doctor = Doctor::find($id);
        return $doctor;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor,$id)
    {
    //find the doctor using the id
    $doctor = Doctor::find($id);
    //update the doctor
    $doctor->update($request->all());
    return [
        "message"=>"doctor updated"
    ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor ,$id)
    {
        //find the doctor
        $doctor= $doctor->find($id);
        //delete the doctor
        $doctor->delete();

        return [
            'message'=>"doctor deleted successfully"
        ];
    }


       /**
     *books a doctor to a specific user
     */
    public function bookDoctor(Doctor $doctor,Request $request)
    {
        $doctor_id = $request->doctor_id;
        $user_id = $request->user_id;
        //find the user
        $user= $doctor->find($user_id);
        //book the user a doctor
        $user->doctor_id = $doctor_id;


    }
}
