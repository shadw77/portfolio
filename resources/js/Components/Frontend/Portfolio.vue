<script setup>
import Projects from "./Projects.vue";

defineProps({
    projects: Object,
    skills: Object,
});
</script>
<template>
    <section
        id="portfolio"
        class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
    >
        <div class="container mx-auto"
            v-motion
            :initial="{ opacity: 0, y: 100 }"
            :visible="{ opacity: 1, y: 0}">
            <div class="flex flex-col items-center text-center">
                <h2 class="section-title">My latest work</h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perspiciatis magnam aliquam quam soluta voluptas aperiam nam
                    magni laborum cum quaerat hic ab labore similique adipisci
                    ad, non natus illo quia?
                </p>
            </div>
        </div>
        <Projects :skills="skills" :projects="projects"/>
    </section>
</template>
