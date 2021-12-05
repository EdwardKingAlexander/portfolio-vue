<template>
    <Head :title="project.project_name" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                {{ project.project_name }}
            </h2>

            <ProjectFeature />
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import ProjectFeature from '@/Components/Projects/Components/ProjectFeature.vue';

import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
            Head,
            Link,
            ProjectFeature
            },
    props:{
        project: Object
    }

};
</script>
