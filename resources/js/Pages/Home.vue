<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineProps({
    heroContent: Object,
    stats: Array,
});
</script>

<template>
    <Head title="Beranda" />

    <GuestLayout />
    <div class="min-h-screen bg-white">


        <!-- Hero Section -->
        <div class="relative bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto">
                <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                        <div class="sm:text-center lg:text-left">
                            <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                                <span class="block">{{ heroContent.heading }}</span>
                            </h1>
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                {{ heroContent.description }}
                            </p>
                            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                <div class="rounded-md shadow">
                                    <Link :href="route('contact')"
                                        class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                        Contact Us
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="bg-gray-50 pt-12 sm:pt-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                        Trusted by businesses worldwide
                    </h2>
                </div>
            </div>
            <div class="mt-10 pb-12 bg-white sm:pb-16">
                <div class="relative">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-4xl mx-auto">
                            <dl class="rounded-lg bg-white shadow-lg sm:grid sm:grid-cols-4">
                                <div v-for="(stat, index) in stats" :key="index"
                                    class="flex flex-col border-b border-gray-100 p-6 text-center sm:border-0 sm:border-r">
                                    <dt class="order-2 mt-2 text-lg leading-6 font-medium text-gray-500">
                                        {{ stat.label }}
                                    </dt>
                                    <dd class="order-1 text-5xl font-extrabold text-indigo-600">
                                        {{ stat.value }}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
