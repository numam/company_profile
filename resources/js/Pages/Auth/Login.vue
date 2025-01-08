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
        <Head title="Login" />

        <div class="min-h-screen flex items-center justify-center bg-cover bg-center relative"
            style="background-image: url('/assets/login.png');">
            <!-- Overlay untuk efek gelap -->
            <div class="absolute inset-0 bg-black/30"></div>

            <!-- Card Login -->
            <div class="relative z-10 bg-black p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-3xl font-bold text-center text-lime-400">Login</h2>
                <p class="text-sm text-center text-gray-400 mb-6">Welcome back! Please log in to access your account.</p>

                <form @submit.prevent="submit" class="space-y-4">
                    <!-- Input Email -->
                    <div>
                        <input
                            type="email"
                            v-model="form.email"
                            placeholder="Enter your Email"
                            class="w-full px-4 py-2 rounded-md bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-lime-400"
                            required
                        />
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
                    </div>

                    <!-- Forgot Password -->
                    <div class="text-right">
                        <Link
                            :href="route('password.request')"
                            class="text-sm text-lime-400 hover:underline"
                        >
                            Forgot Password?
                        </Link>
                    </div>

                    <!-- Tombol Login -->
                    <button
                        type="submit"
                        class="w-full bg-lime-400 text-black font-semibold py-2 rounded-md hover:bg-lime-300"
                        :disabled="form.processing"
                    >
                        Login
                    </button>

                    <!-- Tombol Sign Up -->
                    <button
                        type="button"
                        class="w-full bg-gray-800 text-white font-semibold py-2 rounded-md hover:bg-gray-700"
                    >
                        Sign Up
                    </button>
                </form>

        
            </div>
        </div>
    </template>

    <style scoped>
    input::placeholder {
        color: #9ca3af;
    }
    </style>
