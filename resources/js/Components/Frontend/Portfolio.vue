<script setup>
import Projects from '@/Components/Frontend/Projects.vue'
    defineProps({
        skills: Object,
        projects: Object,
    })
</script>
<template>
    <section  id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[960px]">

        <div class="container mx-auto"
            v-motion
            :initial="{
                opacity: 0,
                y: 100,
            }"
            :visible="{
                opacity: 1,
                y: 0,
            }" >
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My Latest Work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis non possimus consequatur beatae nesciunt blanditiis dolorum, qui modi ipsum odit culpa autem voluptate. Corrupti voluptatem maiores cumque, dolores placeat voluptatibus.
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects" />
    </section>
</template>
