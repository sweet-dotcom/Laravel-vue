<template>
    <Head title="Home" />
    <MainLayout>
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Welcome to Laravel Vue
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 text-indigo-100">
                        Building modern web applications with the power of Laravel and Vue.js
                    </p>
                    <div class="flex justify-center space-x-4">
                        <Link 
                            href="/products" 
                            class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition"
                        >
                            Explore Products
                        </Link>
                        <Link 
                            href="/contact" 
                            class="bg-indigo-700 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-800 transition"
                        >
                            Get in Touch
                        </Link>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Why Choose Us?</h2>
                <p class="text-xl text-gray-600">Powerful features for modern web development</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Fast Performance</h3>
                    <p class="text-gray-600">
                        Lightning-fast load times with optimized Vue components and Laravel backend.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Secure & Reliable</h3>
                    <p class="text-gray-600">
                        Built-in security features and robust authentication with Laravel Sanctum.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Modern Design</h3>
                    <p class="text-gray-600">
                        Beautiful, responsive UI built with Tailwind CSS and Vue components.
                    </p>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-indigo-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold mb-2">1000+</div>
                        <div class="text-indigo-200">Happy Clients</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">50+</div>
                        <div class="text-indigo-200">Projects Completed</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">24/7</div>
                        <div class="text-indigo-200">Customer Support</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">99.9%</div>
                        <div class="text-indigo-200">Uptime Guarantee</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl p-12 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Ready to Get Started?</h2>
                <p class="text-xl mb-8 text-indigo-100">
                    Join thousands of satisfied customers today
                </p>
                <Link 
                    href="/contact" 
                    class="inline-block bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition"
                >
                    Contact Us Now
                </Link>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';
</script>
