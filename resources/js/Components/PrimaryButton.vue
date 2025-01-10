<script setup>
    import { Link } from '@inertiajs/vue3'
    import { computed } from 'vue'

    const props = defineProps({
        type: {
            type: String,
            default: "button",
        },
        value: {
            type: String,
            default: null,
        },
        href: {
            type: String,
            default: null,
        }
    })

    const isLink = computed(() => !!props.href)

    const buttonClass = "flex items-center justify-center px-3 h-11 text-sm font-medium text-white transition duration-300 ease-in-out border border-transparent rounded-xl shadow-sm outline-none bg-secondary hover:bg-primary hover:border-secondary hover:text-secondary"
</script>

<template>
    <Link
        v-if="isLink"
        :href="href"
        :class="buttonClass"
    >
        <template v-if="value">{{ value }}</template>
        <template v-else>
            <slot />
        </template>
    </Link>

    <button
        v-else
        :type="type"
        :class="buttonClass"
    >
        <template v-if="value">{{ value }}</template>
        <template v-else>
            <slot />
        </template>
    </button>
</template>
