<template>
    <Head :title="project.project_name + 'bugs List'" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                {{ project.project_name }} Bugs List
            </h2>
            <Link
                class="p-2 text-white bg-blue-400 rounded hover:text-gray-800"
                :href="route('admin.projects.bugs.create', project.id)"
            >
                Create New Bug 
            </Link>
            
            
        </template>
        <BugsList :bugs="bugs" />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import BugsList from "@/Components/Projects/Bugs/BugsList.vue";

import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        Link,
        BugsList,
    },
    props: {
        bugs: Object,
        project: Object
    },
};
</script>
