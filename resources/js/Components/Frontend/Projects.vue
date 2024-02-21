<script setup>
import Project from '@/Components/Frontend/Project.vue'
import {ref} from 'vue'
const props = defineProps({
        skills: Object,
        projects: Object,
    })
const filteredProjects = ref(props.projects.data)
const selectedSkill = ref('all')

const filerProject = (id) => {
    selectedSkill.value = id
    if (id === 'all') {
        filteredProjects.value = props.projects.data
    } else {
        filteredProjects.value = props.projects.data.filter(project => project.skill.id === id)
    }
}
</script>
<template>
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
        <nav class="mb-12 border-b-2 border-light-tail-100 dark:text-dark-tail-500">
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button @click="filerProject('all')"
                    :class="[selectedSkill === 'all' ? 'bg-light-tail-500 dark:bg-dark-tail-500' : 'bg-light-tail-100 dark:bg-dark-tail-100']"
                    class="inline-block px-4 py-3 text-dark-primary  rounded-lg hover:bg-light-tail-500 dark:hover:bg-dark-tail-500">
                        All
                    </button>
                </li>
                <li class="cursor-pointer capitalize m-4" v-for="skill in skills.data" :key="skill.id">
                    <button @click="filerProject(skill.id)"
                    :class="[selectedSkill === skill.id ? 'bg-light-tail-500 dark:bg-dark-tail-500' : 'bg-light-tail-100 dark:bg-dark-tail-100']"
                    class="inline-block px-4 py-3 text-dark-primary  rounded-lg hover:bg-light-tail-500 dark:hover:bg-dark-tail-500">
                        {{ skill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 gap-8">
            <Project v-for="project in filteredProjects" :key="project.id" :project="project"/>
        </section>
    </div>
</template>
