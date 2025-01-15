<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profilePictureController extends Controller
{
    public function storeProfile(Request $request,$id){
        //save the profile picture here
        // $filePath = $request->file('file')->store('uploaded_files', 'public');

        //associate the user the avater
        $user = User::find($id);
        dd($id);

      //rewrite the user avater url
        // $user->avater =Storage::disk('public')->url($filePath);
        // $user->save();

         // Return a response
         return response()->json([
            'message' => 'Profile picture uploaded successfully!',
        ]);
    }


    public function show(Request $request ,Storage $storage,$id){
        //find the user from the database
        $user = User::find($id);
        $avater = $user->avater;
        return $avater;
    }
}
