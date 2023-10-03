<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\TeacherController;


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

Route::get('/', [TeacherController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/teacher', [TeacherController::class,'index'])->name('admin.teacher');
Route::get('/admin/teacher/create', [TeacherController::class,'create'])->name('admin.teacher.create');
Route::post('/admin/teacher/store', [TeacherController::class,'store'])->name('admin.teacher.store');

