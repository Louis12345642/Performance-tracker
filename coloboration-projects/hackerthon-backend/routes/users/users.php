<?php


//this routes is used for all users from the database

use Illuminate\Routing\Route;

Route::get("/users",function(){
return [
    "name" =>"john doe"
];
});
