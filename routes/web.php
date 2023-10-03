<?php

use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeacherController;
use Monolog\Handler\RotatingFileHandler;

Route::get('/', [TeacherController::class,'dashboard'])->name('admin.dashboard');

//Route Teacher
Route::get('/admin/teacher', [TeacherController::class,'index'])->name('admin.teacher');
Route::get('/admin/teacher/create', [TeacherController::class,'create'])->name('admin.teacher.create');
Route::post('/admin/teacher/store',[TeacherController::class,'store'])->name('admin.teacher.store');

//Route Major
Route::get('/admin/major', [MajorController::class, 'index'])->name('admin.major');
Route::get('/admin/major/create', [MajorController::class ,'create'])->name('admin.major.create');
Route::post('/admin/major/store', [MajorController::class ,'store'])->name('admin.major.store');

//Route Student
Route::get('/admin/student', [StudentController::class, 'index'])->name('admin.student');
Route::get('/admin/student/create', [StudentController::class, 'create'])->name('admin.student.create');
Route::post('/admin/student/store',[StudentController::class,'store'])->name('admin.student.store');