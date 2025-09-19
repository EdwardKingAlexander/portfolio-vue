<template>
    <Head title="Website Development Experts" />

    <Container>
        <template #navigation>
            <Navigation :canRegister="canRegister" :canLogin="canLogin"  />
        </template>
   
        <template #main-content>
               <TextToTabConverter />    
               <div class="mx-auto text-center m-6">
                <h1 class="text-xl ">Hello Nate</h1>
                <p class="text-2xl font-bold underline">Instructions: </p>
                    <ul class="list-disc list-inside">
                        <li>Upload a .txt file with data separated by spaces or tabs.</li>
                        <li>The tool will convert groups of 2 or more spaces/tabs into a single tab.</li>
                        <li>Download the converted tab-delimited file.</li>
                        <li>Open the Excel</li>
                        <li>Select All File Types to find File</li>
                        <li>Select Delimited -> Click Next</li>
                        <li>Choose Tab AND space as the delimiters</li>
                        <li>Click Finish</li>
                    </ul>
                
               </div>  

               
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
