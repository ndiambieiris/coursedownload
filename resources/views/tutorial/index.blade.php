<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tutorials') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-3">
                        <a href="{{route('tutorial.tutorial')}}"><button class="btn btn-primary">Add Tutorial</button></a> 
                    </div>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td><strong>Sn</strong></td>
                                <td><strong>Description</strong></td>
                                <td><strong>Created On</strong></td>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tutorials as $tutorial)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $tutorial->name }}</td>
                                <td>{{ $tutorial->created_at->format('d M Y') }}</td>
                                <th>
                                    <a href="{{ route('tutorial.edit', $tutorial->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{ asset('storage/' .$tutorial->tutorial) }}" alt="uploads" class="btn btn-success" download>Download</a>
                                    <a href="{{ route('tutorial.destroy', $tutorial->id)}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete{{$tutorial->id}}').submit()"> Delete</a>
          
                                    <form action="{{ route('tutorial.destroy', $tutorial->id)}}" method="post" id="delete{{$tutorial->id}}">
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