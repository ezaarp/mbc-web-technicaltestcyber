@extends('layouts.app')

@section('title', 'MBC Laboratory')
@section('description', 'MBC Laboratory is a leading technology research center that develops innovative solutions in the fields of Cybersecurity, Big Data, Game Technology, and Geographic Information Systems.')

@section('content')
<!-- Redesigned Hero Section -->
<section class="relative min-h-screen bg-white text-gray-900 overflow-hidden flex items-center">
    <!-- Background with Animated Gradient Circles -->
    <div class="absolute inset-0 overflow-hidden z-0">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-[#be0012]/20 to-[#be0012]/30 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-br from-[#203890]/25 to-[#203890]/30 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute top-1/2 left-1/3 w-56 h-56 bg-gradient-to-br from-[#be0012]/10 to-[#203890]/10 rounded-full blur-3xl animate-pulse-slow"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="text-center lg:text-left">
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-normal bg-gradient-to-r from-gray-900 via-[#be0012] to-[#203890] bg-clip-text text-transparent animate-fade-in">
            Innovating the Future with Intelligence and Integrity
            </h1>

                <p class="mt-6 text-gray-700 text-lg max-w-2xl lg:max-w-none animate-fade-in delay-200">
                    A technology research and consultancy center focused on Cybersecurity, Big Data Analytics, Game Technology, and GIS. Discover reliable and professional digital solutions with MBC Laboratory.
                </p>
                <div class="mt-10 flex justify-center lg:justify-start gap-6 animate-fade-in delay-500">
                    <a href="#about-mbc" class="px-8 py-4 bg-gradient-to-r from-[#be0012] to-[#203890] text-white font-semibold rounded-full shadow-xl hover:from-[#be0012]/90 hover:to-[#203890]/90 transition-all duration-300 group">
                        Start Here
                        <svg class="ml-2 w-5 h-5 inline group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="{{ route('services') }}" class="px-8 py-4 bg-white/40 backdrop-blur-sm border border-gray-400 text-gray-800 font-semibold rounded-full hover:bg-white/60 transition-all duration-300">
                        Learn More
                    </a>
                </div>

                <div class="text-center lg:text-left mt-10">
                    <p class="text-gray-500 italic text-sm animate-fade-in delay-700">
                        Scroll down and discover the innovation 💡
                    </p>
                </div>
            </div>
            
            <!-- Image -->
            <div class="flex justify-center lg:justify-end animate-fade-in delay-300">
                <div class="relative">
                    <div class="bg-white/20 backdrop-blur-sm border border-white/30 rounded-3xl p-8 shadow-2xl">
                        <div class="relative overflow-hidden rounded-2xl">
                            <img src="{{ asset('images/telu.jpg') }}" alt="MBC Laboratory Innovation" class="w-full h-150 object-cover rounded-2xl" onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTAwIiBoZWlnaHQ9IjQwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICA8cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjQwMCIgZmlsbD0iIzMzMzMzMyIvPgogIDx0ZXh0IHg9IjUwJSIgeT0iNTAlIiBmb250LXNpemU9IjI0IiBmaWxsPSIjZmZmIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBkeT0iLjNlbSI+TWJjIExhYm9yYXRvcnkgSW1hZ2U8L3RleHQ+Cjwvc3ZnPg==' ">
                            <div class="absolute inset-0 bg-gradient-to-tr from-[#be0012]/20 to-[#203890]/20 rounded-2xl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What is MBC Laboratory Section -->
<section id="about-mbc" class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 right-0 w-80 h-80 bg-gradient-to-bl from-[#be0012]/15 to-[#be0012]/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-[#203890]/15 to-[#203890]/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold mb-4 text-gray-900">
                What is <span class="bg-gradient-to-r from-[#be0012] to-[#203890] bg-clip-text text-transparent">MBC Laboratory</span>?
            </h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            <div class="lg:col-span-2">
                <div class="bg-white/80 backdrop-blur-lg border border-gray-200/50 rounded-3xl p-8 shadow-xl">
                    <h3 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">
                        One of the <span class="bg-gradient-to-r from-[#be0012] to-[#203890] bg-clip-text text-transparent">BIGGEST</span><br>
                        Technology Research Hub for Future Innovation
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        Welcome to MBC Laboratory, a leading technology research center dedicated to developing innovative solutions!
                        We are once again launching exciting research and technology development initiatives, complete with unique concepts and attractive rewards!
                    </p>
                    <p class="text-gray-700 text-lg leading-relaxed mt-4">
                        With the theme "Awakening Inner Brilliance to Adapt to the Shifting Tech Landscape",
                        this year, MBC Laboratory offers you the opportunity to grow essential skills for thriving in a rapidly evolving technological world.
                    </p>
                </div>
            </div>
            
            <!-- Statistics -->
            <div class="space-y-4">
                <div class="bg-white/80 backdrop-blur-lg border border-[#be0012]/30 rounded-2xl p-6 hover:scale-105 transition-transform duration-300 shadow-lg">
                    <div class="text-[#be0012] text-3xl font-bold mb-2">>30</div>
                    <div class="text-gray-700">MBC Laboratory Assistant Members</div>
                </div>
                
                <div class="bg-white/80 backdrop-blur-lg border border-[#203890]/30 rounded-2xl p-6 hover:scale-105 transition-transform duration-300 shadow-lg">
                    <div class="text-[#203890] text-3xl font-bold mb-2">>20</div>
                    <div class="text-gray-700">Collaborative Projects with MBC Laboratory</div>
                </div>
                
                <div class="bg-white/80 backdrop-blur-lg border border-[#be0012]/30 rounded-2xl p-6 hover:scale-105 transition-transform duration-300 shadow-lg">
                    <div class="text-[#be0012] text-3xl font-bold mb-2">>3</div>
                    <div class="text-gray-700">Partner Labs Supporting the Growth of MBC Laboratory</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission Section -->
<section class="relative bg-gradient-to-br from-gray-50 to-white text-gray-900 py-20 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-[#be0012]/5 to-[#be0012]/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-br from-[#203890]/5 to-[#203890]/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-1/4 w-64 h-64 bg-gradient-to-br from-[#be0012]/8 to-[#203890]/8 rounded-full blur-3xl"></div>
    </div>
    
    <!-- Background -->
    <div class="absolute inset-0 opacity-3">
        <svg class="w-full h-full" viewBox="0 0 400 400" fill="none">
            <pattern id="visionPattern" x="0" y="0" width="60" height="60" patternUnits="userSpaceOnUse">
                <circle cx="30" cy="30" r="2" fill="url(#visionGradient)" opacity="0.3"/>
                <circle cx="10" cy="10" r="1" fill="url(#visionGradient)" opacity="0.4"/>
                <circle cx="50" cy="50" r="1" fill="url(#visionGradient)" opacity="0.4"/>
            </pattern>
            <defs>
                <linearGradient id="visionGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#be0012;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#203890;stop-opacity:1" />
                </linearGradient>
            </defs>
            <rect width="100%" height="100%" fill="url(#visionPattern)"/>
        </svg>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-[#be0012] to-[#203890] bg-clip-text text-transparent">
                Visi & Misi
            </h2>
            <p class="mt-4 text-xl text-gray-600">
                Fondasi yang mengarahkan setiap langkah inovasi MBC Laboratory
            </p>
        </div>
    
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Vision Card -->
            <div class="group bg-white/80 backdrop-blur-lg border border-[#be0012]/20 rounded-3xl p-10 hover:scale-105 transition-all duration-500 shadow-xl hover:shadow-2xl">
                <div class="relative mb-8">
                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-[#be0012] to-[#be0012]/80 rounded-3xl flex items-center justify-center shadow-2xl group-hover:rotate-12 transition-transform duration-500">
                        <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    
                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-br from-[#be0012]/30 to-[#be0012]/60 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-2 -left-2 w-4 h-4 bg-gradient-to-br from-[#be0012]/40 to-[#be0012]/70 rounded-full animate-pulse delay-300"></div>
                </div>

                <div class="text-center">
                    <h3 class="text-3xl font-bold mb-6 text-gray-900">
                        <span class="bg-gradient-to-r from-[#be0012] to-[#be0012]/80 bg-clip-text text-transparent">Visi</span>
                    </h3>
                    <p class="text-gray-700 text-lg leading-relaxed">
                        To become a leading center of innovation in Cybersecurity, Big Data Analytics, Game Technology, and GIS by developing impactful and sustainable digital solutions that protect, empower, and educate society.
                    </p>
                </div>
            </div>
            
            <!-- Mission Card -->
            <div class="group bg-white/80 backdrop-blur-lg border border-[#203890]/20 rounded-3xl p-10 hover:scale-105 transition-all duration-500 shadow-xl hover:shadow-2xl">
                <div class="relative mb-8">
                    <div class="w-24 h-24 mx-auto bg-gradient-to-br from-[#203890] to-[#203890]/80 rounded-3xl flex items-center justify-center shadow-2xl group-hover:rotate-12 transition-transform duration-500">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <circle cx="12" cy="12" r="6" stroke="currentColor" stroke-width="2"/>
                        <circle cx="12" cy="12" r="2" fill="currentColor"/>
                        <path d="M17 7L21 3M21 3L18.5 3M21 3L21 5.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    </div>

                    <div class="absolute -top-2 -right-2 w-6 h-6 bg-gradient-to-br from-[#203890]/30 to-[#203890]/60 rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-2 -left-2 w-4 h-4 bg-gradient-to-br from-[#203890]/40 to-[#203890]/70 rounded-full animate-pulse delay-300"></div>
                </div>
                
                <div class="text-center">
                    <h3 class="text-3xl font-bold mb-6 text-gray-900">
                        <span class="bg-gradient-to-r from-[#203890] to-[#203890]/80 bg-clip-text text-transparent">Misi</span>
                    </h3>
                    <div class="text-left mb-0 text-gray-700 text-lg leading-relaxed space-y-4">
                        <p>• To develop Cybersecurity technologies that protect digital infrastructure.</p>
                        <p>• To create Big Data solutions that optimize decision-making.</p>
                        <p>• To produce innovative Game Technologies that are both educational and entertaining.</p>
                        <p>• To build GIS systems that support sustainable development.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Achievement -->
        <div class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-[#be0012]/20 hover:bg-white/80 transition-all duration-300">
                <div class="text-3xl font-bold text-[#be0012] mb-2">5+</div>
                <div class="text-gray-700">Years of Experience</div>
            </div>
            <div class="text-center bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-[#203890]/20 hover:bg-white/80 transition-all duration-300">
                <div class="text-3xl font-bold text-[#203890] mb-2">40+</div>
                <div class="text-gray-700">Completed Projects</div>
            </div>
            <div class="text-center bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-[#be0012]/20 hover:bg-white/80 transition-all duration-300">
                <div class="text-3xl font-bold text-[#be0012] mb-2">30+</div>
                <div class="text-gray-700">Expert Researchers</div>
            </div>
            <div class="text-center bg-white/60 backdrop-blur-sm rounded-2xl p-6 border border-[#203890]/20 hover:bg-white/80 transition-all duration-300">
                <div class="text-3xl font-bold text-[#203890] mb-2">4</div>
                <div class="text-gray-700">Research Divisions</div>
            </div>
        </div>
        
       
    </div>
</section>

<!-- Our Core Values Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute right-0 top-0 w-1/2 h-full">

            <svg class="w-full h-full" viewBox="0 0 400 400" fill="none">
                <pattern id="triangles" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                    <polygon points="20,5 35,30 5,30" fill="url(#gradient1)" opacity="0.3"/>
                </pattern>
                <defs>
                    <linearGradient id="gradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                                                            <stop offset="0%" style="stop-color:#be0012;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#203890;stop-opacity:1" />
                    </linearGradient>
                </defs>
                <rect width="100%" height="100%" fill="url(#triangles)"/>
            </svg>
        </div>
    </div>
    
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 left-10 w-64 h-64 bg-gradient-to-br from-[#be0012]/10 to-[#be0012]/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 right-10 w-72 h-72 bg-gradient-to-br from-[#203890]/10 to-[#203890]/15 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-5xl md:text-6xl font-bold bg-gradient-to-r from-gray-900 via-[#be0012] to-[#203890] bg-clip-text text-transparent">
                Our Core Values
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Impactful -->
            <div class="group bg-white/80 backdrop-blur-lg border border-[#be0012]/30 rounded-3xl p-8 text-center hover:scale-105 transition-all duration-500 shadow-lg hover:shadow-2xl">
                <div class="relative mb-8">
                    <div class="w-32 h-32 mx-auto bg-gradient-to-br from-[#be0012] to-orange-500 rounded-3xl flex items-center justify-center transform perspective-1000 group-hover:rotateY-12 transition-transform duration-500 shadow-2xl">
                        <div class="w-20 h-20 bg-gradient-to-br from-[#be0012]/90 to-orange-500 rounded-2xl flex items-center justify-center shadow-inner">
                            <svg class="w-12 h-12 text-white transform rotate-45" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Impactful</h3>
            </div>
            
            <!-- Collaborative -->
            <div class="group bg-white/80 backdrop-blur-lg border border-[#203890]/30 rounded-3xl p-8 text-center hover:scale-105 transition-all duration-500 shadow-lg hover:shadow-2xl">
                <div class="relative mb-8">
                    <div class="w-32 h-32 mx-auto bg-gradient-to-br from-[#203890] to-cyan-500 rounded-3xl flex items-center justify-center transform perspective-1000 group-hover:rotateY-12 transition-transform duration-500 shadow-2xl">
                        <div class="w-20 h-20 bg-gradient-to-br from-[#203890]/90 to-cyan-500 rounded-2xl flex items-center justify-center shadow-inner">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Collaborative</h3>
            </div>
            
            <!-- Adaptive -->
            <div class="group bg-white/80 backdrop-blur-lg border border-[#be0012]/30 rounded-3xl p-8 text-center hover:scale-105 transition-all duration-500 shadow-lg hover:shadow-2xl">
                <div class="relative mb-8">
                    <div class="w-32 h-32 mx-auto bg-gradient-to-br from-[#be0012] to-[#203890] rounded-3xl flex items-center justify-center transform perspective-1000 group-hover:rotateY-12 transition-transform duration-500 shadow-2xl">
                        <div class="w-20 h-20 bg-gradient-to-br from-[#be0012]/90 to-[#203890] rounded-2xl flex items-center justify-center shadow-inner">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-4 text-gray-900">Adaptive</h3>
            </div>
        </div>
         <!-- Call to Action -->
         <div class="mt-16 text-center">
            <div class="bg-gradient-to-r from-[#be0012]/10 via-[#203890]/10 to-[#be0012]/10 rounded-3xl p-8 backdrop-blur-sm border border-gray-200/50">
                <h3 class="text-3xl font-bold mb-4 bg-gradient-to-r from-[#be0012] to-[#203890] bg-clip-text text-transparent">
                    Join Us in Making the Vision a Reality
                </h3>
                <p class="text-gray-700 text-lg mb-6">
                    Be part of the next tech revolution — with MBC Laboratory.
                </p>
                <a href="{{ route('services') }}" 
                   class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#be0012] to-[#203890] text-white font-medium rounded-full hover:from-[#be0012]/90 hover:to-[#203890]/90 transition-all duration-300 group shadow-lg">
                    Explore Our Services
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate elements on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in');
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });
    });
</script>

<style>
    .animate-fade-in {
        animation: fadeInUp 0.6s ease-out forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endpush 