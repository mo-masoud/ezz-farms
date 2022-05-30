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
                <h1 class='text-white text-3xl font-bold'>Contact us</h1>
                <h2 class='text-white text-lg'>
                    <Link :href="route('home')" class='mx-2'>Home</Link>
                    /
                    <span class='mx-2'>Contact us</span>
                </h2>
            </div>
        </div>

        <div
            class='container mt-20 md:mt-0 pt:24 md:pt-32 mb-20 mx-auto px-8 md:px-12 xl:px-40'
        >
            <h1 class='text-3xl font-bold text-primary'>Contact Us</h1>
            <div class='mt-8 flex flex-col md:flex-row space-y-12 md:space-y-0'>
                <form action='' class='w-full md:w-2/3 space-y-4'>
                    <input
                        autocomplete='off'
                        class='placeholder:text-sm focus:placeholder:text-primary py-3 w-full text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary mt-2'
                        name='name'
                        placeholder='Name *'
                        type='text'
                    />
                    <div
                        class='flex flex-col md:flex-row space-x-0 md:space-x-6 space-y-6 md:space-y-2'
                    >
                        <input
                            autocomplete='off'
                            class='placeholder:text-sm focus:placeholder:text-primary py-3 w-full text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary mt-2'
                            name='email'
                            placeholder='Email *'
                            type='email'
                        />
                        <input
                            autocomplete='off'
                            class='placeholder:text-sm focus:placeholder:text-primary py-3 w-full text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary mt-2'
                            name='phone'
                            placeholder='Mobile Number *'
                            type='tel'
                        />
                    </div>
                    <textarea
                        autocomplete='off'
                        class='placeholder:text-sm focus:placeholder:text-primary py-3 w-full text-gray-500 border-gray-300 border-2 focus:outline-none focus:ring-0 focus:border-primary mt-2'
                        cols='30'
                        name='message'
                        placeholder='Message *'
                        rows='10'
                    ></textarea>

                    <button
                        class='w-full uppercase inline-block tracking-tighter bg-primary px-8 py-3 text-xs font-bold text-white hover:brightness-90 transition-all duration-150 ease-in-out'
                        type='submit'
                    >
                        Send message
                    </button>
                </form>
                <div class='px-0 md:px-12 space-y-6'>
                    <div
                        class='group w-full cursor-pointer text-center border border-primary hover:bg-primary hover:shadow-lg py-12 px-8 transition-all duration-150 ease-in-out'
                    >
                        <h1
                            class='text-3xl text-primary group-hover:text-white font-bold transition-all duration-150 ease-in-out'
                        >
                            Address
                        </h1>
                        <span
                            class='text-sm group-hover:text-gray-200 text-gray-600 font-semibold transition-all duration-150 ease-in-out'
                        >
							{{ $page.props.configs['address'] }}
						</span>
                    </div>
                    <div
                        class='group w-full cursor-pointer text-center border border-primary hover:bg-primary hover:shadow-lg py-12 px-8 transition-all duration-150 ease-in-out'
                    >
                        <h1
                            class='text-3xl text-primary group-hover:text-white font-bold transition-all duration-150 ease-in-out'
                        >
                            Phone
                        </h1>
                        <span
                            class='text-sm group-hover:text-gray-200 text-gray-600 font-semibold transition-all duration-150 ease-in-out'
                        >
							{{ $page.props.configs['phone'] }}
						</span>
                    </div>
                    <div
                        class='group w-full cursor-pointer text-center border border-primary hover:bg-primary hover:shadow-lg py-12 px-8 transition-all duration-150 ease-in-out'
                    >
                        <h1
                            class='text-3xl text-primary group-hover:text-white font-bold transition-all duration-150 ease-in-out'
                        >
                            Email
                        </h1>
                        <span
                            class='text-sm group-hover:text-gray-200 text-gray-600 font-semibold transition-all duration-150 ease-in-out'
                        >
							{{ $page.props.configs['email'] }}
						</span>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
