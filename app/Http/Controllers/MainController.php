<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function dashboard()
    {
        $courses = Course::orderBy('created_at', 'Desc')->where('user_id', auth()->id())->get();
        return view('dashboard', compact('courses'));
    }
    public function available()
    {
        $courses = Course::orderBy('created_at', 'Desc')->get();
        return view('available', compact('courses'));
    }

    public function welcome()
    {
        $courses = Course::orderBy('created_at', 'Desc')->get();
        return view('welcome', compact('courses'));
    }
    public function saw(Course $course)
    {
        return view('single', compact('course'));
    }
    public function course()
    {
        $courses = Course::orderBy('created_at', 'Desc')->where('user_id', auth()->id())->get();
        return view('course.course', compact('courses'));
    }
}
