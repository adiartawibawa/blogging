<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import { computed } from "vue";

import CardPost from "@/Components/Blog/CardPost.vue";

const props = defineProps({
    posts: Array
});

</script>

<template>

    <Head title="Blog" />

    <AppLayout>

        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="text-center">
                <h1 class="font-kaushan text-3xl font-bold">Tulisan Saya</h1>
                <hr class="mx-auto my-8 h-px w-60 border-0 bg-slate-100" />
                <div class="mt-3 text-gray-200">
                    <p class="blockquote">
                        Karena saya adalah tipekal orang pelupa, jadinya saya
                        tuangkan apa yang telah saya baca, pelajari dan alami
                        kedalam sebuah tulisan.
                    </p>
                    <p>
                        Siapa tahu ada tulisan saya disini yang bisa berguna
                        bagi Anda.
                    </p>
                    <p>Selamat Membaca</p>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">

                <div v-for="post in posts" :key="post.id">
                    <CardPost :post=post></CardPost>
                </div>

            </div>
        </div>
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="flex justify-center gap-8">
                <a href="#/posts/2/">Older Posts →</a>
            </div>
        </div>
    </AppLayout>
</template>
