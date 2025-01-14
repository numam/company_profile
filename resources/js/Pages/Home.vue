<script setup>
import { Head, Link } from '@inertiajs/vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import CardProduk from '@/Components/Card/CardProduk.vue';
import Footer from '@/Components/Footer.vue';

defineProps({
    produks: Object,
    artikels: Object,
});

const formatDate = (date) => {
  return new Date(date).toLocaleDateString('id-ID', {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
  });
};

</script>

<template>

    <Head title="Beranda" />

    <GuestLayout />
    <div class="min-h-screen bg-primary">


        <!-- Hero Section -->
        <section class="body-font relative min-h-screen">
            <img class="absolute inset-0 w-full h-full object-cover opacity-30"
                src="https://www.mashed.com/img/gallery/the-absolute-best-steakhouses-in-america/intro-1636573969.webp"
                alt="Background Image">
            <div class="mx-auto container flex flex-col justify-center items-center relative z-10 h-screen">
                <div
                    class="mx-5 sm:mx-8 md:mx-12 lg:mx-20 w-full md:w-2/5 flex flex-col items-center justify-center text-center">
                    <h1 class="title-font text-2xl sm:text-6xl mb-6 font-light text-secondary uppercase">
                        D'MeatBoy
                    </h1>
                    <p class="mb-8 leading-relaxed text-sm sm:text-lg font-normal text-white">
                        Kami menghadirkan daging premium segar, berkualitas tinggi, langsung dari sumber terbaik untuk
                        memenuhi kebutuhan Anda.
                    </p>
                    <div class="flex justify-center">
                        <PrimaryButton :href="route('produk')" class="w-full">
                            Pesan Sekarang
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" data-slot="icon" fill="none" stroke-width="1.5"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3"></path>
                            </svg>
                        </PrimaryButton>
                    </div>
                </div>
            </div>
        </section>



        <!-- About us -->
        <section class="md:pt-24 md:px-20 pt-16 px-10">
            <div class="mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p
                        class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">
                        Daging Premium Untuk Kamu Yang Spesial!</p>
                    <p class="mt-6 text-base text-white">
                        Kami adalah penyedia daging premium yang berkomitmen untuk memberikan kualitas terbaik. Dengan
                        proses pemilihan yang ketat dan standar kebersihan tinggi, kami memastikan Anda mendapatkan
                        daging segar, sehat, dan penuh rasa.
                    </p>
                    <p class="mt-6">
                        <Link :href="route('tentang')" class="text-sm/6 font-semibold text-secondary underline">
                        Pelajari Lebih Lanjut
                        <span aria-hidden="true">→</span>
                        </Link>
                    </p>
                </div>
                <div class="mx-auto mt-10 ">
                    <div class="flex flex-wrap md:-m-2 -m-1">
                        <div class="flex flex-wrap w-1/2">
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block"
                                    src="https://i.pinimg.com/736x/fe/32/a5/fe32a5f80f16a6d5155ae4ce5b83eed7.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block"
                                    src="https://i.pinimg.com/736x/1b/a3/18/1ba318530d807a244b5cbdf0740179a7.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-full">
                                <img alt="gallery" class="w-full h-full object-cover object-center block"
                                    src="https://i.pinimg.com/736x/c5/37/02/c5370207b2da3807fde9594482845800.jpg">
                            </div>
                        </div>
                        <div class="flex flex-wrap w-1/2">
                            <div class="md:p-2 p-1 w-full">
                                <img alt="gallery" class="w-full h-full object-cover object-center block"
                                    src="https://i.pinimg.com/736x/3e/12/24/3e12241ac103ade220b3c3ed9f3bbcaa.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block"
                                    src="https://i.pinimg.com/736x/8f/08/c1/8f08c17ae93933ad730d31c71e629b0c.jpg">
                            </div>
                            <div class="md:p-2 p-1 w-1/2">
                                <img alt="gallery" class="w-full object-cover h-full object-center block"
                                    src="https://i.pinimg.com/736x/f4/dc/50/f4dc505081bb7e0719b95e7f735b66a9.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Produk -->
        <section class="md:pt-24 md:px-20 pt-16 px-10">
            <div class="mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p
                        class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">
                        Pilihan Produk Premium Kami
                    </p>
                    <p class="mt-6 text-base text-white">
                        Nikmati beragam pilihan daging premium yang dipilih secara khusus untuk memenuhi kebutuhan dan
                        selera Anda.
                    </p>
                    <p class="mt-6">
                        <Link :href="route('produk')" class="text-sm/6 font-semibold text-secondary underline">
                        Semua Produk
                        <span aria-hidden="true">→</span>
                        </Link>
                    </p>
                </div>
                <div class="mx-auto mt-10 ">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div v-for="item in produks" :key="item.id">
                            <CardProduk :content="{
                                image: item.image,
                                title: item.title,
                                price: item.price,
                                description: item.description
                            }" :href="'/produk/' + item.slug" />
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Layanan -->
        <section class="md:pt-24 md:px-20 pt-16 px-10">
            <div class="mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p
                        class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">
                        Mengapa Harus Kami ?
                    </p>
                    <p class="mt-6 text-base text-white">
                        Kami Menyediakan pelayanan terbaik untuk Anda, mulai dari penyediaan daging premium berkualitas,
                        pengemasan higienis, hingga pengiriman tepat waktu untuk memastikan kepuasan Anda.
                    </p>
                    <p class="mt-6">
                        <Link :href="route('layanan')" class="text-sm/6 font-semibold text-secondary underline">
                        Selengkapnya
                        <span aria-hidden="true">→</span>
                        </Link>
                    </p>
                </div>
                <div class="mx-auto mt-10 grid grid-cols-1 md:grid-cols-2">
                    <div class="p-4 w-full">
                        <div
                            class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                            <div
                                class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-lg title-font text-secondary font-semibold mb-3">Pengiriman Cepat dan
                                    Aman</h2>
                                <p class="leading-relaxed text-white text-base">
                                    Pengiriman daging premium dengan kemasan berkualitas untuk menjaga kesegaran hingga
                                    sampai di tangan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 w-full">
                        <div
                            class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                            <div
                                class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h7l5-5 6 6-5 5h-7l-6 6z" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-lg title-font text-secondary font-semibold mb-3">Konsultasi Pemotongan
                                    Daging</h2>
                                <p class="leading-relaxed text-white text-base">
                                    Layanan konsultasi untuk membantu Anda memilih potongan daging terbaik sesuai
                                    kebutuhan masakan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 w-full">
                        <div
                            class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                            <div
                                class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-lg title-font text-secondary font-semibold mb-3">Pemotongan Sesuai
                                    Pesanan</h2>
                                <p class="leading-relaxed text-white text-base">
                                    Pilihan untuk memesan daging dengan ukuran dan pemotongan sesuai keinginan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 w-full">
                        <div
                            class="flex border-2 rounded-lg border-gray-200 border-opacity-50 p-8 sm:flex-row flex-col">
                            <div
                                class="w-16 h-16 sm:mr-8 sm:mb-0 mb-4 inline-flex items-center justify-center rounded-full bg-secondary text-white flex-shrink-0">
                                <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V5a2 2 0 00-2-2H6a2 2 0 00-2 2v8m16 0h-8m4 4h4m-4 4h4" />
                                </svg>
                            </div>
                            <div class="flex-grow">
                                <h2 class="text-lg title-font text-secondary font-semibold mb-3">Layanan Pelanggan
                                    Responsif</h2>
                                <p class="leading-relaxed text-white text-base">
                                    Tim kami selalu siap menjawab pertanyaan dan memberikan solusi terbaik untuk
                                    kebutuhan Anda.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Testimonial -->
        <div class="relative isolate bg-primary md:pt-24 md:px-20 pt-16 px-10">
            <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl"
                aria-hidden="true">
                <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end"
                aria-hidden="true">
                <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p
                        class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">
                        Testimonial
                    </p>
                    <p class="mt-6 text-base text-white">
                        Pelanggan yang puas adalah aset yang berharga bagi kami.
                    </p>
                </div>
                <div
                    class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm/6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
                    <figure
                        class="rounded-2xl bg-white shadow-lg ring-1 ring-gray-900/5 sm:col-span-2 xl:col-start-2 xl:row-end-1">
                        <blockquote class="p-6 text-lg font-semibold tracking-tight text-gray-900 sm:text-xl/8">
                            <p>
                                “The experience of buying premium meat here is really amazing! The quality is very
                                fresh, the texture is tender, and the taste is so juicy when cooked. The service is also
                                very friendly and professional. This is the best choice for my restaurant special meal.
                                Good job D.MeatBoy!”
                            </p>
                        </blockquote>
                        <figcaption
                            class="flex flex-wrap items-center gap-x-4 gap-y-4 border-t border-gray-900/10 px-6 py-4 sm:flex-nowrap">
                            <img class="size-10 flex-none rounded-full bg-gray-50"
                                src="data:image/webp;base64,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"
                                alt="">
                            <div class="flex-auto">
                                <div class="font-semibold">Salt Bae</div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="space-y-8 xl:contents xl:space-y-0">
                        <div class="space-y-8 xl:row-span-2">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>
                                        “Saya selalu mencari daging berkualitas tinggi, dan akhirnya menemukan tempat
                                        yang tepat. Dagingnya segar, mudah diproses, dan rasanya luar biasa!”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50"
                                        src="https://media.licdn.com/dms/image/v2/D5603AQG4W39PGeJksQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1705478478113?e=1742428800&v=beta&t=XS2BZuO5jkZza6CflJQldsOdK7iUTYfWEgwGbDc4pXs"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">Yusuf Nur M.</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>
                                        “Pelayanan yang sangat memuaskan dan daging premium yang saya beli benar-benar
                                        sebanding dengan harganya. Rasanya sangat lezat dan pasti akan saya beli lagi.”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50 bg-cover"
                                        src="https://dcfiles.umm.ac.id/Poto/2022/202210370311301.JPG" alt="">
                                    <div>
                                        <div class="font-semibold">M. Rafi Arkana</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="space-y-8 xl:row-start-1">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>
                                        “Pembelian daging premium di sini sangat memuaskan. Dagingnya segar dan lezat,
                                        membuat hidangan apa pun menjadi lebih istimewa. Saya pasti akan menjadi
                                        pelanggan setia.”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50"
                                        src="https://dcfiles.umm.ac.id/Poto/2022/202210370311284.JPG" alt="">
                                    <div>
                                        <div class="font-semibold">Admiral Iman A.</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="space-y-8 xl:contents xl:space-y-0">
                        <div class="space-y-8 xl:row-start-1">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>
                                        “Daging premium yang saya beli benar-benar memenuhi ekspektasi. Rasanya luar
                                        biasa, empuk, dan sangat cocok untuk berbagai jenis masakan. Saya sangat puas!”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50"
                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">Tom Cook</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="space-y-8 xl:row-span-2">
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>
                                        “Tidak hanya dagingnya yang luar biasa, tapi proses pemesanannya juga sangat
                                        mudah. Daging premium ini benar-benar membuat hidangan saya lebih istimewa.”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50"
                                        src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt="">
                                    <div>
                                        <div class="font-semibold">Drestanto Budi D.</div>
                                    </div>
                                </figcaption>
                            </figure>
                            <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                                <blockquote class="text-gray-900">
                                    <p>
                                        “Tidak pernah kecewa dengan kualitas daging premium di sini! Setiap potongan
                                        daging yang saya beli selalu segar, empuk, dan rasanya luar biasa.”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-6 flex items-center gap-x-4">
                                    <img class="size-10 rounded-full bg-gray-50"
                                        src="https://dcfiles.umm.ac.id/Poto/2022/202210370311305.JPG" alt="">
                                    <div>
                                        <div class="font-semibold">Nabil Eka P.</div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Artikel -->
        <section class="md:pt-24 md:px-20 pt-16 px-10">
            <div class="mx-auto px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p
                        class="mt-2 text-pretty text-2xl font-medium tracking-tight text-secondary sm:text-5xl lg:text-balance">
                        Artikel Kami
                    </p>
                    <p class="mt-6 text-base text-white">
                        Nikmati beberapa pilihan dari artikel berkualitas yang telah kami buat.
                    </p>
                    <p class="mt-6">
                        <Link :href="route('produk')" class="text-sm/6 font-semibold text-secondary underline">
                        Selengkapnya
                        <span aria-hidden="true">→</span>
                        </Link>
                    </p>
                </div>
                <div class="mx-auto mt-10 ">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div v-for="item in artikels" :key="item.id"
                            class="bg-third rounded-xl overflow-hidden">
                            <div class="relative h-48">
                                <img :src="item.image" :alt="item.title"
                                    class="absolute inset-0 w-full h-full object-cover" />
                            </div>
                            <div class="p-6">
                                <p class="text-secondary text-sm mb-2">{{ formatDate(item.date) }}</p>
                                <h3 class="text-white text-xl font-bold mb-3">{{ item.title }}</h3>
                                <p class="text-gray-400 text-sm mb-4 line-clamp-2 ">{{ item.excerpt }}</p>
                                <Link :href="'/artikel/' + item.slug"
                                    class="hover:text-amber-400 text-secondary transition-colors inline-flex items-center">
                                Read more
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <Footer />
</template>
