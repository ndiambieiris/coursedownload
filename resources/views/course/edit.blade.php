<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modify '. $course->title) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">
                <form action="{{ route('course.update', $course->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                      <label for="title" class="form-label"><strong>Course Name</strong></label>
                      <input type="text"
                        class="form-control" name="title" id="title" aria-describedby="titleId" value="{{ $course->title }}" placeholder="Enter Couorse Name">
                        @error('title')
                            <small id="titleId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="lecturer" class="form-label"><strong>Lecturer's Name</strong></label>
                      <input type="text"
                        class="form-control" name="lecturer" id="title" aria-describedby="titleId" value="{{ $course->lecturer }}" placeholder="Enter Lecturer's Name">
                        @error('lecturer')
                            <small id="titleId" class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label"><strong>Description</strong></label> 
                      <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block w-full h-60 outline-none" value="{{ $course->description }}"></textarea>
                        @error('description')
                            <small id="titleId" class="form-text text-danger">{{ $message }}</small>
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
