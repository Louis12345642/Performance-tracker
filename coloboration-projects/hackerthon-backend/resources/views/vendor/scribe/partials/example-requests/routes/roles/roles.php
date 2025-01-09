<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;


Route::get('/',[RoleController::class,'index'])->name('role.all');
Route::post('/create',[RoleController::class,'store'])->name('role.create');
Route::get('/{id}',[RoleController::class,'show'])->name('role.show');
Route::delete('/{id}',[RoleController::class,'destroy'])->name('role.delete');
Route::put('update/{id}',[RoleController::class,'update'])->name("role.update");
Route::post("/assign-role",[RoleController::class,"assignRole"])->name("assign-role");


