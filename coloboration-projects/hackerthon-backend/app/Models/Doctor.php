<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable =[
        'name',
        'specialization'

    ];

    public function users(){
        return $this->hasMany(Doctor::class);
    }
    /** @use HasFactory<\Database\Factories\DoctorFactory> */
    use HasFactory;
}
