<script setup></script>
<template>
    <section
        id="about"
        class="section bg-light-secondary dark:bg-dark-secondary"
    >
        <div v-motion
            :initial="{
                opacity: 0,
                y: 100,
            }"
            :visible="{
                opacity: 1,
                y: 0,
            }"
             class="container mx-auto">
            <div class="flex flex-col xl:flex-row gap-24">
                <img
                    class="object-cover h-full w-[566px] md:mx-auto lg:mx-0 rounded-2xl"
                    src="assets/images/about.jpg"
                    alt="about"
                />
                <div
                    class="flex flex-col items-center text-center lg:items-start lg:text-left"
                >
                    <h2
                        class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3"
                    >
                        About Me
                    </h2>
                    <p class="mb-4 text-accent">
                        Freelance Full-Stack Developer
                    </p>
                    <hr class="mb-8 opacity-90 dark:opacity-5">
                    <p class="mb-8">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptatibus! Corrupti eveniet illum pariatur, nostrum id soluta cupiditate, eos, non eligendi temporibus minus laborum.
                        <br><br>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat, assumenda quas. Sit ipsam fugit consectetur.
                    </p>
                    <a href="#contact" class="btn btn-md bg-accent text-light-tail-100">
                    Contact Me
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>
