<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="text-black font-sans" style="background-color: #FCD5CE; background-image: url('{{asset('images/background.jpg')}}'); background-size: cover; background-attachment: fixed; background-position: center;">
    <div class="sticky top-0 z-50">
        <!-- Title always visible -->
        <header class="shadow-md border--b" style="background-color: #816B77;">
            <div class="container mx-auto px-4 py-4">
                <div class="flex items-center justify-center gap-4">
                    <img src="{{asset('images/logo.png')}}" alt="Logo" class="h-12 md:h-16">
                    <div class="text-center">
                        <h1 class="text-2xl md:text-3xl font-bold uppercase" style="color: #FCD5CE;">
                            Title
                        </h1>
                        <p class="text-sm md:text-base mt-1" style="color: #FCD5CE;">Subtitle</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Navbar (current page button stands out)-->
        <nav class="border-b" style="background-color: #FCD5CE;">
            <!-- Desktop -->
            <ul class="hidden md:flex md:space-x-8 py-4 justify-center">
                <li>
                    <a href="{{route('home')}}" class="uppercase hover:opacity-70 transition {{request()->routeIs('home') ? 'font-semibold underline':''}}" style="color: #816B77;">
                        About me
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="uppercase hover:opacity-70 transition {{ request()->routeIs('services') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        Services
                    </a>
                </li>
                <li>
                    <a href="{{ route('appointments') }}" class="uppercase hover:opacity-70 transition {{ request()->routeIs('appointments') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        Book an appointment
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="uppercase hover:opacity-70 transition {{ request()->routeIs('contact') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        Contact information
                    </a>
                </li>
            </ul>
            <!-- Mobile -->
            <!-- Hamburger icon -->
            <div class="md:hidden py-4 flex justify-center">
                <button id="mobile-menu-button" class="focus:outline-none" style="color: #816B77;">
                    <!-- Heroicon: menu (bars-3) -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>
            </div>
            <ul id="mobile-menu" class="hidden md:hidden flex-col space-y-3 pb-4 text-center">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 uppercase hover:opacity-70 transition {{ request()->routeIs('home') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        About me
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}" class="block py-2 uppercase hover:opacity-70 transition {{ request()->routeIs('services') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        Services
                    </a>
                </li>
                <li>
                    <a href="{{ route('appointments') }}" class="block py-2 uppercase hover:opacity-70 transition {{ request()->routeIs('appointments') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        Book an appointment
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" class="block py-2 uppercase hover:opacity-70 transition {{ request()->routeIs('contact') ? 'font-semibold underline' : '' }}" style="color: #816B77;">
                        Contact information
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 py-4">
        @yield('content')
    </div>

    <!-- Footer: copyright -->
    <footer class="border-t mt-12" style="background-color: #FCD5CE;">
        <div class="container mx-auto px-4 py-6 text-center text-black">
            <p>
                &copy; 2025 Your Company. All rights reserved.
            </p>
            <p class="mt-2 text-sm">
                <a href="{{route('privacy-policy')}}" class="underline hover:opacity-70" style="color: #816B77;">
                    Privacy Policy
                </a>
            </p>
        </div>
    </footer>
    <!-- Cookie Consent -->
    @include('components.cookie-consent')
    <!-- Livewire JavaScript library -->
    @livewireScripts
    <!-- Allow child pages to add scripts -->
    @stack('scripts')

    <!-- Mobile menu - toggle -->
    <script>
        document.getElementById('mobile-menu-button')?.addEventListener('click', function(){
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        });
    </script>
</body>
</html>
