<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 border border rounded-md font-semibold text-xs text-green-header uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition">
        <slot />
    </button>
</template>
