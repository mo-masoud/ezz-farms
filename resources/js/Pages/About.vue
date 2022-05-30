<script>
import { Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        Link,
        AppLayout
    }
}
</script>

<template>
    <AppLayout>
        <div class='relative w-full h-72'>
            <img
                alt='banner'
                class='w-full h-full object-cover brightness-90'
                src='http://dairy-farm.ancorathemes.com/wp-content/uploads/2016/09/title_bg.jpg'
            />
            <div
                class='absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center'
            >
                <h1 class='text-white text-3xl font-bold'>About us</h1>
                <h2 class='text-white text-lg'>
                    <Link :href="route('home')" class='mx-2'>Home</Link>
                    /
                    <span class='mx-2'>About us</span>
                </h2>
            </div>
        </div>

        <div
            class='container mt-20 md:mt-0 pt:24 md:pt-32 mb-20 mx-auto px-8 md:px-12 xl:px-40'
        >
            <h1 class='text-3xl font-bold text-primary'>About Us</h1>
            <div class='mt-8'>
                <div v-html="$page.props.aboutUs['body_' + $page.props.locale]"></div>
            </div>
        </div>
    </AppLayout>
</template>
