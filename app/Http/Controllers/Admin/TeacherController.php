<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('back-end.teacher.index',compact('teachers'));
    }
    public function dashboard()
    {
        return view('back-end.dashboard.index');
    }

    public function create()
    {
        return view('back-end.teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'major_id' => 'required',
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->gender = $request->gender;
        $teacher->phone = $request->phone;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->major_id = $request->major_id;
        $teacher->save();

        return redirect(route('admin.teacher'));
    }

}
