<script setup>
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'

const showMessage = ref(false)

function setShowMessage() {
    showMessage.value = true
    setTimeout(() => {
        showMessage.value = false
    }, 3000)
}

const form = useForm({
    name: '',
    email: '',
    message: ''
})

function cleanForm() {
    form.name = ''
    form.email = ''
    form.message = ''
    setShowMessage()
}

const submit = () => {
    form.post(route('contact'), {
        preserveScroll: true,
        onSuccess: () => cleanForm()
    })
}
</script>
<template>
    <section id="contact" class="section bg-light-primary dark:bg-dark-primary">
        <div
            class="container mx-auto"
            v-motion
            :initial="{
                opacity: 0,
                y: 100,
            }"
            :visible="{
                opacity: 1,
                y: 0,
            }"
        >
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">Contact Me</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blanditiis sed eos accusantium ex suscipit recusandae,
                    veniam quas aut beatae ipsam cupiditate facilis quia saepe
                    expedita in dicta, porro excepturi omnis.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-x-8">
                <div
                    class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2"
                >
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"
                                />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-body text-xl mb-1">
                                Have a question?
                            </h4>
                            <p class="mb-1 text-paragraph">
                                I am here to help you.
                            </p>
                            <p class="text-accent font-normal">
                                Email me at example@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row gap-x-4">
                        <div
                            class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"
                                />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-body text-xl mb-1">
                                Current Location
                            </h4>
                            <p class="mb-1 text-paragraph">Tirana, Albania</p>
                            <p class="text-accent font-normal">
                                Serving clients worldwide.
                            </p>
                        </div>
                    </div>
                </div>
                <form
                    @submit.prevent="submit"
                    class="space-y-8 w-full max-w-md"
                >
                    <div
                        v-if="showMessage"
                        class="p-2 bg-light-tail-500 dark:bg-dark-tail-100 text-light-secondary rounded-lg"
                    >
                        Thank you for your interest in my services
                    </div>
                    <div class="flex gap-8">
                        <div>
                            <input
                                type="text"
                                class="input"
                                placeholder="Yuor Name"
                                v-model="form.name"
                            />
                            <span
                                v-if="form.errors.name"
                                class="text-sm m-2 text-red-400"
                                >{{ form.errors.name }}</span
                            >
                        </div>
                        <div>
                            <input
                                type="email"
                                class="input"
                                placeholder="Yuor Email"
                                v-model="form.email"
                            />
                            <span
                                v-if="form.errors.email"
                                class="text-sm m-2 text-red-400"
                                >{{ form.errors.email }}</span
                            >
                        </div>
                    </div>
                    <textarea
                        class="textarea"
                        placeholder="Yuor Message"
                        spellcheck="false"
                        v-model="form.message"
                    ></textarea>
                    <span
                        v-if="form.errors.message"
                        class="text-sm m-2 text-red-400"
                        >{{ form.errors.message }}</span
                    >
                    <button
                        class="btn btn-lg bg-accent hover:bg-secondary text-white"
                        @click="submit"
                    >
                        Send message
                    </button>
                </form>
            </div>
        </div>
    </section>
</template>
