<template>
    <Head :title="project.project_name + 'Features List'" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                {{ project.project_name }} Features List
            </h2>
            

            <FeatureForm  :project="project" />

            <FeatureList :features="features" />
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import FeatureList from "@/Components/Projects/Features/FeatureList.vue";
import FeatureForm from "@/Components/Projects/Features/AddFeatureForm.vue";

import { Head, Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        Link,
        FeatureList,
        FeatureForm,
    },
    props: {
        project: Object,
        features: Array,
    },
};
</script>
