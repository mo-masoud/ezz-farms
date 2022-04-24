<script>
import CowIcon from '@/Components/CowIcon.vue'
export default {
	components: {
		CowIcon,
	},
}
</script>

<template>
	<div
		id="why-choose-us"
		class="w-full bg-primary flex flex-col items-center justify-center pt-24 mb-20 mx-auto px-8 xl:px-40"
	>
		<div class="flex flex-col items-center">
			<h1 class="text-white text-5xl md:text-6xl font-bold">Why choose us</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-white"></span>
				<CowIcon width="32" height="32" color="#FFFFFF" />
				<span class="border-b h-1 w-14 border-white"></span>
			</div>
		</div>

		<div class="mt-20 mb-40 relative px-8 md:px-0 xl:px-40">
			<div
				class="md:absolute md:top-1/2 md:left-1/2 md:-translate-x-1/2 md:-translate-y-1/2 mb-12"
			>
				<img
					alt="Logo"
					class="w-full md:w-40 xl:w-full h-full md:h-40 xl:h-full"
					src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/big-cow.png"
				/>
			</div>
			<div
				class="grid grid-cols-1 md:grid-cols-2 md:gap-x-36 xl:gap-x-96 gap-y-16"
			>
				<div v-for="i in 4" :key="i" class="flex">
					<div
						class="mt-4 mx-4"
						:class="[
							i & 1 ? ' order-none md:order-1' : ' order-none md:order-2',
						]"
					>
						<span
							class="flex items-center justify-center font-bold text-xl bg-white w-16 h-16 rounded-full"
						>
							{{ i }}
						</span>
					</div>
					<div
						class="space-y-2 max-w-full md:max-w-[10rem] xl:max-w-full"
						:class="[
							i & 1
								? '  order-none md:order-2 md:text-left'
								: ' order-none md:order-1 md:text-right',
						]"
					>
						<h1
							class="cursor-pointer text-2xl xl:text-3xl text-white font-bold hover:text-black transition duration-150 ease-in-out"
						>
							Animal Welfare
						</h1>
						<h4 class="text-sm text-gray-300">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent
							vestibulum molestie.
						</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
