<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function teacher_courses()
    {
        // return "ds";
        // $teacher = Auth::User();
        // $teacher_courses = $teacher->courses;
        return response()->json('sdad');
        // return view('Teachers.courses', compact('teacher_courses'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
