<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

defineProps({
    heroContent: Object,
    stats: Array,
});
</script>

<template>
    <Head title="Beranda" />

    <GuestLayout />
    <div class="min-h-screen bg-primary">


        <!-- Hero Section -->
        <section class="text-gray-900 body-font mx-5 sm:mx-8 md:mx-12 lg:mx-20 py-10">
            <div class="container mx-auto flex flex-col md:flex-row items-center">
                <div class="w-full md:w-3/5 md:order-2 mb-8 md:mb-0 ml-10">
                    <img class="object-cover object-center rounded w-full h-64 sm:h-80 md:h-96 lg:h-[480px]"
                        src="https://www.nusr-et.com.tr/Elements/Images/about.jpg"
                        alt="Rakryan Vocational Education and Training">
                </div>
                <div class="w-full md:w-2/5 md:order-1 flex flex-col items-center md:items-start text-center md:text-left">
                    <h1 class="title-font text-2xl sm:text-6xl mb-6 font-medium text-secondary">
                        D'MeatBoy
                    </h1>
                    <p class="mb-8 leading-relaxed text-sm sm:text-lg font-normal text-white">
                        Kami menghadirkan daging premium segar, berkualitas tinggi, langsung dari sumber terbaik untuk memenuhi kebutuhan Anda.
                    </p>
                    <div class="flex justify-center md:justify-start">
                        <PrimaryButton class="w-full">
                            Pesan Sekarang
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                            </svg>
                        </PrimaryButton>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <div class="">
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
