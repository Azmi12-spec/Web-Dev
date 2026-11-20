<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->unique()->numerify('#####'),
            'subjects_id' => Subject::factory(),
            'start_date' => fake()->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
        ];
    }
}
