<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         if (User::count() === 0) {
             User::factory(10)->create();
         }

         if (! User::where('email', 'test@example.com')->exists()) {
             User::factory()->create([
                 'name' => 'Test User',
                 'email' => 'test@example.com',
             ]);
         }

        // Student::factory()->create([
        //     'name'=> 'lu sapa mpruy',
        //     'email'=> 'lusapampruy@gmail.com',
        // ]);
        // $this->call([
        //     ClassroomSeeder::class,
        // ]);

        Classroom::factory(10)
        ->hasStudents(10)
        ->create();

        Subject::factory(6)
        ->hasTeachers(3)
        ->create();
    }
}
