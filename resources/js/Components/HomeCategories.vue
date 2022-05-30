<script setup>
import { Link } from '@inertiajs/inertia-vue3'

import MainLink from '@/Components/MainLink.vue'
import CowIcon from '@/Components/CowIcon.vue'</script>

<template>
    <div id='categories' class='container mx-auto px-8 md:px-20 lg:px-40 my-28'>
        <div class='flex flex-col items-center'>
            <h1 class='text-6xl font-bold'>Categories</h1>
            <div class='flex items-center space-x-5'>
                <span class='border-b h-1 w-14 border-primary'></span>
                <CowIcon color='#367F7B' height='32' width='32' />
                <span class='border-b h-1 w-14 border-primary'></span>
            </div>
        </div>

        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 mt-20'>
            <div v-for='(category, i) in $page.props.categories' :key='i'
                 class='flex flex-col items-center justify-center'>
                <img
                    :src='$page.props.image_url + category.image'
                    alt='meat 1'
                    class='rounded-full h-60 w-60 object-cover'
                />
                <Link
                    class='text-2xl font-bold mt-6 hover:text-primary transition duration-150 ease-in-out'
                    href='#'
                >
                    {{ category.title }}
                </Link>
                <p class='text-center text-sm mt-4'>
                    {{ category.subtitle }}
                </p>
            </div>
        </div>

        <div class='flex items-center justify-center'>
            <MainLink :href="route('products')" class='mt-24' text='view all products' />
        </div>
    </div>
</template>
