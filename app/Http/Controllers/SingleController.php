<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Course;
use App\Models\Tutorial;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function show($id)
    { 
        $course = Course::find($id);
        return view('single', compact('course'))->with('notes', 'tutorials');
    }
}
