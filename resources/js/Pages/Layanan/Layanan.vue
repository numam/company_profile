<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
</script>

<template>
  <Head title="Layanan" />
  <GuestLayout />

  <div class="bg-primary text-gray-400  font-body">
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-20">
      <div class="flex flex-col md:flex-row items-center md:items-start">
        <!-- Text Content -->
        <div class="md:w-1/2 fade-in">
          <h1 class="text-4xl font-bold mb-10">
            <span class="text-secondary mt-6 block text-6xl">Menghadirkan Daging Premium</span>
          </h1>
          <p class="text-lg leading-relaxed">
            D'MeatBoy hadir untuk memenuhi kebutuhan daging premium Anda dengan kualitas terbaik. Kami menyediakan beragam pilihan daging sapi eksklusif seperti tomahawk, wagyu, dan banyak lagi, dipilih langsung dari sumber terpercaya. Nikmati pengalaman berbelanja yang mudah dengan pengemasan higienis dan pengiriman cepat yang menjaga kesegaran hingga ke pintu Anda. Tim layanan pelanggan kami siap membantu Anda menemukan potongan daging yang sempurna untuk setiap kreasi masakan istimewa.
          </p>
          <!-- CTA Button -->
          <button class="bg-secondary text-white font-semibold py-2 px-6 rounded-full mt-6 hover:bg-primary focus:outline-none focus:ring-2 focus:ring-secondary">
            Pesan Sekarang
          </button>
        </div>

        <!-- Image Section with Margin -->
        <div class="md:w-1/2 mt-20 md:mt-9 md:ml-8">
          <img
            src="https://images.unsplash.com/photo-1695683948430-35b6220f4e2e?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Daging Premium"
            class="rounded-lg shadow-lg"
          />
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section class="bg-primary text-gray-100 py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold mb-10 text-center text-secondary">
          Layanan yang Kami Tawarkan
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Layanan 1 -->
          <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 fade-in">
            <div class="flex items-center mb-4">
              <div class="bg-secondary p-3 rounded-full">
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <h3 class="ml-4 text-xl font-semibold">Pengiriman Cepat dan Aman</h3>
            </div>
            <p class="text-gray-300">
              Kami memastikan pengiriman daging premium dengan kemasan berkualitas untuk menjaga kesegaran hingga sampai di tangan Anda.
            </p>
          </div>
          
          <!-- Layanan 2 -->
          <div class="bg-gray-900 p-6 rounded-lg shadow-md hover:scale-105 transition-transform duration-300 fade-in">
            <div class="flex items-center mb-4">
              <div class="bg-secondary p-3 rounded-full">
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2l4-4m-6 6a9 9 0 110-18 9 9 0 010 18z" />
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
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                <svg class="h-8 w-8 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V5a2 2 0 00-2-2H6a2 2 0 00-2 2v8m16 0h-8m4 4h4m-4 4h4" />
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
    <section class="bg-primary-100 py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold mb-10 text-center text-secondary">Testimoni Pelanggan</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p>"Daging yang saya beli benar-benar berkualitas! Rasanya luar biasa, dan pengirimannya sangat cepat. Saya sangat puas!"</p>
        <p class="mt-4 font-semibold">- Rafi Arkana Ngalam</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p>"Pelayanan yang sangat baik! Saya bisa memilih potongan daging yang saya inginkan, dan dagingnya sangat segar. Pengiriman juga sangat cepat aowkaowk!"</p>
        <p class="mt-4 font-semibold">- Drest Ganteng</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md">
        <p>"Sangat puas dengan kualitas dagingnya! Layanan pelanggan sangat responsif dan siap membantu. Dagingnya enak dan matang dengan sempurna!"</p>
        <p class="mt-4 font-semibold">- Ucup Santoso</p>
      </div>
    </div>
  </div>
</section>

  </div>

  <!-- Footer -->
  <footer class="bg-primary text-gray-100 py-8">
    <div class="container mx-auto text-center">
      <p>&copy; 2025 D'MeatBoy | Semua Hak Dilindungi</p>
      <div class="mt-4">
        <a href="#" class="text-gray-400 hover:text-secondary mx-4">Instagram</a>
        <a href="#" class="text-gray-400 hover:text-secondary mx-4">Facebook</a>
        <a href="#" class="text-gray-400 hover:text-secondary mx-4">Twitter</a>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.fade-in {
  opacity: 0;
  animation: fadeIn 1s ease-in-out forwards;
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
</style>
