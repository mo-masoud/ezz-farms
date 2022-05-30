<script>
import { Link } from '@inertiajs/inertia-vue3'
import AppLayout from '@/Layouts/AppLayout.vue'
import MainLink from '@/Components/MainLink.vue'

import { Dialog, Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'

export default {
    components: {
        Link,
        AppLayout,
        MainLink,
        Dialog,
        TabGroup,
        TabList,
        Tab,
        TabPanels,
        TabPanel
    },
    data() {
        return {
            openImage: false,
            form: {
                weight: '',
                cuts: '',
                packaging: '',
                date: '',
                quantity: 1
            },
            disabled: true,
            weights: [
                {
                    text: '1 lb',
                    value: 1
                },
                {
                    text: '2 lb',
                    value: 2
                },
                {
                    text: '3 lb',
                    value: 3
                },
                {
                    text: '4 lb',
                    value: 4
                }
            ],
            cuts: [
                {
                    text: 'Option 1',
                    value: 1
                },
                {
                    text: 'Option 2',
                    value: 2
                },
                {
                    text: 'Option 3',
                    value: 3
                },
                {
                    text: 'Option 4',
                    value: 4
                }
            ],
            packaging: [
                {
                    text: 'Option 1',
                    value: 1
                },
                {
                    text: 'Option 2',
                    value: 2
                },
                {
                    text: 'Option 3',
                    value: 3
                },
                {
                    text: 'Option 4',
                    value: 4
                }
            ]
        }
    },
    methods: {
        toggleFullScreen() {
            if (!document.fullscreenElement) {
                document.documentElement.requestFullscreen()
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen()
                }
            }
        }
    },
    mounted() {
        document.addEventListener(
            'keydown',
            function(e) {
                if (e.key === 'Esc') {
                    document.exitFullscreen()
                }
            },
            false
        )
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
                <h1 class='text-white text-3xl font-bold'>{{ $page.props.product.name }}</h1>
                <h2 class='text-white text-lg'>
                    <Link :href="route('home')" class='mx-2'>Home</Link>
                    /
                    <Link :href="route('products')" class='mx-2'>Shop</Link>
                    /
                    <Link :href="route('products')" class='mx-2'>{{ $page.props.product.category.title }}</Link>
                    /
                    <span class='ml-2'>{{ $page.props.product.name }}</span>
                </h2>
            </div>
        </div>
        <div class='container mx-auto my-24 px-12 md:px-32'>
            <div class='flex space-x-12'>
                <div class='w-1/2'>
                    <div class='relative border border-primary w-112 h-112 p-8'>
                        <img
                            :src='$page.props.product.image'
                            alt='item'
                            class='w-full h-full object-contain hover:scale-150 transition-all ease-in-out duration-200'
                        />
                        <button class='absolute top-5 right-5' @click='openImage = true'>
                            <svg
                                class='h-6 w-6'
                                fill='none'
                                stroke='currentColor'
                                stroke-width='2'
                                viewBox='0 0 24 24'
                                xmlns='http://www.w3.org/2000/svg'
                            >
                                <path
                                    d='M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'
                                    stroke-linecap='round'
                                    stroke-linejoin='round'
                                />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class='w1/2'>
                    <h1 class='text-4xl font-bold'>{{ $page.props.product.name }}</h1>
                    <span class='text-2xl font-bold mt-4'>{{ $page.props.product.starting_price
                        }} EG ~ {{ $page.props.product.maximum_price }} EG</span>
                    <p class='text-gray-500 mt-4'>
                        {{ $page.props.product.brief }}
                    </p>

                    <!-- <div class="mt-12">
                        <table>
                            <tr>
                                <td class="pr-20 py-5">
                                    <label for="weight" class="text-gray-500">Weight</label>
                                </td>
                                <td>
                                    <select
                                        id="weight"
                                        placeholder="Choose an option"
                                        class="py-3 pl-8 pr-28 text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary"
                                        name="weight"
                                        v-model="form.weight"
                                    >
                                        <option value="">Choose an option</option>
                                        <option
                                            v-for="(weight, i) in weights"
                                            :key="i"
                                            :value="weight.value"
                                        >
                                            {{ weight.text }}
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-20 py-5">
                                    <label for="cuts" class="text-gray-500">How to cuts</label>
                                </td>
                                <td>
                                    <select
                                        id="cuts"
                                        placeholder="Choose an option"
                                        class="py-3 pl-8 pr-28 text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary"
                                        name="cuts"
                                        v-model="form.cuts"
                                    >
                                        <option value="">Choose an option</option>
                                        <option
                                            v-for="(cut, i) in cuts"
                                            :key="i"
                                            :value="cut.value"
                                        >
                                            {{ cut.text }}
                                        </option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="pr-20 py-5">
                                    <label for="cuts" class="text-gray-500">Packaging</label>
                                </td>
                                <td>
                                    <select
                                        id="packaging"
                                        placeholder="Choose an option"
                                        class="py-3 pl-8 pr-28 text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary"
                                        name="packaging"
                                        v-model="form.packaging"
                                    >
                                        <option value="">Choose an option</option>
                                        <option
                                            v-for="(pack, i) in packaging"
                                            :key="i"
                                            :value="pack.value"
                                        >
                                            {{ pack.text }}
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </table>

                        <div class="mt-6">
                            <span class="block text-gray-500"> Delivery Date: </span>
                            <input
                                type="date"
                                id="date"
                                name="date"
                                class="py-3 w-full text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary mt-2"
                                v-model="form.date"
                            />
                        </div>
                        <div class="flex items-end space-x-6 mt-6">
                            <input
                                placeholder="Quantity"
                                class="py-3 w-28 text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary mt-2"
                                type="number"
                                name="quantity"
                                id="quantity"
                                v-model="form.quantity"
                            />
                            <button
                                class="bg-primary py-4 px-10 uppercase text-sm font-bold text-gray-800 hover:brightness-90 transition-all duration-150 ease-in-out disabled:opacity-50 disabled:cursor-not-allowed"
                                :disabled="disabled"
                            >
                                Add to cart
                            </button>
                        </div>
                    </div> -->

                    <div class='mt-20 text-xs'>
                        <div class='space-x-2'>
							<span class='font-bold uppercase tracking-tighter'
                            >Category :</span
                            >
                            <span class='text-gray-500'>{{ $page.props.product.category.title }}</span>
                        </div>
                        <div class='space-x-2'>
							<span class='font-bold uppercase tracking-tighter'>
								Product ID :
							</span>
                            <span class='text-gray-500'>{{ $page.props.product.id }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class='mt-28'>
                <TabGroup>
                    <TabList class='flex space-x-1'>
                        <Tab v-slot='{ selected }' as='template'>
                            <button
                                :class="[
									' text-left px-14 py-8 text-4xl leading-5 font-medium',
									selected
										? 'bg-gray-100 text-gray-900'
										: 'text-white bg-primary',
								]"
                            >
                                Description
                            </button>
                        </Tab>
                        <Tab v-slot='{ selected }' as='template'>
                            <button
                                :class="[
									' text-left px-14 py-8 text-4xl leading-5 font-medium',
									selected
										? 'bg-gray-100 text-gray-900'
										: 'text-white bg-primary',
								]"
                            >
                                Additional information
                            </button>
                        </Tab>
                        <!-- <Tab as="template" v-slot="{ selected }">
                            <button
                                :class="[
                                    ' text-left px-14 py-8 text-4xl leading-5 font-medium',
                                    selected
                                        ? 'bg-gray-100 text-gray-900'
                                        : 'text-white bg-primary',
                                ]"
                            >
                                Reviews (0)
                            </button>
                        </Tab> -->
                    </TabList>
                    <TabPanels>
                        <TabPanel class='bg-gray-100 py-12 px-14'>
                            <h1 class='text-3xl'>Description</h1>
                            <p class='text-gray-500 mt-4'>
                                {{ $page.props.product.description }}
                            </p>
                        </TabPanel>
                        <TabPanel class='bg-gray-100 py-12 px-14'>
                            <h1 class='text-3xl'>Additional information</h1>
                            <table
                                class='table-fixed border-b text-gray-500 border-gray-200 w-full mt-4'
                            >
                                <tr class='border-t border-gray-200'>
                                    <td class='font-bold tracking-tighter px-12 py-2'>Weight</td>
                                    <td class='text-sm italic font-semibold'>
                                        {{ $page.props.product.weights.map((w) => w.title).toString() }}
                                    </td>
                                    <td v-for='i in 5' :key='i'></td>
                                </tr>
                                <tr class='border-t border-gray-200 bg-gray-200 bg-opacity-60'>
                                    <td class='font-bold tracking-tighter px-12 py-2'>Cuts</td>
                                    <td class='text-sm italic font-semibold'>
                                        {{ $page.props.product.cuts.map((c) => c.title).toString() }}
                                    </td>
                                    <td v-for='i in 5' :key='i'></td>
                                </tr>
                                <tr class='border-t border-gray-200'>
                                    <td class='font-bold tracking-tighter px-12 py-2'>
                                        Packaging
                                    </td>
                                    <td class='text-sm italic font-semibold'>
                                        {{ $page.props.product.packagings.map((p) => p.title).toString() }}
                                    </td>
                                    <td v-for='i in 5' :key='i'></td>
                                </tr>
                            </table>
                        </TabPanel>
                        <!-- <TabPanel class="bg-gray-100 py-12 px-14">
                            <h1 class="text-3xl">Reviews</h1>
                        </TabPanel> -->
                    </TabPanels>
                </TabGroup>
            </div>
        </div>

        <!-- dialog -->
        <Dialog
            :open='openImage'
            class='fixed inset-0 w-full h-full z-[60] overflow-y-auto bg-black'
            @close='openImage = false'
        >
            <div class='flex items-center justify-end space-x-5 p-8'>
                <button @click='toggleFullScreen'>
                    <svg
                        class='h-6 w-6 text-white'
                        fill='none'
                        stroke='currentColor'
                        stroke-width='2'
                        viewBox='0 0 24 24'
                        xmlns='http://www.w3.org/2000/svg'
                    >
                        <path
                            d='M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4'
                            stroke-linecap='round'
                            stroke-linejoin='round'
                        />
                    </svg>
                </button>
                <button @click='openImage = false'>
                    <svg
                        class='h-6 w-6 text-white'
                        fill='none'
                        stroke='currentColor'
                        stroke-width='2'
                        viewBox='0 0 24 24'
                        xmlns='http://www.w3.org/2000/svg'
                    >
                        <path
                            d='M6 18L18 6M6 6l12 12'
                            stroke-linecap='round'
                            stroke-linejoin='round'
                        />
                    </svg>
                </button>
            </div>
            <div class='flex items-center justify-center mt-20'>
                <img
                    :src='$page.props.product.image'
                    alt='item'
                />
            </div>
        </Dialog>
        <!-- end dialog -->
    </AppLayout>
</template>
