<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $fillable = ['title','catOne','fat','catTwo','Fat','total'];

    //create the relationship between the user and courses

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
