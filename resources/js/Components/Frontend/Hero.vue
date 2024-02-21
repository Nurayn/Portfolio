<script setup></script>
<template>
    <section
        id="home"
        class="lg:h-[85hv] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-32 overflow-hidden"
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
             class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">
                        Hey, I'm Nurayn!
                    </p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-light lg:text-7xl lg:leading-[1,2] font-bold md:tracking-[-2px]"
                    >
                        I Build & Design <br />
                        Web Interfaces.
                    </h1>
                    <p
                        class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left"
                    >
                        I'm a full-stack web developer based in Nigeria. I
                        specialize in building (and occasionally designing)
                        exceptional digital experiences.
                    </p>
                    <button
                        class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-tail-500 md:btn-lg transition-all"
                    >
                        Work with me
                    </button>
                    <div class="pt-12">
                        <h5 class="text-lg flex justify-center lg:justify-start items-center text-black dark:text-white mb-2">
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <a class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-white dark:text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-scondary mr-3 sm:mr-4" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" id="facebook"><path d="M8 12h5V8c0-6 4-7 11-6v5c-4 0-5 0-5 3v2h5l-1 6h-4v12h-6V18H8z"></path></svg>
                            </a>
                            <a class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-white hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-scondary mr-3 sm:mr-4" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" id="linkedin"><path fill-rule="evenodd" d="M20 20h-4v-6.999c0-1.92-.847-2.991-2.366-2.991-1.653 0-2.634 1.116-2.634 2.991V20H7V7h4v1.462s1.255-2.202 4.083-2.202C17.912 6.26 20 7.986 20 11.558V20zM2.442 4.921A2.451 2.451 0 0 1 0 2.46 2.451 2.451 0 0 1 2.442 0a2.451 2.451 0 0 1 2.441 2.46 2.45 2.45 0 0 1-2.441 2.461zM0 20h5V7H0v13z"></path></svg>                            </a>
                            <a class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-black hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-scondary mr-3 sm:mr-4" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="twitter"><path d="M5.26 35.84a15.71 15.71 0 0 0 11.18-3.11c-.49-.08-.88-.12-1.27-.21a7.69 7.69 0 0 1-5.69-4.79c-.18-.43-.13-.46.35-.42a8.41 8.41 0 0 0 2.8-.16 9.21 9.21 0 0 1-2.34-1 7.81 7.81 0 0 1-3.68-6.05v-.2c0-.48 0-.49.47-.28a7.3 7.3 0 0 0 2.91.73 8.57 8.57 0 0 1-1.12-1 7.81 7.81 0 0 1-1.33-9c.15-.28.24-.32.46 0a21.76 21.76 0 0 0 6.74 5.39 21.21 21.21 0 0 0 8.14 2.34c.73.06.72.05.64-.71a7.79 7.79 0 0 1 13.08-6.62.76.76 0 0 0 .76.21 15.8 15.8 0 0 0 4-1.53c.12-.06.21-.17.43-.14a8 8 0 0 1-3.07 4.09 14.17 14.17 0 0 0 4-1.09c0 .21-.08.3-.15.4A15.65 15.65 0 0 1 39.4 16a.85.85 0 0 0-.37.78A22.14 22.14 0 0 1 35 30.13a20.68 20.68 0 0 1-14.3 9 22 22 0 0 1-14-2.31c-.48-.25-.94-.54-1.42-.81Z"></path></svg>
                            </a>
                            <a class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-black hover:bg-light-secondary hover:border-light-secondary dark:hover:bg-secondary dark:hover:border-scondary mr-3 sm:mr-4" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="youtube"><path d="M33.69 13.13a3.59 3.59 0 0 0-2.51-2.52C28.94 10 20 10 20 10s-8.94 0-11.18.59a3.65 3.65 0 0 0-2.51 2.54A37.56 37.56 0 0 0 5.72 20a37.45 37.45 0 0 0 .59 6.87 3.59 3.59 0 0 0 2.51 2.52C11.08 30 20 30 20 30s8.94 0 11.18-.59a3.57 3.57 0 0 0 2.51-2.52 37.56 37.56 0 0 0 .59-6.89 35.11 35.11 0 0 0-.59-6.87ZM17.15 24.28v-8.56L24.59 20Z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0 md:ml-3"
                >
                    <img
                        class="rounded-lg"
                        src="assets/images/hero.jpg"
                        alt="Hero Image"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
