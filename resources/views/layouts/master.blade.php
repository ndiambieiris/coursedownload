<!doctype html>
<html lang="en">

<head>
  <title>Course Download</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

  <!-- FontAwesome v5 -->
  <link href="{{asset('css/all.css')}}" rel="stylesheet">
  
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
  <link href="{{asset('css/icon.css')}}" rel="stylesheet">
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
  @yield('styles')
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body style="background-color: #EFF2F9">
  <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                 <!-- Logo -->
                 <div class="shrink-0 flex items-center">
                    <a href="">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('available')" :active="request()->routeIs('available')">
                        {{ __('Available Courses') }}
                    </x-nav-link>
                    
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <h5 align="right" width="48">
                @auth
                <x-nav-link :href="route('dashboard')">
                {{ __('Dashboard') }}
                </x-nav-link>
                @else
                <x-nav-link :href="route('login')">
                  {{ __('Login') }}
                </x-nav-link>
                <x-nav-link :href="route('register')">
                  {{ __('Register') }}
                </x-nav-link>
                @endauth
              </h5>
            </div>
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
            {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('available')" :active="request()->routeIs('available')">
                {{ __('Available Courses') }}
            </x-responsive-nav-link>
            @auth
                <x-responsive-nav-link :href="route('dashboard')">
                  {{ __('Dashboard') }}
                </x-responsive-nav-link>
                @else
                <x-responsive-nav-link :href="route('login')">
                  {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                  {{ __('Register') }}
                </x-responsive-nav-link>
                @endauth
        </div>

    </div>
</nav>

  <main>
    @yield('content')
  </main>
   <!-- footer -->
   <footer>
        <p>Created By <a href="#">Ndiambie Iris</a> | &copy;
            2023 All rights reserved.</span>
    </footer>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
  </script>

  <script src="{{ asset('js/bootstrap.min.js')}}">
    
  <script src="{{ asset('js/script.js')}}">
  </script>
</body>

</html>
