<template>
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        <div
            class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
        >
            <div class="flex-1 min-w-0">
              <Link :href="route('admin.projects.features.index', project.id)">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">Features</p>
                </Link>
            </div>
        </div>


        <div
            class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
        >
            <div class="flex-1 min-w-0">
                <a :href="route('admin.projects.bugs.index', project.id)" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">Bugs</p>
                </a>
            </div>
        </div>

        <div
            class="relative flex items-center px-6 py-5 space-x-3 bg-white border border-gray-300 rounded-lg shadow-sm hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500"
        >
            <div class="flex-1 min-w-0">
                <Link
                    :href="route('admin.projects.edit', project.id)"
                    class="focus:outline-none"
                >
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-sm font-medium text-gray-900">
                        Edit Project Name
                    </p>
                </Link>
            </div>
        </div>

        <div
            class="relative flex items-center px-6 py-5 space-x-3 text-red-800 bg-white border border-red-800 rounded-lg shadow-sm hover:border-white hover:bg-red-800 hover:text-white focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-white"
        >
            <div class="flex-1 min-w-0">
                <Link @click="deleted" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p
                        class="text-sm font-semibold hover:font-extrabold"
                    >
                        Delete Project
                    </p>
                </Link>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },
    props: {
        project: Object,
    },
    methods: {
      deleted() {
        this.$inertia.delete(`/admin/projects/${this.project.id}`);
      }
    }
};
</script>
