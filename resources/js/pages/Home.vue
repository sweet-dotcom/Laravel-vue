<template>
    <Head title="MIG-HELL - Premium Cyberware" />
    <MainLayout>
        <!-- Hero Section - Authentic Cyberpunk.net Style -->
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden cp-dots-top cp-fade-bottom">
            <!-- Background with yellow tint like official site -->
            <div class="absolute inset-0 bg-[#fbff31]"></div>
            <!-- Gemini image overlay -->
            <div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-multiply" style="background-image: url('/images/crew-bg.png');"></div>
            <!-- Dark overlay gradient from top -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/70 to-transparent"></div>

            <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 py-16 text-center">
                <!-- Review Quotes - Cyberpunk Style -->
                <div class="flex flex-wrap justify-center gap-8 mb-12">
                    <div class="text-left">
                        <div class="text-white text-xl font-bold mb-1">"PREEM CHROME"</div>
                        <div class="text-gray-400 text-sm">Night City Wire</div>
                    </div>
                    <div class="text-left">
                        <div class="text-white text-xl font-bold mb-1">"BEST IN WATSON"</div>
                        <div class="text-gray-400 text-sm">Screamsheets</div>
                    </div>
                    <div class="text-left">
                        <div class="text-white text-xl font-bold mb-1">"ZERO FLATLINES"</div>
                        <div class="text-gray-400 text-sm">Trauma Team</div>
                    </div>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-4 uppercase leading-tight glitch-hover">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#fcee0a] to-cyan-400 text-glow-yellow">Get Chrome</span>
                    <span class="text-white"> or </span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-[#fcee0a] text-glow-cyan">Get Flatlined</span>
                </h1>
                
                <!-- Tagline -->
                <p class="text-xl md:text-2xl text-gray-400 mb-12 font-light">
                    <span class="typing-effect">Watson's most trusted ripper doc — premium cyberware, zero flatlines guaranteed.</span>
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <Link 
                        href="/products"
                        class="cp-btn--yellow btn-shine inline-block bg-[#fcee0a] text-black px-10 py-4 text-xl font-bold uppercase hover:bg-cyan-400 hover:shadow-lg hover:shadow-cyan-400/50 transition-all duration-200 border-2 border-[#fcee0a] hover:border-cyan-400"
                    >
                        <span>BROWSE MODS</span>
                    </Link>
                    <Link 
                        href="/contact"
                        class="cp-btn--cyan btn-shine inline-block bg-black text-cyan-400 px-10 py-4 text-xl font-bold uppercase border-2 border-cyan-400 hover:bg-cyan-400 hover:text-black hover:shadow-lg hover:shadow-cyan-400/50 transition-all duration-200"
                    >
                        <span>BOOK INSTALL</span>
                    </Link>
                </div>

                <!-- Platform Icons - Modified for Ripper Doc -->
                <div class="flex justify-center gap-4 flex-wrap">
                    <div class="text-cyan-400 text-sm font-mono">AVAILABLE:</div>
                    <div class="text-white text-sm font-bold hover:text-[#fcee0a] transition cursor-default">SOLO</div>
                    <div class="text-white text-sm font-bold hover:text-cyan-400 transition cursor-default">NETRUNNER</div>
                    <div class="text-white text-sm font-bold hover:text-[#fcee0a] transition cursor-default">TECHIE</div>
                    <div class="text-white text-sm font-bold hover:text-cyan-400 transition cursor-default">NOMAD</div>
                    <div class="text-white text-sm font-bold hover:text-[#fcee0a] transition cursor-default">CORPO</div>
                </div>
            </div>

            <!-- Subtle Loading Bar at bottom -->
            <div class="absolute bottom-0 left-0 right-0 cyber-loading"></div>
        </section>

        <!-- News/Updates Section - Authentic Cyberpunk.net Style -->
        <section class="relative py-16 px-6 lg:px-12 bg-black">
            <!-- Top border accent -->
            <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-[#fcee0a] via-transparent to-cyan-400"></div>
            
            <div class="max-w-7xl mx-auto relative z-10">
                <!-- News decoration text -->
                <div class="text-[#fcee0a] font-mono text-sm mb-4">/// NEWS.MODULE<span class="text-gray-500 ml-2">loading...</span></div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
                    <!-- Featured News Item -->
                    <div class="lg:col-span-2 relative group cursor-pointer card-lift">
                        <Link href="/products">
                            <div class="mb-3 text-yellow-400 font-mono text-xs">
                                <span>/// .CHROME.MODULE_HIGHLIGHT</span>
                                <span class="ml-4">12.07.2025</span>
                            </div>
                            <div class="relative overflow-hidden">
                                <div class="aspect-video relative overflow-hidden">
                                    <img src="/images/night-city.jpg" alt="Featured" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-6">
                                        <h3 class="text-2xl md:text-3xl font-black text-white uppercase">
                                            NEW SANDEVISTAN STOCK!
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </Link>
                    </div>

                    <!-- News Item 2 -->
                    <div class="relative group cursor-pointer card-lift">
                        <Link href="/products">
                            <div class="mb-3 text-gray-400 font-mono text-xs">
                                <span>NEWS_</span>
                            </div>
                            <div class="aspect-video mb-3 relative overflow-hidden">
                                <img src="/images/reed.png" alt="Mantis Blades" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"/>
                                <div class="absolute inset-0 bg-red-500/20 group-hover:bg-red-500/30 transition-colors"></div>
                            </div>
                            <h3 class="text-white font-bold">Mantis Blades - 20% Off</h3>
                        </Link>
                    </div>

                    <!-- News Item 3 -->
                    <div class="relative group cursor-pointer card-lift">
                        <Link href="/about">
                            <div class="mb-3 text-gray-400 font-mono text-xs">
                                <span>NEWS_</span>
                            </div>
                            <div class="aspect-video mb-3 relative overflow-hidden">
                                <img src="/images/myers.png" alt="Our Story" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"/>
                                <div class="absolute inset-0 bg-cyan-500/20 group-hover:bg-cyan-500/30 transition-colors"></div>
                            </div>
                            <h3 class="text-white font-bold">Our Story: Since 2065</h3>
                        </Link>
                    </div>

                    <!-- News Item 4 -->
                    <div class="relative group cursor-pointer card-lift">
                        <Link href="/contact">
                            <div class="mb-3 text-gray-400 font-mono text-xs">
                                <span>NEWS_</span>
                            </div>
                            <div class="aspect-video mb-3 relative overflow-hidden">
                                <img src="/images/songbird.png" alt="Contact" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"/>
                                <div class="absolute inset-0 bg-yellow-500/20 group-hover:bg-yellow-500/30 transition-colors"></div>
                            </div>
                            <h3 class="text-white font-bold">Book Your Install Today</h3>
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Section - Cyberpunk.net Mission Briefing Style -->
        <section class="relative bg-black overflow-hidden py-16">
            <!-- Corner brackets -->
            <div class="absolute top-6 left-6 w-20 h-20 border-l-2 border-t-2 border-[#fcee0a]"></div>
            <div class="absolute top-6 right-6 w-20 h-20 border-r-2 border-t-2 border-[#fcee0a]"></div>
            <div class="absolute bottom-6 left-6 w-20 h-20 border-l-2 border-b-2 border-[#fcee0a]"></div>
            <div class="absolute bottom-6 right-6 w-20 h-20 border-r-2 border-b-2 border-[#fcee0a]"></div>
            
            <div class="max-w-7xl mx-auto px-8 lg:px-16 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Side - Text Content -->
                    <div>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase mb-6" style="font-family: Arial Black, sans-serif; line-height: 1.1;">
                            YOUR LEGEND<br/>STARTS HERE
                        </h2>
                        
                        <h3 class="text-[#fe1038] text-xl font-bold uppercase mb-4 tracking-wider">NIGHT CITY'S FINEST CHROME</h3>
                        <div class="w-12 h-0.5 bg-[#fe1038] mb-6"></div>
                        
                        <p class="text-gray-300 text-lg leading-relaxed mb-8">
                            Step into MIG-HELL — Watson's most trusted cyberware shop. From military-grade 
                            Sandevistans to custom mantis blades, we deliver premium chrome without the corpo 
                            markup. Legends are made here. What will yours be?
                        </p>
                        
                        <div class="flex flex-wrap gap-4">
                            <Link href="/products" class="bg-[#fcee0a] text-black px-8 py-4 font-black uppercase hover:bg-white transition-all">
                                BROWSE CHROME
                            </Link>
                            <Link href="/about" class="border-2 border-white text-white px-8 py-4 font-black uppercase hover:bg-white hover:text-black transition-all">
                                OUR STORY
                            </Link>
                        </div>
                        
                        <div class="mt-8">
                            <span class="text-gray-500 text-sm font-mono">LOCATION: </span>
                            <span class="text-cyan-400 text-sm font-mono bg-gray-800 px-2 py-1 ml-2">WATSON, NIGHT CITY</span>
                        </div>
                    </div>
                    
                    <!-- Right Side - Featured Image -->
                    <div class="relative">
                        <div class="relative aspect-[4/3] overflow-hidden">
                            <div class="absolute inset-0 border-4 border-cyan-400/50"></div>
                            <img 
                                src="/images/crew-bg.png" 
                                alt="MIG-HELL Crew"
                                class="w-full h-full object-cover"
                            />
                            <div class="absolute inset-0 opacity-20" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(0,240,255,0.1) 2px, rgba(0,240,255,0.1) 4px);"></div>
                            <div class="absolute top-0 left-0 w-8 h-8 border-l-4 border-t-4 border-cyan-400"></div>
                            <div class="absolute top-0 right-0 w-8 h-8 border-r-4 border-t-4 border-cyan-400"></div>
                            <div class="absolute bottom-0 left-0 w-8 h-8 border-l-4 border-b-4 border-cyan-400"></div>
                            <div class="absolute bottom-0 right-0 w-8 h-8 border-r-4 border-b-4 border-cyan-400"></div>
                        </div>
                        <div class="text-center mt-2 text-gray-500 text-xs font-mono">IMG :: CREW_2077</div>
                    </div>
                </div>
            </div>
            
            <div class="max-w-7xl mx-auto px-8 lg:px-16 mt-12">
                <div class="text-[#fcee0a] text-sm font-mono">/// FEATURES.MODULE</div>
                <div class="text-gray-600 text-sm font-mono">loading...</div>
            </div>
        </section>

        <!-- Navigation Tiles Section - Exactly Like Cyberpunk.net -->
        <section class="relative bg-black py-8">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <!-- STORY Tile -->
                    <Link href="/about" class="group relative aspect-video overflow-hidden">
                        <img src="/images/night-city.jpg" alt="Story" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-black text-white uppercase">STORY</h3>
                        </div>
                        <div class="absolute top-2 right-2 w-2 h-2 bg-[#fcee0a] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </Link>
                    
                    <!-- CHROME Tile -->
                    <Link href="/products" class="group relative aspect-video overflow-hidden">
                        <img src="/images/alex.png" alt="Chrome" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-black text-white uppercase">CHROME</h3>
                        </div>
                        <div class="absolute top-2 right-2 w-2 h-2 bg-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </Link>
                    
                    <!-- CREW Tile -->
                    <Link href="/about#team" class="group relative aspect-video overflow-hidden">
                        <img src="/images/hansen.png" alt="Crew" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-black text-white uppercase">CREW</h3>
                        </div>
                        <div class="absolute top-2 right-2 w-2 h-2 bg-[#fe1038] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </Link>
                    
                    <!-- CONTACT Tile -->
                    <Link href="/contact" class="group relative aspect-video overflow-hidden">
                        <img src="/images/songbird.png" alt="Contact" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                        <div class="absolute bottom-4 left-4">
                            <h3 class="text-xl font-black text-white uppercase">CONTACT</h3>
                        </div>
                        <div class="absolute top-2 right-2 w-2 h-2 bg-fuchsia-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </Link>
                </div>
            </div>
        </section>

        <!-- Stats Section - Clean Cyberpunk Style -->
        <section class="relative py-16 bg-gradient-to-b from-black to-gray-900">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center p-6 border border-gray-800 bg-black/50 hover:border-[#fcee0a] transition-colors">
                        <div class="text-4xl md:text-5xl font-black text-[#fcee0a]">10K+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider mt-2">Installs</div>
                    </div>
                    <div class="text-center p-6 border border-gray-800 bg-black/50 hover:border-cyan-400 transition-colors">
                        <div class="text-4xl md:text-5xl font-black text-cyan-400">0%</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider mt-2">Flatlines</div>
                    </div>
                    <div class="text-center p-6 border border-gray-800 bg-black/50 hover:border-[#fe1038] transition-colors">
                        <div class="text-4xl md:text-5xl font-black text-white">12</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider mt-2">Years Active</div>
                    </div>
                    <div class="text-center p-6 border border-gray-800 bg-black/50 hover:border-fuchsia-500 transition-colors">
                        <div class="text-4xl md:text-5xl font-black text-fuchsia-500">5★</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider mt-2">Rating</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Final CTA - Simple and Clean -->
        <section class="relative py-20 bg-black">
            <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-[#fcee0a] to-transparent"></div>
            
            <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase mb-6" style="font-family: Arial Black, sans-serif;">
                    READY TO GET <span class="text-[#fcee0a]">CHROMED</span>?
                </h2>
                <p class="text-gray-400 text-lg mb-10">
                    Book your installation today. Walk in human, walk out legend.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <Link href="/contact" class="bg-[#fcee0a] text-black px-12 py-5 text-xl font-black uppercase hover:bg-white transition-all">
                        BOOK NOW
                    </Link>
                    <Link href="/products" class="border-2 border-cyan-400 text-cyan-400 px-12 py-5 text-xl font-black uppercase hover:bg-cyan-400 hover:text-black transition-all">
                        VIEW CHROME
                    </Link>
                </div>
            </div>
            
            <div class="mt-16 text-center text-gray-700 text-sm font-mono">
                <p>© 2077 MIG-HELL CYBERWARE // WATSON DISTRICT // NIGHT CITY</p>
            </div>
        </section>
    </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';
</script>
