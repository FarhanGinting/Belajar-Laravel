<?php

namespace Database\Seeders;

use App\Models\StudentExctracurricular;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentExctracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentExctracurricular::factory()->count(27)->create();
    }
}
