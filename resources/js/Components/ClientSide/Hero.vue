<template>
  <ErrorMessage v-if="$page.props.errors.email" />
  <SuccessMessage v-if="$page.props.flash.successMessage" :newsletter="true" :title="'You have been subscribed to our newsletter!'" :message="`Keep an eye on your email for the latest news, updates,
                        and specials!`" />
  <SuccessMessage v-if="$page.props.flash.contactMessage" :newsletter="false" :title="`We have received your request.`" :message="`We will be in contact with you as soon as possible. If you would like to speak now, call 719-354-7012 and ask for Edward`" />
  <main>
    <div class="pt-10 bg-gray-900 sm:py-8 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
      <div class="mx-auto max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
          <div class="max-w-md px-4 mx-auto sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
            <div class="lg:py-24">
              <a href="#" class="inline-flex items-center p-1 pr-2 text-white bg-black rounded-full sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-blue-500 rounded-full">Check out our work</span>
                <span class="ml-4 text-sm">Visit our portfolio page</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="w-5 h-5 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
              <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                <span class="block">Rocky Mountain Web Design</span>
                <span class="block text-blue-400">for everything web related</span>
              </h1>
              <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                Custom built websites for businesses, website auditing, hosting, analytics, and more.
              </p>
              <div class="mt-10 sm:mt-12">
                <form @submit.prevent="addEmail" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                  <div class="sm:flex">
                    <div class="flex-1 min-w-0">
                      <label for="email" class="sr-only">Email address</label>
                      <input v-model="email" id="email" type="email" required placeholder="Enter your email" class="block w-full px-4 py-3 text-base text-center text-gray-900 placeholder-gray-500 border-0 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 focus:ring-offset-gray-900">
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                      <button type="submit" class="block w-full px-4 py-3 font-medium text-white bg-blue-500 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 focus:ring-offset-gray-900">Request an email</button>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                      <a href="tel:7193547012" class="block w-full px-4 py-3 font-medium text-center text-blue-500 bg-white rounded-md shadow hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-300 focus:ring-offset-gray-900">Call now</a>
                    </div>
                  </div>
                  <div class="mt-3 sm:mt-0 sm:ml-3">
                  <p class="mt-3 text-sm text-gray-300 sm:mt-4">By providing your email, you agree to our <a href="#" class="font-medium text-white">terms of service</a>.</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
            <div class="max-w-md px-4 mx-auto sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
              <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
              <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="https://tailwindui.com/img/component-images/cloud-illustration-blue-400.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <slot name="main-content"></slot>
  </main>

</template>

<script>

import { Link } from '@inertiajs/inertia-vue3';
import ErrorMessage from '@/Components/ClientSide/NewsLetter/ErrorMessage.vue';
import SuccessMessage from '@/Components/ClientSide/NewsLetter/SuccessMessage.vue';

export default {
   components: {
       Link,
       ErrorMessage,
       SuccessMessage
   },
   data() {
     return {
       email: null,
     }
   },
   methods: {
     addEmail() {
       this.$inertia.post('/contact', {
         email: this.email,
         contactNow: true
       });
     }
   }
 
}
</script>