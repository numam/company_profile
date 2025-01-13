<script setup>
  import { Link } from '@inertiajs/vue3'
  import { defineProps } from 'vue';
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

  const props = defineProps({
    produks: Object, // Data produk dari controller
  });

  const deleteProduk = (slug) => {
    if (confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
      Inertia.delete(`/dashboard/produk/${slug}`);
    }
  };
  </script>


<template>
    <AuthenticatedLayout>
        <div class="text-white">
            <h1>Daftar Produk</h1>
            <Link href="/dashboard/produk/create" class="btn btn-primary">Tambah Produk</Link>

            <table>
                <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="produk in produks.data" :key="produk.id">
                    <td>{{ produk.title }}</td>
                    <td>{{ produk.price }}</td>
                    <td>
                    <Link :href="`/dashboard/produk/${produk.slug}/edit`" class="btn btn-warning">Edit</Link>
                    <Link :href="`/dashboard/produk/${produk.slug}`" class="btn btn-info">Detail</Link>
                    <button @click="deleteProduk(produk.slug)" class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </AuthenticatedLayout>
  </template>

