<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TeacherController;



Route::get('/', [TeacherController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/teacher', [TeacherController::class,'index'])->name('admin.teacher');
