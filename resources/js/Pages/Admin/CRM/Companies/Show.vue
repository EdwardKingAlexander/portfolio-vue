<template>
    <Head :title="`CRM - ${company.company_name}`" />

    <AdminLayout>
        <template #header>
            <h2 class="pb-3 text-xl font-semibold leading-tight text-gray-800">
                {{ company.company_name }}
            </h2>
            <HeaderLinks />

        </template>
        <Company />
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
        company: Object
    }
};
</script>
