<script>
import { Link } from '@inertiajs/inertia-vue3'
import MainLink from '@/Components/MainLink.vue'

export default {
    components: { Link, MainLink },
    props: ['item']
}
</script>

<template>
    <div
        class='flex flex-col items-center justify-center border border-primary pt-6 pb-8 px-8'
    >
        <div
            class='relative group transition-all duration-150 ease-in-out hover:shadow-2xl'
        >
            <div
                class='hidden absolute inset-0 z-10 group-hover:flex items-center justify-center transition-all duration-150 ease-in-out'
            >
                <Link
                    :href="route('products.show')"
                    class='rounded-full p-4 bg-white shadow-2xl'
                >
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
                :alt='item.title'
                :src='$page.props.image_url + item.image'
                class='h-full object-cover group-hover:brightness-75'
            />
        </div>

        <h1 class='mt-4'>{{ item.title }}</h1>
        <span class='font-bold'>{{ item.starting_price }} EG ~ {{ item.maximum_price
            }} EG</span>
        <MainLink
            v-if='item.id'
            :href="route('products.show', {
                id: item.id
            })"
            class='mt-6'
            text='select option'
        />
    </div>
</template>
