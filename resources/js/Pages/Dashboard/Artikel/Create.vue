<template>
    <div class="container mx-auto p-6">
      <h1 class="text-2xl font-bold mb-6">Tambah Artikel Baru</h1>

      <form @submit.prevent="submit" class="max-w-2xl">
        <div class="mb-4">
          <label class="block mb-2">Judul</label>
          <input v-model="form.title" type="text" class="w-full px-3 py-2 border rounded">
        </div>

        <div class="mb-4">
          <label class="block mb-2">Slug</label>
          <input v-model="form.slug" type="text" class="w-full px-3 py-2 border rounded">
        </div>

        <div class="mb-4">
          <label class="block mb-2">Excerpt</label>
          <textarea v-model="form.excerpt" class="w-full px-3 py-2 border rounded"></textarea>
        </div>

        <div class="mb-4">
          <label class="block mb-2">Image URL</label>
          <input v-model="form.image" type="text" class="w-full px-3 py-2 border rounded">
        </div>

        <div class="mb-4">
          <label class="block mb-2">Tanggal</label>
          <input v-model="form.date" type="date" class="w-full px-3 py-2 border rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
          Simpan
        </button>
      </form>
    </div>
  </template>

  <script setup>
  import { useForm } from '@inertiajs/vue3'

  const form = useForm({
    title: '',
    slug: '',
    excerpt: '',
    image: '',
    date: ''
  })

  const submit = () => {
    form.post(route('dashboard.artikel.store'))
  }
  </script>
