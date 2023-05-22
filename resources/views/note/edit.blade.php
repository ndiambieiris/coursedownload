<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modify '. $note->name) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <form action="{{ route('note.update', $note->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                    <label for="course" class="form-label"><strong>Choose a Course:</strong></label>
                    <select name="course_id" id="course"  class="py-20 bg-transparent block w-full h-60 outline-none">
                        <option selected disabled>Select option </option>
                        @foreach ($course as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    </select>
                    @error('course')
                        <small id="titleId" class="form-text text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="mb-3">
                    <label for="name" class="form-label"><strong>Description</strong></label>
                    <input type="text"
                        class="form-control" name="name" id="title" aria-describedby="nameID" value="{{ $note->name}}" placeholder="Description">
                        @error('name')
                            <small id="nameID" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="note" class="form-label"><strong>Choose Note</strong></label>
                        <input type="file" class="form-control" name="note" aria-describedby="NoteHelpId">
                        @error('note')
                            <div id="NoteHelpId" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 text-end">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
