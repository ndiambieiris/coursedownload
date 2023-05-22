<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-3">
                        <a href="{{route('course.create')}}"><button class="btn btn-primary">Add Course</button></a> 
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Sn</strong></td>
                                <td><strong>Course Name</strong></td>
                                <td><strong>Lecturer's Name</strong></td>
                                <td><strong>Created On</strong></td>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $course->title }}</td>
                                <td>{{ $course->lecturer }}</td>
                                <td>{{ $course->created_at->format('d M Y') }}</td>
                                <th>
                                    <a href="{{ route('course.edit', $course->id)}}" class="btn btn-warning"></i>Edit</a>
                                    <a href="{{ route('course.show', $course->id)}}" class="btn btn-success"></i>View</a>
                                    <a href="{{ route('course.destroy', $course->id)}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete{{$course->id}}').submit()"> Delete</a>
          
                                    <form action="{{ route('course.destroy', $course->id)}}" method="post" id="delete{{$course->id}}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
