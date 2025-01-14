<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import CardProduk from '@/Components/Card/CardProduk.vue';
import Footer from '@/Components/Footer.vue';

defineProps({
  produks: Object
})

</script>


<template>

  <Head title="Produk Kami" />
  <GuestLayout />
  <div class="min-h-screen bg-primary">
    <div class="md:pt-24 md:px-20 pt-16 px-10">
      <!-- Bagian Header -->
      <div class="flex flex-col lg:flex-row w-full items-center mb-6 lg:mb-12">
        <div class="flex-1 text-center lg:text-left">
          <div class="inline-block bg-primary text-secondary px-4 py-2 rounded">
            <h1 class="text-2xl lg:text-6xl font-bold mb-4 animate-fade-in">Lengkapi masakan Anda</h1>
          </div>
          <p class="mb-6 text-gray-400 lg:text-lg max-w-md animate-slide-in-left">
            Cara mudah untuk membeli daging berkualitas tinggi dan terjangkau untuk masakan Anda yang didukung D'MeatBoy
          </p>
        </div>
        <img
          src="https://simpsonsmeats.com/cdn/shop/collections/Dry_Aged_and_Prime_Strip_Steak.jpg?v=1661459906&width=5325"
          alt="Hidangan Daging Lezat"
          class="mt-4 lg:mt-0 ml-0 lg:ml-6 xl:ml-12 rounded shadow-lg w-full lg:w-3/5 xl:w-2/5 h-auto animate-zoom-in" />
      </div>


      <!-- Menambahkan Tulisan Semua Produk -->
      <div class="mt-12">
        <h3 class="text-2xl font-semibold text-secondary animate-fade-in mb-5">Semua Produk</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="item in produks" :key="item.id">
            <CardProduk
              :content="{
                image: item.image,
                title: item.title,
                price: item.price,
                description: item.description
              }"
              :href="'/produk/' + item.slug"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
