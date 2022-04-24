<script setup>
import { Link } from '@inertiajs/inertia-vue3'

import MainLink from '@/Components/MainLink.vue'
import CowIcon from '@/Components/CowIcon.vue'
</script>

<template>
	<div class="container mx-auto px-8 md:px-20 lg:px-40 my-28">
		<div class="flex flex-col items-center">
			<h1 class="text-6xl font-bold">Categories</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-primary"></span>
				<CowIcon width="32" height="32" color="#367F7B" />
				<span class="border-b h-1 w-14 border-primary"></span>
			</div>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-20">
			<div class="flex flex-col items-center justify-center">
				<img
					src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
					alt="meat 1"
					class="rounded-full h-60 w-60 object-cover"
				/>
				<Link
					href="#"
					class="text-2xl font-bold mt-6 hover:text-primary transition duration-150 ease-in-out"
				>
					Category 1
				</Link>
				<p class="text-center text-sm mt-4">
					Dairy farming’s been part of agriculture for thousands of years.
				</p>
			</div>
			<div class="flex flex-col items-center justify-center">
				<img
					src="https://images.unsplash.com/photo-1547050605-2f268cd5daf0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
					alt="meat 1"
					class="rounded-full h-60 w-60 object-cover"
				/>
				<Link
					href="#"
					class="text-2xl font-bold mt-6 hover:text-primary transition duration-150 ease-in-out"
				>
					Category 2
				</Link>
				<p class="text-center text-sm mt-4">
					Dairy farming’s been part of agriculture for thousands of years.
				</p>
			</div>
			<div class="flex flex-col items-center justify-center">
				<img
					src="https://images.unsplash.com/photo-1613454320437-0c228c8b1723?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
					alt="meat 1"
					class="rounded-full h-60 w-60 object-cover"
				/>
				<Link
					href="#"
					class="text-2xl font-bold mt-6 hover:text-primary transition duration-150 ease-in-out"
				>
					Category 3
				</Link>
				<p class="text-center text-sm mt-4">
					Dairy farming’s been part of agriculture for thousands of years.
				</p>
			</div>
			<div class="flex flex-col items-center justify-center">
				<img
					src="https://images.unsplash.com/photo-1551028150-64b9f398f678?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
					alt="meat 1"
					class="rounded-full h-60 w-60 object-cover"
				/>
				<Link
					href="#"
					class="text-2xl font-bold mt-6 hover:text-primary transition duration-150 ease-in-out"
				>
					Category 4
				</Link>
				<p class="text-center text-sm mt-4">
					Dairy farming’s been part of agriculture for thousands of years.
				</p>
			</div>
		</div>

		<div class="flex items-center justify-center">
			<MainLink href="#" text="view all products" class="mt-24" />
		</div>
	</div>
</template>
