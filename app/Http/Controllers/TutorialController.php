<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Note;
use App\Models\Tutorial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class TutorialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $tutorials = Tutorial::orderBy('created_at', 'Desc')->where('user_id', auth()->id())->get();
        return view('tutorial.index', compact('tutorials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Tutorial $tutorial)
    {
        $course = Course::all()->where('user_id', auth()->id());
        return view('tutorial.tutorial',compact('course','tutorial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'course_id' => 'required',
            'tutorial' => 'required|file',
            'name' => 'required',
        ]);

        $tutorial = Tutorial::create([
            'name' => $request->name,
            'course_id' => $request->course_id,
            'tutorial' => $request->tutorial->store('uploads', 'public'),
            'user_id' => auth()->id(),
        ]);


        return redirect()->route('tutorial.index', $tutorial->id)->with('success', 'Article Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tutorial $tutorial)
    {
        return view('tutorial.index', compact('tutorial'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutorial $tutorial)
    {
        $course = Course::all()->where('user_id', auth()->id());
        return view('tutorial.edit',compact('course','tutorial'));
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutorial $tutorial)
    {
        $request->validate([
            'tutorial' => 'nullable',
            'course_id' => 'required',
            'name' => 'required',
        ]);

        $tutorial->update([
            'name' => $request->name,
            'course_id' => $request->course_id,
            'user_id' => auth()->id()
        ]);


        if($request->tutorial){
            $tutorial->update([
                'tutorial' => $request->tutorial->store('uploads', 'public'),
            ]);
        }

        return redirect()->route('tutorial.index', $tutorial->id)->with('success', 'Article Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutorial $tutorial)
    {
        $tutorial->delete();
        return back();
    }
}
