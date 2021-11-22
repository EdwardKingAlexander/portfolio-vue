<template>
    <Head title="Project Manager" />

    <AdminLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Project Manager
            </h2>
        </template>
        <Table />
    </AdminLayout>
</template>

<script>
import AdminLayout from '@/Layouts/Admin/Admin.vue'
import Table from '@/Components/Projects/Table.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        AdminLayout,
        Table,
        Head,
    },
}
</script>
