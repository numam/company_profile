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
    excerpt: "Steak tempe adalah inovasi kuliner yang menawarkan alternatif sehat bagi pecinta steak daging. Dengan tempe sebagai bahan utama, hidangan ini tidak hanya kaya protein nabati, tetapi juga rendah lemak dan ramah lingkungan.",
  },
  {
    id: 2,
    image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
    date: "January 15, 2025",
    title: "Resep dan Cara Memasak Lobster Steak",
    excerpt: "Cita rasa mewah di rumah!",
  },
  {
    id: 3,
    image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
    date: "January 15, 2025",
    title: "Resep dan Cara Memasak Lobster Steak",
    excerpt: "Cita rasa mewah di rumah!",
  },
  {
    id: 4,
    image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
    date: "January 15, 2025",
    title: "Resep dan Cara Memasak Lobster Steak",
    excerpt: "Cita rasa mewah di rumah!",
  },
];

const peopleArticles = [
  {
    id: 1,
    image: "https://i.pinimg.com/736x/b0/52/ff/b052ffb7a791361a4b055292ab7f0682.jpg",
    date: "December 25, 2024",
    title: "Kapan Waktu Terbaik Membeli Daging Segar?",
    excerpt: "Kesegaran daging adalah faktor utama yang menentukan kualitas hidangan Anda.",
  },
  {
    id: 2,
    image: "https://i.pinimg.com/736x/79/c3/4f/79c34f388ca5624ac721562d52b8eb78.jpg?height=300&width=400",
    date: "January 5, 2025",
    title: "Rahasia Chef Profesional dalam Memilih Bahan Makanan",
    excerpt: "Pelajari cara memilih bahan makanan terbaik langsung dari dapur profesional.",
  },
  {
    id: 3,
    image: "https://i.pinimg.com/736x/67/b0/fe/67b0fe85700a97131292bb862230cd01.jpg?height=300&width=400",
    date: "February 10, 2025",
    title: "Inspirasi dari Pasar Tradisional hingga Restoran Mewah",
    excerpt: "Bagaimana pasar lokal menjadi sumber inspirasi masakan global.",
  },
];


const experienceArticles = [
  {
    id: 1,
    image: "https://i.pinimg.com/736x/30/bd/5d/30bd5d46b5994e520efbc7c5ce6cd131.jpg?height=300&width=400",
    date: "October 15, 2024",
    title: "Steak Premium dan Wine Eksklusif: Kombinasi Sempurna",
    excerpt: "Nikmati pengalaman steak terbaik dengan padanan wine yang tepat!",
  },
  {
    id: 2,
    image: "https://i.pinimg.com/736x/ca/53/85/ca53856f15bc8d42954d60c388e1b5c2.jpg?height=300&width=400",
    date: "November 20, 2024",
    title: "Festival BBQ Dunia: Dari Tradisional hingga Modern",
    excerpt: "Cicipi ragam BBQ dari berbagai negara di satu tempat.",
  },
  {
    id: 3,
    image: "https://i.pinimg.com/736x/e4/7f/ee/e47fee92ffcf45836a802b7a816c2197.jpg?height=300&width=400",
    date: "December 5, 2024",
    title: "Restoran Unik dengan Konsep Open Kitchen",
    excerpt: "Pengalaman makan langsung dari dapur ke meja Anda.",
  },
];

</script>

<template>
  <Head title="Artikel" />
  <GuestLayout>
    <div class="min-h-screen bg-primary">
      <div class="container mx-auto px-4 py-8">
        <!-- Search Bar -->
        <div class="mb-8">
          <div class="relative max-w-xl mx-auto">
            <input 
              type="text" 
              placeholder="Search articles..." 
              class="w-full bg-gray-900 border border-gray-800 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-amber-500"
            >
            <button class="absolute right-3 top-1/2 transform -translate-y-1/2">
              <Search class="h-5 w-5 text-gray-400" />
            </button>
          </div>
        </div>

        <!-- Featured Article -->
        <div class="mb-12">
          <div class="bg-gray-900 rounded-xl overflow-hidden">
            <div class="grid md:grid-cols-2 gap-6">
              <div class="relative h-[400px]">
                <img 
                  :src="foodArticles[0].image"
                  :alt="foodArticles[0].title"
                  class="absolute inset-0 w-full h-full object-cover"
                >
              </div>
              <div class="p-6 flex flex-col justify-center">
                <p class="text-amber-500 text-secondary text-sm mb-2">{{ foodArticles[0].date }}</p>
                <h1 class="text-white text-3xl font-bold mb-4">{{ foodArticles[0].title }}</h1>
                <p class="text-gray-400 mb-6">{{ foodArticles[0].excerpt }}</p>
                <Link 
                  href="#" 
                  class="text-amber-500 hover:text-amber-400 text-secondary transition-colors inline-flex items-center"
                >
                  Read more
                  <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                  </svg>
                </Link>
              </div>
            </div>
          </div>
        </div>

        <!-- Food Section -->
        <section class="mb-12">
          <h2 class="text-3xl font-bold mb-6 text-white">Food</h2>
          <div class="grid md:grid-cols-3 gap-6">
            <div 
              v-for="food in foodArticles.slice(1)" 
              :key="food.id"
              class="bg-gray-900 rounded-xl overflow-hidden hover:transform hover:scale-105 transition-transform duration-300"
            >
              <div class="relative h-48">
                <img 
                  :src="food.image" 
                  :alt="food.title"
                  class="absolute inset-0 w-full h-full object-cover"
                >
              </div>
              <div class="p-6">
                <p class="text-amber-500 text-sm text-secondary mb-2">{{ food.date }}</p>
                <h3 class="text-white text-xl font-bold mb-3">{{ food.title }}</h3>
                <p class="text-gray-400 text-sm  mb-4">{{ food.excerpt }}</p>
                <Link 
                  href="#" 
                  class="text-amber-500 hover:text-amber-400 text-secondary transition-colors inline-flex items-center"
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

        <!-- People Section -->
        <section class="mb-12">
          <h2 class="text-3xl font-bold mb-6 text-white">People</h2>
          <div class="grid md:grid-cols-3 gap-6">
            <div 
              v-for="person in peopleArticles" 
              :key="person.id"
              class="bg-gray-900 rounded-xl overflow-hidden hover:transform hover:scale-105 transition-transform duration-300"
            >
              <div class="relative h-48">
                <img 
                  :src="person.image" 
                  :alt="person.title"
                  class="absolute inset-0 w-full h-full object-cover"
                >
              </div>
              <div class="p-6">
                <p class="text-amber-500 text-sm text-secondary mb-2">{{ person.date }}</p>
                <h3 class="text-white text-xl font-bold mb-3">{{ person.title }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ person.excerpt }}</p>
                <Link 
                  href="#" 
                  class="text-amber-500 hover:text-amber-400 text-secondary transition-colors inline-flex items-center"
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

        <!-- Experience Section -->
        <section>
          <h2 class="text-3xl font-bold mb-6 text-white">Experience</h2>
          <div class="grid md:grid-cols-3 gap-6">
            <div 
              v-for="experience in experienceArticles" 
              :key="experience.id"
              class="bg-gray-900 rounded-xl overflow-hidden hover:transform hover:scale-105 transition-transform duration-300"
            >
              <div class="relative h-48">
                <img 
                  :src="experience.image" 
                  :alt="experience.title"
                  class="absolute inset-0 w-full h-full object-cover"
                >
              </div>
              <div class="p-6">
                <p class="text-amber-500 text-sm text-secondary mb-2">{{ experience.date }}</p>
                <h3 class="text-white text-xl font-bold mb-3">{{ experience.title }}</h3>
                <p class="text-gray-400 text-sm mb-4">{{ experience.excerpt }}</p>
                <Link 
                  href="#" 
                  class="text-amber-500 hover:text-amber-400 text-secondary transition-colors inline-flex items-center"
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