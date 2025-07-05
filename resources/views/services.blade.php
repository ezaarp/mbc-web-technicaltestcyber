@extends('layouts.app')

@section('title', 'Services & Research Divisions - MBC Laboratory')
@section('description', 'Explore MBC Laboratory research divisions: Cybersecurity, Big Data, Game Technology, and Geographic Information System.')

@section('content')


<!-- Main Services Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 left-0 w-80 h-80 bg-gradient-to-bl from-red-800/10 to-red-900/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gradient-to-tr from-blue-800/10 to-blue-900/15 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-gradient-to-br from-red-700/8 to-blue-800/12 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-900 via-[#be0012] to-[#203890] bg-clip-text text-transparent">
                Specialized Research Areas
            </h2>
            <p class="text-xl text-gray-700 max-w-3xl mx-auto">
                Each division has deep specialization focus with experienced expert teams and cutting-edge technology in their fields
            </p>
        </div>

        <div class="space-y-12">
            <!-- Cybersecurity Division -->
            <div class="group relative bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                <div class="absolute inset-0 bg-gradient-to-r from-purple-900/90 via-red-800/85 to-blue-700/80">
                    <img src="{{ asset('images/divisions/gametech-bg.jpg') }}" 
                         alt="Game Technology Background" 
                         class="w-full h-full object-cover opacity-20"
                         onerror="this.style.display='none'">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/30 via-red-600/40 to-blue-700/50"></div>
                </div>
                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 p-8">
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-start text-center lg:text-left">
                        <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center shadow-2xl mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-2">Cybersecurity</h3>
                        <p class="text-red-100 text-sm">Digital Security & Protection</p>
                    </div>
                    
                    <!-- Content Section -->
                    <div class="lg:col-span-6 flex flex-col justify-center">
                        <p class="text-white/90 text-lg leading-relaxed mb-6">
                        Developing comprehensive cybersecurity solutions to protect digital infrastructure from various threats.
                        We focus on penetration testing, security auditing, and incident response to ensure the safety of data and systems.
                        </p>
                        
                        <!-- Focus cyber -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                <span class="text-red-100 text-sm">Penetration Testing</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                <span class="text-red-100 text-sm">Security Auditing</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                <span class="text-red-100 text-sm">Incident Response</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-red-300 rounded-full"></div>
                                <span class="text-red-100 text-sm">Threat Intelligence</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-end">
                        <!-- character -->
                        <div class="mb-6 transform hover:scale-110 transition-transform duration-300 animate-guarding"
                            style="animation: guarding 4s ease-in-out infinite;"
                        >
                            <img src="{{ asset('images/cyber.png') }}" 
                                alt="Capybara Cybersecurity Expert" 
                                class="w-32 h-32 drop-shadow-2xl"
                                onerror="this.style.display='none'">
                        </div>
                        
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-lg text-white font-semibold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 group/btn shadow-lg">
                            Learn More
                            <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Big Data Division -->
            <div class="group relative bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                <!-- Background -->
                <div class="absolute inset-0 bg-gradient-to-r from-teal-900/90 via-cyan-800/85 to-blue-700/80">
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/30 via-blue-600/40 to-indigo-700/50"></div>
</div>

                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 p-8">
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-start text-center lg:text-left">
                        <div class="w-24 h-24 bg-gradient-to-br from-cyan-500 to-indigo-700 rounded-2xl flex items-center justify-center shadow-2xl mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-2">Big Data</h3>
                        <p class="text-blue-100 text-sm">Analytics & Intelligence</p>
                    </div>
                    
                    <!-- Content Section -->
                    <div class="lg:col-span-6 flex flex-col justify-center">
                        <p class="text-white/90 text-lg leading-relaxed mb-6">
                            Analyzing and processing large-scale data to generate valuable insights for business and research.We leverage machine learning and AI for prediction, pattern recognition, and decision support systems.

                        </p>
                        
                        <!-- Focus data -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-300 rounded-full"></div>
                                <span class="text-blue-100 text-sm">Data Analytics</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-300 rounded-full"></div>
                                <span class="text-blue-100 text-sm">Machine Learning</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-300 rounded-full"></div>
                                <span class="text-blue-100 text-sm">Data Visualization</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-blue-300 rounded-full"></div>
                                <span class="text-blue-100 text-sm">Predictive Analytics</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-end">
                        <!-- Panda -->
                        <div class="mb-6 transform hover:scale-110 transition-transform duration-300 animate-guarding"
                            style="animation: guarding 4s ease-in-out infinite;"
                        >
                            <img src="{{ asset('images/data.png') }}" 
                                alt="Panda Big Data Captain" 
                                class="w-32 h-32 drop-shadow-2xl"
                                onerror="this.style.display='none'">
                        </div>
                        
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-lg text-white font-semibold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 group/btn shadow-lg">
                            Learn More
                            <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Game Technology Division -->
            <div class="group relative bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                <!-- Background  -->
                <div class="absolute inset-0 bg-gradient-to-r from-yellow-800/90 via-amber-700/85 to-orange-600/80">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-400/30 via-amber-500/40 to-orange-500/50"></div>
                </div>

                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 p-8">

                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-start text-center lg:text-left">
                        <div class="w-24 h-24 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center shadow-2xl mb-6 group-hover:scale-110 transition-transform duration-500">

                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-2">Game Technology</h3>
                        <p class="text-purple-100 text-sm">Interactive & Immersive</p>
                    </div>
                    
                    <!-- Content Section -->
                    <div class="lg:col-span-6 flex flex-col justify-center">
                        <p class="text-white/90 text-lg leading-relaxed mb-6">
                        Developing interactive game technology, AR/VR applications, and 3D simulations for entertainment, education, and training.
                        We create immersive digital experiences through real-time rendering technology and interactive storytelling.
                        </p>
                        
                        <!-- Focus gametech -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-purple-300 rounded-full"></div>
                                <span class="text-purple-100 text-sm">AR/VR Development</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-purple-300 rounded-full"></div>
                                <span class="text-purple-100 text-sm">3D Simulation</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-purple-300 rounded-full"></div>
                                <span class="text-purple-100 text-sm">Game Engine</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-purple-300 rounded-full"></div>
                                <span class="text-purple-100 text-sm">Interactive Media</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-end">
                        <!-- Owl -->
                        <div class="mb-6 transform hover:scale-110 transition-transform duration-300 animate-guarding"
                            style="animation: guarding 4s ease-in-out infinite;"
                        >
                            <img src="{{ asset('images/game.png') }}" 
                                alt="Owl Game Technology Wise" 
                                class="w-32 h-32 drop-shadow-2xl"
                                onerror="this.style.display='none'">
                        </div>
                        
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-lg text-white font-semibold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 group/btn shadow-lg">
                            Learn More
                            <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Geographic Information System Division -->
            <div class="group relative bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-3xl overflow-hidden shadow-2xl hover:shadow-3xl transition-all duration-500">
                <!-- Background -->
                <div class="absolute inset-0 bg-gradient-to-r from-green-900/90 via-blue-800/85 to-teal-700/80">
                <div class="absolute inset-0 bg-gradient-to-r from-emerald-900/90 via-green-800/85 to-lime-700/80">
                 <div class="absolute inset-0 bg-gradient-to-br from-green-500/30 via-emerald-600/40 to-lime-700/50"></div>
        </div>

                </div>
                
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 p-8">
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-start text-center lg:text-left">
                        <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center shadow-2xl mb-6 group-hover:scale-110 transition-transform duration-500">
                            <svg class="w-12 h-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl md:text-4xl font-bold text-white mb-2">GIS</h3>
                        <p class="text-green-100 text-sm">Spatial & Geospatial</p>
                    </div>
                    
                    <!-- Content Section -->
                    <div class="lg:col-span-6 flex flex-col justify-center">
                        <p class="text-white/90 text-lg leading-relaxed mb-6">
                            Developing geographic information systems for spatial analysis, digital mapping, and regional management.
                            We create location-based solutions for smart cities, disaster management, and urban planning.
                        </p>
                        
                        <!-- Focus gis -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-300 rounded-full"></div>
                                <span class="text-green-100 text-sm">Spatial Analysis</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-300 rounded-full"></div>
                                <span class="text-green-100 text-sm">Digital Mapping</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-300 rounded-full"></div>
                                <span class="text-green-100 text-sm">Smart City Solutions</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-300 rounded-full"></div>
                                <span class="text-green-100 text-sm">Urban Planning</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="lg:col-span-3 flex flex-col justify-center items-center lg:items-end">
                        <!-- Dino gis rawr -->
                        <div class="mb-6 transform hover:scale-110 transition-transform duration-300 animate-guarding"
                            style="animation: guarding 4s ease-in-out infinite;"
                        >
                            <img src="{{ asset('images/gis.png') }}" 
                                alt="Dino GIS Explorer" 
                                class="w-32 h-32 drop-shadow-2xl"
                                onerror="this.style.display='none'">
                        </div>
                        
                        <a href="{{ route('contact') }}" 
                           class="inline-flex items-center px-8 py-4 bg-white/20 backdrop-blur-lg text-white font-semibold rounded-full border border-white/30 hover:bg-white/30 transition-all duration-300 group/btn shadow-lg">
                            Learn More
                            <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Stack Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-bl from-red-800/10 to-red-900/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-blue-800/10 to-blue-900/15 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight md:leading-snug bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
            Technology Stack
            </h2>

            <p class="text-xl text-gray-700">
                Cutting-edge technology stack to produce high-quality solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Cybersecurity Tools -->
            <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br  from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg">Cybersecurity</h3>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>• Kali Linux & Metasploit</li>
                    <li>• Wireshark & Nmap</li>
                    <li>• SIEM & SOC Tools</li>
                    <li>• Incident Response</li>
                    <li>• Digital Forensics</li>
                </ul>
            </div>

            <!-- Big Data Tools -->
            <div class="bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-indigo-700 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg">Big Data</h3>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>• Apache Spark & Hadoop</li>
                    <li>• Python & R Analytics</li>
                    <li>• TensorFlow & PyTorch</li>
                    <li>• Power BI & Tableau</li>
                    <li>• ElasticSearch</li>
                </ul>
            </div>

            <!-- Game Tech Tools -->
            <div class="bg-white/80 backdrop-blur-lg border border-red-200/50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg">Game Technology</h3>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>• Unity 3D & Unreal</li>
                    <li>• AR/VR SDKs</li>
                    <li>• Blender & Maya</li>
                    <li>• C# & JavaScript</li>
                    <li>• WebGL & WebXR</li>
                </ul>
            </div>

            <!-- GIS Tools -->
            <div class="bg-white/80 backdrop-blur-lg border border-blue-200/50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                <div class="text-center mb-4">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold text-gray-900 text-lg">GIS</h3>
                </div>
                <ul class="space-y-2 text-sm text-gray-700">
                    <li>• ArcGIS & QGIS</li>
                    <li>• PostGIS & MongoDB</li>
                    <li>• Leaflet & Mapbox</li>
                    <li>• Google Maps API</li>
                    <li>• Satellite Imagery</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Collaboration Process Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/2 left-1/4 w-56 h-56 bg-gradient-to-br from-red-700/8 to-blue-800/12 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient  -to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
                Our Research Process
            </h2>
            <p class="text-xl text-gray-700">
                Structured methodology to produce high-quality solutions
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-red-600 to-red-800 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-white font-bold text-2xl">1</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Analysis</h3>
                <p class="text-gray-700 leading-relaxed">Understanding client needs and challenges comprehensively through research and consultation</p>
            </div>

            <!-- Step 2 -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-blue-800 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-white font-bold text-2xl">2</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Design</h3>
                <p class="text-gray-700 leading-relaxed">Designing optimal technical solutions using cutting-edge technology and best practices</p>
            </div>

            <!-- Step 3 -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-purple-600 to-red-700 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-white font-bold text-2xl">3</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Development</h3>
                <p class="text-gray-700 leading-relaxed">Developing and implementing solutions with rigorous quality assurance and testing</p>
            </div>

            <!-- Step 4 -->
            <div class="text-center group">
                <div class="w-20 h-20 bg-gradient-to-br from-green-600 to-teal-700 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                    <span class="text-white font-bold text-2xl">4</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Deployment</h3>
                <p class="text-gray-700 leading-relaxed">Deploying solutions with ongoing support, maintenance, and continuous improvement</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative bg-white text-gray-900 py-20 overflow-hidden">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-red-800/5 via-blue-800/5 to-red-700/5"></div>
        <div class="absolute top-0 left-0 w-72 h-72 bg-gradient-to-br from-red-800/10 to-red-900/15 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-64 h-64 bg-gradient-to-br from-blue-800/10 to-blue-900/15 rounded-full blur-3xl"></div>
    </div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-900 via-red-800 to-blue-900 bg-clip-text text-transparent">
            Ready to Collaborate?
        </h2>
        <p class="text-xl text-gray-700 mb-8 leading-relaxed">
            Let's discuss your project and research needs. Our expert teams are ready to develop innovative solutions for your challenges.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-red-600 to-blue-800 text-white font-medium rounded-full hover:from-red-700 hover:to-blue-900 transition-all duration-300 group shadow-lg">
                Start Your Project
                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="{{ route('developer') }}" 
               class="inline-flex items-center px-8 py-4 border-2 border-gray-400 text-gray-700 hover:border-gray-600 hover:text-gray-900 font-medium rounded-full transition-all duration-300 bg-white/50 backdrop-blur-sm">
                Meet Our Team
            </a>
        </div>
    </div>
</section>
@endsection 

<style>
@keyframes guarding {
  0%, 100% {
    transform: translateY(0) rotate(0deg);
  }
  25% {
    transform: translateY(-5px) rotate(-1deg);
  }
  50% {
    transform: translateY(0) rotate(1deg);
  }
  75% {
    transform: translateY(-3px) rotate(-0.5deg);
  }
}
</style>