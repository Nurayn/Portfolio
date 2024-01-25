<template>
    <Head title="Skills" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Skills
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-end m-2 p-2">
                    <Link
                        :href="route('skills.create')"
                        class="px-4 py-2 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
                    >
                        New Skill
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
                                <th scope="col" class="px-6 py-3">Image</th>
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
                                v-for="skill in skills.data"
                                :key="skill.id"
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                            >
                                <th
                                    scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                >
                                    {{ skill.id }}
                                </th>
                                <td class="px-6 py-4">{{ skill.name }}</td>
                                <td class="px-6 py-4">
                                    <img
                                        :src="skill.image_url"
                                        class="w-12 h-12 rounded-full object-scale-down"
                                    />
                                </td>
                                <td
                                    class="px-6 py-4 flex justify-center space-x-4"
                                >
                                    <Link
                                        :href="route('skills.edit', skill.id)"
                                        preserve-scroll
                                        class="px-4 py-2 text-sm text-white bg-indigo-600 rounded-md hover:bg-indigo-500"
                                    >
                                        Edit
                                    </Link>
                                    <Link
                                        :href="
                                            route('skills.destroy', skill.id)
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
    skills: {
        type: Array,
        required: true
    }
})
</script>
