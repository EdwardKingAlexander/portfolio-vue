<template>
    <Head :title="project.project_name + ' Bug'" />

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
                        class="
                            text-3xl
                            font-extrabold
                            text-gray-900
                            sm:text-4xl
                        "
                    >
                        {{ bug.bug_description }}
                    </h2>
                    <p class="mt-3 text-xl text-gray-500 sm:mt-4">
                        Solution:
                        {{ bug.solution ? bug.solution : "no solution" }}
                    </p>
                </div>
            </div>
        </div>
        <div class="flex justify-center pt-3 mt-3">
            <span class="relative z-0 inline-flex rounded-md shadow-sm">
                <Link
                    :href="
                        route('admin.projects.bugs.edit', [
                            bug.project_id,
                            bug.id,
                        ])
                    "
                    v-if="bug.resolved"
                    class="
                        relative
                        inline-flex
                        items-center
                        px-4
                        py-2
                        text-sm
                        font-medium
                        text-white
                        visited:text-white
                        bg-blue-400
                        border border-black
                        rounded
                        hover:bg-green-500
                        focus:z-10
                        focus:outline-none
                        focus:ring-1
                        focus:ring-indigo-500
                        focus:border-indigo-500
                        m-2
                    "
                >
                    <p class="text-sm font-medium text-indigo-600 truncate">
                        Additional Solution Details
                    </p>
                </Link>

                <Link
                    :href="
                        route('admin.projects.bugs.edit', [
                            bug.project_id,
                            bug.id,
                        ])
                    "
                    v-else
                    class="
                        relative
                        inline-flex
                        items-center
                        px-4
                        py-2
                        text-sm
                        font-medium
                        text-white
                        visited:text-white
                        bg-blue-400
                        border border-gray-300
                        rounded
                        hover:bg-green-400
                        focus:z-10
                        focus:outline-none
                        focus:ring-1
                        focus:ring-indigo-500
                        focus:border-indigo-500
                        m-2
                    "
                >
                    Provide Solution
                </Link>
            </span>
            <span class="relative z-0 inline-flex rounded-md shadow-sm">
                <button
                    class="
                        bg-red-500
                        hover:bg-red-700
                        m-2
                        text-white
                        px-4
                        py-2
                        font-medium
                        text-sm
                        items-center
                        relative
                        inline-flex
                        rounded
                        border border-yellow-500
                    "
                    @click="deleteBug"
                >
                    Delete Bug
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
    props: {
        project: Object,
        bug: Object,
    },
    methods: {
        deleteBug() {
            this.$inertia.delete(`/admin/projects/${this.project.id}/bugs/${this.bug.id}`);
        }
    }
};
</script>
