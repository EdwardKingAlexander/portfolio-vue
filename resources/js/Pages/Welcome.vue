<template>
    <Head title="Website Development Experts" />

    <Container>
        <template #navigation>
            <Navigation :canRegister="canRegister" :canLogin="canLogin" />
        </template>
    <Hero>
        <template #main-content>
            <Features />
            <CallToAction />
            <CallToActionTwo />
            <Stats />
            <BlogPreview />
            <SupportSection />
            
        </template>
    </Hero>
    </Container>
   
    <Footer />
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import Container from "@/Components/ClientSide/Container.vue";
import Navigation from "@/Components/ClientSide/Navigation.vue";
import Hero from "@/Components/ClientSide/Hero.vue";
import Features from "@/Components/ClientSide/Features.vue";
import CallToAction from "@/Components/ClientSide/CallToAction.vue";
import BlogPreview from "@/Components/ClientSide/BlogPreview.vue";
import SupportSection from "@/Components/ClientSide/SupportSection.vue";
import Stats from "@/Components/ClientSide/Stats.vue";
import Footer from "@/Components/ClientSide/Footer.vue";
import CallToActionTwo from "@/Components/ClientSide/CallToActionTwo.vue";

export default {
    components: {
        Head,
        Container,
        Navigation,
        Hero,
        Features,
        CallToAction,
        BlogPreview,
        SupportSection,
        Stats,
        Footer,
        CallToActionTwo,
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },
    data() {
        return {
            email: null
        }
    }
};
</script>
