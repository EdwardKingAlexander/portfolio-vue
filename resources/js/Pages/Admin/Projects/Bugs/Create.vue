<template>
    <Head :title="project.project_name + 'bugs List'" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                Create a new bug for {{ project.project_name }}
            </h2>
        </template>

        <div class="mx-auto w-3/4 pt-3">
            <form @submit.prevent="addBug">
                <div class="p-3">
                    <label
                        for="bug_description"
                        class="block text-sm font-medium text-gray-700"
                        >Describe the bug and any error messages associated with
                        it</label
                    >
                    <div class="mt-1">
                        <textarea
                            v-model="form.bugDescription"
                            rows="4"
                            name="bug_description"
                            id="bug_description"
                            class="
                                shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500
                                block
                                w-full
                                sm:text-sm
                                border-gray-300
                                rounded-md
                            "
                        ></textarea>
                    </div>
                </div>

                <div class="p-3">
                    <label
                        for="solution"
                        class="block text-sm font-medium text-gray-700"
                        >Describe a possible solution to bug</label
                    >
                    <div class="mt-1">
                        <textarea
                            v-model="form.bugSolution"
                            rows="4"
                            name="solution"
                            id="solution"
                            class="
                                shadow-sm
                                focus:ring-indigo-500 focus:border-indigo-500
                                block
                                w-full
                                sm:text-sm
                                border-gray-300
                                rounded-md
                            "
                        ></textarea>
                    </div>
                </div>

                <div class="flow-root">
                    <button
                        type="submit"
                        class="
                            inline-flex
                            float-right
                            items-center
                            px-6
                            py-2
                            border border-transparent
                            text-base
                            font-medium
                            rounded-md
                            shadow-sm
                            text-white
                            bg-indigo-600
                            hover:bg-indigo-700
                            focus:outline-none
                            focus:ring-2
                            focus:ring-offset-2
                            focus:ring-indigo-500
                        "
                    >
                        Add a New Bug
                    </button>
                </div>
            </form>
        </div>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";

import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
    },
    data() {
        return {
            form: {
                bugDescription: null,
                bugSolution: null,
                projectId: this.project.id
            }
        }
    },
    props: {
        project: Object,
    },
    methods: {
        addBug() {
            this.$inertia.post(`/admin/projects/${this.project.id}/bugs`, this.form);
        }
    }
};
</script>
