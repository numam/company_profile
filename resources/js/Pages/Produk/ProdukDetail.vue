<template>
    <Head title="Produk Kami" />
    <GuestLayout />
    <div>
      <h1>{{ produk.title }}</h1>
      <p>{{ produk.description }}</p>
      <p><strong>Harga:</strong> {{ produk.price }}</p>
      <img :src="produk.image" alt="Produk Image" />
      <router-link :to="{ name: 'produk' }">Kembali ke Daftar Produk</router-link>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

  defineProps({
    produk: Object,
  });
</script>
