<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // $name = 'budi';
        // eloquent orm (Rekomendasi | ✅ Friendly User) 
        //query builder (This Good 🤓)
        // raw query    (Not Recommended | 💀 SQL INJECTION)

        $student = Student::with('class' )->get();
        return view('student', ['studentList' => $student]);

        // Php Biasa
        // 1. Hitung Jumlah Nilai
        // 2. Hitung Berapa Banyak Nilai
        // 3. Hitung Nilai Rata Rata | TotalNilai / CountNilai
        // $countNilai = count($nilai);
        // $totalNilai = array_sum($nilai);
        // $nilaiRataRata = $totalNilai / $countNilai;
        // dd($nilaiRataRata);

        // Collection
        // 1. Hitung Rata Rata Nilai
        // $nilaiRataRata = collect($nilai)->avg();
        // dd($nilaiRataRata);

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
        // Student::find(24)->delete();

        // 📚 Belejar Collections
        // $nilai = [9, 8, 7, 6, 5, 4, 3, 10, 6, 9, 4, 1];
        // $map = collect($nilai)->map(function ($value){
        //         return $value * 2;
        // })->all();
        // dd($map);
        // $nilaiKaliDua = [];
        // foreach ($nilai as $value) {
        //     array_push($nilaiKaliDua, $value * 2);
        // }
        // dd($nilaiKaliDua);

        // 1️⃣ contains = Mengecek apakah sebuah array memiliki sesuatu
        // $contain = collect($nilai)->contains(function ($value){
        //     return $value < 6;
        // });
        // dd($contain);

        // 2️⃣ diff = Membandinkan 2 buah data untuk mengatahui data yang ada di table A namun tidak ada di di tabel B
        // $restaurantA = ['burger', 'siomay', 'pizza', 'spaghetti', 'makaroni', 'martabak', 'bakso'];
        // $restaurantB = ['pizza', 'fried chicken', 'martabak', 'sayur asem', 'pecel lele', 'bakso'];
        // $menuRestoA = collect($restaurantA)->diff($restaurantB);
        // $menuRestoB = collect($restaurantB)->diff($restaurantA);
        // dd($menuRestoB );

        // 3️⃣ filter = Menyaring Data Dengan Kondisi Tertentu
        // filter = collect($nilai)->filter(function ($value){
        //     return $value > 7;
        // })->all();
        // dd($filter);

        // 3️4️⃣ pluck = Megambil data dengan ketentuan
        // $biodata = [
        //     ['nama' => 'budi', 'umur' => 17],
        //     ['nama' => 'ani', 'umur' => 17],
        //     ['nama' => 'siti', 'umur' => 17],
        //     ['nama' => 'rudi', 'umur' => 17],
        // ];

        // $pluck = collect($biodata)->pluck('nama')->all();
        // dd($pluck);

    }
}
