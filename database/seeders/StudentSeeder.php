<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::insert([
            [
                'id' => 1,
                'name' => 'Edgar',
                'age' => 24,
                'career' => 'Ing. Desarrollo de software',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
