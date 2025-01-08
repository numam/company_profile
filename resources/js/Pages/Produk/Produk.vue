<template>
    <Head title="Produk Kami" />
    <GuestLayout />
    <div>
      <h1>Daftar Produk</h1>
      <ul>
        <li v-for="produk in produkList" :key="produk.id">
            <Link :href="`/produk/${produk.id}`">{{ produk.title }}</Link>
        </li>
      </ul>
    </div>
  </template>

<script setup>
  import { reactive } from 'vue';
  import { Head, Link } from '@inertiajs/vue3';
  import GuestLayout from '@/Layouts/GuestLayout.vue';

  const produkList = reactive([
    { id: 1, title: 'Produk 1' },
    { id: 2, title: 'Produk 2' },
    { id: 3, title: 'Produk 3' },
  ]);
  </script>
