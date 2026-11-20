<?php

namespace Database\Seeders;

use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $subjects = Subject::all();

        // if ($subjects->isEmpty()) {
        //     $subjects = Subject::factory()->count(10)->create();
        // }

        // Teacher::factory()->count(10)->create([
        //     'subjects_id' => fn (): int => $subjects->random()->id,
        // ]);
         Teacher::factory()->count(10)->create();
    }
}
