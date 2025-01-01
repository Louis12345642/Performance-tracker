<?php

use App\Http\Controllers\AssigmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

Route::get("/user",[CourseController::class,'userCourses'])->name('user.courses');
Route::get('/assigment/{id}',[AssigmentController::class,'userAssigment'])->name('user.assigments');
Route::get('/students',[usersController::class,'courseStudents'])->name('course.users');
Route::get('assigment/submit',AssigmentController::class,'submitAssigment')->name('assigment.submit');

