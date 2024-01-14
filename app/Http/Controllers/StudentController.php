<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $name = 'budi';
        // eloquent orm (Rekomendasi | ✅ Friendly User)
        //query builder (This Good 🤓)
        // raw query    (Not Recommended | 💀 SQL INJECTION)

        // $student = Student::all();
        // return view('student', ['studentList' => $student]);
        // dd($student);

        // query builder
        // $student = DB::table('students')->get();
        // DB::table('students')->insert([
        //     'name' => 'Query Builder',
        //     'gender' => 'L',
        //     'nis' => '0002121',
        //     'class_id' => 1
        // ]);
        // DB::table('students')->where('id', 26)->update([
        //     'name' => 'Query Builder 2',
        //     'class_id' => 3
        // ]);
        // DB::table('students')->where('id', 25)->delete();



        // eloquent
        // $student = Student::all();
        // Student::create([
        //     'name' => 'Eloquent',
        //     'gender' => 'P',
        //     'nis' => '0002132',
        //     'class_id' => 2
        // ]);
        // Student::find(27)->update([
        //     'name' => 'Eloquent 2',
        //     'class_id' => 1
        // ]);
        Student::find(24)->delete();
    }
}
