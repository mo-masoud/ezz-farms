<script setup>
import MainLink from '@/Components/MainLink.vue'
import { Link } from '@inertiajs/inertia-vue3'</script>
<template>
    <div
        class='container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 md:gap-8 mt-72 mb-20 mx-auto px-8 md:px-20 xl:px-40'
    >
        <div class='mt-8'>
            <div
                class='relative group transition-all duration-150 ease-in-out hover:shadow-2xl'
            >
                <div
                    class='hidden absolute inset-0 z-10 group-hover:flex items-center justify-center transition-all duration-150 ease-in-out'
                >
                    <Link class='rounded-full p-4 bg-white shadow-2xl' href='#'>
                        <svg
                            class='h-8 w-8 text-primary'
                            fill='none'
                            stroke='currentColor'
                            stroke-width='2'
                            viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg'
                        >
                            <path
                                d='M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1'
                                stroke-linecap='round'
                                stroke-linejoin='round'
                            />
                        </svg>
                    </Link>
                </div>
                <img
                    alt='service 1'
                    class='w-full h-full group-hover:brightness-50'
                    src='http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/service3.jpg'
                />
            </div>
            <h3 class='text-center font-semibold text-3xl mt-8'>Why choose us</h3>
            <p class='text-center text-gray-600 mt-6'>
                {{ $page.props.texts['why_choose_us_card'] }}
            </p>

            <div class='flex items-center justify-center mt-8'>
                <MainLink :href="route('home') + '#why-choose-us'" text='discover' />
            </div>
        </div>

        <div class='mt-8'>
            <div
                class='relative group transition-all duration-150 ease-in-out hover:shadow-2xl'
            >
                <div
                    class='hidden absolute inset-0 z-10 group-hover:flex items-center justify-center transition-all duration-150 ease-in-out'
                >
                    <Link class='rounded-full p-4 bg-white shadow-2xl' href='#'>
                        <svg
                            class='h-8 w-8 text-primary'
                            fill='none'
                            stroke='currentColor'
                            stroke-width='2'
                            viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg'
                        >
                            <path
                                d='M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1'
                                stroke-linecap='round'
                                stroke-linejoin='round'
                            />
                        </svg>
                    </Link>
                </div>
                <img
                    alt='service 1'
                    class='w-full h-full group-hover:brightness-50'
                    src='http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/service3.jpg'
                />
            </div>
            <h3 class='text-center font-semibold text-3xl mt-8'>About us</h3>
            <p class='text-center text-gray-600 mt-6'>
                {{ $page.props.texts['about_card'] }}
            </p>

            <div class='flex items-center justify-center mt-8'>
                <MainLink :href="route('home') + '#about-us'" text='discover' />
            </div>
        </div>

        <div class='mt-8'>
            <div
                class='relative group transition-all duration-150 ease-in-out hover:shadow-2xl'
            >
                <div
                    class='hidden absolute inset-0 z-10 group-hover:flex items-center justify-center transition-all duration-150 ease-in-out'
                >
                    <Link class='rounded-full p-4 bg-white shadow-2xl' href='#'>
                        <svg
                            class='h-8 w-8 text-primary'
                            fill='none'
                            stroke='currentColor'
                            stroke-width='2'
                            viewBox='0 0 24 24'
                            xmlns='http://www.w3.org/2000/svg'
                        >
                            <path
                                d='M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1'
                                stroke-linecap='round'
                                stroke-linejoin='round'
                            />
                        </svg>
                    </Link>
                </div>
                <img
                    alt='service 1'
                    class='w-full h-full group-hover:brightness-50'
                    src='http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/service3.jpg'
                />
            </div>
            <h3 class='text-center font-semibold text-3xl mt-8'>Our products</h3>
            <p class='text-center text-gray-600 mt-6'>
                {{ $page.props.texts['products_card'] }}
            </p>

            <div class='flex items-center justify-center mt-8'>
                <MainLink :href="route('products')" text='discover' />
            </div>
        </div>
    </div>
</template>
