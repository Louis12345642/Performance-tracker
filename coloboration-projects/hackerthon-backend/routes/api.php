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
    Route::get('/',[RoleController::class,'index'])->name('role.all');
    Route::post('/create',[RoleController::class,'store'])->name('role.create');
    Route::get('/{id}',[RoleController::class,'show'])->name('role.show');
    Route::delete('/{id}',[RoleController::class,'destroy'])->name('role.delete');
    Route::put('/{id}',[UsersController::class,'update'])->name("update");
    Route::post("/assign-role",[RoleController::class,"assignRole"])->name("assign-role");

});






