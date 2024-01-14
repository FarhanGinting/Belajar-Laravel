<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $name = 'budi';
        // eloquent orm (Rekomendasi | ✅ Friendly User)
        //query builder (This Good 🤓)
        // raw query    (Not Recommended | 💀 SQL INJECTION)

        $student = Student::all();
        return view('student', ['studentList' => $student]);
        // dd($student);
    }
}
 