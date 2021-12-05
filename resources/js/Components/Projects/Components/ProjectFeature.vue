<template>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
  <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
    
    <div class="flex-1 min-w-0">
      <a href="#" class="focus:outline-none">
        <span class="absolute inset-0" aria-hidden="true"></span>
        <p class="text-sm font-medium text-gray-900">
          Features
        </p>
      </a>
    </div>
  </div>

  <!-- More people... -->

  <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
    <div class="flex-1 min-w-0">
      <a href="#" class="focus:outline-none">
        <span class="absolute inset-0" aria-hidden="true"></span>
        <p class="text-sm font-medium text-gray-900">
          Bugs
        </p>
      </a>
    </div>
  </div>

  <div class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
    <div class="flex-1 min-w-0">
      <a href="#" class="focus:outline-none">
        <span class="absolute inset-0" aria-hidden="true"></span>
        <p class="text-sm font-medium text-gray-900">
          View All
        </p>
      </a>
    </div>
  </div>
</div>
  
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
            Link
            },
    props:{
        project: Object
    }

};
</script>
