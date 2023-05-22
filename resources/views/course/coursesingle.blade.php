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
        {{ $course->title }}
        </h2>
                    </div>
                </header>
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
                                        <div class="service shadow-sm sm:rounded-lg"></h6>
                                            <small>{{ $tutorial->created_at->format('d M Y') }}</small>
                                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $tutorial->name }}</h2>
                                            <br><hr><br>
                                            <div class="mb-3 text-center">
                                                <a href="{{ asset('storage/' .$tutorial->tutorial) }}" alt="uploads" class="btn btn-primary" style="padding: 0.5rem 4.4rem;">Download</a>
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
             <footer>
        <p>Created By <a href="#">Ndiambie Iris</a> | &copy;
            2023 All rights reserved.</span>
    </footer>
        </div>
       
    </body>
</html>
