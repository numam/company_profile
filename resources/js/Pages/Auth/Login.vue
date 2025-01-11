<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Login"/>

    <div class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
        style="background-image: url('/assets/login.png');">
        <!-- Overlay untuk efek gelap -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- Tombol Back -->
        <Link
            :href="route('home')" 
            class="absolute top-4 left-4 bg-primary text-secondary p-2 rounded-full hover:bg-gray-700"
        >
            <!-- Ikon Panah -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </Link>

        <!-- Card Login -->
        <div class="relative z-10 bg-primary p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-secondary">Login</h2>
            <p class="text-sm text-center text-gray-400 mb-6">Welcome back! Please log in to access your account.</p>

            <form @submit.prevent="submit" class="space-y-4">
                <!-- Input Email -->
                <div>
                    <input
                        type="email"
                        v-model="form.email"
                        placeholder="Enter your Email"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-secondary"
                        required
                    />
                </div>

                <!-- Input Password -->
                <div>
                    <input
                        type="password"
                        v-model="form.password"
                        placeholder="Enter your Password"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-secondary"
                        required
                    />
                </div>

                <!-- Tombol Login -->
                <button
                    type="submit"
                    class="w-full bg-secondary text-black font-semibold py-2 rounded-md hover:bg-secondary-300"
                    :disabled="form.processing"
                >
                    Login
                </button>

                <!-- Tombol Sign Up -->
                <Link
                    :href="route('register')"
                    class="w-full block text-center bg-gray-800 text-white font-semibold py-2 rounded-md hover:bg-gray-700"
                >
                    Sign Up
                </Link>
            </form>
        </div>
    </div>
</template>

<style scoped>
input::placeholder {
    color: #9ca3af;
}
</style>
