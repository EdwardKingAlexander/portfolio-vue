<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        Link,
    },

    props: ['href', 'active', 'darkMode'],

    computed: {
        classes() {
            if(this.active & this.darkMode) {
               return 'inline-flex items-center px-1 pt-1 border-b-2 border-blue-400 text-sm font-medium leading-5 text-white focus:outline-none focus:border-blue-700 transition  duration-150 ease-in-out';
            } else if(this.active & !this.darkMode) {
                return 'inline-flex items-center px-1 pt-1 border-b-2 border-blue-400 text-sm font-medium leading-5 text-gray-600 focus:outline-none focus:border-blue-700 transition  duration-150 ease-in-out';
            } else if(!this.active & this.darkMode) {
                return 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-blue-300 hover:text-blue-400 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';                
            } else {
                return 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
            }
        },
        
    }
}
</script>
