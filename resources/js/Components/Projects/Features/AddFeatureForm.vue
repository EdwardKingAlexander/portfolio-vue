<template>
    <button
        type="button"
        @click="showTheForm"
        class="inline-flex items-center p-3 text-white bg-indigo-600 border border-transparent rounded-full shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
    >
        <!-- Heroicon name: outline/plus-sm -->

        <svg
            v-if="!showForm"
            class="w-6 h-6"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            aria-hidden="true"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M12 6v6m0 0v6m0-6h6m-6 0H6"
            />
        </svg>

        <svg
            v-else
            xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
            />
        </svg>
    </button>

    <div class="mt-3" v-show="showForm">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">
                        New Feature
                    </h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form @submit.prevent="addFeature">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-2">
                                    <label
                                        for="feature-name"
                                        class="block text-sm font-medium text-gray-700 "
                                    >
                                        Feature Name
                                    </label>
                                    <div class="flex mt-1 rounded-md shadow-sm">
                                        <input
                                            required
                                            v-model="form.featureName"
                                            type="text"
                                            name="feature-name"
                                            id="feature-name"
                                            class="flex-1 block w-full border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm"
                                            placeholder="Email newsletter automation"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label
                                    for="feature-description"
                                    class="block text-sm font-medium text-gray-700 "
                                >
                                    Feature Description
                                </label>
                                <div class="mt-1">
                                    <textarea
                                        v-model="form.featureDescription"
                                        required
                                        id="feature-description"
                                        name="feature-description"
                                        rows="3"
                                        class="block w-full mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    ></textarea>
                                </div>
                            </div>

                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 "
                                >
                                    Due Date
                                </label>
                                <div class="flex items-center mt-1">
                                    <input
                                        required
                                        v-model="form.dueDate"
                                        type="date"
                                        name="due-date"
                                        id=""
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                            <button
                                type="submit"
                                class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Add Feature
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            showForm: false,
            form: {
                featureName: "",
                featureDescription: "",
                dueDate: "",
                projectId: this.project.id
            },
        };
    },
    methods: {
        showTheForm() {
            this.showForm = !this.showForm;
        },
        addFeature() {
            this.$inertia.post(
                `/admin/projects/${this.project.id}/features`,
                this.form
            );

            this.showForm = false;
            this.form.featureName = '';
            this.form.featureDescription = '';
            this.form.dueDate = '';
        },
    },
    props: {
        project: Object,
    },
};
</script>
