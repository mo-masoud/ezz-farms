<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import Logo from '@/Components/Logo.vue'

const showMenu = ref(false)
</script>

<template>
	<header>
		<nav
			class="relative lg:fixed top-0 left-0 right-0 shadow-sm lg:shadow-lg bg-white border-gray-200 px-2 py-6 lg:py-2.5 z-50"
		>
			<div class="flex flex-wrap justify-between items-center px-6">
				<Logo />
				<div class="flex space-x-3 lg:order-2">
					<button
						@click="showMenu = !showMenu"
						class="inline-flex items-center text-sm text-gray-900 rounded-lg lg:hidden focus:outline-none"
					>
						<span class="sr-only">Open main menu</span>
						<svg
							class="w-8 h-8"
							fill="currentColor"
							viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								fill-rule="evenodd"
								d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
								clip-rule="evenodd"
							></path>
						</svg>
						<svg
							class="hidden w-6 h-6"
							fill="currentColor"
							viewBox="0 0 20 20"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
								fill-rule="evenodd"
								d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
								clip-rule="evenodd"
							></path>
						</svg>
					</button>

					<Link href="#" class="flex items-center space-x-2 group">
						<span class="rounded-full bg-white md:bg-primary p-1">
							<svg
								xmlns="http://www.w3.org/2000/svg"
								class="h-8 w-8 text-gray-800 group-hover:text-gray-100 transition-all duration-150 ease-in-out"
								fill="none"
								viewBox="0 0 24 24"
								stroke="currentColor"
								stroke-width="1"
							>
								<path
									stroke-linecap="round"
									stroke-linejoin="round"
									d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
								/>
							</svg>
						</span>
						<div class="hidden md:flex flex-col">
							<span
								class="uppercase text-xs tracking-tighter text-gray-600 font-semibold"
							>
								Cart: 0 Items
							</span>
							<span class="text-sm text-gray-800 font-bold">$0.00</span>
						</div>
					</Link>
				</div>

				<div
					class="justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
					:class="{ hidden: !showMenu }"
				>
					<ul
						class="flex flex-col space-y-6 mt-8 ml-8 lg:flex-row lg:space-x-12 lg:space-y-0 lg:mt-0 lg:ml-0 lg:text-sm lg:font-bold"
					>
						<li>
							<Link
								:href="route('home')"
								class="uppercase hover:text-primary"
								:class="{ 'text-primary': $page.url === '/' }"
								aria-current="page"
							>
								Home
							</Link>
						</li>
						<li>
							<Link
								:href="route('home') + '#about-us'"
								class="uppercase hover:text-primary"
								:class="{ 'text-primary': $page.url === '/#about-us' }"
								aria-current="page"
							>
								About Us
							</Link>
						</li>
						<li>
							<Link
								:href="route('home') + '#why-choose-us'"
								class="uppercase hover:text-primary"
								:class="{ 'text-primary': $page.url === '/#why-choose-us' }"
								aria-current="page"
							>
								Why Choose Us
							</Link>
						</li>
						<li>
							<Link
								:href="'#'"
								class="uppercase hover:text-primary"
								:class="{ 'text-primary': $page.url === '/products' }"
								aria-current="page"
							>
								Products
							</Link>
						</li>
						<li>
							<Link
								:href="'#'"
								class="uppercase hover:text-primary"
								:class="{ 'text-primary': $page.url === '/galleries' }"
								aria-current="page"
							>
								Galleries
							</Link>
						</li>
						<li>
							<Link
								:href="'#'"
								class="uppercase hover:text-primary"
								:class="{ 'text-primary': $page.url === '/contact-us' }"
								aria-current="page"
							>
								Contact Us
							</Link>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
</template>
