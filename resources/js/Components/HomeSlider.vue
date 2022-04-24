<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Carousel from '@/Components/Slider/Carousel.vue'
import Slide from '@/Components/Slider/Slide.vue'

const slides = [
	{
		id: 1,
		title: 'Creamy Cheese',
		subtitle: 'Fresh . Local . Delivered',
		image:
			'https://images.unsplash.com/photo-1619865482177-71d195df05b1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format',
	},
	{
		id: 2,
		title: 'Creamy Cheese 2',
		subtitle: 'Fresh . Local . Delivered',
		image:
			'https://images.unsplash.com/photo-1570042225831-d98fa7577f1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y293fGVufDB8fDB8fA%3D%3D&auto=format',
	},
	{
		id: 3,
		title: 'Creamy Cheese 3',
		subtitle: 'Fresh . Local . Delivered',
		image:
			'https://images.unsplash.com/photo-1507103011901-e954d6ec0988?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y293fGVufDB8fDB8fA%3D%3D&auto=format',
	},
]
</script>

<template>
	<Carousel
		class="h-72 md:h-slider"
		v-slot="{ currentSlide }"
		:navigation="false"
		:timeout="8000"
	>
		<Slide v-for="(slide, i) in slides" :key="i">
			<div
				v-show="currentSlide === i + 1"
				class="absolute top-0 left-0 w-full max-w-full h-full"
			>
				<div class="relative min-w-full h-full">
					<div
						class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 flex flex-col items-center justify-center w-full"
					>
						<h1 class="text-white font-bold text-4xl md:text-8xl lg:text-10xl">
							{{ slide.title }}
						</h1>
						<h3
							class="uppercase text-white font-semibold text-sm md:text-lg lg:text-3xl mt-0 md:-mt-4"
						>
							{{ slide.subtitle }}
						</h3>
						<Link
							href="#"
							class="uppercase text-xxs md:text-sm font-bold tracking-tighter text-white mt-6 md:mt-20 bg-primary border-2 border-transparent hover:bg-transparent hover:text-white hover:border-white transition duration-300 ease-in-out py-2 px-4 md:py-3 md:px-7"
						>
							View Our Products
						</Link>
					</div>
					<img
						:src="slide.image"
						alt="slide.title"
						class="min-w-full h-full object-cover brightness-75"
					/>
				</div>
			</div>
		</Slide>
	</Carousel>
</template>
