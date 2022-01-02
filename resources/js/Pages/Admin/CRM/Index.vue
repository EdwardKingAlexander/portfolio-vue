<template>
    <Head title="Customer Relationship Management Dashboard" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                Customer Relationship Manager
            </h2>

            <HeaderLinks />
        </template>
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import HeaderLinks from "@/Components/Admin/CRM/HeaderLinks.vue";

import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        HeaderLinks,
    },
    props: {},
};
</script>
