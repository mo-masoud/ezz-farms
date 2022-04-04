<script setup>
import { Link } from '@inertiajs/inertia-vue3'

import AppLayout from '@/Layouts/AppLayout.vue'
import HomeSlider from '@/Components/HomeSlider.vue'
import MainLink from '@/Components/MainLink.vue'
import AboutUs from '@/Components/AboutUs.vue'
import CowIcon from '@/Components/CowIcon.vue'
</script>

<template>
	<AppLayout>
		<HomeSlider />

		<!-- welcome message -->
		<div
			class="relative flex flex-col items-center bg-primary h-80 pt-10 w-full"
		>
			<h1 class="text-gray-900 font-bold text-6xl tracking-tight">
				Welcome to our farm!
			</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-gray-900"></span>
				<CowIcon width="32" height="32" color="#000000" />
				<span class="border-b h-1 w-14 border-gray-900"></span>
			</div>
			<p class="text-xl mx-auto w-3/5 text-center mt-2">
				Here you will find a wide range of healthy and fresh dairy products that
				were proudly produced at our farm by our farmers and cows. Welcome to
				Jacksons!
			</p>
			<img
				src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/big-cow.png"
				alt="Logo"
				class="absolute -bottom-40"
			/>
		</div>
		<!-- end welcome message -->

		<!-- services -->
		<div class="container grid grid-cols-3 gap-8 mt-80 mb-20 mx-auto px-40">
			<div>
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
					<MainLink
						:href="route('home') + '#about-us'"
						text="discover history"
					/>
				</div>
			</div>
			<div>
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
				<h3 class="text-center font-semibold text-3xl mt-8">Our services</h3>
				<p class="text-center text-gray-600 mt-6">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
					vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
					porta.
				</p>

				<div class="flex items-center justify-center mt-8">
					<MainLink
						:href="route('home') + '#about-us'"
						text="discover history"
					/>
				</div>
			</div>
			<div>
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
				<h3 class="text-center font-semibold text-3xl mt-8">Why choose us</h3>
				<p class="text-center text-gray-600 mt-6">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
					vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus
					porta.
				</p>

				<div class="flex items-center justify-center mt-8">
					<MainLink
						:href="route('home') + '#about-us'"
						text="discover history"
					/>
				</div>
			</div>
		</div>
		<!-- end services -->

		<AboutUs />

		<!-- categories -->
		<div class="container mx-auto px-40 my-28 flex flex-col items-center">
			<h1 class="text-6xl font-bold">Categories</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-primary"></span>
				<CowIcon width="32" height="32" color="#FDC421" />
				<span class="border-b h-1 w-14 border-primary"></span>
			</div>

			<div class="grid grid-cols-4 gap-3 mt-20">
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

			<MainLink href="#" text="view all products" class="mt-24" />
		</div>
		<!-- end categories -->

		<!-- Top selling products -->
		<div class="container mx-auto px-40 my-28 flex flex-col items-center">
			<h1 class="text-6xl font-bold">Top selling products</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-primary"></span>
				<CowIcon width="32" height="32" color="#FDC421" />
				<span class="border-b h-1 w-14 border-primary"></span>
			</div>

			<div class="grid grid-cols-4 gap-8 mt-20">
				<div
					class="flex flex-col items-center justify-center border border-primary pt-6 pb-8 px-8"
				>
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
							src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
							alt="meat"
							class="h-52 object-cover group-hover:brightness-75"
						/>
					</div>

					<h1 class="mt-4">Pecorino Romano</h1>
					<span class="font-bold text-2xl">$18.90 – $38.00</span>
					<MainLink href="#" text="select option" class="mt-6" />
				</div>
				<div
					class="flex flex-col items-center justify-center border border-primary pt-6 pb-8 px-8"
				>
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
							src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
							alt="meat"
							class="h-52 object-cover group-hover:brightness-75"
						/>
					</div>

					<h1 class="mt-4">Pecorino Romano</h1>
					<span class="font-bold text-2xl">$18.90 – $38.00</span>
					<MainLink href="#" text="select option" class="mt-6" />
				</div>
				<div
					class="flex flex-col items-center justify-center border border-primary pt-6 pb-8 px-8"
				>
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
							src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
							alt="meat"
							class="h-52 object-cover group-hover:brightness-75"
						/>
					</div>

					<h1 class="mt-4">Pecorino Romano</h1>
					<span class="font-bold text-2xl">$18.90 – $38.00</span>
					<MainLink href="#" text="select option" class="mt-6" />
				</div>
				<div
					class="flex flex-col items-center justify-center border border-primary pt-6 pb-8 px-8"
				>
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
							src="https://images.unsplash.com/photo-1529692236671-f1f6cf9683ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWVhdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
							alt="meat"
							class="h-52 object-cover group-hover:brightness-75"
						/>
					</div>

					<h1 class="mt-4">Pecorino Romano</h1>
					<span class="font-bold text-2xl">$18.90 – $38.00</span>
					<MainLink href="#" text="select option" class="mt-6" />
				</div>
			</div>
		</div>
		<!-- end Top selling products -->

		<!-- teams -->
		<div
			class="relative w-full h-slider"
			style="
				background-image: url('https://images.unsplash.com/photo-1569858241634-5aee6e47091a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGNvd3xlbnwwfHwwfHw%3D&auto=format') !important;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			"
		>
			<div
				class="absolute inset-0 flex flex-col items-center justify-center bg-black bg-opacity-40 z-10"
			>
				<h1 class="text-6xl font-bold text-primary">Teams</h1>
				<div class="flex items-center space-x-5">
					<span class="border-b h-1 w-14 border-white"></span>
					<CowIcon width="32" height="32" color="#FFFFFF" />
					<span class="border-b h-1 w-14 border-white"></span>
				</div>

				<div class="grid grid-cols-4 gap-14 mt-20">
					<div class="flex flex-col items-center justify-center">
						<div class="border-4 border-white rounded-full w-52 h-52">
							<img
								src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
								alt="member"
								class="rounded-full"
							/>
						</div>

						<h2 class="text-primary text-2xl mt-8 font-bold">Mohamed Masoud</h2>
						<h4 class="text-white text-sm">Fullstack Developer</h4>
					</div>
					<div class="flex flex-col items-center justify-center">
						<div class="border-4 border-white rounded-full w-52 h-52">
							<img
								src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
								alt="member"
								class="rounded-full"
							/>
						</div>

						<h2 class="text-primary text-2xl mt-8 font-bold">Mohamed Masoud</h2>
						<h4 class="text-white text-sm">Fullstack Developer</h4>
					</div>
					<div class="flex flex-col items-center justify-center">
						<div class="border-4 border-white rounded-full w-52 h-52">
							<img
								src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
								alt="member"
								class="rounded-full"
							/>
						</div>

						<h2 class="text-primary text-2xl mt-8 font-bold">Mohamed Masoud</h2>
						<h4 class="text-white text-sm">Fullstack Developer</h4>
					</div>
					<div class="flex flex-col items-center justify-center">
						<div class="border-4 border-white rounded-full w-52 h-52">
							<img
								src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
								alt="member"
								class="rounded-full"
							/>
						</div>

						<h2 class="text-primary text-2xl mt-8 font-bold">Mohamed Masoud</h2>
						<h4 class="text-white text-sm">Fullstack Developer</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end teams -->
	</AppLayout>
</template>
