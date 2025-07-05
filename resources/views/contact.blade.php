@extends('layouts.app')

@section('title', 'Contact Us - MBC Laboratory')
@section('description', 'Contact MBC Laboratory for consultation and collaboration. We are ready to help realize the technology solutions you need.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[20vh] bg-white text-gray-900 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <!-- background glowing circle -->
        <div class="absolute -top-32 -left-32 w-96 h-96 bg-gradient-to-br from-red-800/20 to-red-900/30 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute top-20 right-0 w-80 h-80 bg-gradient-to-br from-blue-900/25 to-blue-800/35 rounded-full blur-3xl animate-pulse delay-1000"></div>
        <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-gradient-to-br from-red-700/20 to-red-800/25 rounded-full blur-3xl animate-pulse delay-2000"></div>
        <div class="absolute top-1/2 right-1/3 w-48 h-48 bg-gradient-to-br from-red-600/15 to-blue-800/20 rounded-full blur-3xl animate-pulse delay-3000"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-8 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent leading-tight">
                Get In Touch
            </h1>
            <p class="text-xl md:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                Let's discuss how we can help realize the technology solutions you need. Our expert team is ready to collaborate with you.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <!-- Background Gradients -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-80 h-80 bg-gradient-to-bl from-red-800/10 to-red-900/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tr from-blue-800/10 to-blue-900/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/3 w-64 h-64 bg-gradient-to-br from-red-700/8 to-blue-800/12 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Contact ingfo -->
            <div class="lg:col-span-1 space-y-8">
                <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-3xl shadow-2xl p-8">
                    <h2 class="text-3xl font-bold mb-8 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
                        Contact Information
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Office Address -->
                        <div class="flex items-start space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Lab Address</h3>
                                <p class="text-gray-700 leading-relaxed">
                                    Jl. Telekomunikasi No. 1<br>
                                    Terusan Buah Batu, Bandung<br>
                                    West Java 40257, Indonesia
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Email</h3>
                                <p class="text-gray-700">
                                    <a href="mailto:info@mbclaboratory.com" class="hover:text-red-600 transition-colors">
                                        info@mbclaboratory.com
                                    </a><br>
                                    <a href="mailto:support@mbclaboratory.com" class="hover:text-blue-600 transition-colors">
                                        support@mbclaboratory.com
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Telp -->
                        <div class="flex items-start space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Phone</h3>
                                <p class="text-gray-700">
                                    <a href="tel:+62227564108" class="hover:text-green-600 transition-colors">
                                        +62 22 7564 108
                                    </a><br>
                                    <a href="tel:+6281234567890" class="hover:text-green-600 transition-colors">
                                        +62 812 3456 7890
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- Jam kerja -->
                        <div class="flex items-start space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-red-600 rounded-2xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 mb-2">Business Hours</h3>
                                <p class="text-gray-700">
                                    Monday - Saturday: <br>08:00 - 17:00 WIB<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-3xl shadow-2xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
                        Follow Us
                    </h3>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/mbclab/" class="w-12 h-12 bg-gradient-to-br  from-purple-900/90 via-red-800/85 to-blue-700/80 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-black to-black rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-blue-700 to-blue-900 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-2xl flex items-center justify-center text-white hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-3xl shadow-2xl p-8">
                    <h2 class="text-3xl font-bold mb-8 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
                        Send Message
                    </h2>
                    
                    <!-- Success/Error Messages -->
                    @if(session('success'))
                        <div class="mb-6 p-6 bg-green-50 border border-green-200 rounded-2xl">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-green-800 font-medium">{{ session('success') }}</p>
                            </div>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-6 bg-red-50 border border-red-200 rounded-2xl">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </div>
                                <p class="text-red-800 font-medium">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" id="contactForm">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-bold text-gray-900 mb-3">
                                    Full Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}"
                                       class="w-full px-4 py-4 bg-white/50 border border-gray-300/50 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-300 backdrop-blur-sm @error('name') border-red-500 @enderror"
                                       placeholder="Enter your full name"
                                       required>
                                @error('name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-bold text-gray-900 mb-3">
                                    Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}"
                                       class="w-full px-4 py-4 bg-white/50 border border-gray-300/50 rounded-2xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-300 backdrop-blur-sm @error('email') border-red-500 @enderror"
                                       placeholder="name@email.com"
                                       required>
                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-bold text-gray-900 mb-3">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="6"
                                      class="w-full px-4 py-4 bg-white/50 border border-gray-300/50 rounded-2xl focus:ring-2 focus:ring-red-500 focus:border-red-500 transition-all duration-300 backdrop-blur-sm @error('message') border-red-500 @enderror"
                                      placeholder="Tell us about your project or technology needs..."
                                      required>{{ old('message') }}</textarea>
                            @error('message')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-sm text-gray-500">Maximum 2000 characters</p>
                        </div>

                        <div>
                            <button type="submit" 
                                    class="w-full inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-red-600 to-blue-800 text-white font-semibold rounded-full hover:from-red-700 hover:to-blue-900 transition-all duration-300 group shadow-lg">
                                Send Message
                                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-bl from-red-800/10 to-red-900/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-blue-800/10 to-blue-900/15 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
                Find Us
            </h2>
            <p class="text-xl text-gray-700">
                Located in the heart of Bandung, West Java
            </p>
        </div>

        <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-3xl shadow-2xl overflow-hidden">
            <div class="aspect-w-16 aspect-h-9">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3982248159234!2d107.6298!3d-6.9735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1699999999999!5m2!1sen!2sid"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-full h-96 rounded-2xl">
                </iframe>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/2 left-1/4 w-56 h-56 bg-gradient-to-br from-red-700/8 to-blue-800/12 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-700">
                Common questions about our services and collaboration
            </p>
        </div>

        <div class="space-y-6">
            <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What services does MBC Laboratory provide?</h3>
                <p class="text-gray-700">We specialize in four main research areas: Cybersecurity, Big Data Analytics, Game Technology, and Geographic Information Systems (GIS). Our expert teams provide comprehensive solutions from research to implementation.</p>
            </div>

            <div class="bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">How can I start a collaboration with MBC Laboratory?</h3>
                <p class="text-gray-700">Simply contact us through this form, email, or phone. We'll schedule a consultation to discuss your project requirements and how we can best support your technology needs.</p>
            </div>

            <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">What is the typical project timeline?</h3>
                <p class="text-gray-700">Project timelines vary depending on scope and complexity. After our initial consultation, we'll provide a detailed project timeline with key milestones and deliverables.</p>
            </div>

            <div class="bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-2xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-3">Do you provide ongoing support after project completion?</h3>
                <p class="text-gray-700">Yes, we offer comprehensive post-deployment support including maintenance, updates, and technical assistance to ensure your solution continues to perform optimally.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactForm');
        const submitBtn = document.getElementById('submitBtn');
        const submitText = document.getElementById('submitText');
        const submitLoader = document.getElementById('submitLoader');

        form.addEventListener('submit', function() {
            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            submitLoader.classList.remove('hidden');
        });

        const messageField = document.getElementById('message');
        const maxLength = 2000;
        
        if (messageField) {
            const counter = document.createElement('p');
            counter.className = 'mt-1 text-sm text-gray-500 text-right';
            counter.textContent = `0/${maxLength}`;
            messageField.parentNode.appendChild(counter);

            messageField.addEventListener('input', function() {
                const length = this.value.length;
                counter.textContent = `${length}/${maxLength}`;
                
                if (length > maxLength * 0.9) {
                    counter.classList.add('text-red-500');
                    counter.classList.remove('text-gray-500');
                } else {
                    counter.classList.add('text-gray-500');
                    counter.classList.remove('text-red-500');
                }
            });
        }

        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.value.trim() !== '') {
                    this.classList.add('border-green-300');
                    this.classList.remove('border-gray-300');
                } else {
                    this.classList.add('border-gray-300');
                    this.classList.remove('border-green-300');
                }
            });
        });

        if (document.querySelector('.border-red-500')) {
            document.getElementById('contactForm').scrollIntoView({ 
                behavior: 'smooth', 
                block: 'center' 
            });
        }
    });
</script>
@endpush 