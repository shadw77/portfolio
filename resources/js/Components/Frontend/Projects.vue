<script setup>
import Project from "./Project.vue";
import { ref } from "vue";

const props = defineProps({
    skills: Object,
    projects: Object,
});
const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");
const filterProjects = (id) => {
    if (id == "all") {
        filteredProjects.value = props.projects.data;
    } else {
        filteredProjects.value = props.projects.data.filter((project) => {
            return project.skill.id == id;
        });
    }
    selectedSkill.value = id;
};
</script>
<template>
    <div class="container mx-auto" id="projects">
        <nav
            class="mb-12 border-b-2 border-light-tertiary dark:text-dark-navy-100"
        >
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li class="cursor-pointer capitalize m-4">
                    <button
                        @click="filterProjects('all')"
                        :class="[
                            selectedSkill === 'all'
                                ? 'text-light-tail-500 dark:text-dark-navy-100'
                                : '',
                        ]"
                        class="flex text-center px-4 py-2 hover:text-light-tail-500 dark:text-dark-navy-100"
                    >
                        All
                    </button>
                </li>
                <li
                    class="cursor-pointer capitalize m-4"
                    v-for="projectSkill in skills.data"
                    :key="skills.id"
                >
                    <button
                        :class="[
                            selectedSkill === projectSkill.id
                                ? 'text-light-tail-500 dark:text-dark-navy-100'
                                : '',
                        ]"
                        @click="filterProjects(projectSkill.id)"
                        class="flex text-center px-4 py-2 hover:text-light-tail-500 dark:text-dark-navy-100"
                    >
                        {{ projectSkill.name }}
                    </button>
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
            <Project
                v-for="project in filteredProjects"
                :key="project.id"
                :project="project"
            />
        </section>
    </div>
</template>
