<template>
    <Head title="Create a New Project" />

    <AdminLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Edit Project Name
            </h2>
        </template>

        <ProjectForm :project="project" />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import ProjectForm from "@/Components/Projects/Components/CreateProjectForm.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    metaInfo: {
        title: "Edit a Project Name",
    },
    components: {
        AdminLayout,
        Head,
        ProjectForm,
    },
    props: {
        project: Object
    }
};
</script>
