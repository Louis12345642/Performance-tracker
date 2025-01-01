<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assigment>
 */
class AssigmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            "title"=>fake()->name(),
            "course_id"=>1,
            "status"=>fake()->boolean(1),
            "marksObtain"=>(int)rand(1,10),
            "totalMarks"=>(int)rand(1,10)

        ];
    }
}
