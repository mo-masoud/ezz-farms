<script setup>
import { ref } from 'vue'
import { TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import MainLink from '@/Components/MainLink.vue'
import CowIcon from '@/Components/CowIcon.vue'

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
		class="container flex flex-col items-center pt-32 mb-20 mx-auto px-40"
	>
		<h1 class="text-6xl font-bold">About us</h1>
		<div class="flex items-center space-x-5">
			<span class="border-b h-1 w-14 border-primary"></span>
			<CowIcon width="32" height="32" color="#FDC421" />
			<span class="border-b h-1 w-14 border-primary"></span>
		</div>
		<div class="flex items-center mt-20">
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
				<div class="w-full mb-4 px-12">
					<TabGroup>
						<TabList
							class="flex flex-wrap justify-between w-full text-center bg-medium-primary rounded-full"
						>
							<Tab
								v-for="(year, i) in years"
								:key="i"
								as="template"
								v-slot="{ selected }"
							>
								<button
									class="inline-block py-2 px-5 font-bold text-xs rounded-full about-tab"
									:class="{ 'bg-primary active': selected }"
								>
									{{ year.year }}
								</button>
							</Tab>
						</TabList>
						<TabPanels>
							<TabPanel
								v-for="(year, i) in years"
								:key="i"
								class="text-center p-4"
							>
								<h2 class="text-3xl font-bold text-gray-900">
									{{ year.title }}
								</h2>
								<p class="text-md text-gray-500 mt-4">
									{{ year.brief }}
								</p>
								<MainLink
									:href="route('home') + '#about-us'"
									text="read more"
									class="mt-8"
								/>
							</TabPanel>
						</TabPanels>
					</TabGroup>
				</div>
			</div>
		</div>
	</div>
</template>
