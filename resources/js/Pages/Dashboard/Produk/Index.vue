<script setup>
import { Link, router } from '@inertiajs/vue3'
import { defineProps } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

const props = defineProps({
  produks: Object,
})

const formatPrice = (price) => {
  return new Intl.NumberFormat('id-ID', {
    style: 'currency',
    currency: 'IDR'
  }).format(price)
}

const deleteProduk = (slug) => {
  if (confirm("Apakah Anda yakin ingin menghapus produk ini?")) {
    router.delete(route('dashboard.produk.destroy', slug))
  }
}
</script>

<template>
  <AuthenticatedLayout>
    <div class="min-h-screen bg-primary p-8">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-6">
          <h2 class="text-2xl font-semibold text-secondary">Data Produk</h2>
          <Link 
            href="/dashboard/produk/create"
            class="bg-secondary hover:bg-gray-800 text-white px-4 py-2 rounded-lg transition-colors flex items-center gap-2"
          >
            <span class="text-xl">+</span>
            Tambah Produk
          </Link>
        </div>

        <!-- Table Section -->
        <div class="bg-[#1a1b1e] rounded-lg overflow-hidden border border-secondary shadow-lg">
          <table class="w-full border-collapse">
            <thead>
              <tr>
                <th class="px-6 py-3 bg-gray-800 text-secondary text-left font-semibold border-x border-gray-700 w-16">
                  NO
                </th>
                <th class="px-6 py-3 bg-gray-800 text-secondary text-left font-semibold border-x border-gray-700">
                  NAMA PRODUK
                </th>
                <th class="px-6 py-3 bg-gray-800 text-secondary text-left font-semibold border-x border-gray-700">
                  HARGA
                </th>
                <th class="px-6 py-3 bg-gray-800 text-secondary text-center font-semibold border-x border-secondary w-32">
                  AKSI
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(produk, index) in produks.data" 
                  :key="produk.id" 
                  class="border-b border-gray-700 hover:bg-[#2c2e33] transition-colors group"
              >
                <td class="px-6 py-3 text-gray-300 border-x border-gray-700 group-hover:border-gray-700">
                  {{ index + 1 }}
                </td>
                <td class="px-6 py-3 text-gray-300 border-x border-gray-700 group-hover:border-gray-700">
                  {{ produk.title }}
                </td>
                <td class="px-6 py-3 text-gray-300 border-x border-gray-700 group-hover:border-gray-700">
                  {{ formatPrice(produk.price) }}
                </td>
                <td class="px-6 py-3 text-center border-x border-gray-700 group-hover:border-gray-700">
                  <div class="flex justify-center gap-4">
                    <Link 
                      :href="`/dashboard/produk/${produk.slug}/edit`"
                      class="text-[#b1a374] hover:text-[#d4c69f] transition-colors"
                    >
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                      </svg>
                    </Link>
                    <button
                      @click="deleteProduk(produk.slug)"
                      class="text-red-400 hover:text-red-300 transition-colors"
                    >
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                      </svg>
                    </button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <!-- Empty State -->
          <div v-if="produks.data.length === 0" class="text-center text-gray-400 py-8">
            <p class="text-lg">Belum ada data produk</p>
            <p class="mt-1">Klik tombol "Tambah Produk" untuk menambah produk baru</p>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>