<script setup></script>
<template>
    <section
        id="home"
        class="lg:h-[85vh] flex items-center bg-light-primary dark:bg-dark-primary py-32 lg:py-0 overflow-hidden"
    >
        <div class="container mx-auto h-full">
            <div class="flex flex-col md:flex-row items-center h-full pt-8">
                <div class="flex-1 flex flex-col items-center lg:items-start">
                    <p class="text-lg text-accent text-md mb-[22px]">
                        Hey, I'm Shadwa! 👋
                    </p>
                    <h1
                        class="text-4xl leading-[44px] md:text-5xl md:leading-tight lg:text-7xl lg:leading-[1,2] font-bold md:tracking-[-2px]"
                    >
                        I Build & Design <br />
                        Web Interfaces.
                    </h1>
                    <p
                        class="pt-4 pb-8 md:pt-6 md:pb-12 max-w-[480px] text-lg text-center lg:text-left"
                    >
                        Loremmmmmmmmmmmmmmmmmm
                    </p>
                    <button
                        class="btn btn-md bg-accent hover:bg-light-secondary hover:text-light-tail-500 dark:hover:bg-dark-secondary dark:hover:text-dark-navy-100 md:btn-lg transition-all"
                    >
                        Work with me
                    </button>
                    <div class="pt-12">
                        <h5 class="text-lg flex items-center justify-center lg:justify-center text-black dark:text-white mb-2">
                            Follow me on
                        </h5>
                        <div class="flex items-center mb-6">
                            <a href="https:://github" class="w-12 h-12 rounded-full flex items-center justify-center border 
                                border-white text-black dark:text-white hover:bg-light-secondary hover:border-light-secondary
                                dark:hover:bg-dark-secondary dark:hover:border-dark-secondary mr-3 sm:mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75Z" />
                            </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-1 justify-end items-center h-full mt-8 md:mt-0"
                >
                    <img
                        class="rounded-lg"
                        src="https://www.maketecheasier.com/assets/uploads/2021/12/programming-laptop-buying-guide-feat.jpg"
                        alt="Hero"
                    />
                </div>
            </div>
        </div>
    </section>
</template>
