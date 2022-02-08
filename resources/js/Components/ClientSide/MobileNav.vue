<template>
    
    <div v-if="show" class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top transform md:hidden">
      <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
        <div class="flex items-center justify-between px-5 pt-4">
          <div>
            <img class="w-auto h-12" src="/img/logo.svg" alt="Company Logo">
          </div>
          <div class="-mr-2">
            <button @click="toggleMobileNav" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-600">
              <span class="sr-only">Close menu</span>
              <!-- Heroicon name: outline/x -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
        <div class="pt-5 pb-6">
          <div class="px-2 space-y-1">
            <Link href="#" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Product</Link>

            <Link href="#" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Services</Link>

            <Link href="#" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Marketplace</Link>

            <Link href="#" class="block px-3 py-2 text-base font-medium text-gray-900 rounded-md hover:bg-gray-50">Company</Link>
          </div>
          <div class="px-5 mt-6">
            <Link :href="route('register')" class="block w-full px-4 py-3 font-medium text-center text-white bg-blue-600 rounded-md shadow hover:bg-blue-700">Register</Link>
          </div>
          <div class="px-5 mt-6">
            <p class="text-base font-medium text-center text-gray-500">Existing customer? <Link :href="route('login')" class="text-gray-900 hover:underline">Login</Link></p>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link
    },
    props: {
        show: Boolean
    },
    methods: {
        toggleMobileNav() {
            this.$emit('toggleMobileNav');
        }
    }
}
</script>