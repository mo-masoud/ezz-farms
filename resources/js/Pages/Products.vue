<script>
import { Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

import ProductsCart from '@/Components/Cart/ProductsCart.vue'
import MainLink from '@/Components/MainLink.vue'

import VueSlider from 'vue-slider-component'
import 'vue-slider-component/theme/antd.css'
import ProductCart from '@/Components/ProductCart.vue'

export default {
	components: {
		Link,
		AppLayout,
		ProductsCart,
		VueSlider,
		MainLink,
		ProductCart,
	},
	data() {
		return {
			priceRange: [0, 140],
			options: {
				dotSize: 14,
				width: 'auto',
				height: 4,
				contained: false,
				direction: 'ltr',
				data: null,
				dataLabel: 'label',
				dataValue: 'value',
				min: 0,
				max: 140,
				interval: 1,
				disabled: false,
				clickable: true,
				duration: 0.5,
				adsorb: false,
				lazy: false,
				tooltip: 'active',
				tooltipPlacement: 'top',
				tooltipFormatter: void 0,
				useKeyboard: false,
				keydownHook: null,
				dragOnClick: false,
				enableCross: true,
				fixed: false,
				minRange: void 0,
				maxRange: void 0,
				order: true,
				marks: false,
				dotOptions: void 0,
				dotAttrs: void 0,
				process: true,
				dotStyle: void 0,
				railStyle: void 0,
				processStyle: void 0,
				tooltipStyle: void 0,
				stepStyle: void 0,
				stepActiveStyle: void 0,
				labelStyle: void 0,
				labelActiveStyle: void 0,
			},
			viewProductOption: 'grid',
			sortBy: 'latest',
			sortByOptions: [
				{
					key: 'popularity',
					text: 'Sort by popularity',
				},
				{
					key: 'rating',
					text: 'Sort by average rating',
				},
				{
					key: 'latest',
					text: 'Sort by latest',
				},
				{
					key: 'low_high',
					text: 'Sort by price: low to high',
				},
				{
					key: 'high_low',
					text: 'Sort by price: high to low',
				},
			],
		}
	},
}
</script>
<template>
	<AppLayout>
		<div
			class="container mx-auto flex flex-col md:flex-row items-start space-x-0 md:space-x-8 px-12 md:px-32 my-20 md:my-40"
		>
			<div
				class="w-full mt-12 md:mt-0 order-2 md:order-1 md:w-1/5 h-full md:min-h-screen bg-light-primary px-8 py-12"
			>
				<ProductsCart />
				<div class="mt-28">
					<h1 class="text-3xl font-bold">Price Filter</h1>
					<vue-slider
						ref="slider"
						v-model="priceRange"
						v-bind="options"
					></vue-slider>
					<div class="text-right mt-2 text-gray-600">
						Price:
						<span class="text-gray-900 font-bold">
							{{ priceRange[0] }} EG - {{ priceRange[1] }} EG
						</span>
					</div>
					<div class="flex items-end justify-end mt-4">
						<MainLink text="filter" />
					</div>
				</div>
				<div class="mt-16">
					<h1 class="text-3xl font-bold">Categories</h1>
					<ul class="space-y-3 mt-4 list-disc pl-5 text-primary text-xl">
						<li>
							<Link class="text-gray-600 text-base" :href="route('products')">
								Butter
							</Link>
						</li>
						<li>
							<Link class="text-gray-600 text-base" :href="route('products')">
								Cheese
							</Link>
						</li>
						<li>
							<Link class="text-gray-600 text-base" :href="route('products')">
								Ice Cream
							</Link>
						</li>
						<li>
							<Link class="text-gray-600 text-base" :href="route('products')">
								Milk
							</Link>
						</li>
					</ul>
				</div>
			</div>
			<div
				class="w-full order-1 md:order-2 md:w-4/5 min-h-full md:min-h-screen"
			>
				<div class="flex items-center justify-between">
					<div class="hidden md:flex items-center">
						<button @click="viewProductOption = 'grid'">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								class="h-8 w-8 text-primary transition-all duration-700 ease-in-out"
								:class="{ 'text-opacity-40': viewProductOption === 'list' }"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
								stroke-width="2"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
								/>
							</svg>
						</button>
						<button @click="viewProductOption = 'list'">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								class="h-8 w-8 text-primary transition-all duration-700 ease-in-out"
								:class="{ 'text-opacity-40': viewProductOption === 'grid' }"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
								stroke-width="2"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M4 6h16M4 10h16M4 14h16M4 18h16"
								/>
							</svg>
						</button>
					</div>
					<div>
						<select
							class="py-3 pl-8 pr-12 text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary"
							name="sort_by"
							v-model="sortBy"
						>
							<option
								v-for="(sort, i) in sortByOptions"
								:key="i"
								:value="sort.key"
							>
								{{ sort.text }}
							</option>
						</select>
					</div>
				</div>
				<div
					class="grid gap-8 mt-12 transition-all duration-700 ease-in-out"
					:class="[
						viewProductOption === 'grid'
							? 'grid-cols-1 md:grid-cols-3'
							: 'grid-cols-1',
					]"
				>
					<ProductCart
						v-for="i in 12"
						:key="i"
						:item="{
							title: 'Item ' + i,
							price: 100 * i,
						}"
					/>
				</div>
			</div>
		</div>
	</AppLayout>
</template>
