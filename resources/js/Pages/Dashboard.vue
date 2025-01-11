<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
     
        <div class="min-h-screen bg-primary py-12">
            <!-- Dashboard Summary Section -->
            <div class="container mx-auto px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card: Statistik Pengguna -->
                    <div class="bg-[#414141] p-6 rounded-2xl shadow-lg">
                        <h3 class="text-lg font-semibold text-secondary mb-2">Statistik Pengguna</h3>
                        <p class="text-white text-2xl font-bold">1,500</p>
                        <p class="text-gray-400 text-sm mt-2">Total pengguna terdaftar.</p>
                    </div>

                    <!-- Card: Data Transaksi -->
                    <div class="bg-[#414141] p-6 rounded-2xl shadow-lg">
                        <h3 class="text-lg font-semibold text-secondary mb-2">Data Transaksi</h3>
                        <p class="text-white text-2xl font-bold">325</p>
                        <p class="text-gray-400 text-sm mt-2">Transaksi berhasil bulan ini.</p>
                    </div>

                    <!-- Card: Pesan Masuk -->
                    <div class="bg-[#414141] p-6 rounded-2xl shadow-lg">
                        <h3 class="text-lg font-semibold text-secondary mb-2">Pesan Masuk</h3>
                        <p class="text-white text-2xl font-bold">45</p>
                        <p class="text-gray-400 text-sm mt-2">Pesan baru dari pelanggan.</p>
                    </div>
                </div>
            </div>

            <!-- Statistik Grafik -->
            <div class="container mx-auto px-6 lg:px-8 mt-12">
                <div class="bg-[#414141] p-6 rounded-2xl shadow-lg">
                    <h3 class="text-lg font-semibold text-secondary mb-4">Statistik Penjualan</h3>
                    <p class="text-gray-400 text-sm">Grafik penjualan bulan ini (placeholder untuk grafik).</p>
                    <div class="mt-6 h-64 bg-[#313131] rounded-lg flex justify-center items-center">
                        <p class="text-gray-500">[Grafik Penjualan]</p>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
