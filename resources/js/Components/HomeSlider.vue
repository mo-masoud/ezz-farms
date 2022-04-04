<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<template>
	<div id="default-carousel" class="relative" data-carousel="static">
		<div class="overflow-hidden relative mt-20 h-slider">
			<div
				class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
				data-carousel-item=""
			>
				<div
					class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 flex flex-col items-center justify-center w-full"
				>
					<h1 class="text-white font-bold text-10xl">Creamy Cheese</h1>
					<h3 class="uppercase text-white font-semibold text-3xl -mt-4">
						Fresh . Local . Delivered
					</h3>
					<Link
						href="#"
						class="uppercase text-sm font-bold tracking-tighter text-gray-900 mt-20 bg-primary border-2 border-transparent hover:bg-transparent hover:text-white hover:border-white transition duration-300 ease-in-out py-3 px-7"
					>
						View Our Products
					</Link>
				</div>
				<img
					src="https://images.unsplash.com/photo-1619865482177-71d195df05b1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format"
					class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-contain brightness-75 object-center"
					alt="..."
				/>
			</div>

			<div
				class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
				data-carousel-item=""
			>
				<div
					class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 flex flex-col items-center justify-center w-full"
				>
					<h1 class="text-white font-bold text-10xl">Creamy Cheese 2</h1>
					<h3 class="uppercase text-white font-semibold text-3xl -mt-4">
						Fresh . Local . Delivered
					</h3>
					<Link
						href="#"
						class="uppercase text-sm font-bold tracking-tighter text-gray-900 mt-20 bg-primary border-2 border-transparent hover:bg-transparent hover:text-white hover:border-white transition duration-300 ease-in-out py-3 px-7"
					>
						View Our Products
					</Link>
				</div>
				<img
					src="https://images.unsplash.com/photo-1570042225831-d98fa7577f1e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y293fGVufDB8fDB8fA%3D%3D&auto=format"
					class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-contain brightness-75 object-center"
					alt="..."
				/>
			</div>

			<div
				class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
				data-carousel-item=""
			>
				<div
					class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 flex flex-col items-center justify-center w-full"
				>
					<h1 class="text-white font-bold text-10xl">Creamy Cheese 3</h1>
					<h3 class="uppercase text-white font-semibold text-3xl -mt-4">
						Fresh . Local . Delivered
					</h3>
					<Link
						href="#"
						class="uppercase text-sm font-bold tracking-tighter text-gray-900 mt-20 bg-primary border-2 border-transparent hover:bg-transparent hover:text-white hover:border-white transition duration-300 ease-in-out py-3 px-7"
					>
						View Our Products
					</Link>
				</div>
				<img
					src="https://images.unsplash.com/photo-1507103011901-e954d6ec0988?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8Y293fGVufDB8fDB8fA%3D%3D&auto=format"
					class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 object-contain brightness-75 object-center"
					alt="..."
				/>
			</div>
		</div>

		<div
			class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2"
		>
			<button
				type="button"
				class="w-3 h-3 rounded-full bg-white dark:bg-gray-800"
				aria-current="true"
				aria-label="Slide 1"
				data-carousel-slide-to="0"
			></button>
			<button
				type="button"
				class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
				aria-current="false"
				aria-label="Slide 2"
				data-carousel-slide-to="1"
			></button>
			<button
				type="button"
				class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
				aria-current="false"
				aria-label="Slide 3"
				data-carousel-slide-to="2"
			></button>
		</div>
	</div>
</template>
