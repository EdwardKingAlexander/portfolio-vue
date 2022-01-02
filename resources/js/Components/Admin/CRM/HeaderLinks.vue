<template>
    <div class="flex flex-wrap space-between">
        <Link :class="linkClasses" :href="route('admin.crm.companies.index')"> Companies </Link>

        <Link :class="linkClasses" href="/"> Contacts </Link>

        <Link :class="linkClasses" href="/"> Active Clients </Link>

        <Link :class="linkClasses" href="/"> Newsletter </Link>

        <Link :class="linkClasses" href="/"> Funnel </Link>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
    data() {
        return {
            linkClasses: `p-2 m-2 
                text-white 
                bg-blue-400 border border-opacity-50 border-blue-200 rounded 
                hover:text-blue-400 hover:bg-white hover:border-blue-400 `
        };
    },
};
</script>
