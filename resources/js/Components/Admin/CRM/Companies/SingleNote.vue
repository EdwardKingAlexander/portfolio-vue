<template>
    
        <div class="flex space-x-3">
            <div>
                <div class="mt-1 text-sm text-gray-700">
                    <p>
                        {{ note.note }}
                    </p>

                </div>

                <div class="mt-2 text-sm space-x-2">
                    <span class="text-gray-500 font-medium"
                        >Created (M/D/Y): {{ note.created_at }}</span
                    >
                    <span class="text-gray-500 font-medium">&middot;</span>
                    <button type="button" class="text-gray-900 font-medium">
                        Edit Note
                    </button>
                    <button
                        @click="show = true"
                        type="button"
                        class="
                            text-red-500
                            border
                            rounded
                            p-2
                            font-bold
                            hover:bg-red-500 hover:text-white
                        "
                    >
                        Delete Note
                    </button>
                </div>
            </div>
        </div>


    <ConfirmationModal
        v-if="show"
        :id="noteId"
        :slug="slug"
        @closeModal="toggleShow"
        :show="show"
        :mode="'Delete Note'"
        :message="'Are you sure you want to delete this note?'"
    />
</template>

<script>
import ConfirmationModal from "@/Components/ConfirmationModal.vue";

export default {
    components: {
        ConfirmationModal,
    },
    props: {
        note: Object,
        slug: String,
    },
    data() {
        return {
            show: false,
            noteId: this.note.id,
        };
    },
    methods: {
        toggleShow() {
            this.show = !this.show;
        },
    },
};
</script>
