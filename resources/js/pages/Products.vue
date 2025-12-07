<template>
    <Head title="Cyberware - MIG-HELL" />
    <MainLayout>
        <!-- Header with Background Image -->
        <section class="relative pt-24 pb-16 overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="/images/phantom-keyart.png" alt="" class="w-full h-full object-cover object-top"/>
                <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/80 to-black"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-[#fcee0a]/20 via-transparent to-[#00f0ff]/10"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                <div class="text-[#fcee0a] text-sm font-mono mb-2">/// CHROME.CATALOG</div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase mb-2" style="font-family: Arial Black, sans-serif;">
                    CYBERWARE
                </h1>
                <p class="text-gray-400">Premium implants for Night City's finest</p>
            </div>
        </section>

        <!-- Featured Products - Clean Grid -->
        <section class="relative py-8 bg-gradient-to-b from-black via-gray-900/50 to-black">
            <div class="max-w-7xl mx-auto px-6 lg:px-12">
                <div class="h-px bg-gray-800 mb-8"></div>
                
                <!-- Featured Grid - Cyberware Display -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                    <!-- Featured Item 1 - SANDEVISTAN -->
                    <a href="#products" class="group col-span-2 row-span-2 relative aspect-square overflow-hidden border border-gray-800 hover:border-[#fcee0a] transition-colors bg-gray-900">
                        <img src="/images/sandevistan.png" alt="Sandevistan" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <!-- Scan lines effect -->
                        <div class="absolute inset-0 opacity-10" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(252,238,10,0.1) 2px, rgba(252,238,10,0.1) 4px);"></div>
                        <div class="absolute top-3 left-3 px-2 py-1 bg-[#fcee0a] text-black text-xs font-bold">LEGENDARY</div>
                        <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black to-transparent">
                            <div class="text-[#fcee0a] text-xs font-mono mb-1">/// REFLEX.BOOSTER</div>
                            <h3 class="text-xl font-black text-white uppercase">SANDEVISTAN MK.5</h3>
                            <p class="text-gray-400 text-sm mb-2">Time dilation system - Slow time by 90%</p>
                            <p class="text-[#fcee0a] font-bold text-lg">€45,000</p>
                        </div>
                    </a>
                    
                    <!-- Featured Item 2 - KIROSHI OPTICS -->
                    <a href="#products" class="group relative aspect-square overflow-hidden border border-gray-800 hover:border-cyan-400 transition-colors bg-gray-900">
                        <img src="/images/kiroshi-optics.webp" alt="Kiroshi Optics" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute inset-0 opacity-10" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(0,240,255,0.1) 2px, rgba(0,240,255,0.1) 4px);"></div>
                        <div class="absolute top-2 left-2 px-2 py-1 bg-purple-500 text-white text-xs font-bold">EPIC</div>
                        <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-sm font-bold text-white uppercase">KIROSHI OPTICS</h3>
                            <p class="text-cyan-400 text-sm font-bold">€28,000</p>
                        </div>
                    </a>
                    
                    <!-- Featured Item 3 - GORILLA ARMS -->
                    <a href="#products" class="group relative aspect-square overflow-hidden border border-gray-800 hover:border-red-500 transition-colors bg-gray-900">
                        <img src="/images/gorilla-arms.png" alt="Gorilla Arms" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute inset-0 opacity-10" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(254,16,56,0.1) 2px, rgba(254,16,56,0.1) 4px);"></div>
                        <div class="absolute top-2 left-2 px-2 py-1 bg-[#fcee0a] text-black text-xs font-bold">LEGENDARY</div>
                        <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-sm font-bold text-white uppercase">GORILLA ARMS</h3>
                            <p class="text-red-400 text-sm font-bold">€35,000</p>
                        </div>
                    </a>
                    
                    <!-- Featured Item 4 - MANTIS BLADES -->
                    <a href="#products" class="group relative aspect-square overflow-hidden border border-gray-800 hover:border-fuchsia-500 transition-colors bg-gray-900">
                        <img src="/images/mantis-blades.webp" alt="Mantis Blades" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute inset-0 opacity-10" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(217,70,239,0.1) 2px, rgba(217,70,239,0.1) 4px);"></div>
                        <div class="absolute top-2 left-2 px-2 py-1 bg-[#fcee0a] text-black text-xs font-bold">LEGENDARY</div>
                        <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-sm font-bold text-white uppercase">MANTIS BLADES</h3>
                            <p class="text-fuchsia-400 text-sm font-bold">€52,000</p>
                        </div>
                    </a>
                    
                    <!-- Featured Item 5 - PROJECTILE LAUNCHER -->
                    <a href="#products" class="group relative aspect-square overflow-hidden border border-gray-800 hover:border-orange-500 transition-colors bg-gray-900">
                        <img src="/images/projectile-launcher.webp" alt="Projectile Launcher" class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent"></div>
                        <div class="absolute inset-0 opacity-10" style="background: repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(251,146,60,0.1) 2px, rgba(251,146,60,0.1) 4px);"></div>
                        <div class="absolute top-2 left-2 px-2 py-1 bg-purple-500 text-white text-xs font-bold">EPIC</div>
                        <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-black to-transparent">
                            <h3 class="text-sm font-bold text-white uppercase">LAUNCHER</h3>
                            <p class="text-orange-400 text-sm font-bold">€42,000</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- All Products Grid -->
        <section id="products" class="relative py-12">
            <!-- Background with image and yellow tint -->
            <div class="absolute inset-0">
                <img src="/images/rewards.jpg" alt="" class="w-full h-full object-cover opacity-10"/>
                <div class="absolute inset-0 bg-gradient-to-br from-black via-[#fcee0a]/10 to-black"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
                <div class="text-[#fcee0a] text-sm font-mono mb-4">/// ALL.CYBERWARE</div>
                <div class="h-px bg-gray-800 mb-8"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <div 
                    v-for="product in products" 
                    :key="product.id"
                    class="group relative bg-gray-900/80 border border-gray-800 hover:border-[#fcee0a] transition-all duration-300 overflow-hidden"
                >
                    <!-- Corner cut -->
                    <div class="absolute top-0 right-0 w-8 h-8 clip-corner-sm z-10" :class="product.rarity === 'LEGENDARY' ? 'bg-[#fcee0a]' : product.rarity === 'EPIC' ? 'bg-purple-500' : 'bg-cyan-400'"></div>
                    <!-- Rarity badge -->
                    <div class="absolute top-2 left-2 px-2 py-1 text-xs font-bold border z-10" :class="product.rarity === 'LEGENDARY' ? 'bg-[#fcee0a]/20 border-[#fcee0a] text-[#fcee0a]' : product.rarity === 'EPIC' ? 'bg-purple-500/20 border-purple-500 text-purple-400' : 'bg-cyan-400/20 border-cyan-400 text-cyan-400'">
                        {{ product.rarity }}
                    </div>
                    
                    <!-- Product Image -->
                    <div class="aspect-[4/3] bg-gray-900 flex items-center justify-center relative overflow-hidden">
                        <img :src="product.image" :alt="product.name" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500"/>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-5 border-t border-gray-800">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-lg font-black text-white uppercase">{{ product.name }}</h3>
                            <span class="font-bold" :class="product.rarity === 'LEGENDARY' ? 'text-[#fcee0a]' : product.rarity === 'EPIC' ? 'text-purple-400' : 'text-cyan-400'">{{ product.price }}</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-4">{{ product.description }}</p>
                        <!-- Power bar -->
                        <div class="flex gap-1 mb-4">
                            <div class="h-1 flex-1" :class="product.rarity === 'LEGENDARY' ? 'bg-[#fcee0a]' : product.rarity === 'EPIC' ? 'bg-purple-500' : 'bg-cyan-400'"></div>
                            <div class="h-1 flex-1" :class="product.rarity === 'LEGENDARY' ? 'bg-[#fcee0a]' : product.rarity === 'EPIC' ? 'bg-purple-500' : 'bg-cyan-400'"></div>
                            <div class="h-1 flex-1" :class="product.rarity === 'LEGENDARY' || product.rarity === 'EPIC' ? (product.rarity === 'LEGENDARY' ? 'bg-[#fcee0a]' : 'bg-purple-500') : 'bg-gray-700'"></div>
                            <div class="h-1 flex-1" :class="product.rarity === 'LEGENDARY' ? 'bg-[#fcee0a]' : 'bg-gray-700'"></div>
                            <div class="h-1 flex-1 bg-gray-700"></div>
                        </div>
                        <button class="w-full bg-transparent border border-gray-700 text-white py-2 font-bold uppercase text-sm hover:bg-[#fcee0a] hover:text-black hover:border-[#fcee0a] transition-all">
                            ACQUIRE
                        </button>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="h-px bg-gray-800 my-12"></div>
            <div class="text-[#fcee0a] text-sm font-mono mb-6">/// OUR.SERVICES</div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
                <div 
                    v-for="service in services" 
                    :key="service.id"
                    class="bg-gray-900/50 border border-gray-800 hover:border-cyan-400 p-5 transition-colors"
                >
                    <h3 class="text-lg font-bold text-white mb-2 uppercase">{{ service.name }}</h3>
                    <p class="text-gray-500 text-sm mb-3">{{ service.description }}</p>
                    <ul class="space-y-1">
                        <li v-for="feature in service.features" :key="feature" class="text-cyan-400 text-sm">
                            → {{ feature }}
                        </li>
                    </ul>
                </div>
            </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-[#fcee0a] py-12">
                <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row items-center justify-between gap-6">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-black uppercase">NEED CUSTOM CHROME?</h2>
                        <p class="text-black/70">Contact our ripperdoc for personalized upgrades</p>
                    </div>
                    <Link href="/contact" class="bg-black text-[#fcee0a] px-8 py-3 font-bold uppercase hover:bg-gray-900 transition-colors">
                        GET IN TOUCH
                    </Link>
                </div>
            </div>
        </section>
    </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const products = [
    {
        id: 1,
        name: 'SANDEVISTAN MK.5',
        description: 'Legendary reflex booster. Slow time and move like lightning through combat zones.',
        price: '€45,000',
        rarity: 'LEGENDARY',
        image: '/images/sandevistan.png'
    },
    {
        id: 2,
        name: 'KIROSHI OPTICS V3',
        description: 'Military-grade cybereyes with thermal, night vision and target analysis.',
        price: '€28,000',
        rarity: 'EPIC',
        image: '/images/kiroshi-optics.webp'
    },
    {
        id: 3,
        name: 'GORILLA ARMS',
        description: 'Hydraulic-powered cyberlimbs. Rip doors off and crush enemies with raw strength.',
        price: '€35,000',
        rarity: 'LEGENDARY',
        image: '/images/gorilla-arms.png'
    },
    {
        id: 4,
        name: 'MANTIS BLADES',
        description: 'Retractable arm blades. Slice through enemies with surgical precision.',
        price: '€52,000',
        rarity: 'LEGENDARY',
        image: '/images/mantis-blades.webp'
    },
    {
        id: 5,
        name: 'PROJECTILE LAUNCHER',
        description: 'Arm-mounted explosive launcher. Rain devastation from a distance.',
        price: '€42,000',
        rarity: 'EPIC',
        image: '/images/projectile-launcher.webp'
    },
    {
        id: 6,
        name: 'KIROSHI OPTICS MK.2',
        description: 'Entry-level cybereyes with basic zoom and low-light vision.',
        price: '€18,000',
        rarity: 'RARE',
        image: '/images/kiroshi-optics.webp'
    },
    {
        id: 7,
        name: 'SANDEVISTAN HELIX',
        description: 'Budget reflex booster. Perfect for first-time chrome users.',
        price: '€38,000',
        rarity: 'LEGENDARY',
        image: '/images/sandevistan.png'
    },
    {
        id: 8,
        name: 'MANTIS BLADES X',
        description: 'Enhanced cutting power with thermal edge coating.',
        price: '€32,000',
        rarity: 'EPIC',
        image: '/images/mantis-blades.webp'
    },
    {
        id: 9,
        name: 'MISSILE LAUNCHER',
        description: 'Heavy ordnance arm mod. For when you need serious firepower.',
        price: '€25,000',
        rarity: 'EPIC',
        image: '/images/projectile-launcher.webp'
    },
    {
        id: 10,
        name: 'KIROSHI TACTICAL',
        description: 'Combat-focused optics with threat analysis and zoom.',
        price: '€15,000',
        rarity: 'RARE',
        image: '/images/kiroshi-optics.webp'
    },
    {
        id: 11,
        name: 'SANDEVISTAN LITE',
        description: 'Compact time dilation unit. Less power, more battery life.',
        price: '€22,000',
        rarity: 'RARE',
        image: '/images/sandevistan.png'
    },
    {
        id: 12,
        name: 'PROJECTILE LAUNCHER MK.2',
        description: 'Upgraded launcher with smart targeting system.',
        price: '€30,000',
        rarity: 'EPIC',
        image: '/images/projectile-launcher.webp'
    }
];

const services = [
    {
        id: 1,
        name: 'BRAINDANCE EDITING',
        description: 'Professional BD production and neural recording services.',
        icon: 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
        iconBg: 'bg-gradient-to-br from-yellow-500 to-yellow-600',
        features: [
            'Full sensory capture',
            'Memory extraction',
            'Commercial licensing',
            'Encrypted storage'
        ]
    },
    {
        id: 2,
        name: 'NETRUNNER TRAINING',
        description: 'Learn advanced breach protocols and quickhack deployment.',
        icon: 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
        iconBg: 'bg-gradient-to-br from-cyan-500 to-cyan-600',
        features: [
            'ICE breaking techniques',
            'Daemon programming',
            'Network infiltration',
            'Trace evasion'
        ]
    },
    {
        id: 3,
        name: 'CHROME MAINTENANCE',
        description: '24/7 ripperdoc support for all your cyberware needs.',
        icon: 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
        iconBg: 'bg-gradient-to-br from-fuchsia-500 to-fuchsia-600',
        features: [
            'Firmware updates',
            'Damage repair',
            'Performance tuning',
            'Emergency extraction'
        ]
    },
    {
        id: 4,
        name: 'BLACK ICE DEFENSE',
        description: 'Military-grade cybersecurity and counter-intrusion systems.',
        icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        iconBg: 'bg-gradient-to-br from-green-500 to-green-600',
        features: [
            'Real-time threat detection',
            'Neural firewall',
            'Data encryption',
            'Trace blocking'
        ]
    }
];
</script>
