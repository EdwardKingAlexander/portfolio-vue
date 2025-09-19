<template>
    <Head title="Website Development Experts" />

    <Container>
        <template #navigation>
            <Navigation :canRegister="canRegister" :canLogin="canLogin"  />
        </template>
   
        <template #main-content>
               <TextToTabConverter />      

               <h1>Hello</h1>
        </template>
   
    </Container>
   
    <Footer />
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Container from "@/Components/ClientSide/Container.vue";
import Navigation from "@/Components/ClientSide/Navigation.vue";
import Footer from "@/Components/ClientSide/Footer.vue";
import TextToTabConverter from '@/Components/Tools/TextToTabConverter.vue';

export default {
    components: {
        Head,
        Container,
        Navigation,
        Footer,
        TextToTabConverter
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
};
</script>
