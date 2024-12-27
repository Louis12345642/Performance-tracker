<?php

use App\Http\Controllers\usersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


/*
* prefix:(user);
*   the user prefix is used to add users phrase in each api call of the user
* group():
*   the function is used for grouping all the routes related to the user
*
*/


Route::prefix('/users')->group(function(){
    Route::get('/',[usersController::class,'index'])->name('users.all');
});


