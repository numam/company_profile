<template>
  <Head title="Produk Kami" />
  <GuestLayout />
  <section class="flex flex-col lg:flex-row items-center min-h-screen bg-primary p-10 w-full mx-auto animate-fade-in">
    <!-- Product Image and Description -->
    <div class="w-full lg:w-1/2 flex flex-col justify-center lg:h-full">
      <img
        src="https://images.squarespace-cdn.com/content/v1/54b852a3e4b0b0eaa0ff938e/1424136172939-11EO3F7E1Z9U71CG6UV5/Bison+Tenderlion.jpg"
        :alt="produk.image"
        class="rounded-lg shadow-lg object-cover w-full max-w-full h-full hover:scale-105 transition-transform duration-500 mb-6"
      />

      <!-- Product Description -->
      <section class="bg-gray-800 text-white p-6">
        <h2 class="text-lg font-bold text-white mb-2">Deskripsi Produk</h2>
        <p class="text-gray-300 text-sm leading-relaxed">
          Daging Wagyu adalah jenis daging sapi premium yang terkenal karena kualitasnya yang sangat tinggi, terutama dalam hal kelembutan dan marbling (lemak intramuskular). Wagyu berasal dari Jepang dan merupakan hasil dari pemeliharaan sapi dengan perhatian khusus terhadap diet dan teknik pemeliharaan yang unik. Marbling pada daging Wagyu memberikan rasa yang kaya dan tekstur yang sangat lembut, membuatnya sangat dihargai di dunia kuliner.
        </p>
      </section>
    </div>

    <!-- Product Details -->
    <div class="w-full lg:w-1/2 mt-10 lg:mt-0 lg:ml-16 text-white">
      <h1 class="text-3xl font-bold mb-4">{{ produk.title }}</h1>
      <p class="text-2xl font-semibold text-secondary mb-6">{{ produk.price }}</p>

      <!-- Quantity Selector -->
      <div class="mb-6">
        <label for="quantity" class="block text-base font-medium mb-2">
          Kuantitas
        </label>
        <input
          type="number"
          id="quantity"
          min="1"
          value="1"
          class="w-32 py-2 px-3 border border-gray-300 bg-gray-800 rounded-md text-white shadow-sm focus:outline-none focus:ring-secondary focus:border-secondary text-sm"
        />
      </div>

      <!-- Add to Cart Button -->
      <button
        class="w-full bg-secondary text-primary py-3 px-5 rounded-full font-medium text-lg text-center hover:bg-secondary-dark hover:shadow-lg hover:scale-105 transition duration-300"
      >
        Masukkan Keranjang
      </button>

      <!-- Stock Info -->
      <p class="text-green-400 text-sm mt-4">Stok Masih Ada</p>

      <!-- Shipping & Warranty Info -->
      <div class="flex items-center mt-8 space-x-6">
        <div
          class="flex items-center space-x-2 hover:scale-105 transition-transform duration-300"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 text-secondary"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"
            />
          </svg>
          <span class="text-sm text-white">Gratis Ongkir</span>
        </div>

        <div
          class="flex items-center space-x-2 hover:scale-105 transition-transform duration-300"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-6 h-6 text-secondary"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0-3.7 3.7 48.656 48.656 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7-3.7c-.017-.22-.032-.441.046-.662M4.5 12l3 3m-3-3-3 3"
            />
          </svg>
          <span class="text-sm text-white">Garansi 30 Hari</span>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { defineProps } from 'vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineProps({
  produk: Object,
});
</script>
