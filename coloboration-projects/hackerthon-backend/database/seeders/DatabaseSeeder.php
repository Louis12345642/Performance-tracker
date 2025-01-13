<?php

namespace Database\Seeders;

use App\Models\Assigment;
use App\Models\Course;
use App\Models\Doctor;
use App\Models\Role;
use App\Models\User;
use Database\Factories\RoleFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Role::factory(10)->create();
        Course::factory(10)->create();
        Assigment::factory(10)->create();
        Doctor::factory(10)->create();
    }
}
