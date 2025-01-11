<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

    const props = defineProps ({
        content: {
            type: Object,
            required: true
        },
        href: {
            type: String,
            default: null
        }
    })

    const isLink = computed(() => !!props.href)

</script>


<template>
    <div class="bg-third shadow transform transition duration-500 rounded-2xl">
        <Link
            v-if="isLink" 
            :href="href"
        >
        <img 
            :src="content.image"
            class="transition-transform duration-300 w-full h-60 object-cover rounded-t-2xl" />
        <div class="p-5">
            <h3 class="font-bold text-lg text-white lg:text-xl animate-fade-in">
                {{ content.title }}
            </h3>
            <p class="text-secondary animate-fade-in">
                {{ content.price }}
            </p>
            <p class="text-gray-400 text-sm mt-2 line-clamp-2 animate-fade-in">
                {{ content.description }}
            </p>
        </div>
        </Link>
    </div>
</template>