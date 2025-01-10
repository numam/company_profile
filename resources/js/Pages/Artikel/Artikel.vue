<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

// Data artikel
const foodArticles = [
  {
    id: 1,
    image: "https://i.pinimg.com/736x/8a/d6/f7/8ad6f7b8659e7af4125075af8a475f6b.jpg",
    date: "January 16, 2025",
    title: "Resep Steak Tempe yang Sehat dan Lezat, Alternatif Sehat Pengganti Daging!",
    excerpt: "Rasakan sensasi steak tempe yang lezat",
  },
  {
    id: 2,
    image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
    date: "January 20, 2025",
    title: "Resep Sate Daging Sapi yang Empuk dan Juicy",
    excerpt: "Tips memasak sate daging sapi dengan bumbu khas yang lezat.",
  },
  {
    id: 3,
    image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
    date: "January 25, 2025",
    title: "Rahasia Membuat Rendang Daging Padang Asli",
    excerpt: "Rasakan kelezatan rendang dengan cita rasa khas Minangkabau.",
  },
  {
    id: 4,
    image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
    date: "January 30, 2025",
    title: "Daging BBQ ala Korea: Nikmati di Rumah",
    excerpt: "Cara memasak daging BBQ dengan marinasi khas Korea yang otentik.",
  },
  {
    id: 5,
    image: "https://i.pinimg.com/736x/30/bd/5d/30bd5d46b5994e520efbc7c5ce6cd131.jpg?height=300&width=400",
    date: "October 15, 2024",
    title: "Steak Premium dan Wine Eksklusif: Kombinasi Sempurna",
    excerpt: "Nikmati pengalaman steak terbaik dengan padanan wine yang tepat!",
  },
  {
    id: 6,
    image: "https://i.pinimg.com/736x/ca/53/85/ca53856f15bc8d42954d60c388e1b5c2.jpg?height=300&width=400",
    date: "November 20, 2024",
    title: "Festival BBQ Dunia: Dari Tradisional hingga Modern",
    excerpt: "Cicipi ragam BBQ dari berbagai negara di satu tempat.",
  },
];
</script>

<template>

  <Head title="Artikel" />
  <GuestLayout>
    <div class="min-h-screen bg-primary">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Hero Section -->
        <section class="mb-12 bg-primary rounded-lg p-10">
          <div class="text-center text-white">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Eksplorasi Dunia Daging<br>Inspirasi Masakan dan Cerita
              Menarik</h1>
            <p class="text-lg md:text-xl text-gray-400">Temukan berbagai tips, resep, dan cerita seputar daging untuk
              pengalaman kuliner terbaik Anda.</p>

          </div>
        </section>

        <!-- Search Bar -->
        <div class="mb-8">
          <div class="relative max-w-xl mx-auto">
            <input type="text" placeholder="Search articles..."
              class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-amber-500">
            <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
              <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12H9m0 0H5m4 0l-4-4m4 4l-4 4" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Food Section -->
        <section class="mb-12">
          <h2 class="text-3xl font-bold mb-6 text-white">Food</h2>
          <div class="grid md:grid-cols-3 gap-6">
            <div v-for="food in foodArticles" :key="food.id"
              class="bg-gray-800 rounded-xl overflow-hidden hover:transform hover:scale-105 transition-transform duration-300">
              <div class="relative h-48">
                <img :src="food.image" :alt="food.title" class="absolute inset-0 w-full h-full object-cover">
              </div>
              <div class="p-6">
                <p class="text-secondary text-sm mb-2">{{ food.date }}</p>
                <h3 class="text-white text-xl font-bold mb-3">{{ food.title }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ food.excerpt }}</p>
                <Link :href="'/artikel/' + food.slug"
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
</template>