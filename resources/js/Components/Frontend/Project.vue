<script setup>
    defineProps({
        project: Object,
    })
</script>
<template>
    <Link :href="project.project_url" class="group flex flex-col items-center text-center cursor-pointer">
        <div class="mb-6">
            <img class="rounded-2xl" :src="project.image_url" :alt="project.name">
        </div>
        <span class="group-hover:text-light-tail-500 capitalize text-accent text-sm mb-3">
            {{ project.skill.name }}
        </span>
        <h3 class="group-hover:text-light-tail-500 capitalize text-2xl font-semibold mb-3">
            {{ project.name }}
        </h3>
    </Link>
</template>
