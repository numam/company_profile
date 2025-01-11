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
        <section class="body-font relative min-h-screen">
            <img class="absolute inset-0 w-full h-full object-cover opacity-30"
                src="https://www.mashed.com/img/gallery/the-absolute-best-steakhouses-in-america/intro-1636573969.webp"
                alt="Background Image">
            <div class="mx-auto container flex flex-col justify-center items-center relative z-10 h-screen">
                <div class="mx-5 sm:mx-8 md:mx-12 lg:mx-20 w-full md:w-2/5 flex flex-col items-center justify-center text-center">
                    <h1 class="title-font text-2xl sm:text-6xl mb-6 font-light text-secondary uppercase">
                        D'MeatBoy
                    </h1>
                    <p class="mb-8 leading-relaxed text-sm sm:text-lg font-normal text-white">
                        Kami menghadirkan daging premium segar, berkualitas tinggi, langsung dari sumber terbaik untuk memenuhi kebutuhan Anda.
                    </p>
                    <div class="flex justify-center">
                        <PrimaryButton class="w-full">
                            Pesan Sekarang
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" data-slot="icon" fill="none" stroke-width="1.5"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                            </svg>
                        </PrimaryButton>
                    </div>
                </div>
            </div>
        </section>



        <!-- About us -->
        <section class="md:pt-24 md:px-20 pt-16 px-10">
            <div class="mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">Daging Premium Untuk Kamu Yang Spesial!</p>
                    <p class="mt-6 text-base text-white">
                        Kami adalah penyedia daging premium yang berkomitmen untuk memberikan kualitas terbaik. Dengan proses pemilihan yang ketat dan standar kebersihan tinggi, kami memastikan Anda mendapatkan daging segar, sehat, dan penuh rasa.
                    </p>
                    <p class="mt-6">
                        <Link :href="route('tentang')" class="text-sm/6 font-semibold text-secondary underline">
                            Pelajari Lebih Lanjut
                            <span aria-hidden="true">→</span>
                        </Link>
                    </p>
                </div>
                <div class="mx-auto mt-10 ">
                    <div class="flex flex-wrap md:-m-2 -m-1">
                        <div class="flex flex-wrap w-1/2">
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://i.pinimg.com/736x/fe/32/a5/fe32a5f80f16a6d5155ae4ce5b83eed7.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://i.pinimg.com/736x/1b/a3/18/1ba318530d807a244b5cbdf0740179a7.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-full">
                                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://img.freepik.com/free-photo/brutal-butcher-with-tattooed-hands-offers-piece-great-raw-meat-steak-camera-other-steaks-white-craft-paper-vintage-old-wooden-grunge-table-unrecognizable_346278-1522.jpg?t=st=1736599811~exp=1736603411~hmac=6c10bd31c8d0b981073418f1bb66992f62c57f92f67246d3d7f914470a812b0e&w=900">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/2">
                            <div class="md:p-2 p-1 w-full">
                                <img alt="gallery" class="w-full h-full object-cover object-center block" src="https://i.pinimg.com/736x/3e/12/24/3e12241ac103ade220b3c3ed9f3bbcaa.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://img.freepik.com/free-photo/high-angle-meat-slate-with-herbs_23-2148610986.jpg?t=st=1736599742~exp=1736603342~hmac=2e6ecbc8f7fadc6f779c978672929076839dd103467e730bb8183915b7ce1fcd&w=996">
                            </div>
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://img.freepik.com/free-photo/beef-chunks-with-ingredients-served-table_1220-5164.jpg?t=st=1736599710~exp=1736603310~hmac=8b7632840e1d7d3ba5377eba1cd5d62fd2ad57e2496d62c88ba5fc0a3eb08e38&w=996">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Produk -->
        <section class="md:py-24 md:px-20 pt-16 px-10">
            <div class="mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">
                        Pilihan Produk Premium Kami
                    </p>
                    <p class="mt-6 text-base text-white">
                        Nikmati beragam pilihan daging premium yang dipilih secara khusus untuk memenuhi kebutuhan dan selera Anda.
                    </p>
                    <p class="mt-6">
                        <Link :href="route('produk')" class="text-sm/6 font-semibold text-secondary underline">
                            Semua Produk
                            <span aria-hidden="true">→</span>
                        </Link>
                    </p>
                </div>
                <div class="mx-auto mt-10 ">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="bg-[#414141] shadow transform transition duration-500 rounded-2xl">
                            <Link :href="route('produk')">
                                <img
                                    src="https://i.pinimg.com/736x/1b/a3/18/1ba318530d807a244b5cbdf0740179a7.jpg"
                                    class="transition-transform duration-300 w-full h-60 object-cover rounded-t-2xl"
                                />
                                <div class="p-5">
                                    <h3 class="font-bold text-lg text-white lg:text-xl animate-fade-in">
                                        Tomahawk Steak
                                    </h3>
                                    <p class="text-secondary animate-fade-in">
                                        Rp.12.000.000
                                    </p>
                                    <p class="text-gray-400 text-sm mt-2 line-clamp-2 animate-fade-in">
                                        Daging premium adalah jenis daging berkualitas tinggi yang dipilih secara khusus berdasarkan tekstur, rasa, dan tingkat kelembutannya. Biasanya berasal dari hewan yang diberi pakan terbaik dan diproses dengan standar tinggi untuk memastikan kesegaran dan cita rasa optimal. Cocok untuk hidangan istimewa seperti steak, BBQ, atau menu gourmet lainnya.
                                    </p>
                                </div>
                            </Link>
                        </div>
                        <div class="bg-[#414141] shadow transform transition duration-500 rounded-2xl">
                            <Link :href="route('produk')">
                                <img
                                    src="https://i.pinimg.com/736x/1b/a3/18/1ba318530d807a244b5cbdf0740179a7.jpg"
                                    class="transition-transform duration-300 w-full h-60 object-cover rounded-t-2xl"
                                />
                                <div class="p-5">
                                    <h3 class="font-bold text-lg text-white lg:text-xl animate-fade-in">
                                        Tomahawk Steak
                                    </h3>
                                    <p class="text-secondary animate-fade-in">
                                        Rp.12.000.000
                                    </p>
                                    <p class="text-gray-400 text-sm mt-2 line-clamp-2 animate-fade-in">
                                        Daging premium adalah jenis daging berkualitas tinggi yang dipilih secara khusus berdasarkan tekstur, rasa, dan tingkat kelembutannya. Biasanya berasal dari hewan yang diberi pakan terbaik dan diproses dengan standar tinggi untuk memastikan kesegaran dan cita rasa optimal. Cocok untuk hidangan istimewa seperti steak, BBQ, atau menu gourmet lainnya.
                                    </p>
                                </div>
                            </Link>
                        </div>
                        <div class="bg-[#414141] shadow transform transition duration-500 rounded-2xl">
                            <Link :href="route('produk')">
                                <img
                                    src="https://i.pinimg.com/736x/1b/a3/18/1ba318530d807a244b5cbdf0740179a7.jpg"
                                    class="transition-transform duration-300 w-full h-60 object-cover rounded-t-2xl"
                                />
                                <div class="p-5">
                                    <h3 class="font-bold text-lg text-white lg:text-xl animate-fade-in">
                                        Tomahawk Steak
                                    </h3>
                                    <p class="text-secondary animate-fade-in">
                                        Rp.12.000.000
                                    </p>
                                    <p class="text-gray-400 text-sm mt-2 line-clamp-2 animate-fade-in">
                                        Daging premium adalah jenis daging berkualitas tinggi yang dipilih secara khusus berdasarkan tekstur, rasa, dan tingkat kelembutannya. Biasanya berasal dari hewan yang diberi pakan terbaik dan diproses dengan standar tinggi untuk memastikan kesegaran dan cita rasa optimal. Cocok untuk hidangan istimewa seperti steak, BBQ, atau menu gourmet lainnya.
                                    </p>
                                </div>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
</template>
