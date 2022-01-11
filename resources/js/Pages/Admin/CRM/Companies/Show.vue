<template>
    <Head :title="`CRM - ${company.company_name}`" />

    <AdminLayout>
        <template #header>
            
            <HeaderLinks />

        </template>
        <Company :company="company" :notes="notes" />
    </AdminLayout>
</template>

<script>
import AdminLayout from "@/Layouts/Admin/Admin.vue";
import HeaderLinks from "@/Components/Admin/CRM/HeaderLinks.vue";
import Company from "@/Components/Admin/CRM/Companies/SingleCompany.vue";

import { Head } from "@inertiajs/inertia-vue3";

export default {
    components: {
        AdminLayout,
        Head,
        HeaderLinks,
        Company
    },
    props: {
        company: Object,
        notes: Object
    }
};
</script>
