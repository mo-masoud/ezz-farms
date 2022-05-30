<script>
import { Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

export default {
    components: {
        Link,
        AppLayout
    },
    data() {
        return {
            images: [
                'https://images.unsplash.com/photo-1618080206739-14e8ac105472?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://media.istockphoto.com/photos/white-kashmir-goat-picture-id177510395?b=1&k=20&m=177510395&s=170667a&w=0&h=GwpEqfcWqvPl8uVS2rlqSs4Bain85ulA_98JZ0Hmtqc=',

                'https://images.unsplash.com/photo-1550348579-959785e820f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://cdn.pixabay.com/photo/2021/10/27/08/43/forest-6746433__340.jpg',

                'https://images.unsplash.com/photo-1545407263-7ff5aa2ad921?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y293fGVufDB8fDB8fA%3D%3D&auto=format',

                'https://media.istockphoto.com/photos/young-lamb-and-goat-picture-id1334693543?b=1&k=20&m=1334693543&s=170667a&w=0&h=4BJYHq_FOXaQwWCDKPKM7k6NJJ355ax5TgIKi-yen20=',

                'https://images.unsplash.com/photo-1604076150017-48b528308aa3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1604860428762-f55cea62b7a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1618080206739-14e8ac105472?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://media.istockphoto.com/photos/white-kashmir-goat-picture-id177510395?b=1&k=20&m=177510395&s=170667a&w=0&h=GwpEqfcWqvPl8uVS2rlqSs4Bain85ulA_98JZ0Hmtqc=',

                'https://images.unsplash.com/photo-1550348579-959785e820f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://cdn.pixabay.com/photo/2021/10/27/08/43/forest-6746433__340.jpg',

                'https://images.unsplash.com/photo-1545407263-7ff5aa2ad921?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y293fGVufDB8fDB8fA%3D%3D&auto=format',

                'https://media.istockphoto.com/photos/young-lamb-and-goat-picture-id1334693543?b=1&k=20&m=1334693543&s=170667a&w=0&h=4BJYHq_FOXaQwWCDKPKM7k6NJJ355ax5TgIKi-yen20=',

                'https://images.unsplash.com/photo-1604076150017-48b528308aa3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1604860428762-f55cea62b7a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1618080206739-14e8ac105472?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://media.istockphoto.com/photos/white-kashmir-goat-picture-id177510395?b=1&k=20&m=177510395&s=170667a&w=0&h=GwpEqfcWqvPl8uVS2rlqSs4Bain85ulA_98JZ0Hmtqc=',

                'https://images.unsplash.com/photo-1550348579-959785e820f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://cdn.pixabay.com/photo/2021/10/27/08/43/forest-6746433__340.jpg',

                'https://images.unsplash.com/photo-1545407263-7ff5aa2ad921?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y293fGVufDB8fDB8fA%3D%3D&auto=format',

                'https://media.istockphoto.com/photos/young-lamb-and-goat-picture-id1334693543?b=1&k=20&m=1334693543&s=170667a&w=0&h=4BJYHq_FOXaQwWCDKPKM7k6NJJ355ax5TgIKi-yen20=',

                'https://images.unsplash.com/photo-1604076150017-48b528308aa3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1604860428762-f55cea62b7a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1618080206739-14e8ac105472?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGNvd3xlbnwwfHwwfHw%3D&auto=format',

                'https://media.istockphoto.com/photos/white-kashmir-goat-picture-id177510395?b=1&k=20&m=177510395&s=170667a&w=0&h=GwpEqfcWqvPl8uVS2rlqSs4Bain85ulA_98JZ0Hmtqc=',

                'https://images.unsplash.com/photo-1550348579-959785e820f7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://cdn.pixabay.com/photo/2021/10/27/08/43/forest-6746433__340.jpg',

                'https://images.unsplash.com/photo-1545407263-7ff5aa2ad921?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Y293fGVufDB8fDB8fA%3D%3D&auto=format',

                'https://media.istockphoto.com/photos/young-lamb-and-goat-picture-id1334693543?b=1&k=20&m=1334693543&s=170667a&w=0&h=4BJYHq_FOXaQwWCDKPKM7k6NJJ355ax5TgIKi-yen20=',

                'https://images.unsplash.com/photo-1604076150017-48b528308aa3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Z29hdHxlbnwwfHwwfHw%3D&auto=format',

                'https://images.unsplash.com/photo-1604860428762-f55cea62b7a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGNvd3xlbnwwfHwwfHw%3D&auto=format'
            ]
        }
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
                <h1 class='text-white text-3xl font-bold'>Galleries</h1>
                <h2 class='text-white text-lg'>
                    <Link :href="route('home')" class='mx-2'>Home</Link>
                    /
                    <span class='mx-2'>Galleries</span>
                </h2>
            </div>
        </div>

        <div
            class='container mt-20 md:mt-0 pt:24 md:pt-32 mb-20 mx-auto px-8 md:px-12 xl:px-40'
        >
            <h1 class='text-3xl font-bold text-primary'>Galleries</h1>
            <div class='grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 mt-12'>
                <img
                    v-for='(image, i) in $page.props.galleries'
                    :key='i'
                    :src='image'
                    alt=''
                    class='w-full h-full object-cover'
                />
            </div>
        </div>
    </AppLayout>
</template>
