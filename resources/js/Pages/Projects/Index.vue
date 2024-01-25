<template>
    <Head title="Projects" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Projects
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link
                        :href="route('projects.create')"
                        class="px-4 py-2 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
                    >
                        New Project
                    </Link>
                </div>
                <div class="relative overflow-x-auto">
                    <table
                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400"
                    >
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
                        >
                            <tr>
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Skill</th>
                                <th scope="col" class="px-6 py-3">URL</th>
                                <th
                                    scope="col"
                                    class="px-6 py-3 flex justify-center"
                                >
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                v-for="project in projects.data"
                                :key="project.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    {{ project.id }}
                                </th>
                                <td class="px-6 py-4">{{ project.name }}</td>
                                <td class="px-6 py-4">
                                    <img
                                        :src="project.skill.image_url"
                                        class="w-12 h-12 rounded-full"
                                    />
                                </td>
                                <td class="px-6 py-4">
                                    <a
                                        :href="project.project_url"
                                        target="_blank"
                                        class="text-blue-400 hover:underline hover:text-blue-600"
                                        >click</a
                                    >
                                </td>
                                <td
                                    class="px-6 py-4 flex justify-center space-x-4"
                                >
                                    <Link
                                        :href="
                                            route('projects.edit', project.id)
                                        "
                                        preserve-scroll
                                        class="px-4 py-2 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
                                    >
                                        Edit
                                    </Link>
                                    <Link
                                        :href="
                                            route(
                                                'projects.destroy',
                                                project.id
                                            )
                                        "
                                        preserve-scroll
                                        method="delete"
                                        as="button"
                                        class="px-4 py-2 text-sm text-white bg-red-600 rounded-md hover:bg-red-500"
                                    >
                                        Delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
defineProps({
    projects: {
        type: Array,
        required: true
    }
})
</script>
