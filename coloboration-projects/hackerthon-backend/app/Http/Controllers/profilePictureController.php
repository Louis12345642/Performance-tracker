<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profilePictureController extends Controller
{
    public function storeProfile(Request $request,$id){
        //save the profile picture here
        $filePath = $request->file('file')->store('uploaded_files', 'public');

        //associate the user the avater
        $user = User::find($id);

      //rewrite the user avater url
        $user->avater =Storage::disk('public')->url('uploaded_files/image.jpg');
        $user->save();

         // Return a response
         return response()->json([
            'message' => 'Profile picture uploaded successfully!',
        ]);
    }


    public function show(Request $request ,Storage $storage){
        $fileUrl = Storage::disk('public')->url('uploaded_files/image.jpg');
        return $fileUrl;

    }
}
