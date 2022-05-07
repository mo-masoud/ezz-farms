<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Navbar from '@/Components/Navbar.vue'

const goToTop = () => window.scrollTo({ top: 0, behavior: 'smooth' })
</script>

<template>
	<div>
		<Navbar />

		<main class="relative mt-0 lg:mt-20">
			<slot />
			<button
				@click="goToTop"
				class="fixed bottom-3 right-3 z-50 bg-primary p-3"
			>
				<svg
					xmlns="http://www.w3.org/2000/svg"
					class="h-4 w-4 text-white"
					fill="none"
					viewBox="0 0 24 24"
					stroke="currentColor"
					stroke-width="2"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						d="M5 15l7-7 7 7"
					/>
				</svg>
			</button>
		</main>

		<div
			class="flex flex-col md:flex-row items-start md:items-center space-y-12 md:space-y-0 justify-between bg-primary px-12 lg-px-40 xl:px-96 py-14"
		>
			<Link :href="route('home')">
				<img src="/images/LogoEng.png" class="w-52" alt="logo" />
			</Link>
			<div class="flex flex-col text-xl text-black">
				<span>888 Broadway, New York, NY, 18813</span>
				<span
					>Phone:
					<span class="text-gray-800 font-bold">123-456-7890</span></span
				>
				<span
					>Fax: <span class="text-gray-800 font-bold">123-456-7890</span></span
				>
				<span
					>Email:
					<span class="text-gray-800 font-bold">info@yoursite.com</span></span
				>
			</div>
			<div class="flex items-center space-x-2">
				<a href="twitter.com" class="p-2 bg-light-primary rounded-full">
					<img
						src="../../assets/images/twitter-brands.svg"
						alt="twitter"
						class="w-5 h-5"
					/>
				</a>
				<a href="facebook.com" class="p-2 bg-light-primary rounded-full">
					<img
						src="../../assets/images/facebook-f-brands.svg"
						alt="facebook"
						class="w-5 h-5"
					/>
				</a>
				<a href="linkedin.com" class="p-2 bg-light-primary rounded-full">
					<img
						src="../../assets/images/linkedin-in-brands.svg"
						alt="linkedin"
						class="w-5 h-5"
					/>
				</a>
			</div>
		</div>
		<footer>
			<div
				class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 bg-dark-footer px-12 lg-px-40 xl:px-96 py-6"
			>
				<ul class="flex items-center space-x-3">
					<!-- <li>
						<Link
							href="#"
							class="text-gray-400 text-xs md:text-sm hover:text-primary transition duration-150 ease-in-out"
						>
							FAQ
						</Link>
					</li> -->
					<!-- <li>
						<Link
							href="#"
							class="text-gray-400 text-xs md:text-sm hover:text-primary transition duration-150 ease-in-out"
						>
							News
						</Link>
					</li> -->
					<li>
						<Link
							href="#"
							class="text-gray-400 text-xs md:text-sm hover:text-primary transition duration-150 ease-in-out"
						>
							Contact us
						</Link>
					</li>
				</ul>
				<h1 class="text-xs md:text-sm text-gray-400">
					<a
						class="hover:text-primary transition duration-150 ease-in-out"
						href="https://www.linkedin.com/in/mohamed-masoud-999188165/"
					>
						Ezz Farms
					</a>
					© {{ new Date().getFullYear() }}. All rights reserved.
				</h1>
			</div>
		</footer>
	</div>
</template>
