<template>
    <Head title="Products & Services" />
    <MainLayout>
        <!-- Header -->
        <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Products & Services
                </h1>
                <p class="text-xl text-purple-100">
                    Discover our comprehensive range of solutions tailored for your needs
                </p>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Products</h2>
                <p class="text-lg text-gray-600">Premium quality products designed with excellence</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                <div 
                    v-for="product in products" 
                    :key="product.id"
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1"
                >
                    <div :class="product.color" class="h-48 flex items-center justify-center">
                        <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="product.icon" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ product.name }}</h3>
                        <p class="text-gray-600 mb-4">{{ product.description }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-2xl font-bold text-indigo-600">{{ product.price }}</span>
                            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Our Services</h2>
                <p class="text-lg text-gray-600">Professional services to help your business grow</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div 
                    v-for="service in services" 
                    :key="service.id"
                    class="bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition"
                >
                    <div class="flex items-start">
                        <div :class="service.iconBg" class="w-12 h-12 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6" :class="service.iconColor" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="service.icon" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-2">{{ service.name }}</h3>
                            <p class="text-gray-600 mb-4">{{ service.description }}</p>
                            <ul class="space-y-2">
                                <li v-for="feature in service.features" :key="feature" class="flex items-center text-gray-700">
                                    <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    {{ feature }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gray-100 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Need a Custom Solution?
                </h2>
                <p class="text-xl text-gray-600 mb-8">
                    Contact us to discuss your specific requirements
                </p>
                <Link 
                    href="/contact" 
                    class="inline-block bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition"
                >
                    Get a Quote
                </Link>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

const products = [
    {
        id: 1,
        name: 'Web Application',
        description: 'Custom web applications built with modern technologies and best practices.',
        price: '$2,999',
        color: 'bg-gradient-to-br from-blue-500 to-blue-600',
        icon: 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9'
    },
    {
        id: 2,
        name: 'Mobile App Development',
        description: 'Native and cross-platform mobile applications for iOS and Android.',
        price: '$4,999',
        color: 'bg-gradient-to-br from-purple-500 to-purple-600',
        icon: 'M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z'
    },
    {
        id: 3,
        name: 'E-Commerce Platform',
        description: 'Complete e-commerce solutions with payment integration and inventory management.',
        price: '$5,999',
        color: 'bg-gradient-to-br from-green-500 to-green-600',
        icon: 'M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z'
    },
    {
        id: 4,
        name: 'CMS Solution',
        description: 'Content management systems for easy website administration and updates.',
        price: '$3,499',
        color: 'bg-gradient-to-br from-yellow-500 to-orange-500',
        icon: 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10'
    },
    {
        id: 5,
        name: 'API Development',
        description: 'RESTful and GraphQL APIs for seamless integration with third-party services.',
        price: '$2,499',
        color: 'bg-gradient-to-br from-red-500 to-pink-500',
        icon: 'M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'
    },
    {
        id: 6,
        name: 'Cloud Solutions',
        description: 'Scalable cloud infrastructure and deployment solutions for your applications.',
        price: '$1,999',
        color: 'bg-gradient-to-br from-indigo-500 to-purple-500',
        icon: 'M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z'
    }
];

const services = [
    {
        id: 1,
        name: 'Web Development',
        description: 'Full-stack web development services using cutting-edge technologies.',
        icon: 'M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4',
        iconBg: 'bg-blue-100',
        iconColor: 'text-blue-600',
        features: [
            'Custom Web Applications',
            'Responsive Design',
            'Performance Optimization',
            'SEO Integration'
        ]
    },
    {
        id: 2,
        name: 'Consulting Services',
        description: 'Expert consulting to help you make the right technology decisions.',
        icon: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
        iconBg: 'bg-purple-100',
        iconColor: 'text-purple-600',
        features: [
            'Technology Stack Selection',
            'Architecture Planning',
            'Best Practices Review',
            'Performance Audits'
        ]
    },
    {
        id: 3,
        name: 'Maintenance & Support',
        description: '24/7 support and maintenance to keep your applications running smoothly.',
        icon: 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
        iconBg: 'bg-green-100',
        iconColor: 'text-green-600',
        features: [
            'Bug Fixes & Updates',
            'Security Patches',
            'Performance Monitoring',
            'Technical Support'
        ]
    },
    {
        id: 4,
        name: 'DevOps Solutions',
        description: 'Streamline your deployment process with modern DevOps practices.',
        icon: 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15',
        iconBg: 'bg-orange-100',
        iconColor: 'text-orange-600',
        features: [
            'CI/CD Pipeline Setup',
            'Container Orchestration',
            'Infrastructure as Code',
            'Monitoring & Logging'
        ]
    }
];
</script>
