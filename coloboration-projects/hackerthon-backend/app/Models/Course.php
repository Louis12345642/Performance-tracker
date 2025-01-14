<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = ['title','catOne','fat','catTwo','Fat','total','description','avater','description'];

    //create the relationship between the user and courses

    public function users(){
        return $this->belongsToMany(User::class);
    }

    //create a relationship to get the assigmnet of the course
    public function assigments(){
        return $this->hasMany(Assigment::class);
    }
}
