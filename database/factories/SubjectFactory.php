<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Pemrograman Web',
                'Pemrograman Mobile',
                'Game Dev',
                'IOT',
                'Bahasa Inggris',
                'Bahasa Indonesia',
                'Bahasa Jepang',
                'Informatika',
                'Matematika',
                'Sejarah'
            ]),
        ];
    }
}
