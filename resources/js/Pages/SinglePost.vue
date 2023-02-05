<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
import moment from "moment";
import { computed } from "vue";

const props = defineProps({
    post: Object
});

const publishedAt = computed(() => {
    return moment(props.post.published_at).fromNow();
})
</script>

<template>

    <Head title="Single Post" />

    <AppLayout>
        <div class="mx-auto max-w-3xl px-4 py-6 font-merriweather">
            <h1 class="text-center text-4xl font-bold">{{ post.title }}</h1>
            <div class="mt-2 text-center text-sm text-gray-400">
                Oleh <a class="text-violet-500 hover:text-indigo-500" href="#">Adi Arta Wibawa</a> Published on {{
                    publishedAt
                }}
            </div>
            <div class="mt-2 text-center text-sm text-gray-400">
                {{ post.read_time }}
            </div>
            <div class="mx-auto mt-10 mb-20 w-full max-w-2xl">
                <!-- <div class="aspect-w-3 aspect-h-2">
                    <img class="h-full w-full rounded-lg object-cover object-center"
                        src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                        alt="Image post" loading="lazy" />
                </div> -->
                <div
                    class="prose prose-invert mx-auto mt-8 max-w-none prose-img:rounded-lg text-lg text-justify tracking-wide">
                    <div v-html="post.body"> </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>