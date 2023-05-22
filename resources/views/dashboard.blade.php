<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Available Courses') }}
        </h2>
    </x-slot>
    <tbody>
                         
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            <!--Course-->
            <div class="row g-4">
                @foreach ($courses as $course)
                <div class="col-lg-4 col-md-6">
                    <article class="course">
                        <div class="service shadow-sm sm:rounded-lg">
                            <h6 style="padding: 0.5rem 10.4rem;"></h6>
                            <small>{{ $course->created_at->format('d M Y') }}</small>
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $course->title }}</h2>
                            <p>{{ $course->description }}</p><br><hr>
                        <br>{{ $course->lecturer }}<br><br>
                           <div class="mb-3 text-end">
                            <a href="{{route('course.show', $course->id)}}" class="btn btn-primary">View</a></div>
                        </div>
                            
                    </article>
                </div> 
                @endforeach 
            </div>
            </div>
        </div>
    </div> 
</tbody>
</x-app-layout>
