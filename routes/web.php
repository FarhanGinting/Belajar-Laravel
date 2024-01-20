<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Belajar Laravel',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'kiwi'],
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/student-add', [StudentController::class, 'create']);
Route::post('/student-store', [StudentController::class, 'store']);
Route::get('/student-detail/{id}', [StudentController::class, 'show']);

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-add', [ClassController::class, 'create']);
Route::post('/class-store', [ClassController::class, 'store']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);   
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);   
Route::post('/extracurricular-store', [ExtracurricularController::class, 'store']);   
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show']);   

Route::get('/teacher', [TeacherController::class, 'index']);   
Route::get('/teacher-add', [TeacherController::class, 'create']);   
Route::post('/teacher-store', [TeacherController::class, 'store']);   
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);   



// Route::get('/about', function () {
//     return 9*9;
// });

// Route::get('/contact', function () {
//     return view('contact', ['name' => 'Belajar Laravel', 'phone' => '023023232']);
// });

// // Route::view('/contact', 'contact', ['name' => 'Belajar Laravel', 'phone' => '023023232']); 

// Route::redirect('/contact', 'contact-us');

// Route::get('/product', function () {
//     return 'product';
// });

// Route::get('/product/{id}', function ($id) {
//     // return 'ini adalah prduct dengan id = ' .$id;
//     return view('product.detail', ['id' => $id]);
// });

// Route::prefix('administrator')->group(function () {
//     Route::get('/profil-admin', function () {
//         return 'profil admin';
//     });
    
//     Route::get('/about-admin', function () {
//         return 'about admin';
//     });
    
//     Route::get('/contact-admin', function () {
//         return 'contact admin';
//     });
// });