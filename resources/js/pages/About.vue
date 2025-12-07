<template>
    <Head title="About Us" />
    <MainLayout>
        <!-- Header -->
        <div class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    About Us
                </h1>
                <p class="text-xl text-indigo-100">
                    Learn more about our journey, mission, and the team behind our success
                </p>
            </div>
        </div>

        <!-- Our Story -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                        Founded in 2020, we started with a simple vision: to create exceptional web applications 
                        that combine powerful backend technology with beautiful, intuitive user interfaces.
                    </p>
                    <p class="text-gray-600 mb-4 text-lg leading-relaxed">
                        Our journey began when a group of passionate developers came together with a shared belief 
                        that modern web development should be both powerful and elegant. We chose Laravel and Vue.js 
                        as our core technologies because they represent the perfect balance of developer experience 
                        and application performance.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Today, we've grown into a team of talented professionals who are committed to delivering 
                        innovative solutions that help businesses thrive in the digital age.
                    </p>
                </div>
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-8 text-white">
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Innovation First</h3>
                                <p class="text-indigo-100">We stay ahead of the curve with cutting-edge technologies</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Client-Centered</h3>
                                <p class="text-indigo-100">Your success is our success, we're partners in growth</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="bg-white bg-opacity-20 rounded-lg p-3 mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Quality Assured</h3>
                                <p class="text-indigo-100">We maintain the highest standards in everything we do</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        To empower businesses with innovative web solutions that drive growth, enhance user 
                        experiences, and deliver measurable results. We strive to be the trusted technology 
                        partner that helps our clients achieve their digital transformation goals.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        To be the leading provider of modern web solutions, recognized globally for our 
                        technical excellence, creative innovation, and unwavering commitment to client success. 
                        We envision a future where technology seamlessly enhances every business operation.
                    </p>
                </div>
            </div>

            <!-- Team Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Meet Our Team</h2>
                    <p class="text-xl text-gray-600">The talented people behind our success</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div v-for="member in team" :key="member.id" class="text-center">
                        <div class="mb-4 relative">
                            <div :class="member.color" class="w-32 h-32 rounded-full mx-auto flex items-center justify-center text-white text-3xl font-bold">
                                {{ member.initials }}
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-1">{{ member.name }}</h3>
                        <p class="text-indigo-600 mb-2">{{ member.role }}</p>
                        <p class="text-gray-600 text-sm">{{ member.bio }}</p>
                    </div>
                </div>
            </div>

            <!-- Values -->
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Core Values</h2>
                    <p class="text-xl text-gray-600">The principles that guide everything we do</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div v-for="value in values" :key="value.id" class="text-center">
                        <div :class="value.iconBg" class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8" :class="value.iconColor" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="value.icon" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ value.title }}</h3>
                        <p class="text-gray-600">{{ value.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const team = [
    {
        id: 1,
        name: 'John Anderson',
        role: 'CEO & Founder',
        initials: 'JA',
        color: 'bg-gradient-to-br from-indigo-500 to-indigo-600',
        bio: 'Visionary leader with 15+ years in web development'
    },
    {
        id: 2,
        name: 'Sarah Williams',
        role: 'CTO',
        initials: 'SW',
        color: 'bg-gradient-to-br from-purple-500 to-purple-600',
        bio: 'Technology expert specializing in Laravel & Vue.js'
    },
    {
        id: 3,
        name: 'Michael Chen',
        role: 'Lead Developer',
        initials: 'MC',
        color: 'bg-gradient-to-br from-blue-500 to-blue-600',
        bio: 'Full-stack developer passionate about clean code'
    },
    {
        id: 4,
        name: 'Emily Rodriguez',
        role: 'UI/UX Designer',
        initials: 'ER',
        color: 'bg-gradient-to-br from-pink-500 to-pink-600',
        bio: 'Creative designer focused on user experience'
    }
];

const values = [
    {
        id: 1,
        title: 'Excellence',
        description: 'We pursue excellence in every line of code and every pixel of design',
        icon: 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z',
        iconBg: 'bg-yellow-100',
        iconColor: 'text-yellow-600'
    },
    {
        id: 2,
        title: 'Integrity',
        description: 'We build trust through transparency, honesty, and ethical practices',
        icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        iconBg: 'bg-green-100',
        iconColor: 'text-green-600'
    },
    {
        id: 3,
        title: 'Innovation',
        description: 'We embrace new technologies and creative solutions to complex problems',
        icon: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
        iconBg: 'bg-blue-100',
        iconColor: 'text-blue-600'
    }
];
</script>
