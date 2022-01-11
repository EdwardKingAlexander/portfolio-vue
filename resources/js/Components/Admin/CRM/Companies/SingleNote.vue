<template>
        <div class="flex space-x-3">
            
            <div>
                
                <div class="mt-1 text-sm text-gray-700">
                    <p>
                        {{ note.note }}
                    </p>
                </div>
                <div class="mt-2 text-sm space-x-2">
                    <span class="text-gray-500 font-medium">Created (M/D/Y): {{ note.created_at }}</span>
                    <span class="text-gray-500 font-medium">&middot;</span>
                    <button type="button" class="text-gray-900 font-medium">
                        Edit Note
                    </button>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    props: {
        note: Object
    }
}
</script>
