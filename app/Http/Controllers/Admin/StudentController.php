<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('back-end.student.index',compact(var_name:'students'));
    }

    public function create(){
        return view('back-end.student.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'gender'=>'required',
            'phone'=> 'required',
            'email'=> 'required',
            'address'=> 'required',
        ]);
        $student = new Student();
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->phone = $request->phone;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->save();
        return redirect(route(name:'admin.student'));
    }
}
