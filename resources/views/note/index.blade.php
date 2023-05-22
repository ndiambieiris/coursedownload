<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-3">
                        <a href="{{route('note.note')}}"><button class="btn btn-primary">Add Notes</button></a> 
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
                            @foreach ($notes as $note)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $note->name }}</td>
                                <td>{{ $note->created_at->format('d M Y') }}</td>
                                <th>
                                    <a href="{{ route('note.edit', $note->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{ asset('storage/' .$note->note) }}" alt="uploads" class="btn btn-success" download>Download</a>
                                    <a href="{{ route('note.destroy', $note->id)}}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete{{$note->id}}').submit()"> Delete</a>
          
                                    <form action="{{ route('note.destroy', $note->id)}}" method="post" id="delete{{$note->id}}">
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