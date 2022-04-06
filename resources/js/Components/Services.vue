<script setup>
import MainLink from '@/Components/MainLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
</script>
<template>
	<div
		class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 md:gap-8 mt-72 mb-20 mx-auto px-8 md:px-20 xl:px-40"
	>
		<div v-for="n in 3" :key="n" class="mt-8">
			<div
				class="relative group transition-all duration-150 ease-in-out hover:shadow-2xl"
			>
				<div
					class="hidden absolute inset-0 z-10 group-hover:flex items-center justify-center transition-all duration-150 ease-in-out"
				>
					<Link href="#" class="rounded-full p-4 bg-white shadow-2xl">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							class="h-8 w-8 text-primary"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
							stroke-width="2"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"
							/>
						</svg>
					</Link>
				</div>
				<img
					src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/service3.jpg"
					alt="service 1"
					class="w-full h-full group-hover:brightness-50"
				/>
			</div>
			<h3 class="text-center font-semibold text-3xl mt-8">About us</h3>
			<p class="text-center text-gray-600 mt-6">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
				vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
				porta.
			</p>

			<div class="flex items-center justify-center mt-8">
				<MainLink :href="route('home') + '#about-us'" text="discover history" />
			</div>
		</div>
	</div>
</template>
