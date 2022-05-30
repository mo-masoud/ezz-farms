<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import Navbar from '@/Components/Navbar.vue'

const goToTop = () => window.scrollTo({ top: 0, behavior: 'smooth' })
</script>

<template>
    <div>
        <Navbar />

        <main class='relative mt-0 lg:mt-20'>
            <slot />
            <button
                class='fixed bottom-3 right-3 z-50 bg-primary p-3'
                @click='goToTop'
            >
                <svg
                    class='h-4 w-4 text-white'
                    fill='none'
                    stroke='currentColor'
                    stroke-width='2'
                    viewBox='0 0 24 24'
                    xmlns='http://www.w3.org/2000/svg'
                >
                    <path
                        d='M5 15l7-7 7 7'
                        stroke-linecap='round'
                        stroke-linejoin='round'
                    />
                </svg>
            </button>
        </main>

        <div
            class='flex flex-col md:flex-row items-start md:items-center space-y-12 md:space-y-0 justify-between bg-primary px-20 py-14'
        >
            <Link :href="route('home')">
                <img :src="$page.props.configs['logo']" alt='logo' class='w-52' />
            </Link>
            <div class='flex flex-col text-xl text-black'>
                <span>{{ $page.props.configs['address'] }}</span>
                <span
                >Phone:
					<span class='text-gray-800 font-bold'>{{ $page.props.configs['phone'] }}</span></span
                >
                <span
                >Fax: <span class='text-gray-800 font-bold'>{{ $page.props.configs['fax'] }}</span></span
                >
                <span
                >Email:
					<span class='text-gray-800 font-bold'>{{ $page.props.configs['email'] }}</span></span
                >
            </div>
            <div class='flex items-center space-x-2'>
                <a :href="$page.props.configs['twitter']" class='p-2 bg-light-primary rounded-full'>
                    <img
                        alt='twitter'
                        class='w-5 h-5'
                        src='../../assets/images/twitter-brands.svg'
                    />
                </a>
                <a :href="$page.props.configs['facebook']" class='p-2 bg-light-primary rounded-full'>
                    <img
                        alt='facebook'
                        class='w-5 h-5'
                        src='../../assets/images/facebook-f-brands.svg'
                    />
                </a>
            </div>
        </div>
        <footer>
            <div
                class='flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 bg-dark-footer px-12 lg:px-20 xl:px-40 py-6'
            >
                <ul class='flex items-center space-x-3'>
                    <!-- <li>
                        <Link
                            href="#"
                            class="text-gray-400 text-xs md:text-sm hover:text-primary transition duration-150 ease-in-out"
                        >
                            FAQ
                        </Link>
                    </li> -->
                    <!-- <li>
                        <Link
                            href="#"
                            class="text-gray-400 text-xs md:text-sm hover:text-primary transition duration-150 ease-in-out"
                        >
                            News
                        </Link>
                    </li> -->
                    <li>
                        <Link
                            :href="route('contact-us')"
                            class='text-gray-400 text-xs md:text-sm hover:text-primary transition duration-150 ease-in-out'
                        >
                            Contact us
                        </Link>
                    </li>
                </ul>
                <h1 class='text-xs md:text-sm text-gray-400'>
                    <a
                        class='hover:text-primary transition duration-150 ease-in-out'
                        href='https://www.linkedin.com/in/mohamed-masoud-999188165/'
                    >
                        Ezz Farms
                    </a>
                    © {{ new Date().getFullYear() }}. All rights reserved.
                </h1>
            </div>
        </footer>
    </div>
</template>
