<script setup>
import { ref } from 'vue'
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import MainLink from '@/Components/MainLink.vue'
import CowIcon from '@/Components/CowIcon.vue'

const current = ref(0)
</script>

<template>
    <div
        id='about-us'
        class='container pt:24 md:pt-32 mb-20 mx-auto px-8 md:px-12 xl:px-40'
    >
        <div class='flex flex-col items-center'>
            <h1 class='text-5xl md:text-6xl font-bold'>About us</h1>
            <div class='flex items-center space-x-5'>
                <span class='border-b h-1 w-14 border-primary'></span>
                <CowIcon color='#367F7B' height='32' width='32' />
                <span class='border-b h-1 w-14 border-primary'></span>
            </div>
        </div>
        <div class='flex flex-col lg:flex-row items-center mt-20'>
            <div class='w-full lg:w-1/2 h-96 md:h-about'>
                <img
                    :src="$page.props.configs['about_us_image']"
                    alt='About us'
                    class='w-full h-full object-cover object-center'
                />
            </div>
            <div
                class='flex flex-col items-start justify-center bg-light-primary w-full lg:w-1/2 h-96 md:h-about py-24 px-2 md:px-12 xl:px-20'
            >
                <div class='w-full mb-4 px-4 lg:px-8 mt-8 lg:mt-0'>
                    <TabGroup>
                        <TabList
                            class='grid grid-cols-5 w-full text-center bg-medium-primary rounded-full'
                        >
                            <Tab
                                v-for='(year, i) in $page.props.aboutUs'
                                :key='i'
                                v-slot='{ selected }'
                                as='template'
                            >
                                <button
                                    :class="{ 'bg-primary active': selected }"
                                    class='text-white py-2 px-3 font-bold text-xs rounded-full about-tab'
                                >
                                    {{ year.year }}
                                </button>
                            </Tab>
                        </TabList>
                        <TabPanels>
                            <TabPanel
                                v-for='(year, i) in $page.props.aboutUs'
                                :key='i'
                                class='text-center p-4 h-80'
                            >
                                <h2 class='text-3xl font-bold text-white'>
                                    {{ year.title }}
                                </h2>
                                <p
                                    class='text-md text-gray-100 font-semibold mt-4 line-clamp-6'
                                >
                                    {{ year.brief }}
                                </p>
                                <MainLink
                                    :href="route('about', {
                                        'about': year.id
                                    })"
                                    class='mt-8'
                                    text='read more'
                                />
                            </TabPanel>
                        </TabPanels>
                    </TabGroup>
                </div>
            </div>
        </div>
    </div>
</template>
