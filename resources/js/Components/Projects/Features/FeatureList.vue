<template>
    <div class="overflow-hidden bg-white shadow sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">
            <li v-for="feature in features" :key="feature.id">
                
                    <div class="px-4 py-4 sm:px-6">
                        <div class="flex items-center flex-wrap justify-between">
                            <Link :href="route('admin.projects.features.show', [feature.project_id, feature.id])"  class="block hover:bg-gray-50">
                            <p
                                class="text-sm font-medium text-indigo-600 truncate "
                            >
                                {{ feature.project_feature }}
                            </p>

                            </Link>
                            <div class="flex flex-shrink-0 ml-2">
                                <button
                                    @click="toggleCompletion(feature.project_id, feature.id, feature.completed)"
                                    v-show="feature.completed"
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full "
                                >
                                    Completed
                                </button>

                                <button
                                    @click="toggleCompletion(feature.project_id, feature.id, feature.completed)"
                                    v-show="!feature.completed"
                                    class="inline-flex px-2 text-xs font-semibold leading-5 bg-red-100 rounded-full text-gred-800"
                                >
                                    In Progress
                                </button>
                            </div>
                        </div>
                        <div class="mt-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <p
                                    class="flex items-center text-sm text-gray-500 "
                                >
                                    {{ feature.feature_description }}
                                </p>
                            </div>
                            <div
                                class="flex items-center mt-2 text-sm text-gray-500 sm:mt-0"
                            >
                                <!-- Heroicon name: solid/calendar -->
                                <svg
                                    class="
                                        flex-shrink-0
                                        mr-1.5
                                        h-5
                                        w-5
                                        text-gray-400
                                    "
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                    fill="currentColor"
                                    aria-hidden="true"
                                >
                                    <path
                                        fill-rule="evenodd"
                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                <p>
                                    Due Date
                                    <time datetime="2020-01-07">{{
                                        feature.due_date
                                    }}</time>
                                </p>
                            </div>
                        </div>
                    </div>
                
            </li>
        </ul>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
export default {
    components: {
        Link
    },
    data() {
        return {
            form: {
                completed: false,
                featureId: null,
                projectId: null,
            },
        };
    },
    props: {
        features: Array,
    },
    methods: {
        toggleCompletion(projectId, featureId, completed) {
            this.form.featureId = featureId;
            this.form.projectId = projectId;
            this.form.completed = !completed;
            this.$inertia.patch(`/admin/projects/${this.form.projectId}/features/${this.form.featureId}`,this.form);
        },
    },
};
</script>
