<script>
import { Link } from '@inertiajs/inertia-vue3'

import Slider from '@vueform/slider'
import '@vueform/slider/themes/default.css'

import AppLayout from '@/Layouts/AppLayout.vue'

import ProductsCart from '@/Components/Cart/ProductsCart.vue'

export default {
	components: { Link, Slider, AppLayout, ProductsCart },
	data() {
		return {
			priceRange: [0, 140],
		}
	},
}
</script>
<template>
	<AppLayout>
		<div class="flex items-center space-x-8 px-40 my-40">
			<div class="w-1/5 bg-light-primary px-8 py-12">
				<ProductsCart />
				<div class="mt-28">
					<h1 class="text-4xl font-bold">Price Filter</h1>
					<Slider v-model="priceRange" class="mt-4" />
					<div class="text-right mt-2 text-gray-600">
						Price:
						<span class="text-gray-900 text-2xl font-bold"
							>{{ priceRange[0] }} EG - {{ priceRange[1] }} EG</span
						>
					</div>
				</div>
			</div>
			<div class="w-4/5 h-screen bg-blue-500"></div>
		</div>
	</AppLayout>
</template>
