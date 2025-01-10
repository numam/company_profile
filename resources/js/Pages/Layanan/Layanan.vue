<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

<template>

  <Head title="Layanan" />
  <GuestLayout />
  <div class="bg-primary text-gray-400 font-body">
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 md:pt-20">
      <div class="flex flex-col-reverse md:flex-row items-center md:items-start">
        <!-- Text Content -->
        <div class="w-full md:w-1/2 mt-8 md:mt-0 fade-in">
          <h1 class="text-3xl md:text-4xl font-bold mb-6 md:mb-10">
            <span class="text-secondary block text-4xl sm:text-6xl">
              Menghadirkan Daging Premium
            </span>
          </h1>
          <p class="text-base md:text-lg leading-relaxed">
            D'MeatBoy hadir untuk memenuhi kebutuhan daging premium Anda dengan kualitas terbaik. Kami menyediakan
            beragam pilihan daging sapi eksklusif seperti tomahawk, wagyu, dan banyak lagi, dipilih langsung dari sumber
            terpercaya. Nikmati pengalaman berbelanja yang mudah dengan pengemasan higienis dan pengiriman cepat yang
            menjaga kesegaran hingga ke pintu Anda.
          </p>
          <div class="flex justify-center md:justify-start">
            <PrimaryButton class="mt-5  ">
              Pesan Sekarang
              <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" data-slot="icon" fill="none" stroke-width="1.5"
                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
              </svg>
            </PrimaryButton>
          </div>

        </div>
        <!-- Image Section -->
        <div class="w-full md:w-1/2">
          <img
            src="https://images.unsplash.com/photo-1695683948430-35b6220f4e2e?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Daging Premium" class="rounded-lg shadow-lg w-full h-auto" />
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="bg-primary text-gray-100 py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-10 text-center text-secondary">
          Layanan yang Kami Tawarkan
        </h2>
        <div class="grid grid-cols-1 gap-8">
          <!-- Layanan 1 -->
          <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 fade-in">
            <div class="flex items-center mb-4">
              <div class="bg-secondary p-3 rounded-full">
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="black">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <h3 class="ml-4 text-xl font-semibold">Pengiriman Cepat dan Aman</h3>
            </div>
            <p class="text-gray-300">
              Kami memastikan pengiriman daging premium dengan kemasan berkualitas untuk menjaga kesegaran hingga sampai
              di tangan Anda.
            </p>
          </div>

          <!-- Layanan 2 -->
          <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 fade-in">
            <div class="flex items-center mb-4">
              <div class="bg-secondary p-3 rounded-full">
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="black">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 10h7l5-5 6 6-5 5h-7l-6 6z" />
                </svg>
              </div>
              <h3 class="ml-4 text-xl font-semibold">Konsultasi Pemotongan Daging</h3>
            </div>
            <p class="text-gray-300">
              Layanan konsultasi untuk membantu Anda memilih potongan daging terbaik sesuai kebutuhan masakan Anda.
            </p>
          </div>

          <!-- Layanan 3 -->
          <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 fade-in">
            <div class="flex items-center mb-4">
              <div class="bg-secondary p-3 rounded-full">
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="black">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
              </div>
              <h3 class="ml-4 text-xl font-semibold">Pemotongan Sesuai Pesanan</h3>
            </div>
            <p class="text-gray-300">
              Pilihan untuk memesan daging dengan ukuran dan pemotongan sesuai keinginan.
            </p>
          </div>

          <!-- Layanan 4 -->
          <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 fade-in">
            <div class="flex items-center mb-4">
              <div class="bg-secondary p-3 rounded-full">
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="black">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M20 13V5a2 2 0 00-2-2H6a2 2 0 00-2 2v8m16 0h-8m4 4h4m-4 4h4" />
                </svg>
              </div>
              <h3 class="ml-4 text-xl font-semibold">Layanan Pelanggan Responsif</h3>
            </div>
            <p class="text-gray-300">
              Tim kami selalu siap menjawab pertanyaan dan memberikan solusi terbaik untuk kebutuhan Anda.
            </p>
          </div>
        </div>
      </div>
    </section>


    <!-- Testimonial Section -->
    <section class="bg-primary-100 py-12 md:py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl md:text-3xl font-bold mb-8 md:mb-10 text-center text-secondary">
          Testimoni Pelanggan
        </h2>
        <div class="grid grid-cols-1 gap-6">
          <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <p>"Daging yang saya beli benar-benar berkualitas! Rasanya luar biasa, dan pengirimannya sangat cepat."</p>
            <p class="mt-4 font-semibold">- Rafi Arkana Ngalam</p>
          </div>
          <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <p>"Pelayanan yang sangat baik! Saya bisa memilih potongan daging yang saya inginkan^_^."</p>
            <p class="mt-4 font-semibold">- Drest Ganteng</p>
          </div>
          <div class="bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <p>"Sangat puas dengan kualitas dagingnya! Layanan pelanggan sangat responsif."</p>
            <p class="mt-4 font-semibold">- Ucup Santoso</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-gray-100 py-6 md:py-8">
      <div class="container mx-auto text-center">
        <p>&copy; 2025 D'MeatBoy | Semua Hak Dilindungi</p>
        <div class="mt-4">
          <a href="#" class="text-gray-400 hover:text-secondary mx-2 sm:mx-4">Instagram</a>
          <a href="#" class="text-gray-400 hover:text-secondary mx-2 sm:mx-4">Facebook</a>
          <a href="#" class="text-gray-400 hover:text-secondary mx-2 sm:mx-4">Twitter</a>
        </div>
      </div>
    </footer>
  </div>
</template>
