import { createApp } from 'vue/dist/vue.esm-bundler'
import DarkModeToggle from './vue/dark-mode-toggle.vue'
import NavBar from './vue/nav-bar.vue'

createApp()
    .component('dark-mode-toggle', DarkModeToggle)
    .component('nav-bar', NavBar)
    .mount("#app")
