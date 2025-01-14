<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import Footer from '@/Components/Footer.vue';

// Ambil data dari props
defineProps({
  artikels: Object,
});

const formatDate = (date) => {
  return new Date(date).toLocaleDateString('id-ID', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  });
};

</script>

<template>
  <Head title="Artikel" />
  <GuestLayout>
    <div class="min-h-screen bg-primary w-full">
      <div class="md:pt-10 md:px-20 pt-16 px-10">
        <!-- Hero Section -->
        <section class="mb-12 bg-primary rounded-lg p-10">
          <div class="text-center text-secondary">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
              Eksplorasi Dunia Daging<br />
              Inspirasi Masakan dan Cerita Menarik
            </h1>
            <p class="text-lg md:text-xl text-white">
              Temukan berbagai tips, resep, dan cerita seputar daging untuk pengalaman kuliner terbaik Anda.
            </p>
          </div>
        </section>

        <!-- Search Bar -->
        <div class="mb-8">
          <div class="relative max-w-xl mx-auto">
            <input
              type="text"
              placeholder="Search articles..."
              class="w-full bg-primary border border-secondary rounded-lg px-4 py-2 text-white focus:outline-none focus:border-amber-500"
            />
            <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
              <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M15 12H9m0 0H5m4 0l-4-4m4 4l-4 4"
                />
              </svg>
            </button>
          </div>
        </div>

        <!-- Food Section -->
        <section class="mb-12">
          <h2 class="text-3xl font-bold mb-6 text-white">Food</h2>
          <div class="grid md:grid-cols-3 gap-6">
            <!-- Iterasi artikel -->
            <div
              v-for="food in artikels.data"
              :key="food.id"
              class="bg-third rounded-xl overflow-hidden hover:transform hover:scale-105 transition-transform duration-300"
            >
              <div class="relative h-48">
                <img :src="food.image" :alt="food.title" class="absolute inset-0 w-full h-full object-cover" />
              </div>
              <div class="p-6">
                <p class="text-secondary text-sm mb-2">{{ formatDate (food.date) }}</p>
                <h3 class="text-white text-xl font-bold mb-3">{{ food.title }}</h3>
                <p class="text-gray-400 text-sm mb-4 line-clamp-2 ">{{ food.excerpt }}</p>
                <Link
                  :href="'/artikel/' + food.slug"
                  class="hover:text-amber-400 text-secondary transition-colors inline-flex items-center"
                >
                  Read more
                  <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </Link>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </GuestLayout>
  <Footer />
</template>
