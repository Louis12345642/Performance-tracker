<?php

use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DoctorController::class,'index'])->name('doctor.index');
Route::get('/{id}',[DoctorController::class,'show'])->name('doctor.show');
Route::put('/{id}',[DoctorController::class,'update'])->name('doctor.update');
Route::delete('/{id}',[DoctorController::class,'destroy'])->name('doctor.delete');
