<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudenController extends Controller
{
    public function index(){

        return view('home',[
            'students' => Student::all()
        ]);
    }
    public function show(Student $students){

        return view('article',[
            'students' => $students
        ]);
    }
}
