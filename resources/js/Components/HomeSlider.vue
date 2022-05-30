<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Carousel from '@/Components/Slider/Carousel.vue'
import Slide from '@/Components/Slider/Slide.vue'</script>

<template>
    <Carousel
        v-slot='{ currentSlide }'
        :navigation='false'
        :timeout='8000'
        class='h-72 md:h-slider'
    >
        <Slide v-for='(slide, i) in $page.props.sliders' :key='i'>
            <div
                v-show='currentSlide === i + 1'
                class='absolute top-0 left-0 w-full max-w-full h-full'
            >
                <div class='relative min-w-full h-full'>
                    <div
                        class='absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 flex flex-col items-center justify-center w-full'
                    >
                        <h1 class='text-white font-bold text-4xl md:text-8xl lg:text-10xl'>
                            {{ slide.title }}
                        </h1>
                        <h3
                            class='uppercase text-white font-semibold text-sm md:text-lg lg:text-3xl mt-0 md:-mt-4'
                        >
                            {{ slide.subtitle }}
                        </h3>
                        <Link
                            class='uppercase text-xxs md:text-sm font-bold tracking-tighter text-white mt-6 md:mt-20 bg-primary border-2 border-transparent hover:bg-transparent hover:text-white hover:border-white transition duration-300 ease-in-out py-2 px-4 md:py-3 md:px-7'
                            href='#categories'
                        >
                            View Our Products
                        </Link>
                    </div>
                    <img
                        :alt='slide.title'
                        :src='$page.props.image_url + slide.image'
                        class='min-w-full h-full object-cover brightness-75'
                    />
                </div>
            </div>
        </Slide>
    </Carousel>
</template>
