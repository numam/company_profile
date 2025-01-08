<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Register" />

    <div class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
         style="background-image: url('/assets/login.png');">
        <!-- Overlay untuk efek gelap -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- Card Register -->
        <div class="relative z-10 bg-black p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-lime-400">Register</h2>
            <p class="text-sm text-center text-gray-400 mb-6">Create your account to get started!</p>

            <form @submit.prevent="submit" class="space-y-4">
                <!-- Input Name -->
                <div>
                    <input
                        type="text"
                        v-model="form.name"
                        placeholder="Enter your Name"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-lime-400"
                        required
                    />
                    <p v-if="form.errors.name" class="text-red-400 text-sm mt-1">{{ form.errors.name }}</p>
                </div>

                <!-- Input Email -->
                <div>
                    <input
                        type="email"
                        v-model="form.email"
                        placeholder="Enter your Email"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-lime-400"
                        required
                    />
                    <p v-if="form.errors.email" class="text-red-400 text-sm mt-1">{{ form.errors.email }}</p>
                </div>

                <!-- Input Password -->
                <div>
                    <input
                        type="password"
                        v-model="form.password"
                        placeholder="Enter your Password"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-lime-400"
                        required
                    />
                    <p v-if="form.errors.password" class="text-red-400 text-sm mt-1">{{ form.errors.password }}</p>
                </div>

                <!-- Input Password Confirmation -->
                <div>
                    <input
                        type="password"
                        v-model="form.password_confirmation"
                        placeholder="Confirm your Password"
                        class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-lime-400"
                        required
                    />
                    <p v-if="form.errors.password_confirmation" class="text-red-400 text-sm mt-1">
                        {{ form.errors.password_confirmation }}
                    </p>
                </div>

                <!-- Tombol Register -->
                <button
                    type="submit"
                    class="w-full bg-lime-400 text-black font-semibold py-2 rounded-md hover:bg-lime-300"
                    :disabled="form.processing"
                >
                    Register
                </button>

                <!-- Link ke Login -->
                <div class="text-center mt-4">
                    <p class="text-gray-400 text-sm">
                        Already have an account?
                        <Link
                            :href="route('login')"
                            class="text-lime-400 hover:underline"
                        >
                            Login here
                        </Link>
                    </p>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
input::placeholder {
    color: #9ca3af;
}
</style>
