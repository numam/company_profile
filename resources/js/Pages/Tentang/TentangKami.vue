<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

<template>
  <Head title="Tentang Kami" />
  <GuestLayout>
    <section class="bg-primary text-gray-100 py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold mb-16 text-center text-secondary">Tentang Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
          <div>
            <p class="text-lg leading-relaxed mb-6">
              D'MeatBoy didirikan untuk menyediakan daging sapi premium berkualitas langsung ke meja makan Anda. Kami bekerja sama dengan peternakan yang menerapkan standar etika tinggi, memastikan setiap potongan daging seperti tomahawk, ribeye, dan wagyu memenuhi kualitas terbaik.
            </p>
            <p class="text-lg leading-relaxed mb-6">
              Kami berkomitmen memberikan layanan menyeluruh, mulai dari konsultasi pemotongan hingga pengiriman cepat. D'MeatBoy hadir sebagai mitra kuliner terpercaya yang menciptakan pengalaman, kenangan, dan kepuasan dalam setiap hidangan.
            </p>
          </div>
          <div class="flex justify-center">
            <img 
              src="/assets/logo.png" 
              alt="Tentang Kami - D'MeatBoy" 
              class="rounded-lg shadow-lg"
            />
          </div>
        </div>
      </div>
    </section>
   <!-- Informasi Cepat -->
<section class="bg-secondary text-gray-100 py-16">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-12">

      <p class="text-lg font-bold text-black">
        Ringkasan dari komitmen dan layanan terbaik kami
      </p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-12">
      <div class="text-center">
        <h3 class="text-lg font-bold uppercase text-black mb-1">Didirikan</h3>
        <p class="text-3xl font-extrabold text-white">2025</p>
        <p class="text-sm font-medium text-gray-900">Sejak awal dedikasi</p>
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold uppercase text-black mb-1">Lokasi</h3>
        <p class="text-3xl font-extrabold text-white">Malang</p>
        <p class="text-sm font-medium text-gray-900">Jawa Timur</p>
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold uppercase text-black mb-1">Produk Utama</h3>
        <p class="text-3xl font-extrabold text-white">Wagyu</p>
        <p class="text-sm font-medium text-gray-900">& daging premium</p>
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold uppercase text-black mb-1">Filosofi</h3>
        <p class="text-3xl font-extrabold text-white">Kualitas</p>
        <p class="text-sm font-medium text-gray-900">Hasil terbaik</p>
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold uppercase text-black mb-1">Pengiriman</h3>
        <p class="text-3xl font-extrabold text-white">Cepat & Higienis</p>
        <p class="text-sm font-medium text-gray-900">Selalu segar</p>
      </div>
      <div class="text-center">
        <h3 class="text-lg font-bold uppercase text-black mb-1">Layanan</h3>
        <p class="text-3xl font-extrabold text-white">Konsultasi</p>
        <p class="text-sm font-medium text-gray-900">Pemotongan khusus</p>
      </div>
    </div>
  </div>
</section>
  </GuestLayout>
</template>