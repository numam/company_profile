<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Footer from '@/Components/Footer.vue';
</script>

<template>

    <Head title="Tentang Kami" />
    <GuestLayout>
        <section class="bg-primary text-gray-100 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-5xl font-extrabold mb-6 text-center text-secondary">Tentang Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <p class="text-lg leading-relaxed mb-6">
                            D'MeatBoy didirikan untuk menyediakan daging sapi premium berkualitas langsung ke meja makan
                            Anda. Kami bekerja sama dengan peternakan yang menerapkan standar etika tinggi, memastikan
                            setiap potongan daging seperti tomahawk, ribeye, dan wagyu memenuhi kualitas terbaik.
                        </p>
                        <p class="text-lg leading-relaxed mb-6">
                            Kami berkomitmen memberikan layanan menyeluruh, mulai dari konsultasi pemotongan hingga
                            pengiriman cepat. D'MeatBoy hadir sebagai mitra kuliner terpercaya yang menciptakan
                            pengalaman, kenangan, dan kepuasan dalam setiap hidangan.
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="/assets/logo.png" alt="Tentang Kami - D'MeatBoy" class="rounded-lg shadow-lg" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Us Section -->
        <section class="relative py-16 bg-cover w-full bg-center"
            style="background-image: url('https://mir-s3-cdn-cf.behance.net/project_modules/source/63c36c78306267.5ca7cc9650755.jpg');">
            <div class="absolute inset-0 bg-primary opacity-80"></div>
            <div class="relative max-w-7xl mx-auto px-6 lg:px-8 text-gray-100">
                <h2 class="text-4xl font-bold mb-14 text-center text-secondary"> Why Us? </h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
                    <div class="text-center">
                        <h3 class="text-secondary text-2xl font-bold mb-2">Individual Approach</h3>
                        <p>Kami memahami bahwa setiap pelanggan memiliki kebutuhan yang unik, sehingga kami memberikan
                            solusi personal untuk memastikan pengalaman terbaik dalam memilih produk daging premium
                            sesuai selera.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-secondary text-2xl font-bold mb-2">Quality of Work</h3>
                        <p>Kualitas adalah prioritas utama kami. Setiap potongan daging dipilih secara cermat dan
                            diproses dengan standar higienis tertinggi untuk menjaga kesegaran dan rasa terbaik.</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-secondary text-2xl font-bold mb-2">Autonomy</h3>
                        <p>Kami memberikan kebebasan kepada pelanggan untuk memilih opsi pemotongan dan penyajian sesuai
                            kebutuhan, memastikan setiap pesanan disesuaikan dengan preferensi pribadi Anda.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Informasi Cepat -->
        <section class="bg- text-gray-100 py-20 w-full relative"
            style="background-image: url('https://i.pinimg.com/736x/91/23/47/9123478be7d55393f15e5e0ed9c19a24.jpg');">
            <div class="absolute inset-0 bg-black opacity-65"></div>
            <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center mb-12">
                    <p class="text-4xl font-bold text-secondary">Dedikasi Kami</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-12">
                    <div class="text-center">
                        <h3 class="text-lg font-bold uppercase text-secondary mb-1">Didirikan</h3>
                        <p class="text-3xl font-extrabold text-white mb-1">2025</p>
                        <p class="text-sm font-medium text-white mb-1">Sejak awal dedikasi</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold uppercase text-secondary mb-1">Lokasi</h3>
                        <p class="text-3xl font-extrabold text-white mb-1">Malang</p>
                        <p class="text-sm font-medium text-white mb-1">Jawa Timur</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold uppercase text-secondary mb-1">Produk Utama</h3>
                        <p class="text-3xl font-extrabold text-white mb-1">Wagyu</p>
                        <p class="text-sm font-medium text-white mb-1">& daging premium</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold uppercase text-secondary mb-1">Filosofi</h3>
                        <p class="text-3xl font-extrabold text-white mb-1">Kualitas</p>
                        <p class="text-sm font-medium text-white mb-1">Hasil terbaik</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold uppercase text-secondary mb-1">Pengiriman</h3>
                        <p class="text-3xl font-extrabold text-white mb-1">Cepat & Higienis</p>
                        <p class="text-sm font-medium text-white mb-1">Selalu segar</p>
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold uppercase text-secondary mb-1">Layanan</h3>
                        <p class="text-3xl font-extrabold text-white mb-1">Konsultasi</p>
                        <p class="text-sm font-medium text-white mb-1">Pemotongan khusus</p>
                    </div>
                </div>
            </div>
        </section>

    </GuestLayout>
    <Footer />
</template>
