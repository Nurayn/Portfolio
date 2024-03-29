<template>
    <Head title="Edit Project" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Project
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
                <form class="p-4" @submit.prevent="submit">
                    <div>
                        <InputLabel for="skills" value="Skills" />
                        <select
                            name="skill_id"
                            id="skill_id"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                            v-model="form.skill_id"
                        >
                            <option
                                v-for="skill in skills"
                                :key="skill.id"
                                :value="skill.id"
                            >
                                {{ skill.name }}
                            </option>
                        </select>
                        <InputError
                            class="mt-2"
                            :message="$page.props.errors.skill_id"
                        />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="name" value="Name" />

                        <TextInput
                            id="name"
                            type="text"
                            class="mt-1 block w-full"
                            v-model="form.name"
                            required
                            autofocus
                            autocomplete="name"
                        />

                        <InputError
                            class="mt-2"
                            :message="$page.props.errors.name"
                        />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="project_url" value="URL" />

                        <TextInput
                            id="project_url"
                            type="text"
                            name="project_url"
                            class="mt-1 block w-full"
                            v-model="form.project_url"
                            autofocus
                            autocomplete="project_url"
                        />

                        <InputError
                            class="mt-2"
                            :message="$page.props.errors.project_url"
                        />
                    </div>
                    <div class="mt-2">
                        <InputLabel for="image" value="image" />

                        <TextInput
                            id="image"
                            type="file"
                            class="mt-1 block w-full"
                            @input="form.image = $event.target.files[0]"
                        />

                        <InputError class="mt-2" :message="form.errors.image" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <PrimaryButton
                            class="ms-4"
                            :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing"
                        >
                            Update
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import { useForm } from '@inertiajs/vue3'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import { router } from '@inertiajs/vue3'

const prop = defineProps({
    project: {
        type: Object,
        required: true
    },
    skills: {
        type: Array,
        required: true
    }
})

const form = useForm({
    name: prop.project?.name,
    image: null,
    skill_id: prop.project?.skill_id,
    project_url: prop.project?.project_url
})

const submit = () => {
    router.post(route('projects.update', prop.project.id), {
        _method: 'put',
        name: form.name,
        image: form.image,
        skill_id: form.skill_id,
        project_url: form.project_url
    })
}
</script>
