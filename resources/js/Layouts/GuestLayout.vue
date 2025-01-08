<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Topbar from '@/Components/Topbar/Topbar.vue';
import { ref, onMounted, onBeforeUnmount } from 'vue';

const showBackToTop = ref(false);

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

function handleScroll() {
  showBackToTop.value = window.scrollY > 200;
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onBeforeUnmount(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
  <div class="flex flex-col sm:justify-center items-center bg-white font-body">
    <div class="flex overflow-auto w-full lg:px-20 px-5 h-full">
      <div class="flex w-full">
        <Topbar :logo="logo"></Topbar>
      </div>
    </div>

    <slot />

    <button
      v-if="showBackToTop"
        @click="scrollToTop"
        class="fixed bottom-4 right-4 p-3 rounded-full bg-primary text-white transition"
        aria-label="Back to Top"
    >
      ⬆
    </button>
  </div>
</template>
