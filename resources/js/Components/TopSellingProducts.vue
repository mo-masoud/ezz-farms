<script setup>
import CowIcon from '@/Components/CowIcon.vue'
import ProductCart from '@/Components/ProductCart.vue'</script>
<template>
    <div class='container mx-auto px-8  my-28'>
        <div class='flex flex-col items-center'>
            <h1 class='text-5xl lg:text-6xl font-bold'>Top selling products</h1>
            <div class='flex items-center space-x-5'>
                <span class='border-b h-1 w-14 border-primary'></span>
                <CowIcon color='#367F7B' height='32' width='32' />
                <span class='border-b h-1 w-14 border-primary'></span>
            </div>
        </div>

        <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-20'>
            <ProductCart
                v-for='(product, i) in $page.props.products'
                :key='i'
                :item='product'
            />
        </div>
    </div>
</template>
