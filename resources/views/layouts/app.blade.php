<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'MBC Laboratory - Empowering Innovation in Tech')</title>
    <meta name="description" content="@yield('description', 'MBC Laboratory is a technology research center focused on Cybersecurity, Big Data, Game Technology, and GIS.')">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        html {
            scroll-behavior: smooth;
        }
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(45deg, #b91c1c, #1e3a8a);
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(45deg, #991b1b, #1e40af);
        }
        
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }
        
        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
    
    @stack('styles')
</head>
<body class="bg-white font-sans antialiased scroll-smooth">
    <nav class="bg-white/90 backdrop-blur-lg fixed w-full top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                            <img src="{{ asset('images/logo-mbc.png') }}" 
                                 alt="MBC Laboratory" 
                                 class="w-30 h-30 object-contain">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" 
                       class="nav-link {{ Route::is('home') ? 'text-red-700 font-semibold' : 'text-gray-700 hover:text-gray-900' }} px-3 py-2 text-sm font-medium transition-colors duration-200">
                        Home
                    </a>
                    <a href="{{ route('services') }}" 
                       class="nav-link {{ Route::is('services') ? 'text-red-700 font-semibold' : 'text-gray-700 hover:text-gray-900' }} px-3 py-2 text-sm font-medium transition-colors duration-200">
                        Services
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="nav-link {{ Route::is('contact') ? 'text-red-700 font-semibold' : 'text-gray-700 hover:text-gray-900' }} px-3 py-2 text-sm font-medium transition-colors duration-200">
                        Contact
                    </a>
                    <a href="{{ route('developer') }}" 
                       class="nav-link {{ Route::is('developer') ? 'text-red-700 font-semibold' : 'text-gray-700 hover:text-gray-900' }} px-3 py-2 text-sm font-medium transition-colors duration-200">
                        Developer
                    </a>
                </div>

                <!-- Contact Us btn -->
                <div class="hidden md:flex items-center">
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center px-6 py-2 bg-gradient-to-r from-red-600 to-blue-800 text-white font-medium rounded-full hover:from-red-700 hover:to-blue-900 transition-all duration-300 shadow-md">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile menu btn -->
                <div class="md:hidden flex items-center">
                    <button type="button" id="mobile-menu-button" class="text-gray-700 hover:text-gray-900 focus:outline-none focus:text-gray-900">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-lg shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" 
                   class="nav-link-mobile {{ Route::is('home') ? 'bg-red-100 text-red-700' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} block px-3 py-2 text-base font-medium rounded-md transition-colors duration-200">
                    Home
                </a>
                <a href="{{ route('services') }}" 
                   class="nav-link-mobile {{ Route::is('services') ? 'bg-red-100 text-red-700' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} block px-3 py-2 text-base font-medium rounded-md transition-colors duration-200">
                    Services
                </a>
                <a href="{{ route('contact') }}" 
                   class="nav-link-mobile {{ Route::is('contact') ? 'bg-red-100 text-red-700' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} block px-3 py-2 text-base font-medium rounded-md transition-colors duration-200">
                    Contact
                </a>
                <a href="{{ route('developer') }}" 
                   class="nav-link-mobile {{ Route::is('developer') ? 'bg-red-100 text-red-700' : 'text-gray-700 hover:bg-gray-100 hover:text-gray-900' }} block px-3 py-2 text-base font-medium rounded-md transition-colors duration-200">
                    Developer
                </a>
                <div class="mt-4 px-3">
                    <a href="{{ route('contact') }}" 
                       class="block w-full text-center px-4 py-2 bg-gradient-to-r from-red-600 to-blue-800 text-white font-medium rounded-full hover:from-red-700 hover:to-blue-900 transition-all duration-300 shadow-md">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!--Footer -->
    <footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-[#be0012]/10 to-[#be0012]/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-br from-[#203890]/10 to-[#203890]/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-br from-[#be0012]/5 to-[#203890]/5 rounded-full blur-3xl"></div>
        </div>

        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 400 400" fill="none">
                <pattern id="footerPattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                    <circle cx="20" cy="20" r="1" fill="url(#footerGradient)" opacity="0.3"/>
                </pattern>
                <defs>
                    <linearGradient id="footerGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#be0012;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#203890;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <rect width="100%" height="100%" fill="url(#footerPattern)"/>
            </svg>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Main Footer Content -->
            <div class="py-16">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <!--Logo mbc lab-->
                    <div class="lg:col-span-5">
                        <div class="flex items-center space-x-3 mb-6">
                            <img src="{{ asset('images/logo-mbc.png') }}" 
                                 alt="MBC Laboratory Logo" 
                                 class="w-12 h-12 object-contain">
                            <div>
                                <h3 class="text-2xl font-bold bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                                    MBC Laboratory
                                </h3>
                                <p class="text-gray-400 text-sm">We Attack, We Protect!</p>
                            </div>
                        </div>
                        
                        
                        <!-- Social Media -->
                        <div class="flex space-x-4">
                            <a href="https://www.instagram.com/mbclab/" class="group w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-[#be0012]/20 transition-all duration-300 border border-white/10">
                                <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <a href="#" class="group w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-[#203890]/20 transition-all duration-300 border border-white/10">
                                <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                            <a href="#" class="group w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-[#be0012]/20 transition-all duration-300 border border-white/10">
                                <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="group w-10 h-10 bg-white/10 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-[#203890]/20 transition-all duration-300 border border-white/10">
                                <svg class="w-5 h-5 text-gray-300 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                    <!-- nav -->
                    <div class="lg:col-span-3">
                        <h4 class="text-lg font-semibold mb-6 text-white">Navigasi</h4>
                        <ul class="space-y-3">
                            <li>
                                <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                    <span class="w-2 h-2 bg-[#be0012] rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services') }}" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                    <span class="w-2 h-2 bg-[#be0012] rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                    <span class="w-2 h-2 bg-[#be0012] rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('developer') }}" class="text-gray-300 hover:text-white transition-colors duration-200 flex items-center group">
                                    <span class="w-2 h-2 bg-[#be0012] rounded-full mr-3 opacity-0 group-hover:opacity-100 transition-opacity"></span>
                                    Developer
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Kontak -->
                    <div class="lg:col-span-4">
                        <h4 class="text-lg font-semibold mb-6 text-white">Kontak</h4>
                        <div class="mt-6 space-y-2">
                            <a href="mailto:info@mbclaboratory.com" class="flex items-center text-gray-300 hover:text-white transition-colors">
                                <svg class="w-4 h-4 mr-3 text-[#be0012]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                </svg>
                                info@mbclaboratory.com
                            </a>
                            <a href="tel:+62227564108" class="flex items-center text-gray-300 hover:text-white transition-colors">
                                <svg class="w-4 h-4 mr-3 text-[#203890]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                                </svg>
                                +62 22 7564 108
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="border-t border-white/10 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="text-gray-400 text-sm">
                        © {{ date('Y') }} MBC Laboratory. All rights reserved.
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
                
                document.addEventListener('click', function(event) {
                    if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            }

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {

                        if (mobileMenu) {
                            mobileMenu.classList.add('hidden');
                        }
                        const navHeight = 64;
                        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('section').forEach(section => {
                section.classList.add('fade-in');
                observer.observe(section);
            });
            
            let lastScrollY = window.scrollY;
            
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('nav');
                const currentScrollY = window.scrollY;
                
                if (navbar) {
                    if (currentScrollY > 50) {
                        navbar.classList.add('bg-white/95');
                        navbar.classList.remove('bg-white/90');
                    } else {
                        navbar.classList.add('bg-white/90');
                        navbar.classList.remove('bg-white/95');
                    }
                }
                
                lastScrollY = currentScrollY;
            }, { passive: true });
        });
    </script>

    @stack('scripts')
</body>
</html> 