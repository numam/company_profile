<script setup>
import { Link } from '@inertiajs/vue3'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'

// Deklarasi props
const props = defineProps({
    artikels: Array
})

// Fungsi untuk menghapus artikel
const deleteArtikel = (id) => {
    if (confirm('Apakah Anda yakin ingin menghapus artikel ini?')) {
        // Menggunakan this.$inertia untuk melakukan request penghapusan
        window.$inertia.delete(route('dashboard.artikel.destroy', id))
    }
}
</script>

<template>
    <AuthenticatedLayout>
        <div class="container mx-auto p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Daftar Artikel</h1>
                <Link :href="route('dashboard.artikel.create')"
                      class="bg-blue-500 text-white px-4 py-2 rounded">
                    Tambah Artikel
                </Link>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b">Judul</th>
                            <th class="px-6 py-3 border-b">Tanggal</th>
                            <th class="px-6 py-3 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="artikel in artikels" :key="artikel.id">
                            <td class="px-6 py-4 border-b">{{ artikel.title }}</td>
                            <td class="px-6 py-4 border-b">{{ artikel.date }}</td>
                            <td class="px-6 py-4 border-b">
                                <Link :href="route('dashboard.artikel.edit', artikel.id)"
                                      class="text-blue-500 hover:underline mr-2">
                                    Edit
                                </Link>
                                <button @click="deleteArtikel(artikel.id)"
                                        class="text-red-500 hover:underline">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
