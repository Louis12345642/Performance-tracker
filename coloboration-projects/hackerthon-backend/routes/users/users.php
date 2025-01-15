<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;


Route::get('/',[usersController::class,'index'])->name('user.all');
Route::post('/create',[usersController::class,'store'])->name('user.create');
Route::get('/{id}',[usersController::class,'show'])->name('show');
Route::put('/update/{id}',[usersController::class,'update'])->name('update');
Route::delete('/delete/{id}',[usersController::class,'delete'])->name('delete');
Route::post('/assign-course',[usersController::class,'assignCourse'])->name('user.assignCourse');

Route::any('/store-userProfile/{id}',[RegisteredUserController::class,'storeAvater']);
Route::get('/show-profile/{id}',[usersController::class,'showProfile']);







