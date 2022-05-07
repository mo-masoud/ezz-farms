<script>
import AppLayout from '@/Layouts/AppLayout.vue'
import HomeSlider from '@/Components/HomeSlider.vue'
import Services from '@/Components/Services.vue'
import AboutUs from '@/Components/AboutUs.vue'
import CowIcon from '@/Components/CowIcon.vue'
import HomeCategories from '@/Components/HomeCategories.vue'
import TopSellingProducts from '@/Components/TopSellingProducts.vue'
import Teams from '@/Components/Teams.vue'
import WhyChooseUs from '@/Components/WhyChooseUs.vue'

export default {
	components: {
		AppLayout,
		HomeSlider,
		Services,
		AboutUs,
		CowIcon,
		HomeCategories,
		TopSellingProducts,
		Teams,
		WhyChooseUs,
	},
}
</script>

<template>
	<AppLayout>
		<HomeSlider />

		<!-- welcome message -->
		<div
			class="relative flex flex-col items-center bg-primary h-80 pt-10 w-full"
		>
			<h1 class="text-white font-bold text-2xl md:text-6xl tracking-tight">
				Welcome to our farm!
			</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-white"></span>
				<CowIcon color="#ffffff" height="32" width="32" />
				<span class="border-b h-1 w-14 border-white"></span>
			</div>
			<p
				class="text-sm text-gray-200 lg:text-base xl:text-xl mx-auto w-3/5 text-center mt-2 overflow-y-auto"
			>
				Here you will find a wide range of healthy and fresh dairy products that
				were proudly produced at our farm by our farmers and cows. Welcome to
				Jacksons! Here you will find a wide range of healthy and fresh dairy
				products that were proudly produced at our farm by our farmers and cows.
			</p>
			<img
				alt="Logo"
				class="absolute -bottom-52 w-60"
				src="/images/LogoEng.png"
			/>
		</div>
		<!-- end welcome message -->

		<Services />

		<WhyChooseUs />

		<AboutUs />

		<HomeCategories />

		<TopSellingProducts />

		<!-- <Teams /> -->
	</AppLayout>
</template>
