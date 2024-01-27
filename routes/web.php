<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');



Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student-add', [StudentController::class, 'create'])->middleware(['auth', 'must-admin-or-teacher']);
Route::post('/student-store', [StudentController::class, 'store'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware(['auth', 'must-admin-or-teacher']);
Route::put('/student-update/{id}', [StudentController::class, 'update'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-detail/{id}', [StudentController::class, 'show'])->middleware(['auth', 'must-admin-or-teacher']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::get('/students-showdeleted', [StudentController::class, 'showdeleted'])->middleware(['auth', 'must-admin']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth', 'must-admin']);

Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class-add', [ClassController::class, 'create'])->middleware('auth');
Route::post('/class-store', [ClassController::class, 'store'])->middleware('auth');
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');

Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create'])->middleware('auth');
Route::post('/extracurricular-store', [ExtracurricularController::class, 'store'])->middleware('auth');
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher-add', [TeacherController::class, 'create'])->middleware('auth');
Route::post('/teacher-store', [TeacherController::class, 'store'])->middleware('auth');
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])->middleware('auth');

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
