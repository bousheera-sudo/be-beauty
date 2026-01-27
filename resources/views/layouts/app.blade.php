<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'be-beauty') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-gold': '#D4AF37',
                        'brand-dark': '#1A1A1A',
                        'brand-light': '#FDFBF7',
                        'brand-accent': '#E8DED1',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #FDFBF7;
            color: #1A1A1A;
        }
        .glass-nav {
            background: rgba(253, 251, 247, 0.9);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
        .fade-in {
            animation: fadeIn 0.8s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col font-sans">
    
    <!-- Navigation -->
    <header class="fixed w-full top-0 z-50 glass-nav border-b border-brand-accent/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="font-serif text-2xl font-bold tracking-wider text-brand-dark hover:text-brand-gold transition duration-300">
                        be-beauty
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-12">
                    <a href="{{ url('/') }}" class="text-sm uppercase tracking-widest hover:text-brand-gold transition duration-300 {{ Request::is('/') ? 'text-brand-gold font-semibold' : 'text-gray-600' }}">Home</a>
                    <a href="{{ url('/about') }}" class="text-sm uppercase tracking-widest hover:text-brand-gold transition duration-300 {{ Request::is('about') ? 'text-brand-gold font-semibold' : 'text-gray-600' }}">About</a>
                    <a href="{{ url('/contact') }}" class="text-sm uppercase tracking-widest hover:text-brand-gold transition duration-300 {{ Request::is('contact') ? 'text-brand-gold font-semibold' : 'text-gray-600' }}">Contact</a>
                </nav>

                <!-- Mobile Menu Button (Simple implementation) -->
                <div class="md:hidden flex items-center">
                    <button class="mobile-menu-button focus:outline-none">
                        <svg class="w-6 h-6 text-gray-600 hover:text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu (Hidden by default) -->
        <div class="mobile-menu hidden md:hidden bg-white border-t border-gray-100 absolute w-full left-0">
            <a href="{{ url('/') }}" class="block py-4 px-6 text-sm hover:bg-gray-50 border-b border-gray-100 text-gray-700">Home</a>
            <a href="{{ url('/about') }}" class="block py-4 px-6 text-sm hover:bg-gray-50 border-b border-gray-100 text-gray-700">About</a>
            <a href="{{ url('/contact') }}" class="block py-4 px-6 text-sm hover:bg-gray-50 text-gray-700">Contact</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-brand-dark text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <span class="font-serif text-2xl font-bold tracking-wider text-white">be-beauty</span>
                    <p class="mt-2 text-gray-400 text-sm">Natural elegance for your everyday life.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-brand-gold transition duration-300">Instagram</a>
                    <a href="#" class="text-gray-400 hover:text-brand-gold transition duration-300">Twitter</a>
                    <a href="#" class="text-gray-400 hover:text-brand-gold transition duration-300">Facebook</a>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-800 pt-8 text-center text-xs text-gray-500 uppercase tracking-widest">
                &copy; {{ date('Y') }} Be-Beauty. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Simple script to toggle mobile menu
        const btn = document.querySelector('.mobile-menu-button');
        const menu = document.querySelector('.mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
