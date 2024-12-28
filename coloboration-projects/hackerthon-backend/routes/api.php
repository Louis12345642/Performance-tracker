<?php

use App\Http\Controllers\RoleController;
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
    Route::get('/',[usersController::class,'index'])->name('user.all');
    Route::post('/create',[usersController::class,'store'])->name('user.create');
    Route::get('/{id}',[usersController::class,'show'])->name('show');
    Route::put('/update/{id}',[usersController::class,'update'])->name('update');
    Route::delete('/{id}',[usersController::class,'delete'])->name('delete');
});

/*
* prefix:(roles);
*   the roles prefix is used to add roles phrase in each api call of the roles
* group():
*   the function is used for grouping all the routes related to the roles
*
*/

Route::prefix('/roles')->group(function(){
    Route::get('/',[RoleController::class,'index'])->name('role.all');
    Route::post('/create',[RoleController::class,'store'])->name('role.create');
    Route::get('/{id}',[RoleController::class,'show'])->name('role.show');
    Route::delete('/{id}',[RoleController::class,'destroy'])->name('role.delete');
    Route::put('/{id}',[UsersController::class,'update'])->name("update");

});


