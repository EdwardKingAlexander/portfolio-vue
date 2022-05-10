<template>
    <Head title="About Rocky Mountain Web Design LLC" />

    <Container>
        <template #navigation>
            <Navigation :canRegister="canRegister" :canLogin="canLogin"  />

            <h1> hhhheyy! </h1>
        </template>
  
    
    </Container>
   
    <Footer />
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Container from "@/Components/ClientSide/Container.vue";
import Navigation from "@/Components/ClientSide/Navigation.vue";
import Footer from "@/Components/ClientSide/Footer.vue";

export default {
    components: {
        Head,
        Container,
        Navigation,    
        Footer,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    }
};
</script>
