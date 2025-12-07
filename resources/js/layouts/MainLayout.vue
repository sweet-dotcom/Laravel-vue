<template>
    <div class="min-h-screen bg-black">
        <!-- Navigation - Official Cyberpunk.net Style -->
        <nav class="fixed top-0 left-0 right-0 z-50 px-4 sm:px-6 lg:px-10 pt-4">
            <div class="flex items-start justify-between">
                <!-- Logo -->
                <Link href="/" class="block relative z-10 flicker-subtle" style="width: 320px; max-width: 320px;">
                    <img 
                        src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 320 80' fill='none'%3E%3Ctext x='10' y='50' font-family='Arial Black, sans-serif' font-size='52' font-weight='900' fill='%23fcee0a' style='font-style: italic; letter-spacing: -3px;'%3EMIG-HELL%3C/text%3E%3Cpath d='M10 58 L280 58' stroke='%2300f0ff' stroke-width='3'/%3E%3Ctext x='10' y='75' font-family='Arial, sans-serif' font-size='12' font-weight='400' fill='%2300f0ff' style='letter-spacing: 6px;'%3ECYBERWARE%3C/text%3E%3C/svg%3E"
                        alt="MIG-HELL Cyberware"
                        class="w-full drop-shadow-[0_2px_7px_rgba(0,0,0,0.38)]"
                    />
                </Link>

                <!-- Desktop Navigation Menu -->
                <div class="hidden lg:block relative" style="margin-top: 20px;">
                    <div class="relative" style="clip-path: polygon(16px 0, 100% 0, 100% 30px, calc(100% - 18px) 48px, calc(100% - 18px) 100%, 0 100%, 0 16px);">
                        <!-- Backdrop Blur Layer -->
                        <div class="absolute inset-0 backdrop-blur-[8px] -z-10"></div>
                        
                        <!-- Menu Container -->
                        <ul class="flex items-center h-12 bg-black/60 border-2 border-[#fcee0a] pl-6 m-0 p-0 list-none relative shadow-[0_0_20px_rgba(0,240,255,0.3)]">
                            <!-- Yellow corner triangle -->
                            <div class="absolute top-0 left-0 w-0 h-0 border-t-[18px] border-t-[#fcee0a] border-r-[18px] border-r-transparent"></div>
                            <!-- Cyan accent line -->
                            <div class="absolute bottom-0 left-0 right-0 h-[2px] bg-gradient-to-r from-cyan-400 via-transparent to-cyan-400 opacity-50"></div>
                            
                            <li class="h-full flex items-center px-5 text-white uppercase text-lg font-normal hover:bg-gradient-to-r hover:from-[#fcee0a] hover:to-cyan-400 hover:text-black transition-all cursor-pointer">
                                <Link href="/" class="text-inherit no-underline whitespace-nowrap">NIGHT CITY</Link>
                            </li>
                            <li class="h-full flex items-center px-5 text-white uppercase text-lg font-normal hover:bg-gradient-to-r hover:from-cyan-400 hover:to-[#fcee0a] hover:text-black transition-all cursor-pointer">
                                <Link href="/products" class="text-inherit no-underline whitespace-nowrap">CYBERWARE</Link>
                            </li>
                            <li class="h-full flex items-center px-5 text-white uppercase text-lg font-normal hover:bg-gradient-to-r hover:from-[#fcee0a] hover:to-cyan-400 hover:text-black transition-all cursor-pointer">
                                <Link href="/about" class="text-inherit no-underline whitespace-nowrap">THE DOC</Link>
                            </li>
                            <li class="h-full flex items-center px-5 text-white uppercase text-lg font-normal hover:bg-gradient-to-r hover:from-cyan-400 hover:to-[#fcee0a] hover:text-black transition-all cursor-pointer">
                                <Link href="/contact" class="text-inherit no-underline whitespace-nowrap">JACK IN</Link>
                            </li>
                            <li class="h-full flex items-center justify-center px-6 bg-gradient-to-r from-[#fcee0a] to-cyan-400 text-black uppercase text-[22px] font-bold min-w-[168px] text-center hover:from-cyan-400 hover:to-[#fcee0a] transition-all">
                                <Link href="/contact" class="text-inherit no-underline w-full">GET CHROMED</Link>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile menu toggle -->
                <div class="lg:hidden cursor-pointer relative z-10" @click="mobileMenuOpen = !mobileMenuOpen" style="width: 24px; height: 16px; margin-top: 40px;">
                    <div :class="mobileMenuOpen ? 'rotate-45 translate-x-[6px] translate-y-[3px] bg-[#00f0ff]' : 'bg-[#fcee0a]'" class="h-0.5 w-full mb-1 transition-all duration-300"></div>
                    <div :class="mobileMenuOpen ? 'opacity-0 invisible bg-[#00f0ff]' : 'bg-[#fcee0a]'" class="h-0.5 w-full mb-1 transition-all duration-300"></div>
                    <div :class="mobileMenuOpen ? '-rotate-45 translate-x-[6px] -translate-y-[3px] bg-[#00f0ff]' : 'bg-[#fcee0a]'" class="h-0.5 w-full transition-all duration-300"></div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div 
                v-show="mobileMenuOpen" 
                class="lg:hidden fixed inset-0 bg-black/95 backdrop-blur-xl z-40 pt-24"
            >
                <div class="px-6 space-y-2">
                    <Link 
                        href="/" 
                        @click="mobileMenuOpen = false"
                        class="block px-6 py-4 text-white uppercase text-lg font-bold hover:bg-[#fcee0a] hover:text-black transition-all"
                    >
                        NIGHT CITY
                    </Link>
                    <Link 
                        href="/products" 
                        @click="mobileMenuOpen = false"
                        class="block px-6 py-4 text-white uppercase text-lg font-bold hover:bg-[#fcee0a] hover:text-black transition-all"
                    >
                        CYBERWARE
                    </Link>
                    <Link 
                        href="/about" 
                        @click="mobileMenuOpen = false"
                        class="block px-6 py-4 text-white uppercase text-lg font-bold hover:bg-[#fcee0a] hover:text-black transition-all"
                    >
                        THE DOC
                    </Link>
                    <Link 
                        href="/contact" 
                        @click="mobileMenuOpen = false"
                        class="block px-6 py-4 text-white uppercase text-lg font-bold hover:bg-[#fcee0a] hover:text-black transition-all"
                    >
                        JACK IN
                    </Link>
                    <div class="pt-6">
                        <Link 
                            href="/contact"
                            @click="mobileMenuOpen = false"
                            class="block w-full bg-[#fcee0a] text-black text-center px-8 py-4 font-black text-lg uppercase tracking-wider hover:bg-[#ffff00] transition-all"
                        >
                            GET CHROMED
                        </Link>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <footer class="relative bg-black border-t-2 border-[#fcee0a]/30 text-white mt-0 overflow-hidden">
            <!-- Cyan top accent -->
            <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-cyan-400/50 to-transparent"></div>
            <!-- Dot pattern at top -->
            <div class="absolute top-0 left-0 right-0 h-12 opacity-30" style="background-image: radial-gradient(circle, #fcee0a 1px, transparent 1px); background-size: 12px 12px;"></div>
            
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-2xl font-black mb-4 font-mono">
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#fcee0a] to-cyan-400">MIG-HELL</span>
                        </h3>
                        <p class="text-cyan-400/60 text-sm">
                            Premium cyberware. Night City's finest chrome since 2065.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-black mb-4 text-[#fcee0a] font-mono uppercase tracking-wider">// Navigate</h3>
                        <ul class="space-y-2">
                            <li><Link href="/" class="text-gray-400 hover:text-cyan-400 transition font-mono text-sm">&gt; Chrome</Link></li>
                            <li><Link href="/products" class="text-gray-400 hover:text-cyan-400 transition font-mono text-sm">&gt; Mods</Link></li>
                            <li><Link href="/about" class="text-gray-400 hover:text-cyan-400 transition font-mono text-sm">&gt; Clinic</Link></li>
                            <li><Link href="/contact" class="text-gray-400 hover:text-cyan-400 transition font-mono text-sm">&gt; Connect</Link></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-black mb-4 text-[#fcee0a] font-mono uppercase tracking-wider">// Services</h3>
                        <ul class="text-gray-400 space-y-2 font-mono text-sm">
                            <li class="hover:text-cyan-400 transition cursor-pointer">&gt; Cyberware Install</li>
                            <li class="hover:text-cyan-400 transition cursor-pointer">&gt; Chrome Repairs</li>
                            <li class="hover:text-cyan-400 transition cursor-pointer">&gt; Neural Tuning</li>
                            <li class="hover:text-cyan-400 transition cursor-pointer">&gt; Emergency Service</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-cyan-400/20 text-center">
                    <p class="text-[#fcee0a] font-black text-lg mb-2">GET CHROME OR GET FLATLINED™</p>
                    <p class="text-gray-600 text-sm font-mono">&copy; 2077 MIG-HELL // NIGHT CITY</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

const mobileMenuOpen = ref(false);
const page = usePage();

const isActive = (path) => {
    return page.url === path;
};
</script>
