<script setup>
import { ref } from 'vue'
import MainLink from '@/Components/MainLink.vue'

const years = [
	{
		id: 1,
		year: 1970,
		title: 'Our Story',
		brief:
			'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.',
	},
	{
		id: 1,
		year: 1980,
		title: 'Our Story 2',
		brief:
			'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.',
	},
	{
		id: 1,
		year: 1997,
		title: 'Our Story 3',
		brief:
			'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.',
	},
	{
		id: 1,
		year: 2004,
		title: 'Our Story 4',
		brief:
			'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.',
	},
	{
		id: 1,
		year: 2020,
		title: 'Our Story 5',
		brief:
			'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes.',
	},
]

const current = ref(0)
</script>

<template>
	<div
		id="about-us"
		class="container flex items-center mt-40 mb-20 mx-auto px-40"
	>
		<div class="w-1/2 h-about">
			<img
				src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/cow_little.jpg"
				alt="About us"
				class="w-full h-full object-cover object-center"
			/>
		</div>
		<div
			class="flex flex-col items-start justify-center bg-light-primary w-1/2 h-about py-24 px-20"
		>
			<div class="flex items-center justify-center w-full mb-4 px-12">
				<ul
					class="flex flex-wrap justify-between w-full text-center bg-medium-primary rounded-full"
					id="myTab"
					data-tabs-toggle="#about-us-stories"
					role="tablist"
				>
					<li v-for="(year, i) in years" :key="i" role="presentation">
						<button
							class="inline-block py-2 px-5 font-bold text-xs rounded-full about-tab"
							:class="{ 'bg-primary active': i === current }"
							:data-tabs-target="`#y-${year.year}`"
							type="button"
							role="tab"
							:aria-controls="`y-${year.year}`"
							aria-selected="true"
							@click="current = i"
						>
							{{ year.year }}
						</button>
					</li>
				</ul>
			</div>
			<div id="about-us-stories">
				<div
					v-for="(year, i) in years"
					:key="i"
					class="text-center p-4"
					:id="`y-${year.year}`"
					role="tabpanel"
					:aria-labelledby="`y-${year.year}-tab`"
				>
					<h2 class="text-3xl font-bold text-gray-900">{{ year.title }}</h2>
					<p class="text-md text-gray-500 mt-4">
						{{ year.brief }}
					</p>
					<MainLink
						:href="route('home') + '#about-us'"
						text="read more"
						class="mt-8"
					/>
				</div>
			</div>
		</div>
	</div>
</template>
