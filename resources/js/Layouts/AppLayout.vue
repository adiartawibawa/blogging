<script setup>
import Navigation from "./AppComponents/Navigation.vue";
import NewsLetter from "./AppComponents/NewsLetter.vue";
import Footer from "./AppComponents/Footer.vue";
</script>

<template>
    <div class="bg-slate-900 text-gray-100">
        <!-- Navigation  -->
        <Navigation />

        <!-- Page Content  -->
        <main>
            <slot />
        </main>

        <!-- Subscribe Newsletters  -->
        <NewsLetter />

        <!-- Footer  -->
        <Footer />
    </div>
</template>
