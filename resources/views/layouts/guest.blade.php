<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('fonts/themify/themify-icons.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('animate/animate.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('animsition/css/animsition.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('select2/select2.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('daterangepicker/daterangepicker.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('lightbox2/css/lightbox.min.css')}}">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="animsition bg-cblack">
        <div>
            <header>
                <!-- Header desktop -->
                <div class="wrap-menu-header gradient1 trans-0-4  border-t-8 border-cgreen">
                    <div class="container h-full">
                        <div class="wrap_header trans-0-3">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{route('welcome')}}">
                                    <img src="images/logo/New Logo final - Copy.png" alt="IMG-LOGO" data-logofixed="images/logo/New Logo final - Copy.png">
                                </a>
                            </div>
        
                            <!-- Menu -->
                            <div class="wrap_menu p-l-45 p-l-0-xl">
                                <nav class="menu">
                                    <ul class="main_menu">
                                        <li>
                                            <a href="{{route('welcome')}}">Home</a>
                                        </li>
        
                                        <li>
                                            <a href="menu.html">suite & villas</a>
                                        </li>
        
                                        <li>
                                            <a href="reservation.html">experiences</a>
                                        </li>
        
                                        <li>
                                            <a href="gallery.html">offers</a>
                                        </li>
        
                                        <li>
                                            <a href="about.html">wedding</a>
                                        </li>
        
                                        <li>
                                            <a href="blog.html">gallery</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
        
                            <!-- Social -->
                            <button class="px-3 py-1 text-white font-semibold bg-cgreen">
                            BOOKING
                            </button>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
       
        <div class="w-full  py-10 bg-black">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="w-full ">
                    <h3 class="font-semibold text-cgreen text-left my-3">About The Resort</h3>
                    <ul class="flex flex-col ">
                        <a href="" class="text-white">Story</a>
                        <a href="" class="text-white">Award</a>
                        <a href="" class="text-white">Press Room</a>
                        <a href="" class="text-white">Videos</a>
                        <a href="" class="text-white">Contact Us</a>
                    </ul>
                </div>
                <div class="w-full ">
                    <h3 class="font-semibold text-cgreen text-left my-3">Activities</h3>
                    <ul class="flex flex-col ">
                        <a href="" class="text-white">Day Guest</a>
                        <a href="" class="text-white">Experiences</a>
                        <a href="" class="text-white">Sungai Spa</a>
                        <a href="" class="text-white">Restaurant</a>
                        
                    </ul>
                </div>
                <div class="w-full ">
                    <h3 class="font-semibold text-cgreen text-left my-3">Others</h3>
                    <ul class="flex flex-col ">
                        <a href="" class="text-white">Policy & Legal</a>
                        <a href="" class="text-white">Blog</a>
                        <a href="" class="text-white">Career</a>
                        <a href="" class="text-white">Media Hub</a>
                        <a href="" class="text-white">GDS Code</a>
                        <a href="" class="text-white">Site Map</a>    
                        
                    </ul>
                </div>
                <div class="w-full ">
                    <h3 class="font-semibold text-cgreen text-left my-3">Follow Us</h3>
                    <ul class="flex flex-row space-x-5">
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffffff"><path d="M22.5 0c.83 0 1.5.67 1.5 1.5v21c0 .83-.67 1.5-1.5 1.5h-6v-9h3l.75-3.75H16.5v-1.5c0-1.5.75-2.25 2.25-2.25h1.5V3.75h-3c-2.76 0-4.5 2.16-4.5 5.25v2.25h-3V15h3v9H1.5A1.5 1.5 0 0 1 0 22.5v-21C0 .67.67 0 1.5 0h21z"/></svg>
                        <svg class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ffffff"><path d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A3.99 3.99 0 0 0 12 7.98zm6.44-3.77a1.4 1.4 0 1 1 0 2.8 1.4 1.4 0 0 1 0-2.8z"/></svg>
                    </ul>
                </div>
            </div>
        </div>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('bootstrap/js/popper.js')}}"></script>
        <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('daterangepicker/moment.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('slick/slick.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/slick-custom.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('parallax100/parallax100.js')}}"></script>
        <script type="text/javascript">
            $('.parallax100').parallax100();
        </script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
        <script type="text/javascript" src="{{asset('lightbox2/js/lightbox.min.js')}}"></script>
    <!--===============================================================================================-->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
