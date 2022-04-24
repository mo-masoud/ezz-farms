<script setup>
import CowIcon from '@/Components/CowIcon.vue'
</script>

<template>
	<div
		class="w-full md:h-slider"
		style="
			background-image: url('https://images.unsplash.com/photo-1569858241634-5aee6e47091a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGNvd3xlbnwwfHwwfHw%3D&auto=format') !important;
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;
		"
	>
		<div
			class="flex flex-col items-center justify-center h-full py-8 bg-black bg-opacity-40 z-10"
		>
			<h1 class="text-6xl font-bold text-white">Teams</h1>
			<div class="flex items-center space-x-5">
				<span class="border-b h-1 w-14 border-white"></span>
				<CowIcon width="32" height="32" color="#FFFFFF" />
				<span class="border-b h-1 w-14 border-white"></span>
			</div>

			<div
				class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-14 mt-20"
			>
				<div class="flex flex-col items-center justify-center">
					<div class="border-4 border-white rounded-full w-52 h-52">
						<img
							src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
							alt="member"
							class="rounded-full"
						/>
					</div>

					<h2 class="text-white text-2xl mt-8 font-bold">Mohamed Masoud</h2>
					<h4 class="text-gray-200 text-sm">Fullstack Developer</h4>
				</div>
				<div class="flex flex-col items-center justify-center">
					<div class="border-4 border-white rounded-full w-52 h-52">
						<img
							src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
							alt="member"
							class="rounded-full"
						/>
					</div>

					<h2 class="text-white text-2xl mt-8 font-bold">Mohamed Masoud</h2>
					<h4 class="text-gray-200 text-sm">Fullstack Developer</h4>
				</div>
				<div class="flex flex-col items-center justify-center">
					<div class="border-4 border-white rounded-full w-52 h-52">
						<img
							src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
							alt="member"
							class="rounded-full"
						/>
					</div>

					<h2 class="text-white text-2xl mt-8 font-bold">Mohamed Masoud</h2>
					<h4 class="text-gray-200 text-sm">Fullstack Developer</h4>
				</div>
				<div class="flex flex-col items-center justify-center">
					<div class="border-4 border-white rounded-full w-52 h-52">
						<img
							src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/team-2-370x370.jpg"
							alt="member"
							class="rounded-full"
						/>
					</div>

					<h2 class="text-white text-2xl mt-8 font-bold">Mohamed Masoud</h2>
					<h4 class="text-gray-200 text-sm">Fullstack Developer</h4>
				</div>
			</div>
		</div>
	</div>
</template>
