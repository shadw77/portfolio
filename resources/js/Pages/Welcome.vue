<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from '@/Components/Frontend/Hero.vue';
import Promote from '@/Components/Frontend/Promote.vue';
import About from '@/Components/Frontend/About.vue';
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
    skills: {
        type: Object,
        required: true
    },
    projects: {
        type: Object,
        required: true
    }
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome to portfolio" />
    <FrontendLayout>
        <!-- Hero -->
        <Hero/>
        <!-- Promote -->
        <Promote/>
        <!-- About -->
        <About/>
        <!-- Skills -->
        <Skills :skills="skills" />
        <!-- Services -->
        <Portfolio :projects="projects" :skills="skills"/>
        <!-- Contact -->
    </FrontendLayout>
</template>
