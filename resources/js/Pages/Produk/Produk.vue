<template>
  <Head title="Produk Kami" />
  <GuestLayout />
  <div class=" w-full p-4 lg:p-8 bg-primary ">
    <!-- Header Section -->
<div class="flex flex-col lg:flex-row w-full items-center mb-6 lg:mb-12">
  <div class="flex-1 text-center lg:text-left">
    <div class="inline-block bg-primary text-secondary px-4 py-2 rounded">
      <h1 class="text-2xl lg:text-6xl font-bold mb-4">Lengkapi masakan anda</h1>
    </div>
    <p class="mb-6 text-gray-400 lg:text-lg max-w-md">
      Cara mudah untuk membeli daging berkualitas tinggi dan terjangkau untuk masakan Anda yang didukung D'MeatBoy
    </p>
    <router-link :to="{ name: 'produk', params: { id: 1 } }">
          <button class="px-4 py-2 lg:px-6 lg:py-3 bg-secondary text-black rounded">
            Shop All Products
          </button>
        </router-link>
  </div>
  <img 
    src="https://simpsonsmeats.com/cdn/shop/collections/Dry_Aged_and_Prime_Strip_Steak.jpg?v=1661459906&width=5325" 
    alt="Delicious Meat Dishes" 
    class="mt-4 lg:mt-0 ml-0 lg:ml-6 xl:ml-12 rounded shadow-lg w-full lg:w-3/5 xl:w-2/5 h-auto"
  >
</div>


    <!-- Most Popular Section -->
<div class="mt-10">
  <h2 class="text-xl lg:text-2xl font-semibold mb-4 text-center text-secondary">Most Popular</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <div class="bg-gray-900 shadow rounded p-4 lg:p-6">
      <img 
        src="https://images.squarespace-cdn.com/content/v1/54b852a3e4b0b0eaa0ff938e/1424136172939-11EO3F7E1Z9U71CG6UV5/Bison+Tenderlion.jpg" 
        alt="Aligner Marketing Kit" 
        class="mb-4 transition-transform duration-300 hover:scale-105 w-full h-60 object-cover"
      >
      <h3 class="font-bold text-lg text-white lg:text-xl">Aligner Marketing Starter Kit with Sample</h3>
      <p class="text-secondary">Rp. 20.000.000</p>
    </div>
    <div class="bg-gray-900 shadow rounded p-4 lg:p-6">
      <img 
        src="https://oakavenuefarm.com/cdn/shop/collections/F47F11F4-EC03-4D10-91DC-7B8ED9522D0E.jpg?v=1729819820&width=2400" 
        alt="TRIOS Protection Tip" 
        class="mb-4 transition-transform duration-300 hover:scale-105 w-full h-60 object-cover"
      >
      <h3 class="font-bold text-lg text-white lg:text-xl">3Shape TRIOS 3 Protection Tip</h3>
      <p class="text-secondary">Rp. 13.000.000</p>
    </div>
    <div class="bg-gray-900 shadow rounded p-4 lg:p-6">
      <img 
        src="https://oneworlddeli.com/cdn/shop/products/DingleyDellPorkTomahawk01_DSCF4613_2000x2000_45f9463a-2e8d-46fb-98bb-9ca5e4fd8961_460x@2x.jpg?v=1652410424" 
        alt="Nightguard Marketing Brochure" 
        class="mb-4 transition-transform duration-300 hover:scale-105 w-full h-60 object-cover"
      >
      <h3 class="font-bold text-lg text-white lg:text-xl">Nightguard Marketing Brochures</h3>
      <p class="text-secondary">Rp. 10.000.000</p>
    </div>
  </div>
</div>


    <!-- Where Convenience Meets Quality Section -->
    <div class="flex flex-col lg:flex-row items-center mt-10 lg:mt-16 p-4 lg:p-8 bg-primary rounded">
      <div class="flex-1 text-center lg:text-left">
        <h2 class="text-xl lg:text-2xl font-semibold">Where Convenience Meets Quality</h2>
        <p class="text-gray-700 lg:text-lg">
          Dandy's Shop offers competitive pricing and a diverse range of products tailored to your practice's needs.
        </p>
        <button class="mt-4 px-4 py-2 lg:px-6 lg:py-3 bg-secondary text-black rounded">Shop Now</button>
      </div>
      <img 
        src="https://images.squarespace-cdn.com/content/v1/59776eeef5e2314291c86837/1720550434867-9RBC01M2R92A9NVPIZ07/double+cut+chops.jpeg?format=1000w" 
        alt="Doctor and Patient"
        class="mt-4 lg:mt-0 ml-0 lg:ml-9 rounded shadow-lg w-full lg:w-1/2 xl:w-1/3 h-auto"
      >
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

// Daftar produk reaktif
const produkList = reactive([
  { id: 1, title: 'Aligner Marketing Starter Kit with Sample' },
  { id: 2, title: '3Shape TRIOS 3 Protection Tip' },
  { id: 3, title: 'Nightguard Marketing Brochures' },
]);
</script>

<style>
.container {
  max-width: 100%;
}
</style>
