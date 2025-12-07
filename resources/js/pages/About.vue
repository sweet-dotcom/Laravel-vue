<template>
    <Head title="About - MIG-HELL" />
    <MainLayout>
        <!-- Header with Background Image -->
        <section class="relative pt-24 pb-16 overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="/images/night-city.jpg" alt="" class="w-full h-full object-cover"/>
                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/80 to-black"></div>
                <div class="absolute inset-0 bg-gradient-to-l from-[#fcee0a]/20 via-transparent to-[#fe1038]/10"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                <div class="text-[#fcee0a] text-sm font-mono mb-2">/// ABOUT.MODULE</div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase mb-2" style="font-family: Arial Black, sans-serif;">
                    ABOUT MIG-HELL
                </h1>
                <p class="text-gray-400">Night City's premium cyberware since 2065</p>
            </div>
        </section>

        <!-- Our Story Section - with subtle background -->
        <section class="relative overflow-hidden py-16">
            <!-- Background image with yellow/black gradient -->
            <div class="absolute inset-0">
                <img src="/images/crew-bg.png" alt="" class="w-full h-full object-cover opacity-15"/>
                <div class="absolute inset-0 bg-gradient-to-br from-black via-[#fcee0a]/10 to-black"></div>
            </div>
            
            <div class="max-w-7xl mx-auto px-8 lg:px-16 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Side - Text Content -->
                    <div>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase mb-6" style="font-family: Arial Black, sans-serif; line-height: 1.1;">
                            OUR<br/>STORY
                        </h2>
                        
                        <h3 class="text-[#fe1038] text-xl font-bold uppercase mb-4 tracking-wider">FROM THE STREETS TO LEGEND</h3>
                        <div class="w-12 h-0.5 bg-[#fe1038] mb-6"></div>
                        
                        <p class="text-gray-300 text-lg leading-relaxed mb-6">
                            <strong class="text-[#fcee0a]">MIG-HELL</strong> started as a back-alley ripperdoc clinic in Watson, 2065. 
                            What began as a one-man operation fixing up street kids and mercs has grown into 
                            Night City's most trusted cyberware shop.
                        </p>
                        
                        <p class="text-gray-400 leading-relaxed mb-6">
                            We've chromed up thousands of clients — from solo operators to corporate suits 
                            looking for off-the-books upgrades. No questions asked. No corpo ties. Just 
                            bleeding-edge tech installed by the best hands in the business.
                        </p>
                        
                        <div class="mt-8">
                            <span class="text-gray-500 text-sm font-mono">ESTABLISHED: </span>
                            <span class="text-[#fcee0a] text-sm font-mono bg-gray-800 px-2 py-1 ml-2">2065</span>
                            <br class="mb-2"/>
                            <span class="text-gray-500 text-sm font-mono">LOCATION: </span>
                            <span class="text-cyan-400 text-sm font-mono bg-gray-800 px-2 py-1 ml-2">WATSON, NIGHT CITY</span>
                        </div>
                    </div>
                    
                    <!-- Right Side - Featured Image -->
                    <div class="relative">
                        <div class="relative aspect-[4/3] overflow-hidden">
                            <!-- Main image with cyan border -->
                            <div class="absolute inset-0 border-4 border-cyan-400/50"></div>
                            <img 
                                src="/images/night-city.jpg" 
                                alt="MIG-HELL Shop"
                                class="w-full h-full object-cover"
                            />
                            <!-- Scan line overlay -->
                            <div class="absolute inset-0 opacity-20" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(0,240,255,0.1) 2px, rgba(0,240,255,0.1) 4px);"></div>
                            <!-- Corner accents -->
                            <div class="absolute top-0 left-0 w-8 h-8 border-l-4 border-t-4 border-cyan-400"></div>
                            <div class="absolute top-0 right-0 w-8 h-8 border-r-4 border-t-4 border-cyan-400"></div>
                            <div class="absolute bottom-0 left-0 w-8 h-8 border-l-4 border-b-4 border-cyan-400"></div>
                            <div class="absolute bottom-0 right-0 w-8 h-8 border-r-4 border-b-4 border-cyan-400"></div>
                        </div>
                        
                        <!-- Image label -->
                        <div class="text-center mt-2 text-gray-500 text-xs font-mono">LOC :: WATSON_DISTRICT</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision Section -->
        <section class="relative py-20 overflow-hidden">
            <!-- Background with image -->
            <div class="absolute inset-0">
                <img src="/images/phantom-keyart.png" alt="" class="w-full h-full object-cover opacity-10"/>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/90 to-black"></div>
            </div>
            <!-- Grid background -->
            <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(252,238,10,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(252,238,10,0.5) 1px, transparent 1px); background-size: 60px 60px;"></div>
            
            <div class="max-w-7xl mx-auto px-8 lg:px-16 relative z-10">
                <div class="text-[#fcee0a] text-sm font-mono mb-8">/// MISSION.MODULE</div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Mission -->
                    <div class="relative p-8 bg-black/50 border border-gray-800 hover:border-[#fcee0a]/50 transition-colors group">
                        <div class="absolute top-0 left-0 w-4 h-4 border-l-2 border-t-2 border-[#fcee0a]"></div>
                        <div class="absolute top-0 right-0 w-4 h-4 border-r-2 border-t-2 border-[#fcee0a]"></div>
                        <div class="absolute bottom-0 left-0 w-4 h-4 border-l-2 border-b-2 border-[#fcee0a]"></div>
                        <div class="absolute bottom-0 right-0 w-4 h-4 border-r-2 border-b-2 border-[#fcee0a]"></div>
                        
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-[#fcee0a] flex items-center justify-center">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-black text-white uppercase">OUR MISSION</h3>
                        </div>
                        
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            To provide Night City's finest with cutting-edge cyberware at fair prices. 
                            We believe everyone deserves access to quality chrome — not just corpos and their lap dogs.
                        </p>
                        <p class="text-gray-500 leading-relaxed">
                            From Kiroshi optics to Militech-grade combat implants, we source, customize, 
                            and install the best tech the black market has to offer.
                        </p>
                    </div>
                    
                    <!-- Vision -->
                    <div class="relative p-8 bg-black/50 border border-gray-800 hover:border-cyan-400/50 transition-colors group">
                        <div class="absolute top-0 left-0 w-4 h-4 border-l-2 border-t-2 border-cyan-400"></div>
                        <div class="absolute top-0 right-0 w-4 h-4 border-r-2 border-t-2 border-cyan-400"></div>
                        <div class="absolute bottom-0 left-0 w-4 h-4 border-l-2 border-b-2 border-cyan-400"></div>
                        <div class="absolute bottom-0 right-0 w-4 h-4 border-r-2 border-b-2 border-cyan-400"></div>
                        
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-12 h-12 bg-cyan-400 flex items-center justify-center">
                                <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-black text-white uppercase">OUR VISION</h3>
                        </div>
                        
                        <p class="text-gray-300 text-lg leading-relaxed mb-4">
                            To become the legendary chrome shop every merc, netrunner, and solo in 
                            Night City trusts with their body. We're building more than a business — we're building a legacy.
                        </p>
                        <p class="text-gray-500 leading-relaxed">
                            When people think premium cyberware, they'll think MIG-HELL. 
                            That's not ego — that's the future we're chroming into existence.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Dossiers module text -->
            <div class="max-w-7xl mx-auto px-8 lg:px-16 mt-12">
                <div class="text-[#fcee0a] text-sm font-mono">/// DOSSIERS.MODULE</div>
                <div class="text-gray-600 text-sm font-mono">loading...</div>
            </div>
        </section>

        <!-- CREW Section - Red Background with Character Images -->
        <section id="team" class="relative overflow-hidden">
            <!-- Red background -->
            <div class="absolute inset-0 bg-[#fe1038]"></div>
            <!-- Gradient overlay from bottom for depth -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
            
            <div class="relative z-10">
                <!-- CREW Title -->
                <div class="text-center pt-16 pb-8">
                    <h2 class="text-6xl md:text-7xl lg:text-8xl font-black text-[#fcee0a] uppercase tracking-tight" style="font-family: Arial Black, sans-serif; letter-spacing: -3px; text-shadow: 4px 4px 0 rgba(0,0,0,0.3);">
                        CREW
                    </h2>
                </div>
                
                <!-- Character Grid - Horizontal Row like cyberpunk.net -->
                <div class="flex justify-center items-end px-4 pb-0 gap-0 overflow-x-auto">
                    <div 
                        v-for="member in team" 
                        :key="member.id" 
                        class="dossier-card relative flex-shrink-0 cursor-pointer group"
                        @click="selectedMember = selectedMember === member.id ? null : member.id"
                    >
                        <!-- Character image container -->
                        <div class="relative w-40 md:w-52 lg:w-64 h-72 md:h-96 lg:h-[500px] flex items-end justify-center transition-transform duration-300" :class="selectedMember === member.id ? 'scale-105 z-10' : 'group-hover:scale-102'">
                            <!-- Character Image -->
                            <img 
                                :src="member.image" 
                                :alt="member.name"
                                class="absolute inset-0 w-full h-full object-cover object-top transition-all duration-300"
                                :class="selectedMember === member.id ? 'brightness-110' : 'group-hover:brightness-105'"
                            />
                            
                            <!-- Gradient overlay at bottom -->
                            <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-gradient-to-t from-[#fe1038] via-[#fe1038]/50 to-transparent"></div>
                        </div>
                        
                        <!-- Yellow name label at bottom -->
                        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full z-20">
                            <div class="mx-2 py-2 px-4 text-center transition-all" :class="selectedMember === member.id ? 'bg-white' : 'bg-[#fcee0a]'">
                                <span class="font-black text-sm md:text-base uppercase tracking-wide text-black" style="font-family: Arial Black, sans-serif;">
                                    {{ member.name }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Selected member details panel -->
                <div v-if="selectedMember" class="bg-black/90 border-t-4 border-[#fcee0a] py-8 px-6">
                    <div class="max-w-4xl mx-auto text-center">
                        <div class="text-[#fcee0a] text-sm uppercase tracking-wider mb-2">/// CREW.ACTIVE</div>
                        <h3 class="text-3xl md:text-4xl font-black text-white uppercase mb-2">{{ team.find(m => m.id === selectedMember)?.name }}</h3>
                        <p class="text-cyan-400 font-mono text-lg mb-4">{{ team.find(m => m.id === selectedMember)?.role }}</p>
                        <p class="text-gray-400 text-lg max-w-2xl mx-auto">{{ team.find(m => m.id === selectedMember)?.bio }}</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- What We Offer Section -->
        <section class="relative py-20 overflow-hidden bg-gradient-to-b from-black to-gray-900">
            <div class="max-w-7xl mx-auto px-8 lg:px-16 relative z-10">
                <div class="text-center mb-12">
                    <div class="text-[#fcee0a] text-sm font-mono mb-4">/// SERVICES.MODULE</div>
                    <h2 class="text-4xl md:text-5xl font-black text-white uppercase mb-4" style="font-family: Arial Black, sans-serif;">
                        WHAT WE <span class="text-[#fcee0a]">OFFER</span>
                    </h2>
                    <p class="text-gray-400 text-lg max-w-2xl mx-auto">
                        From basic chrome to military-grade implants, we've got everything you need to become legend.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Service 1 -->
                    <div class="group relative p-6 bg-black border border-gray-800 hover:border-[#fcee0a] transition-all duration-300">
                        <div class="absolute top-0 left-0 w-3 h-3 border-l-2 border-t-2 border-[#fcee0a] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-0 right-0 w-3 h-3 border-r-2 border-b-2 border-[#fcee0a] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        
                        <div class="w-12 h-12 bg-[#fcee0a] mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white uppercase mb-2">OPTICS</h3>
                        <p class="text-gray-500 text-sm">Kiroshi-grade optical implants with zoom, threat detection, and low-light vision.</p>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="group relative p-6 bg-black border border-gray-800 hover:border-cyan-400 transition-all duration-300">
                        <div class="absolute top-0 left-0 w-3 h-3 border-l-2 border-t-2 border-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-0 right-0 w-3 h-3 border-r-2 border-b-2 border-cyan-400 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        
                        <div class="w-12 h-12 bg-cyan-400 mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white uppercase mb-2">NEURAL</h3>
                        <p class="text-gray-500 text-sm">Interface links, combat chips, and reflex boosters for lightning-fast reactions.</p>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="group relative p-6 bg-black border border-gray-800 hover:border-[#fe1038] transition-all duration-300">
                        <div class="absolute top-0 left-0 w-3 h-3 border-l-2 border-t-2 border-[#fe1038] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-0 right-0 w-3 h-3 border-r-2 border-b-2 border-[#fe1038] opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        
                        <div class="w-12 h-12 bg-[#fe1038] mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white uppercase mb-2">LIMBS</h3>
                        <p class="text-gray-500 text-sm">Gorilla arms, mantis blades, monowire, and cybernetic limb replacements.</p>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="group relative p-6 bg-black border border-gray-800 hover:border-fuchsia-500 transition-all duration-300">
                        <div class="absolute top-0 left-0 w-3 h-3 border-l-2 border-t-2 border-fuchsia-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        <div class="absolute bottom-0 right-0 w-3 h-3 border-r-2 border-b-2 border-fuchsia-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        
                        <div class="w-12 h-12 bg-fuchsia-500 mb-4 flex items-center justify-center">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-black text-white uppercase mb-2">INTERNALS</h3>
                        <p class="text-gray-500 text-sm">Biomonitors, blood pumps, second hearts, and skeletal reinforcements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Continue Content Section -->
        <section class="relative py-20 overflow-hidden bg-black">
            <!-- Corner brackets -->
            <div class="absolute top-8 left-8 w-16 h-16 border-l-2 border-t-2 border-[#fcee0a] opacity-50"></div>
            <div class="absolute top-8 right-8 w-16 h-16 border-r-2 border-t-2 border-cyan-400 opacity-50"></div>
            
            <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                <!-- Values Section -->
                <div id="values">
                    <div class="flex text-sm font-normal pb-2 text-cyan-400 uppercase tracking-wider">/// CODE.CONDUCT</div>
                    <div class="h-[2px] bg-[#cbcbcb]/30 mb-8"></div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div v-for="value in values" :key="value.id" class="group text-center p-6 bg-gray-900/30 border border-gray-800 hover:border-gray-600 transition-all">
                            <div :class="value.iconBg" class="w-14 h-14 flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="value.icon" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-black text-white mb-2 uppercase">{{ value.title }}</h3>
                            <p class="text-gray-500 text-sm">{{ value.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </MainLayout>
</template>

<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const selectedMember = ref(null);

const team = [
    {
        id: 1,
        name: 'MIG-HELL',
        role: 'FOUNDER & CEO',
        initials: 'MH',
        color: 'bg-gradient-to-br from-[#fcee0a] to-[#ff6b00]',
        accentColor: '#fcee0a',
        image: '/images/myers.png',
        bio: 'The legend who built this empire from the ground up. Started as a street doc, now runs Night City\'s most trusted chrome shop.'
    },
    {
        id: 2,
        name: 'BLACKWELL',
        role: 'TOP NETRUNNER',
        initials: 'VB',
        color: 'bg-gradient-to-br from-cyan-500 to-cyan-600',
        accentColor: '#00f0ff',
        image: '/images/songbird.png',
        bio: 'Legendary hacker who\'s never been traced. Handles all neural interface calibrations and ICE security.'
    },
    {
        id: 3,
        name: 'VEKTOR',
        role: 'LEAD RIPPERDOC',
        initials: 'VV',
        color: 'bg-gradient-to-br from-fuchsia-500 to-fuchsia-600',
        accentColor: '#ff00ff',
        image: '/images/reed.png',
        bio: 'Chrome specialist with zero failures on record. Former Trauma Team surgeon turned street doc.'
    },
    {
        id: 4,
        name: 'SANTOS',
        role: 'FIXER',
        initials: 'RS',
        color: 'bg-gradient-to-br from-red-500 to-red-600',
        accentColor: '#fe1038',
        image: '/images/alex.png',
        bio: 'Best connections in Night City. Need rare military chrome? Santos can get it. No questions asked.'
    },
    {
        id: 5,
        name: 'TECH',
        role: 'ENGINEER',
        initials: 'JT',
        color: 'bg-gradient-to-br from-orange-500 to-orange-600',
        accentColor: '#ff6b00',
        image: '/images/hansen.png',
        bio: 'Builds custom tech nobody else can dream of. Modifies stock cyberware into legendary gear.'
    }
];

const navTiles = [
    {
        id: 1,
        label: 'STORY',
        href: '#story',
        color: '#00f0ff',
        icon: 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4'
    },
    {
        id: 2,
        label: 'MISSION',
        href: '#mission',
        color: '#fcee0a',
        icon: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z'
    },
    {
        id: 3,
        label: 'VISION',
        href: '#vision',
        color: '#00f0ff',
        icon: 'M15 12a3 3 0 11-6 0 3 3 0 016 0z M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z'
    },
    {
        id: 4,
        label: 'CREW',
        href: '#team',
        color: '#ff00ff',
        icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z'
    },
    {
        id: 5,
        label: 'CODE',
        href: '#values',
        color: '#fe1038',
        icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'
    }
];

const values = [
    {
        id: 1,
        title: '[NO CORPO TIES]',
        description: 'We answer to the street, not megacorps. Independent and proud.',
        icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        iconBg: 'bg-gradient-to-br from-yellow-500 to-yellow-600'
    },
    {
        id: 2,
        title: '[HONOR CODE]',
        description: 'Your data is sacred. We never sell out, never compromise.',
        icon: 'M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z',
        iconBg: 'bg-gradient-to-br from-cyan-500 to-cyan-600'
    },
    {
        id: 3,
        title: '[BLEEDING EDGE]',
        description: 'Only the latest tech. If it\'s old, we don\'t touch it.',
        icon: 'M13 10V3L4 14h7v7l9-11h-7z',
        iconBg: 'bg-gradient-to-br from-fuchsia-500 to-fuchsia-600'
    }
];
</script>
