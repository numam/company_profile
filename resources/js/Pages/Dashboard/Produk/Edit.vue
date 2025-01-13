<script setup>
import { watch, reactive } from 'vue'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { router } from '@inertiajs/vue3';

const props = defineProps({
    produk: Object
})

const form = reactive({
    title: props.produk.title,
    slug: props.produk.slug,
    image: props.produk.image,
    price: props.produk.price,
    description: props.produk.description,
})

watch(() => form.title, (newTitle) => {
    form.slug = newTitle
        .toLowerCase()
        .replace(/[^a-z0-9]+/g, '-')
        .replace(/(^-|-$)+/g, '')
})

const submit = () => {
    router.put(route('dashboard.produk.update', props.produk.slug), { ...form});
}

const errors = form.errors
</script>

<template>
    <AuthenticatedLayout>
        <div class="min-h-screen bg-[#1a1b1e] p-6">
            <div class="max-w-3xl mx-auto bg-[#2c2e33] rounded-xl shadow-lg p-6">
                <!-- Header -->
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-secondary">Tambah Produk Baru</h1>
                    <p class="text-gray-400 mt-2">Isi formulir di bawah untuk menambahkan produk baru</p>
                </div>

                <!-- Form -->
                <form @submit.prevent="submit" class="space-y-6">
                    <!-- Title Input -->
                    <div>
                        <label class="block text-secondary text-sm font-medium mb-2">
                            Judul Produk
                        </label>
                        <input v-model="form.title" type="text" class="w-full bg-[#1a1b1e] border border-[#3d3f45] rounded-lg px-4 py-3 text-gray-200 
                                   focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                   transition-colors" placeholder="Masukkan judul produk" />
                    </div>

                    <!-- Slug Input -->
                    <div>
                        <label class="block text-secondary text-sm font-medium mb-2">
                            Slug
                        </label>
                        <input v-model="form.slug" type="text" class="w-full bg-[#1a1b1e] border border-[#3d3f45] rounded-lg px-4 py-3 text-gray-200
                                   focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                   transition-colors" placeholder="produk-slug" />
                    </div>

                    <!-- Image Input -->
                    <div>
                        <label class="block text-secondary text-sm font-medium mb-2">
                            URL Gambar
                        </label>
                        <input v-model="form.image" type="text" class="w-full bg-[#1a1b1e] border border-[#3d3f45] rounded-lg px-4 py-3 text-gray-200
                                   focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                   transition-colors" placeholder="https://example.com/image.jpg" />
                    </div>

                    <!-- Price Input -->
                    <div>
                        <label class="block text-secondary text-sm font-medium mb-2">
                            Harga
                        </label>
                        <div class="relative">
                            <!-- Simbol Rp -->
                            <span class="absolute inset-y-0 left-3 flex items-center text-gray-400">Rp</span>

                            <!-- Input -->
                            <input v-model="form.price" type="number" class="w-full bg-[#1a1b1e] border border-[#3d3f45] rounded-lg px-10 py-3 text-gray-200
                            focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                             transition-colors no-spinner" placeholder="Masukkan harga produk" />
                        </div>
                    </div>

                    <!-- Description Textarea -->
                    <div>
                        <label class="block text-secondary text-sm font-medium mb-2">
                            Deskripsi
                        </label>
                        <textarea v-model="form.description" rows="4" class="w-full bg-[#1a1b1e] border border-[#3d3f45] rounded-lg px-4 py-3 text-gray-200
                                   focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500
                                   transition-colors resize-none" placeholder="Tuliskan deskripsi produk"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end pt-4">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg
                                   transition-colors duration-200 flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                            Simpan Produk
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style>
/* Menghilangkan spinner pada input number untuk semua browser */
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

input[type="number"] {
    -moz-appearance: textfield;
}
</style>