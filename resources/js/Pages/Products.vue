<script>
import { Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

import ProductsCart from '@/Components/Cart/ProductsCart.vue'
import MainLink from '@/Components/MainLink.vue'

import VueSlider from 'vue-slider-component'
import 'vue-slider-component/theme/antd.css'
import ProductCart from '@/Components/ProductCart.vue'

export default {
    components: {
        Link,
        AppLayout,
        ProductsCart,
        VueSlider,
        MainLink,
        ProductCart
    },
    data() {
        return {
            priceRange: [this.$page.props.minPrice, this.$page.props.maxPrice],
            options: {
                dotSize: 14,
                width: 'auto',
                height: 4,
                contained: false,
                direction: 'ltr',
                data: null,
                dataLabel: 'label',
                dataValue: 'value',
                min: this.$page.props.minPrice,
                max: this.$page.props.maxPrice,
                interval: 1,
                disabled: false,
                clickable: true,
                duration: 0.5,
                adsorb: false,
                lazy: false,
                tooltip: 'active',
                tooltipPlacement: 'top',
                tooltipFormatter: void 0,
                useKeyboard: false,
                keydownHook: null,
                dragOnClick: false,
                enableCross: true,
                fixed: false,
                minRange: void 0,
                maxRange: void 0,
                order: true,
                marks: false,
                dotOptions: void 0,
                dotAttrs: void 0,
                process: true,
                dotStyle: void 0,
                railStyle: void 0,
                processStyle: void 0,
                tooltipStyle: void 0,
                stepStyle: void 0,
                stepActiveStyle: void 0,
                labelStyle: void 0,
                labelActiveStyle: void 0
            },
            viewProductOption: 'grid',
            sortBy: 'latest',
            sortByOptions: [
                // {
                //     key: 'popularity',
                //     text: 'Sort by popularity'
                // },
                // {
                //     key: 'rating',
                //     text: 'Sort by average rating'
                // },
                {
                    key: 'latest',
                    text: 'Sort by latest'
                },
                {
                    key: 'low_high',
                    text: 'Sort by price: low to high'
                },
                {
                    key: 'high_low',
                    text: 'Sort by price: high to low'
                }
            ]
        }
    }
}
</script>
<template>
    <AppLayout>
        <div
            class='container mx-auto flex flex-col md:flex-row items-start space-x-0 md:space-x-8 px-12 md:px-32 my-20 md:my-40'
        >
            <div
                class='flex flex-col justify-between w-full mt-12 md:mt-0 order-2 md:order-1 md:w-1/5 h-full md:min-h-screen bg-light-primary px-8 py-12'
            >
                <!-- <ProductsCart /> -->
                <!-- mt-28 here -->
                <div class=''>
                    <h1 class='text-3xl font-bold'>Price Filter</h1>
                    <vue-slider
                        ref='slider'
                        v-model='priceRange'
                        v-bind='options'
                    ></vue-slider>
                    <div class='text-right mt-2 text-gray-600'>
                        Price:
                        <span class='text-gray-900 font-bold'>
							{{ priceRange[0] }} EG - {{ priceRange[1] }} EG
						</span>
                    </div>
                    <div class='flex items-end justify-end mt-4'>
                        <MainLink
                            :href="route('products') + '?price_range=' + priceRange[0] + '-' + priceRange[1]"
                            text='filter'
                        />
                    </div>
                </div>
                <div>
                    <h1 class='text-3xl font-bold'>Categories</h1>
                    <ul class='space-y-3 mt-4 list-disc pl-5 text-primary text-xl'>
                        <li v-for='(category, i) in $page.props.categories' :key='i'>
                            <Link :href="route('products') + '?category_id=' + category.id"
                                  class='text-gray-700 text-base'>
                                {{ category.title }}
                            </Link>
                        </li>
                    </ul>
                </div>

                <MainLink
                    :href="route('products')"
                    text='reset filter'
                />
            </div>
            <div
                class='w-full order-1 md:order-2 md:w-4/5 min-h-full md:min-h-screen'
            >
                <div class='flex items-center justify-between'>
                    <div class='hidden md:flex items-center'>
                        <button @click="viewProductOption = 'grid'">
                            <svg
                                :class="{ 'text-opacity-40': viewProductOption === 'list' }"
                                class='h-8 w-8 text-primary transition-all duration-700 ease-in-out'
                                fill='none'
                                stroke='currentColor'
                                stroke-width='2'
                                viewBox='0 0 24 24'
                                xmlns='http://www.w3.org/2000/svg'
                            >
                                <path
                                    d='M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z'
                                    stroke-linecap='round'
                                    stroke-linejoin='round'
                                />
                            </svg>
                        </button>
                        <button @click="viewProductOption = 'list'">
                            <svg
                                :class="{ 'text-opacity-40': viewProductOption === 'grid' }"
                                class='h-8 w-8 text-primary transition-all duration-700 ease-in-out'
                                fill='none'
                                stroke='currentColor'
                                stroke-width='2'
                                viewBox='0 0 24 24'
                                xmlns='http://www.w3.org/2000/svg'
                            >
                                <path
                                    d='M4 6h16M4 10h16M4 14h16M4 18h16'
                                    stroke-linecap='round'
                                    stroke-linejoin='round'
                                />
                            </svg>
                        </button>
                    </div>
                    <div class='flex space-x-8 items-center'>
                        <MainLink :href="route('products') + '?sort_by=' + sortBy" text='sort' />
                        <select
                            v-model='sortBy'
                            class='py-3 pl-8 pr-12 text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary'
                            name='sort_by'
                        >
                            <option
                                v-for='(sort, i) in sortByOptions'
                                :key='i'
                                :value='sort.key'
                            >
                                {{ sort.text }}
                            </option>
                        </select>
                    </div>
                </div>
                <div
                    :class="[
						viewProductOption === 'grid'
							? 'grid-cols-1 md:grid-cols-3'
							: 'grid-cols-1',
					]"
                    class='grid gap-8 mt-12 transition-all duration-700 ease-in-out'
                >
                    <ProductCart
                        v-for='(product, i) in $page.props.products'
                        :key='i'
                        :item='product'
                    />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
