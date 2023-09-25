<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('back-end.teacher.index');
    }
    public function dashboard()
    {
        return view('back-end.dashboard.index');
    }

    public function create()
    {
        return view('back-end.teacher.create');
    }

}
