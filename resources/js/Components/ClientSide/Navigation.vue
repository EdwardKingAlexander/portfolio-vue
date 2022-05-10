<template>
    <header class="relative">
        <DesktopNav :show="show" :isAdmin="isAdmin"  @toggleMobileNav="toggleMobileNav" :canLogin="canLogin" :canRegister="canRegister" />
        <!-- Mobile Nav -->
        <MobileNav :show="show" @toggleMobileNav="toggleMobileNav" />
    </header>
</template>

<script>

import MobileNav from "@/Components/ClientSide/MobileNav.vue";
import DesktopNav from "@/Components/ClientSide/DesktopNav.vue";

export default {
    components: {
        MobileNav,
        DesktopNav,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        isAdmin: Boolean
    },
    data() {
        return {
            show: false,
        };
    },
    methods: {
        toggleMobileNav() 
        {
            this.show = !this.show;
        },
    },
};
</script>
