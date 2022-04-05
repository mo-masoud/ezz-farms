<script>
import { ref, onMounted } from 'vue'
export default {
	props: ['navigation', 'pagination', 'autoplay', 'timeout'],
	setup(props) {
		const currentSlide = ref(1)
		const getSlidesCount = ref(null)
		const autoplayEnabled = ref(
			props.autoplay === undefined ? true : props.autoplay
		)
		const timeoutDuration = ref(
			props.timeout === undefined ? 5000 : props.timeout
		)
		const paginationEnabled = ref(
			props.pagination === undefined ? true : props.pagination
		)
		const navigationEnabled = ref(
			props.navigation === undefined ? true : props.navigation
		)

		const nextSlide = () => {
			if (currentSlide.value === getSlidesCount.value) {
				currentSlide.value = 1
				return
			}

			currentSlide.value += 1
		}

		const prevSlide = () => {
			if (currentSlide.value === 1) {
				currentSlide.value = 1
				return
			}

			currentSlide.value -= 1
		}

		const goToSlide = (index) => {
			currentSlide.value = index + 1
		}

		const autoplay = () => {
			setInterval(() => {
				nextSlide()
			}, timeoutDuration.value)
		}

		if (autoplayEnabled.value) {
			autoplay()
		}

		onMounted(() => {
			getSlidesCount.value = document.querySelectorAll('.slide').length
		})

		return {
			currentSlide,
			nextSlide,
			prevSlide,
			getSlidesCount,
			goToSlide,
			paginationEnabled,
			navigationEnabled,
		}
	},
}
</script>

<template>
	<div class="relative max-h-full h-full">
		<slot :currentSlide="currentSlide" />

		<!-- navigation -->
		<div
			v-if="navigationEnabled"
			class="absolute flex items-center justify-center px-4 w-full h-full"
		>
			<div class="flex flex-1">
				<button
					@click="prevSlide"
					class="rounded-full bg-primary flex items-center justify-center p-1"
				>
					<svg
						xmlns="http://www.w3.org/2000/svg"
						class="h-6 w-6"
						fill="none"
						viewBox="0 0 24 24"
						stroke="currentColor"
						stroke-width="2"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M15 19l-7-7 7-7"
						/>
					</svg>
				</button>
			</div>
			<div class="flex flex-1 justify-end">
				<button
					@click="nextSlide"
					class="rounded-full bg-primary flex items-center justify-center p-1"
				>
					<svg
						xmlns="http://www.w3.org/2000/svg"
						class="h-6 w-6"
						fill="none"
						viewBox="0 0 24 24"
						stroke="currentColor"
						stroke-width="2"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M9 5l7 7-7 7"
						/>
					</svg>
				</button>
			</div>
		</div>

		<!-- pagination -->
		<div
			v-if="paginationEnabled"
			class="absolute bottom-6 w-full flex items-center justify-center gap-2"
		>
			<button
				v-for="(slide, i) in getSlidesCount"
				:key="i"
				@click="goToSlide(i)"
				class="w-3 h-3 md:w-4 md:h-4 shadow rounded-full border-2 border-white bg-white"
				:class="[
					i + 1 === currentSlide ? 'opacity-100 bg-transparent' : 'opacity-40',
				]"
			></button>
		</div>
	</div>
</template>
