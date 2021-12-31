<template>
    <Head :title="project.project_name + ' Features'" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                {{ project.project_name }}
            </h2>
        </template>

        <div class="pt-12 bg-gray-50 sm:pt-16">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto text-center">
                    <h2
                        class="text-3xl font-extrabold text-gray-900 sm:text-4xl"
                    >
                        {{ feature.project_feature }}
                    </h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        {{ feature.feature_description }}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center pt-3 mt-3">
            <span class="relative z-0 inline-flex rounded-md shadow-sm">
  <button type="button" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
    {{ feature.feature_completed ? 'Completed': 'In Progress' }}
  </button>
  <button type="button" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
    {{ dueDate() }}
  </button>
  <button type="button" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
    Days
  </button>
</span>
        </div>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";

import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        Link,
    },
    data() {
        return {
            month: ["January","February","March","April","May","June","July","August","September","October","November","December"],
        }
    },
    methods: {
        dueDate() {
            let date =  new Date(this.feature.due_date);
            // return date;
            return `Due Date: ${this.month[date.getMonth()]} ${date.getDay()}, ${date.getFullYear()}`;
        }
    },
    props: {
        project: Object,
        feature: Object,
    }
};
</script>
