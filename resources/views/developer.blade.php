@extends('layouts.app')

@section('title', 'Developer - MBC Laboratory')
@section('description', 'Meet the developer behind MBC Laboratory website.')

@section('content')
<!-- Developer Section -->
<section class="relative min-h-screen bg-white text-gray-900 flex items-center justify-center py-20">
    <!-- Background-->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-[#be0012]/10 to-[#be0012]/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-br from-[#203890]/10 to-[#203890]/20 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <!-- Developer Profile -->
        <div class="bg-white/80 backdrop-blur-lg border border-gray-200/50 rounded-3xl p-12 shadow-xl">
            <!-- Profpic-->
            <div class="mb-8">
                <div class="w-32 h-32 bg-gradient-to-br from-[#be0012] to-[#203890] rounded-full flex items-center justify-center mx-auto shadow-2xl">
                    <img src="{{ asset('images/andrarieza.png') }}" 
                         alt="Developer Photo" 
                         class="w-full h-full rounded-full object-cover"
                         onerror="this.style.display='none'; this.parentElement.innerHTML='<svg class=\'w-16 h-16 text-white\' fill=\'currentColor\' viewBox=\'0 0 20 20\'><path d=\'M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z\'></path></svg>'">
                </div>
            </div>
            
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-[#be0012] to-[#203890] bg-clip-text text-transparent">
                    Andrarieza Rizqi Pradana
                </h1>
                
                <p class="text-xl text-gray-600 font-medium">
                    Cyber Security Enthusiast
                </p>
                
                <p class="text-gray-700 text-lg leading-relaxed max-w-2xl mx-auto">
                    A cybersecurity enthusiast dedicated to exploring and developing secure digital solutions. Passionate about penetration testing, threat analysis, and building robust systems to defend against cyber threats.
                </p>
                
                <!-- Technical Competencies -->
                <div class="pt-6">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">Technical Competencies</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <!-- Cybersecurity -->
                        <div class="bg-white/60 backdrop-blur-sm border border-[#be0012]/20 rounded-2xl p-4">
                            <h4 class="font-bold text-[#be0012] mb-2">Cybersecurity</h4>
                            <div class="text-sm text-gray-700 space-y-1">
                                <div>• Basic Penetration Testing</div>
                                <div>• Vulnerability Assessment</div>
                                <div>• Understanding of Network and API Security Concepts</div>
                                <div>• Incident Handling Scenarios</div>
                            </div>
                        </div>
                        
                        <!-- Development -->
                        <div class="bg-white/60 backdrop-blur-sm border border-[#203890]/20 rounded-2xl p-4">
                            <h4 class="font-bold text-[#203890] mb-2">Development</h4>
                            <div class="text-sm text-gray-700 space-y-1">
                                <div>• Web Application Security</div>
                                <div>• Secure Coding Practices</div>
                                <div>• Laravel Framework</div>
                                <div>• Implementation of Secure RESTful APIs</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Tools & Technologies -->
                <div class="pt-2">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">Tools & Technologies</h3>
                    <div class="flex flex-wrap justify-center gap-3 mb-6">
                        <span class="px-3 py-1 bg-[#be0012]/10 text-[#be0012] rounded-full text-sm border border-[#be0012]/20">Kali Linux</span>
                        <span class="px-3 py-1 bg-[#be0012]/10 text-[#be0012] rounded-full text-sm border border-[#be0012]/20">Nmap</span>
                        <span class="px-3 py-1 bg-[#be0012]/10 text-[#be0012] rounded-full text-sm border border-[#be0012]/20">Burp Suite</span>
                        <span class="px-3 py-1 bg-[#203890]/10 text-[#203890] rounded-full text-sm border border-[#203890]/20">Laravel</span>
                        <span class="px-3 py-1 bg-[#203890]/10 text-[#203890] rounded-full text-sm border border-[#203890]/20">PHP</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm border border-gray-200">Python</span>
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm border border-gray-200">JavaScript</span>
                    </div>
                </div>
                
                <!-- GitHub-->
                <div class="pt-2 mb-6">
                    <a href="https://github.com/ezaarp" 
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center px-6 py-3 bg-gray-900 text-white font-medium rounded-full hover:bg-gray-800 transition-all duration-300 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                        View GitHub Profile
                    </a>
                </div>
                
                <!-- Contact btn-->
                <div class="pt-2">
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#be0012] to-[#203890] text-white font-medium rounded-full hover:from-[#be0012]/90 hover:to-[#203890]/90 transition-all duration-300 shadow-lg">
                        Contact Me
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 