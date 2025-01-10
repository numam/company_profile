<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';;

// Mock data for the article
const article = ref({
  id: 1,
  image: "https://i.pinimg.com/736x/8a/d6/f7/8ad6f7b8659e7af4125075af8a475f6b.jpg",
  date: "January 16, 2025",
  title: "Resep Steak Tempe yang Sehat dan Lezat, Alternatif Sehat Pengganti Daging!",
  author: "Chef Juna",
  authorImage: "https://i.pravatar.cc/150?img=32",
  authorRole: "Senior Food Writer",
  content: `
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
  `,
  tags: ["Vegetarian", "Healthy", "Indonesian Cuisine", "Easy Recipe"],
  relatedArticles: [
    {
      id: 2,
      image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
      title: "Resep Sate Daging Sapi yang Empuk dan Juicy",
      excerpt: "Tips memasak sate daging sapi dengan bumbu khas yang lezat."
    },
    {
      id: 3,
      image: "https://i.pinimg.com/736x/f9/b9/06/f9b906998ea72e8d544be321fd8046c2.jpg",
      title: "Rahasia Membuat Rendang Daging Padang Asli",
      excerpt: "Rasakan kelezatan rendang dengan cita rasa khas Minangkabau."
    }
  ]
});
</script>

<template>
    <Head title="Artikel" />
    <GuestLayout>
      <div class="min-h-screen bg-primary">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <div class="bg-primary rounded-xl overflow-hidden">
            <!-- Article Image -->
            <div class="relative h-64 md:h-96">
              <img :src="article.image" :alt="article.title" class="absolute inset-0 w-full h-full object-cover">
            </div>
    
            <!-- Article Content -->
            <div class="p-6 md:p-10">
              <p class="text-secondary text-sm mb-2">{{ article.date }}</p>
              <h1 class="text-white text-3xl md:text-4xl font-bold mb-4">{{ article.title }}</h1>
              
              <!-- Author Info -->
              <div class="flex items-center mb-6">
                <img :src="article.authorImage" :alt="article.author" class="w-12 h-12 rounded-full mr-4">
                <div> 
                  <p class="text-white font-semibold">{{ article.author }}</p>
                  <p class="text-gray-400 text-sm">{{ article.authorRole }}</p>
                </div>
              </div>
    
              <!-- Article Body -->
              <div class="prose prose-lg text-gray-300 max-w-none">
                <p>{{ article.content }}</p>
              </div>
    
              <!-- Tags -->
              <div class="mt-8">
                <h3 class="text-white text-xl font-semibold mb-3">Tags</h3>
                <div class="flex flex-wrap gap-2">
                  <span v-for="tag in article.tags" :key="tag" class="bg-gray-700 text-secondary px-3 py-1 rounded-full text-sm">
                    {{ tag }}
                  </span>
                </div>
              </div>
    
              <!-- Related Articles -->
              <div class="mt-12">
                <h3 class="text-white text-2xl font-semibold mb-6">Related Articles</h3>
                <div class="grid md:grid-cols-2 gap-6">
                  <div v-for="relatedArticle in article.relatedArticles" :key="relatedArticle.id" class="bg-gray-700 rounded-lg overflow-hidden">
                    <img :src="relatedArticle.image" :alt="relatedArticle.title" class="w-full h-48 object-cover">
                    <div class="p-4">
                      <h4 class="text-white text-lg font-semibold mb-2">{{ relatedArticle.title }}</h4>
                      <p class="text-gray-400 text-sm">{{ relatedArticle.excerpt }}</p>
                      <a href="#" class="text-secondary hover:text-amber-400 mt-2 inline-block">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </GuestLayout>
  </template>
    
 
  