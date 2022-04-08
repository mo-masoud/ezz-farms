<script setup>
import { Link } from '@inertiajs/inertia-vue3'

import MainLink from '@/Components/MainLink.vue'
import CowIcon from '@/Components/CowIcon.vue'
import ProductCart from '@/Components/ProductCart.vue'
</script>
<template>
	<div class="container mx-auto px-8 md:px-20 lg:px-40 my-28">
		<div class="flex flex-col items-center">
			<h1 class="text-5xl lg:text-6xl font-bold">Top selling products</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-primary"></span>
				<CowIcon width="32" height="32" color="#FDC421" />
				<span class="border-b h-1 w-14 border-primary"></span>
			</div>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-20">
			<ProductCart
				v-for="i in 4"
				:key="i"
				:item="{ title: 'Item ' + i, price: 100 * i }"
			/>
		</div>
	</div>
</template>
