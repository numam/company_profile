<template>
  <Head title="Produk Kami" />
  <GuestLayout />
  <div class="w-full p-4 lg:p-8 bg-primary">
    <!-- Header Section -->
    <div class="flex flex-col lg:flex-row w-full items-center mb-6 lg:mb-12">
      <div class="flex-1 text-center lg:text-left">
        <div class="inline-block bg-primary text-secondary px-4 py-2 rounded">
          <h1 class="text-2xl lg:text-6xl font-bold mb-4 animate-fade-in">Lengkapi masakan anda</h1>
        </div>
        <p class="mb-6 text-gray-400 lg:text-lg max-w-md animate-slide-in-left">
          Cara mudah untuk membeli daging berkualitas tinggi dan terjangkau untuk masakan Anda yang didukung D'MeatBoy
        </p>
        <router-link :to="{ name: 'produk', params: { id: 1 } }">
          <button class="px-4 py-2 lg:px-6 lg:py-3 bg-secondary text-black rounded-full hover:bg-primary hover:text-secondary transition duration-300">
            Liat Semua Produk
          </button>
        </router-link>
      </div>
      <img
        src="https://simpsonsmeats.com/cdn/shop/collections/Dry_Aged_and_Prime_Strip_Steak.jpg?v=1661459906&width=5325"
        alt="Delicious Meat Dishes"
        class="mt-4 lg:mt-0 ml-0 lg:ml-6 xl:ml-12 rounded shadow-lg w-full lg:w-3/5 xl:w-2/5 h-auto animate-zoom-in"
      />
    </div>

    <!-- Most Popular Section -->
    <Link class="mt-10">
      <h2 class="text-xl lg:text-2xl font-semibold mb-4 text-center text-secondary animate-fade-in">Paling Populer</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div v-for="(produk, index) in produkList" :key="index" class="bg-gray-900 shadow rounded p-4 lg:p-6 transform transition duration-500 hover:scale-105">
            <Link :href="'/produk/' + produk.slug">
                <img
                    :src="produk.image"
                    :alt="produk.title"
                    class="mb-4 transition-transform duration-300 hover:scale-110 w-full h-60 object-cover animate-slide-in-up"
                />
                <h3 class="font-bold text-lg text-white lg:text-xl animate-fade-in">{{ produk.title }}</h3>
                <p class="text-secondary animate-fade-in">{{ produk.price }}</p>
                <p class="text-gray-400 text-sm mt-2 line-clamp-2 animate-fade-in">{{ produk.description }}</p>
            </Link>
        </div>
      </div>
    </Link>

    <!-- Where Convenience Meets Quality Section -->
    <div class="flex flex-col lg:flex-row items-center mt-10 lg:mt-16 p-4 lg:p-8 bg-primary rounded">
      <div class="flex-1 text-center lg:text-left">
        <h2 class="text-xl lg:text-4xl font-semibold text-secondary animate-slide-in-right">Tomahawk Steak</h2>
        <p class="text-white lg:text-lg animate-slide-in-left">
          Sebuah potongan daging sapi premium yang berasal dari bagian rusuk dengan tulang panjang yang menyerupai kapak (tomahawk). Potongan ini memiliki marbling yang moderat hingga kaya, memberikan rasa yang beraroma dan tekstur yang juicy.
        </p>
        <button class="mt-4 px-4 py-2 lg:px-6 lg:py-3 bg-secondary text-black rounded-full hover:bg-primary hover:text-secondary transition duration-300">Beli Sekarang</button>
      </div>
      <img
        src="https://images.squarespace-cdn.com/content/v1/59776eeef5e2314291c86837/1720550434867-9RBC01M2R92A9NVPIZ07/double+cut+chops.jpeg?format=1000w"
        alt="Doctor and Patient"
        class="mt-4 lg:mt-0 ml-0 lg:ml-9 rounded shadow-lg w-full lg:w-1/2 xl:w-1/3 h-auto animate-zoom-in"
      />
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';

// Daftar produk reaktif
const produkList = reactive([
  {
    id: 1,
    slug: 'ribeye-steak',
    title: 'Ribeye Steak',
    image: 'https://images.squarespace-cdn.com/content/v1/54b852a3e4b0b0eaa0ff938e/1424136172939-11EO3F7E1Z9U71CG6UV5/Bison+Tenderlion.jpg',
    price: 'Rp. 20.000.000',
    description: 'Potongan daging sapi yang berasal dari bagian rusuk (rib), dikenal karena marbling yang melimpah dan rasa yang kaya.'
  },
  {
    id: 2,
    slug: 'prime-rib',
    title: 'Prime Rib',
    image: 'https://oakavenuefarm.com/cdn/shop/collections/F47F11F4-EC03-4D10-91DC-7B8ED9522D0E.jpg?v=1729819820&width=2400',
    price: 'Rp. 13.000.000',
    description: 'Potongan daging sapi dengan tulang besar, biasanya berasal dari bagian rusuk tengah atau belakang, cocok untuk slow-cooking atau panggang.'
  },
  {
    id: 3,
    slug: 'tomahawk-steak',
    title: 'Tomahawk Steak',
    image: 'https://oneworlddeli.com/cdn/shop/products/DingleyDellPorkTomahawk01_DSCF4613_2000x2000_45f9463a-2e8d-46fb-98bb-9ca5e4fd8961_460x@2x.jpg?v=1652410424',
    price: 'Rp. 10.000.000',
    description: 'Potongan daging sapi khas yang masih memiliki tulang panjang, berasal dari bagian rib dengan ketebalan khusus untuk penyajian premium.'
  },
]);
</script>

<style>
@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes slide-in-left {
  from {
    transform: translateX(-100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slide-in-right {
  from {
    transform: translateX(100%);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes slide-in-up {
  from {
    transform: translateY(100%);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

@keyframes zoom-in {
  from {
    transform: scale(0.8);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}

.animate-fade-in {
  animation: fade-in 1s ease-in-out;
}

.animate-slide-in-left {
  animation: slide-in-left 1s ease-in-out;
}

.animate-slide-in-right {
  animation: slide-in-right 1s ease-in-out;
}

.animate-slide-in-up {
  animation: slide-in-up 1s ease-in-out;
}

.animate-zoom-in {
  animation: zoom-in 1s ease-in-out;
}

button {
  transition: background-color 0.3s ease, color 0.3s ease;
}

button.rounded-full {
  border-radius: 9999px;
}
</style>
