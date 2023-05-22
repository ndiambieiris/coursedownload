<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ $course->title }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 ">
                    <h2 class="font-semibold text-xl text-gray-800">
                         {{ __('Notes') }}
                    </h2>
                    <div class="py-3">
                        <div class="">
                            <!--Course-->
                            <div class="row g-4">
                            @foreach($course->notes as $note)
                                <div class="col-lg-3 col-md-6">
                                    <article class="course ">
                                        <div class="service shadow-sm sm:rounded-lg">
                                            <small>{{ $note->created_at->format('d M Y') }}</small>
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $note->name }}</h2>
                                            <br><hr><br>
                                            <div class="mb-3 text-center">
                                               <a href="{{ asset('storage/' .$note->note) }}" alt="uploads" class="btn btn-primary" style="padding: 0.5rem 4.4rem;">Download</a>
                                            </div> 
                                        </div>           
                                    </article>
                                </div> 
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
</div>
<div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900 ">
                    <h2 class="font-semibold text-xl text-gray-800">
                         {{ __('Tutorials') }}
                    </h2>
                    <div class="py-3">
                        <div class="">
                            <!--Course-->
                            <div class="row g-4">
                            @foreach($course->tutorials as $tutorial)
                                <div class="col-lg-3 col-md-6">
                                    <article class="course ">
                                        <div class="service shadow-sm sm:rounded-lg">
                                            <small>{{ $tutorial->created_at->format('d M Y') }}</small>
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $tutorial->name }}</h2>
                                            <br><hr><br>
                                            <div class="mb-3 text-center">
                                              
                                                <a href="{{ asset('storage/' . $tutorial->tutorial) }}" alt="uploads" class="btn btn-primary" style="padding: 0.5rem 4.4rem;">Download</a>
                                            </div> 
                                        </div>        
                                    </article>
                                </div> 
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <div class="py-6"></div>
</x-app-layout>