<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

const props = defineProps({
  artikel: Object,
});

// Function to format date
const formatDate = (date) => {
  return new Date(date).toLocaleDateString('id-ID', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  });
};
</script>

<template>

  <Head title="Artikel Detail" />
  <GuestLayout>
    <div class="min-h-screen  bg-primary">
      <div class="md:pt-10 md:px-20 pt-16 px-10">
        <!-- Main Article Card -->
        <div class="max-w-4xl mx-auto">
          <!-- Article Image Container -->
          <div class="w-full h-64 mb-6">
            <img :src="artikel.image" :alt="artikel.title" class="w-full h-full object-cover rounded-lg">
          </div>

          <!-- Article Content Container -->
          <div class="bg-primary rounded-xl">
            <!-- Date -->
            <p class="text-secondary text-sm mb-2">{{ formatDate(artikel.date) }}</p>

            <!-- Title -->
            <h1 class="text-white text-3xl font-bold mb-6">{{ artikel.title }}</h1>

            <!-- Content Container with fixed max-height and scroll -->
            <div class="mb-8">
              <!-- Excerpt -->
              <p class="text-gray-400 text-base mb-6">{{ artikel.excerpt }}</p>

              <!-- Main Content -->
              <div class="prose prose-lg text-gray-300 max-w-none">
                <div v-html="artikel.content"></div>
              </div>
            </div>

            <!-- Tags -->
            <div class="mb-12">
              <h3 class="text-lg font-semibold text-white mb-4">Tags</h3>
              <div class="flex flex-wrap gap-2">
                <span class="bg-gray-800 text-gray-300 px-4 py-2 rounded-full text-sm">
                  Daging Segar
                </span>
                <span class="bg-gray-800 text-gray-300 px-4 py-2 rounded-full text-sm">
                  Resep Masakan
                </span>
                <span class="bg-gray-800 text-gray-300 px-4 py-2 rounded-full text-sm">
                  Tips Penyimpanan
                </span>
                <span class="bg-gray-800 text-gray-300 px-4 py-2 rounded-full text-sm">
                  Nutrisi Daging
                </span>
                <span class="bg-gray-800 text-gray-300 px-4 py-2 rounded-full text-sm">
                  Kuliner Lokal
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </GuestLayout>
</template>
