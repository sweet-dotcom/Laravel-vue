<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <Link href="/" class="text-2xl font-bold text-indigo-600">
                                Laravel Vue
                            </Link>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <Link 
                                href="/" 
                                :class="isActive('/') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                                class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            >
                                Home
                            </Link>
                            <Link 
                                href="/products" 
                                :class="isActive('/products') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                                class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            >
                                Products & Services
                            </Link>
                            <Link 
                                href="/about" 
                                :class="isActive('/about') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                                class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            >
                                About Us
                            </Link>
                            <Link 
                                href="/contact" 
                                :class="isActive('/contact') ? 'border-indigo-500 text-gray-900' : 'border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700'"
                                class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            >
                                Contact
                            </Link>
                        </div>
                    </div>
                    <!-- Mobile menu button -->
                    <div class="flex items-center sm:hidden">
                        <button 
                            @click="mobileMenuOpen = !mobileMenuOpen" 
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        >
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path v-if="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu -->
            <div v-show="mobileMenuOpen" class="sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <Link href="/" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium" :class="isActive('/') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800'">
                        Home
                    </Link>
                    <Link href="/products" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium" :class="isActive('/products') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800'">
                        Products & Services
                    </Link>
                    <Link href="/about" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium" :class="isActive('/about') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800'">
                        About Us
                    </Link>
                    <Link href="/contact" class="block pl-3 pr-4 py-2 border-l-4 text-base font-medium" :class="isActive('/contact') ? 'bg-indigo-50 border-indigo-500 text-indigo-700' : 'border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800'">
                        Contact
                    </Link>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
            <slot />
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white mt-12">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Laravel Vue Website</h3>
                        <p class="text-gray-400">
                            A modern web application built with Laravel and Vue.js using Inertia.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><Link href="/" class="text-gray-400 hover:text-white">Home</Link></li>
                            <li><Link href="/products" class="text-gray-400 hover:text-white">Products & Services</Link></li>
                            <li><Link href="/about" class="text-gray-400 hover:text-white">About Us</Link></li>
                            <li><Link href="/contact" class="text-gray-400 hover:text-white">Contact</Link></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                        <ul class="text-gray-400 space-y-2">
                            <li>Email: info@laravelvue.com</li>
                            <li>Phone: (123) 456-7890</li>
                            <li>Address: 123 Laravel St, Vue City</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                    <p>&copy; {{ new Date().getFullYear() }} Laravel Vue Website. All rights reserved.</p>
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
