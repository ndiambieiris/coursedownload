<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $courses = Course::latest('created_at', 'Desc')->where('user_id', auth()->id())->get();        
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('course.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'title' => 'required',
            'lecturer' => 'required',
            'description' => 'required',
        ]);


        $course = Course::create([
            'title' => $request->title,
            'lecturer' => $request->lecturer,
            'description' => $request->description,
            'user_id' => auth()->id(),
        ]);

        // $course = course::create($data);

        return redirect()->route('course.index', $course->id)->with('success', 'Article Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }
    
    public function single(Course $course)
    {
        return view('course.coursesingle', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required',
            'lecturer' => 'required',
            'description' => 'required',
        ]);

        $course->update([
            'title' => $request->title,
            'lecturer' => $request->lecturer,
            'description' => $request->description,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('course.index', $course->id)->with('success', 'Article Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    }
    
}
