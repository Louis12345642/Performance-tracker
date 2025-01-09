<?php

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
  require __DIR__.'/users/users.php';
});

/*
* prefix:(roles);
*   the roles prefix is used to add roles phrase in each api call of the roles
* group():
*   the function is used for grouping all the routes related to the roles
*
*/

Route::prefix('/roles')->group(function(){
    require __DIR__.'/roles/roles.php';

});


/*
* prefix:(courses);
*   the roles prefix is used to add courses phrase in each api call of the courses
* group():
*   the function is used for grouping all the routes related to the courses
*
*/

Route::prefix('courses')->group(function(){
    require __DIR__.'/courses/course.php';
});






