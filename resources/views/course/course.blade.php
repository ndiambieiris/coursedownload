<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Course Download</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <!-- FontAwesome v5 -->
        <link href="{{asset('css/all.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        @yield('styles')
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Available Courses') }}
                        </h2>
                    </div>
                </header>
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
                                                 <a href="{{route('course.coursesingle', $course->id)}}" class="btn btn-primary">View</a></div>
                                             </div>
                                                 
                                         </article>
                                     </div> 
                                     @endforeach 
                                 </div>
                                 </div>
                             </div>
                         </div> 
             <footer>
        <p>Created By <a href="#">Ndiambie Iris</a> | &copy;
            2023 All rights reserved.</span>
    </footer>
        </div>
       
    </body>
</html>
