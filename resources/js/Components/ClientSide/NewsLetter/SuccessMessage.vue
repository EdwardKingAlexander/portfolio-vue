<template>
    <UnsubscribeModal
    
        v-show="showModal"
        :message="message"
        :mode="'Unsubscribe'"
        @closeModal="closeModal"
    />
    <div class="p-4 rounded-md bg-green-50">
        <div class="flex">
            <div class="flex-shrink-0">
                <!-- Heroicon name: solid/check-circle -->
                <svg
                    class="w-5 h-5 text-green-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                    />
                </svg>
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    {{title}}
                </h3>
                <div class="mt-2 text-sm text-green-700">
                    <p>
                        {{message}}
                    </p>
                </div>
                <div v-if="newsletter" class="mt-4">
                    <div class="-mx-2 -my-1.5 flex">
                        <button
                            @click="openModal"
                            
                            type="button"
                            class="bg-red-50 px-2 py-1.5 rounded-md text-sm font-medium text-red-800 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-red-50 focus:ring-red-600"
                        >
                            Unsubscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import UnsubscribeModal from "@/Components/ClientSide/NewsLetter/UnsubscribeModal.vue";

export default {
    components: {
        UnsubscribeModal,
    },
    data() {
        return {
            message: `Are you sure you would like to unsubscribe from our newsletter?`,
            showModal: false,
        };
    },
    props: {
        title: String,
        message: String,
        newsletter: Boolean
    },
    methods: {
        openModal() {
            this.showModal = true;
        },
        closeModal() {
            this.showModal = false;
        },
    },
};
</script>
