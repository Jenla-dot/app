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

//Route::get('/admin/dashboard', [TeacherController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/teacher', [TeacherController::class,'index'])->name('admin.teacher');