<template>
    <form class="space-y-8 divide-y divide-gray-200">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
            <div>
                <div>
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Bug:
                    </h3>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                        {{ bug.bug_description }}
                    </p>
                </div>

                <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                    <div
                        class="
                            sm:grid
                            sm:grid-cols-3
                            sm:gap-4
                            sm:items-start
                            sm:border-t
                            sm:border-gray-200
                            sm:pt-5
                        "
                    >
                        <label
                            for="about"
                            class="
                                block
                                text-sm
                                font-medium
                                text-gray-700
                                sm:mt-px sm:pt-2
                            "
                        >
                            Solution
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea
                                v-model="form.solution"
                                id="about"
                                name="about"
                                rows="3"
                                class="
                                    max-w-lg
                                    shadow-sm
                                    block
                                    w-full
                                    focus:ring-indigo-500
                                    focus:border-indigo-500
                                    sm:text-sm
                                    border border-gray-300
                                    rounded-md
                                "
                            ></textarea>
                            <p class="mt-2 text-sm text-gray-500"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <span class="flex-grow flex flex-col">
                    <span
                        v-if="!form.resolved"
                        class="text-sm font-medium text-gray-900"
                        id="availability-label"
                        >Mark Bug Unresolved</span
                    >
                    <span
                        v-else
                        class="text-sm font-medium text-gray-900"
                        id="availability-label"
                        >Resolved</span
                    >
                </span>
                <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                <button
                    type="button"
                    @click="toggleResolved"
                    :class="
                        this.form.resolved
                            ? `bg-indigo-600 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500`
                            : `bg-gray-200 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500`
                    "
                    role="switch"
                    :aria-checked="this.form.resolved ? 'true' : 'false'"
                    aria-labelledby="availability-label"
                    aria-describedby="availability-description"
                >
                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                    <span
                        aria-hidden="true"
                        :class="
                            this.form.resolved
                                ? `translate-x-5 ${this.spanClasses}`
                                : `translate-x-0 ${this.spanClasses}`
                        "
                    ></span>
                </button>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <button
                    @click.prevent="
                        saveData(
                            this.bug.project_id,
                            this.bug.id,
                            this.form.solution,
                            this.form.resolved
                        )
                    "
                    type="submit"
                    class="
                        ml-3
                        inline-flex
                        justify-center
                        py-2
                        px-4
                        border border-transparent
                        shadow-sm
                        text-sm
                        font-medium
                        rounded-md
                        text-white
                        bg-indigo-600
                        hover:bg-indigo-700
                        focus:outline-none
                        focus:ring-2
                        focus:ring-offset-2
                        focus:ring-indigo-500
                    "
                >
                    Save Solution
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    props: {
        bug: Object,
    },
    data() {
        return {
            form: {
                bugId: this.bug.id,
                projectId: this.bug.project_id,
                solution: this.bug.solution,
                resolved: this.bug.resolved,
            },

            spanClasses:
                "pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200",
        };
    },
    methods: {
        toggleResolved() {
            this.form.resolved = !this.form.resolved;
            console.log(this.bug.resolved);
        },
        saveData(projectId, bugId) {
            this.$inertia.put(
                `/admin/projects/${projectId}/bugs/${bugId}`,
                this.form
            );
        },
    },
};
</script>
