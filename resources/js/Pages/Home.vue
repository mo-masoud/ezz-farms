<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import HomeSlider from '@/Components/HomeSlider.vue'
import Services from '@/Components/Services.vue'
import AboutUs from '@/Components/AboutUs.vue'
import CowIcon from '@/Components/CowIcon.vue'
import HomeCategories from '@/Components/HomeCategories.vue'
import TopSellingProducts from '@/Components/TopSellingProducts.vue'
import Teams from '@/Components/Teams.vue'</script>

<template>
    <AppLayout>
        <HomeSlider/>

        <!-- welcome message -->
        <div
            class="relative flex flex-col items-center bg-primary h-80 pt-10 w-full"
        >
            <h1 class="text-gray-900 font-bold text-2xl md:text-6xl tracking-tight">
                Welcome to our farm!
            </h1>
            <div class="flex items-center space-x-5">
                <span class="border-b h-1 w-14 border-gray-900"></span>
                <CowIcon color="#000000" height="32" width="32"/>
                <span class="border-b h-1 w-14 border-gray-900"></span>
            </div>
            <p class="text-sm lg:text-base xl:text-xl mx-auto w-3/5 text-center mt-2">
                Here you will find a wide range of healthy and fresh dairy products that
                were proudly produced at our farm by our farmers and cows. Welcome to
                Jacksons!
            </p>
            <img
                alt="Logo"
                class="absolute -bottom-40"
                src="http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/big-cow.png"
            />
        </div>
        <!-- end welcome message -->

        <Services/>

        <AboutUs/>

        <HomeCategories/>

        <TopSellingProducts/>

        <Teams/>
    </AppLayout>
</template>
