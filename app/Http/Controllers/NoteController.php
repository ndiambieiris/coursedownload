<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Note;
use App\Models\Tutorial;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function view()
    {
        $notes = Note::orderBy('created_at', 'Desc')->where('user_id', auth()->id())->get();
        return view('note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::all()->where('user_id', auth()->id());
        return view('note.note',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'course_id' => 'required',
            'note' => 'required|file',
            'name' => 'required',
        ]);

        $note = Note::create([
            'name' => $request->name,
            'course_id' => $request->course_id,
            'note' => $request->note->store('uploads', 'public'),
            'user_id' => auth()->id(),
        ]);


        return redirect()->route('note.index', $note->id)->with('success', 'Article Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.index', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        $course = Course::all()->where('user_id', auth()->id());
        return view('note.edit',compact('course','note'));
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $request->validate([
            'note' => 'nullable',
            'course_id' => 'required',
            'name' => 'required',
        ]);

        $note->update([
            'name' => $request->name,
            'course_id' => $request->course_id,
            'user_id' => auth()->id()
        ]);


        if($request->note){
            $note->update([
                'note' => $request->note->store('uploads', 'public'),
            ]);
        }

        return redirect()->route('note.index', $note->id)->with('success', 'Article Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return back();
    }
}
