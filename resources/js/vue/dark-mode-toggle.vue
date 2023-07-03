<template>
    <Switch v-model="enabled" :class="[enabled ? 'bg-yellow-600' : 'bg-stone-200', 'relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none']">
        <span class="sr-only">Use setting</span>
        <span aria-hidden="true" :class="[enabled ? 'translate-x-5' : 'translate-x-0', 'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out']" />
    </Switch>
</template>

<script setup>
import { ref, watch, onMounted  } from 'vue'
import { Switch } from '@headlessui/vue'

const enabled = ref(null)

watch(enabled, async (newState) => {
    if (newState) {
        document.documentElement.classList.add('dark')
        localStorage.theme = 'dark'
    } else {
        document.documentElement.classList.remove('dark')
        localStorage.theme = 'light'
    }
})

onMounted (() => {
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        enabled.value = true
    } else {
        enabled.value = false
    }
    // Whenever the user explicitly chooses to respect the OS preference
    // localStorage.removeItem('theme') // todo when to use this?
})
</script>
