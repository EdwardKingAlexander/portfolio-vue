<template>
    <div class="overflow-hidden bg-white shadow sm:rounded-md">
        <ul role="list" class="divide-y divide-gray-200">
            <li v-for="bug in bugs" :key="bug.id">
                
                    <div class="px-4 py-4 sm:px-6">
                       
                        <div class="my-2 sm:flex sm:justify-between">
                            <div class="sm:flex">
                                <p
                                    class="flex items-center text-md text-gray-700 "
                                >
                                    {{ bug.bug_description }}
                                </p>
                            </div>
                        
                        </div>

                         <div class="flex items-center flex-wrap justify-between">
                            <Link :href="route('admin.projects.bugs.show', [bug.project_id, bug.id])"  class=" flex flex-wrap  hover:bg-gray-50">
                            <p
                                :class="'text-sm flex flex-wrap font-bold ' + bug.resolved ? 'text-green-600' : 'text-red-600' "
                            >
                               Potential sollution: {{ bug.solution ? bug.solution : 'No current solution' }}
                            </p>

                            </Link>
                            <br>
                            <div class="flex flex-shrink-0 ml-2">
                                <button
                                    @click="toggleCompletion(bug.project_id, bug.id, bug.resolved)"
                                    v-show="bug.resolved"
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full "
                                >
                                    Resolved
                                </button>

                                <button
                                    @click="toggleCompletion(bug.project_id, bug.id, bug.resolved)"
                                    v-show="!bug.resolved"
                                    class="inline-flex px-2 text-xs font-semibold leading-5 bg-red-100 rounded-full text-gred-800"
                                >
                                    Not Yet Resolved
                                </button>
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
                resolved: null,
                bugId: null,
                projectId: null
},
        };
    },
    props: {
        bugs: Object,
    },
    methods: {
        toggleCompletion(projectId, bugId, resolved) {
            this.form.resolved = resolved;
            this.form.projectId = projectId;
            this.form.bugId = bugId;
            this.$inertia.patch(`/admin/projects/${this.form.projectId}/bugs/${this.form.bugId}`,this.form);
        },
    },
};
</script>
