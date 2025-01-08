<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'secondtName',
        'phone',
        'rollNumber',
        'doctor_id',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */


       /**
     *  Create many to many relationship to attach the user to role
     *
     */
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
       /**
     *  Create many to many relationship to attach the user to course
     *
     */
    public function doctors(){
     return $this->belongsToMany(Course::class);
    }



       /**
     *  create one to many relation between user
     *
     */

    public function courses(){
        return $this->belongsToMany(Course::class);
       }




    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
