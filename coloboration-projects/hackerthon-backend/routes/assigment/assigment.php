<?php
use App\Http\Controllers\AssigmentController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AssigmentController::class,'index'])->name('assigment.index');
Route::get('/{id}',[AssigmentController::class,'show'])->name('assigment.show');
Route::put('/{id}',[AssigmentController::class,'update'])->name('assigment.update');
Route::delete('/{id}',[AssigmentController::class,'destroy'])->name('assigment.delete');
