<template>
    <Head title="Project Manager" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                Project Manager
            </h2>
            <Link
                class="p-2 text-white bg-blue-400 rounded hover:text-gray-800"
                :href="route('admin.projects.create')"
            >
                Create New Project
            </Link>
        </template>
        <Table :projects="projects" />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import Table from "@/Components/Projects/Table.vue";

import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Table,
        Head,
        Link,
    },
    props: {
        projects: Object,
    },
};
</script>
