<template>
    <header class="bg-stone-900">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="/" title="Land Planning Associates Inc." class="-m-1.5 p-1.5 flex items-center">
                    <span class="sr-only">Land Planning Associates Inc.</span>

                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="h-9 w-auto text-yellow-600 dark:text-yellow-500">
                        <title>bicycle-electric</title>
                        <path
                            d="M19 7C18.44 7 17.91 7.11 17.41 7.28L14.46 1.5H11V3H13.54L14.42 4.72L12 10.13L10.23 5.95C10.5 5.85 10.74 5.58 10.74 5.25C10.74 4.84 10.41 4.5 10 4.5H8C7.58 4.5 7.24 4.84 7.24 5.25S7.58 6 8 6H8.61L10.86 11.25H9.92C9.56 8.85 7.5 7 5 7C2.24 7 0 9.24 0 12S2.24 17 5 17C7.5 17 9.56 15.15 9.92 12.75H12.5L15.29 6.43L16.08 7.96C14.82 8.87 14 10.34 14 12C14 14.76 16.24 17 19 17S24 14.76 24 12 21.76 7 19 7M5 15.5C3.07 15.5 1.5 13.93 1.5 12S3.07 8.5 5 8.5C6.67 8.5 8.07 9.68 8.41 11.25H4V12.75H8.41C8.07 14.32 6.67 15.5 5 15.5M19 15.5C17.07 15.5 15.5 13.93 15.5 12C15.5 10.92 16 9.97 16.77 9.33L18.57 12.85L19.89 12.13L18.1 8.63C18.39 8.56 18.69 8.5 19 8.5C20.93 8.5 22.5 10.07 22.5 12S20.93 15.5 19 15.5M11 20H7L13 23V21H17L11 18V20Z" />
                    </svg> -->

                    <div class="text-white tracking-wide text-lg">
                        Land Planning Associates Inc.
                    </div>
                </a>
            </div>
            <div class="flex lg:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="mobileNavOpen = true"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-stone-200">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <div v-for="(item, index) in links" :key="index">
                    <a :href="item.link" :title="item.title"
                        class="text-sm font-semibold leading-6 text-white hover:text-yellow-500">{{
                            item.text }}</a>
                </div>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="tel:+19415240756" title="Land Planning Manatee County" class="text-white hover:text-yellow-500 flex items-center">
                    <svg class="h-5 w-5" viewBox="0 0 24 24">
                        <title>phone</title>
                        <path fill="currentColor"
                            d="M20,15.5C18.8,15.5 17.5,15.3 16.4,14.9C16.3,14.9 16.2,14.9 16.1,14.9C15.8,14.9 15.6,15 15.4,15.2L13.2,17.4C10.4,15.9 8,13.6 6.6,10.8L8.8,8.6C9.1,8.3 9.2,7.9 9,7.6C8.7,6.5 8.5,5.2 8.5,4C8.5,3.5 8,3 7.5,3H4C3.5,3 3,3.5 3,4C3,13.4 10.6,21 20,21C20.5,21 21,20.5 21,20V16.5C21,16 20.5,15.5 20,15.5M5,5H6.5C6.6,5.9 6.8,6.8 7,7.6L5.8,8.8C5.4,7.6 5.1,6.3 5,5M19,19C17.7,18.9 16.4,18.6 15.2,18.2L16.4,17C17.2,17.2 18.1,17.4 19,17.4V19Z" />
                    </svg>
                    <div class="ml-2">
                        (941) 524-0756
                    </div>
                </a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div v-if="mobileNavOpen" class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-stone-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
                <div class="flex items-center justify-between">
                    <a href="/" title="Land Planning Associates Inc." class="-m-1.5 p-1.5">
                        <span class="sr-only">Land Planning Associates Inc.</span>
                    </a>
                    <button @click="mobileNavOpen = !mobileNavOpen" type="button"
                        class="-m-2.5 rounded-md p-2.5 dark:text-stone-400 text-stone-600">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-stone-500/25">
                        <div class="space-y-2 py-6">
                            <div v-for="(item, index) in links" :key="index">
                                <a :href="item.link" :title="item.title"
                                    class="-m-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-stone-800 hover:text-yellow-500">{{
                                        item.text }}</a>
                            </div>
                        </div>
                        <div class="space-y-2 py-6">
                            <a href="tel:+19415240756" title="Land Planning Manatee County" class="-m-3 rounded-lg text-white text-base font-semibold leading-7 flex items-center hover:text-yellow-500 hover:bg-stone-800 px-3 py-2">
                                <svg class="h-5 w-5" viewBox="0 0 24 24">
                                    <title>phone</title>
                                    <path fill="currentColor"
                                        d="M20,15.5C18.8,15.5 17.5,15.3 16.4,14.9C16.3,14.9 16.2,14.9 16.1,14.9C15.8,14.9 15.6,15 15.4,15.2L13.2,17.4C10.4,15.9 8,13.6 6.6,10.8L8.8,8.6C9.1,8.3 9.2,7.9 9,7.6C8.7,6.5 8.5,5.2 8.5,4C8.5,3.5 8,3 7.5,3H4C3.5,3 3,3.5 3,4C3,13.4 10.6,21 20,21C20.5,21 21,20.5 21,20V16.5C21,16 20.5,15.5 20,15.5M5,5H6.5C6.6,5.9 6.8,6.8 7,7.6L5.8,8.8C5.4,7.6 5.1,6.3 5,5M19,19C17.7,18.9 16.4,18.6 15.2,18.2L16.4,17C17.2,17.2 18.1,17.4 19,17.4V19Z" />
                                </svg>
                                <div class="ml-2">
                                    Call Us
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup>
import { ref } from 'vue'

defineProps({
    links: {
        type: Array,
        default: () => []
    }
})

const mobileNavOpen = ref(false)
</script>
