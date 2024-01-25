<script setup>
import ToastItem from './ToastItem.vue'
import { ref, onUnmounted } from 'vue'
import { router, usePage } from '@inertiajs/vue3'

const items = ref([])

const page = usePage()

let removeFinishEventListener = router.on('finish', () => {
    if (page.props.toast) {
        items.value.unshift({
            key: Symbol(),
            message: page.props.toast
        })
    }
})

onUnmounted(() => {
    removeFinishEventListener()
})

function remove(index) {
    items.value.splice(index, 1)
}
</script>

<template>
    <TransitionGroup
        tag="div"
        enter-from-class="translate-x-full opacity-0"
        enter-active-class="duration-500"
        leave-active-class="duration-500"
        leave-to-class="translate-x-full opacity-0"
        class="fixed top-4 right-4 z-50 space-y-4 w-full max-w-sm"
    >
        <ToastItem
            v-for="(item, index) in items"
            :message="item.message"
            :key="item.key"
            @close="remove(index)"
        />
    </TransitionGroup>
</template>
