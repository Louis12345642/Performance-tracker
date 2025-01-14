<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assigment extends Model
{
    /** @use HasFactory<\Database\Factories\AssigmentFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
        'totalMarks',
        'marksObtain',
        'file'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
