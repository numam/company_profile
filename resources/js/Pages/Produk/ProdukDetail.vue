<template>
  <Head title="Produk Kami" />
  <GuestLayout />
  <div class="flex flex-col lg:flex-row items-center bg-beige p-6 rounded-lg shadow-lg w-full max-w-5xl mx-auto">
    <!-- Product Image -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <img
        src="https://images.squarespace-cdn.com/content/v1/54b852a3e4b0b0eaa0ff938e/1424136172939-11EO3F7E1Z9U71CG6UV5/Bison+Tenderlion.jpg"
        :alt="produk.image"
        class="rounded-lg shadow-md object-cover w-full max-w-md"
      />
    </div>

    <!-- Product Details -->
    <div class="w-full lg:w-1/2 mt-6 lg:mt-0 lg:ml-8">
      <h1 class="text-3xl font-bold text-gray-800">{{ produk.title }}</h1>
      <p class="text-2xl text-secondary mt-2 font-semibold">{{ produk.price }}</p>

      <!-- Quantity Selector -->
      <div class="mt-4">
        <label for="quantity" class="block text-sm font-medium text-gray-700">Kuantitas</label>
        <input
          type="number"
          id="quantity"
          min="1"
          value="1"
          class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"
        />
      </div>

      <!-- Add to Cart Button -->
      <button
        class="mt-6 w-full bg-secondary text-white py-3 px-4 rounded-full font-semibold text-center hover:bg-primary transition duration-300"
      >
        Masukkan Keranjang
      </button>

      <!-- Stock Info -->
      <p class="text-green-600 text-sm mt-2 font-medium">Stok Masih Ada</p>

      <!-- Additional Info -->
      <p class="text-gray-600 text-sm mt-4">{{ produk.description }}</p>

      <!-- Shipping Info -->
      <div class="flex items-center mt-6 space-x-4">
        <div class="flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 0 1-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 0 0-3.213-9.193 2.056 2.056 0 0 0-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 0 0-10.026 0 1.106 1.106 0 0 0-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
</svg>

          <span class="text-sm text-gray-600">Gratis Ongkir</span>
        </div>

        <div class="flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
</svg>

          <span class="text-sm text-gray-600">Garansi 30 Hari</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation Back -->
  <div class="mt-6 text-center">
    <router-link :to="{ name: 'produk' }" class="text-primary underline">Kembali ke Daftar Produk</router-link>
  </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

defineProps({
  produk: Object,
});
</script>

<style>
.bg-beige {
  background-color: #f9f4ef;
}
.text-secondary {
  color: #d2691e;
}
.text-primary {
  color: #8b0000;
}
</style>
