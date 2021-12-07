<template>
    <Head title="Create a New Project" />

    <AdminLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Create a New Project
            </h2>
        </template>

        <ProjectForm />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import ProjectForm from "@/Components/Projects/Components/CreateProjectForm.vue";
import { Head } from "@inertiajs/inertia-vue3";

export default {
    metaInfo: {
        title: "Create a New Project",
    },
    components: {
        AdminLayout,
        Head,
        ProjectForm,
    }
};
</script>
