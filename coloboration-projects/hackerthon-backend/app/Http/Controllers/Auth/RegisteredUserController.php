<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', Rules\Password::defaults()],
        // ]);

            $user = User::create([
            'firstName' => $request->firstName,
            'lastName'=>$request->lastName,
            'rollNumber'=> $request->rollNumber,
            'phone'=>$request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->string('password')),
        ]);

        event(new Registered($user));

        Auth::login($user);

    return $user;


    }




    public function storeProfile(Request $request,$id)
    {
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', Rules\Password::defaults()],
        // ]);

            // $user = User::create([
            // 'firstName' => $request->firstName,
            // 'lastName'=>$request->lastName,
            // 'rollNumber'=> $request->rollNumber,
        //     'phone'=>$request->phone,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->string('password')),
        // ]);

        // event(new Registered($user));

        //         //save the profile picture here
        // // $filePath = $request->file('file')->store('uploaded_files', 'public');

        // Auth::login($user);

    // return $user;



    $user = User::find($id);

   $filePath = $request->file('file')->store('uploaded_files', 'public');

    //rewrite the user avater url
      $user->avater =Storage::disk('public')->url($filePath);
      $user->save();

       // Return a response
      return $request->all();
    }


    public function storeAvater(Request $request,$id){
        //save the profile picture here
        // $filePath = $request->file('file')->store('uploaded_files', 'public');

        //associate the user the avater
        $user = User::find($id);



      //rewrite the user avater url
        // $user->avater =Storage::disk('public')->url($filePath);
        // $user->save();

         // Return a response
        return $request->all();
    }
}
