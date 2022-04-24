<script setup>
import { defineProps } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'

const props = defineProps({
	href: String,
	text: String,
})
</script>

<template>
	<Link
		:href="href"
		class="uppercase inline-block tracking-tighter bg-primary px-8 py-3 text-xs font-bold text-white hover:brightness-90 transition-all duration-150 ease-in-out"
	>
		{{ text }}
	</Link>
</template>
