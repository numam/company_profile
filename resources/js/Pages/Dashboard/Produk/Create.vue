<script setup>
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    title: '',
    slug: '',
    image: '',
    price: '',
    description: '',
})

const submit = () => {
    form.post(route('dashboard.produk.store'), {
        onSuccess: () => {
            form.reset()
        },
    })
}

const errors = form.errors
</script>


<template>
    <div>
        <h1 class="text-2xl font-bold mb-4">Buat Produk Baru</h1>
        <form @submit.prevent="submit">
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Judul Produk</label>
                <input
                    type="text"
                    id="title"
                    v-model="form.title"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <span v-if="errors.title" class="text-sm text-red-600">{{ errors.title }}</span>
            </div>

            <div class="mb-4">
                <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                <input
                    type="text"
                    id="slug"
                    v-model="form.slug"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <span v-if="errors.slug" class="text-sm text-red-600">{{ errors.slug }}</span>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                <input
                    type="text"
                    id="image"
                    v-model="form.image"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <span v-if="errors.image" class="text-sm text-red-600">{{ errors.image }}</span>
            </div>

            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                <input
                    type="number"
                    id="price"
                    v-model="form.price"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                />
                <span v-if="errors.price" class="text-sm text-red-600">{{ errors.price }}</span>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea
                    id="description"
                    v-model="form.description"
                    rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                ></textarea>
                <span v-if="errors.description" class="text-sm text-red-600">{{ errors.description }}</span>
            </div>

            <button
                type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded"
            >
                Simpan
            </button>
        </form>
    </div>
</template>


