<template>
    <Head title="Customer Relationship Management Dashboard" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                Add a Company
            </h2>

            


            <HeaderLinks />
        </template>
        <CompanyForm />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import HeaderLinks from "@/Components/Admin/CRM/HeaderLinks.vue";
import CompanyForm from "@/Components/Admin/CRM/Companies/AddCompanyForm.vue";

import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        HeaderLinks,
        CompanyForm
    },
};
</script>
