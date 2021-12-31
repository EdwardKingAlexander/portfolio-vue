<template>
    <Head :title="project.project_name + 'solution'" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                {{ project.project_name }}
            </h2>
                <SolutionForm :bug="bug" />
            
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import SolutionForm from "@/Components/Projects/Bugs/AddSolutionForm.vue";


import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        Link,
        SolutionForm
    },
    props: {
        bug: Object,
        project: Object
    },
};
</script>
