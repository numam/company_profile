<script setup>
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password" />

    <div class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
        style="background-image: url('/assets/login.png');">
        <!-- Overlay untuk efek gelap -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- Card Forgot Password -->
        <div class="relative z-10 bg-primary p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-secondary">Forgot Password</h2>
            <p class="text-sm text-center text-gray-400 mb-6">
                Enter your email, and we'll send you a password reset link.
            </p>

            <!-- Status Message -->
            <div v-if="status" class="mb-4 text-sm font-medium text-green-500 text-center">
                {{ status }}
            </div>

            <form @submit.prevent="submit" class="space-y-4">
                <!-- Input Email -->
                <div>
                    <input
                        type="email"
                        v-model="form.email"
                        placeholder="Enter your Email"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-secondary"
                        required
                        autofocus
                    />
                    <div v-if="form.errors.email" class="text-red-500 text-sm mt-1">
                        {{ form.errors.email }}
                    </div>
                </div>

                <!-- Tombol Submit -->
                <button
                    type="submit"
                    class="w-full bg-secondary text-black font-semibold py-2 rounded-md hover:bg-secondary"
                    :disabled="form.processing"
                >
                    Send Password Reset Link
                </button>

                <!-- Tombol Back to Login -->
                <a
                    :href="route('login')"
                    class="w-full block text-center bg-gray-800 text-white font-semibold py-2 rounded-md hover:bg-gray-700"
                >
                    Back to Login
                </a>
            </form>
        </div>
    </div>
</template>

<style scoped>
input::placeholder {
    color: #9ca3af;
}
</style>
