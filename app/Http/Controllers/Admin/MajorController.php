<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index(){
        $majors = Major::all();
        return view('back-end.major.index',compact(var_name:'majors'));
    }
    public function create(){
        return view(('back-end.major.create'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $major = new Major();
        $major->name = $request->name;
        $major->save();
        return redirect(route(name:'admin.major'));
    }
}
