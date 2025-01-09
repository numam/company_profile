<script setup>
import { Link, usePage } from '@inertiajs/vue3'
import { ref, computed } from 'vue'

// Burger menu open/close state
const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}

const currentRoute = computed(() => usePage().url)

const isActiveMenu = computed(() => (path) => {
    const currentUrl = usePage().url;

    if (path === 'home') {
        return currentUrl === '/' ? "text-secondary" : "text-white hover:text-secondary";
    }

    return currentUrl.includes(path)
        ? "text-secondary"
        : "text-white hover:text-secondary";
});





</script>

<template>
    <header class="bg-primary font-body w-full top-0 h-full">
        <!-- Desktop View -->
        <div class="container mx-auto hidden md:flex flex-wrap py-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center mb-4 md:mb-0">
                <img src="/assets/RakryanVET.png" alt="">
            </a>
            <nav class="md:ml-auto md:mr-auto space-x-8 flex flex-wrap items-center justify-center text-base font-medium">
                <Link :href="route('home')" :class="isActiveMenu('home')">
                    Beranda
                </Link>
                <Link :href="route('layanan')" :class="isActiveMenu('layanan')">
                    Layanan
                </Link>
                <Link :href="route('produk')" :class="isActiveMenu('produk')">
                    Produk
                </Link>
                <Link :href="route('artikel')" :class="isActiveMenu('artikel')">
                    Artikel
                </Link>
                <Link :href="route('tentang')" :class="isActiveMenu('tentang')">
                    Tentang Kami
                </Link>
            </nav>

            <Link :href="route('login')" class="inline-flex text-white text-sm font-medium bg-primary border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded-xl">
                Login
            </Link>
            <Link :href="route('register')" class="inline-flex text-white text-sm font-medium bg-primary border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded-xl">
                Register
            </Link>
        </div>

        <!-- Mobile View -->
        <div class="md:hidden w-full">
            <div class="flex justify-between w-full py-4 px-5">
                <a class="flex title-font font-medium items-center text-gray-900">
                    <img class="w-20" src="https://rakryan.id/images/RakryanVET.png" alt="Rakryan VET Logo">
                </a>

                <button @click="toggleMenu" class="flex items-center text-gray-900 focus:outline-none">
                    <svg v-if="!isMenuOpen" class="w-8 h-8 text-primary" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                    <svg v-else class="w-8 h-8 text-primary" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu Links -->
            <nav v-show="isMenuOpen" class="flex flex-col items-center space-y-4 pb-5 text-base font-medium">
                <Link class="w-full text-center py-2" :class="isActiveMenu('home')" :href="route('home')">Beranda</Link>
                <Link class="w-full text-center py-2" :class="isActiveMenu('layanan')" :href="route('layanan')">Layanan</Link>
                <Link class="w-full text-center py-2" :class="isActiveMenu('produk')" :href="route('produk')">Produk</Link>
                <Link class="w-full text-center py-2" :class="isActiveMenu('artikel')" :href="route('artikel')">Artikel</Link>
                <Link class="w-full text-center py-2" :class="isActiveMenu('tentang')" :href="route('tentang')">Tentang Kami</Link>
                <button class="w-10/12 inline-flex text-white text-sm font-medium bg-primary border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded-xl mt-2">
                    Login
                </button>
            </nav>
        </div>
    </header>
</template>

<style scoped>
nav[v-show="isMenuOpen"] {
    display: none;
}
</style>
