<template>

  <Head title="Produk Kami" />
  <GuestLayout />
  <div class="min-h-screen bg-primary">
    <div class="md:pt-24 md:px-20 pt-16 px-10">
      <!-- Bagian Header -->
      <div class="flex flex-col lg:flex-row w-full items-center mb-6 lg:mb-12">
        <div class="flex-1 text-center lg:text-left">
          <div class="inline-block bg-primary text-secondary px-4 py-2 rounded">
            <h1 class="text-2xl lg:text-6xl font-bold mb-4 animate-fade-in">Lengkapi masakan Anda</h1>
          </div>
          <p class="mb-6 text-gray-400 lg:text-lg max-w-md animate-slide-in-left">
            Cara mudah untuk membeli daging berkualitas tinggi dan terjangkau untuk masakan Anda yang didukung D'MeatBoy
          </p>
        </div>
        <img
          src="https://simpsonsmeats.com/cdn/shop/collections/Dry_Aged_and_Prime_Strip_Steak.jpg?v=1661459906&width=5325"
          alt="Hidangan Daging Lezat"
          class="mt-4 lg:mt-0 ml-0 lg:ml-6 xl:ml-12 rounded shadow-lg w-full lg:w-3/5 xl:w-2/5 h-auto animate-zoom-in" />
      </div>

      <!-- Bagian Paling Populer -->
      <div class="mt-10">
        <h2 class="text-xl lg:text-2xl font-semibold mb-4 text-center text-secondary animate-fade-in">Paling Populer
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="(produk, index) in produkList.slice(0, 3)" :key="index">
            <CardProduk 
              :content="{
                image: produk.image,
                title: produk.title,
                price: produk.price,
                description: produk.description
              }" 
              :href="'/produk/' + produk.slug" 
            />
          </div>
        </div>
      </div>

      <!-- Menambahkan Tulisan Semua Produk -->
      <div class="mt-12">
        <h3 class="text-2xl font-semibold text-secondary animate-fade-in">Semua Produk</h3>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div v-for="(produk, index) in produkList" :key="index">
            <CardProduk 
              :content="{
                image: produk.image,
                title: produk.title,
                price: produk.price,
                description: produk.description
              }" 
              :href="'/produk/' + produk.slug" 
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { reactive } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import CardProduk from '@/Components/Card/CardProduk.vue';

// Daftar produk reaktif dengan lebih banyak produk
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
    description: 'Dikenal sebagai potongan daging yang sempurna untuk perayaan atau acara istimewa, Prime Rib memiliki cita rasa yang kaya dan tekstur yang sangat lembut, menjadikannya pilihan favorit para pecinta steak di seluruh dunia juga di kenal salah satu potongan daging sapi terbaik yang berasal dari bagian rusuk sapi.'
  },
  {
    id: 3,
    slug: 'tomahawk-steak',
    title: 'Tomahawk Steak',
    image: 'https://oneworlddeli.com/cdn/shop/products/DingleyDellPorkTomahawk01_DSCF4613_2000x2000_45f9463a-2e8d-46fb-98bb-9ca5e4fd8961_460x@2x.jpg?v=1652410424',
    price: 'Rp. 10.000.000',
    description: 'Potongan daging sapi khas yang masih memiliki tulang panjang, berasal dari bagian rib dengan ketebalan khusus untuk penyajian premium.'
  },
  {
    id: 4,
    slug: 'Iga (Ribs)',
    title: 'Iga (Ribs)',
    image: 'https://cdn.shopify.com/s/files/1/0573/8476/3576/files/4._Iga_Ribs_480x480.webp?v=1732169240',
    price: 'Rp. 12.000.000',
    description: 'Daging iga yang melekat di sekitar tulang rusuk memiliki tekstur yang lunak dengan banyak lemak yang mengelilinya. Meski tak sebanyak bagian sampil, daging iga juga mengandung jaringan ikat di perlekatannya dengan tulang..'
  },
  {
    id: 5,
    slug: 'Wagyu',
    title: 'Wagyu',
    image: 'https://www.masakapahariini.com/wp-content/uploads/2018/12/daging-wagyu-4.jpg',
    price: 'Rp. 17.000.000',
    description: 'Daging Wagyu adalah jenis daging sapi premium yang terkenal karena kualitasnya yang sangat tinggi, terutama dalam hal kelembutan dan marbling (lemak intramuskular). Wagyu berasal dari Jepang dan merupakan hasil dari pemeliharaan sapi dengan perhatian khusus terhadap diet dan teknik pemeliharaan yang unik. Marbling pada daging Wagyu memberikan rasa yang kaya dan tekstur yang sangat lembut, membuatnya sangat dihargai di dunia kuliner. '
  },
  {
    id: 6,
    slug: 'T-Bone',
    title: 'T-Bone',
    image: 'https://imgx.parapuan.co/crop/0x0:0x0/x/photo/2021/07/03/raw-meat-tbone-steak-and-cleaver-20210703041431.jpg',
    price: 'Rp. 7.500.000',
    description: 'Daging T-Bone adalah potongan daging sapi yang berasal dari bagian belakang tulang belakang sapi, tepatnya dari bagian loin dan short loin. Daging ini dinamakan "T-Bone" karena memiliki bentuk tulang yang menyerupai huruf "T", dengan dua potongan daging di kedua sisi tulang tersebut, T-Bone sangat cocok untuk dipanggang atau dipanggang di atas grill. Keberadaan tulang membuat daging ini lebih juicy saat dimasak. Potongan ini juga sering dijadikan pilihan steak premium di restoran steakhouse.'
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
