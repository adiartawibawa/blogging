<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import moment from 'moment';
import { computed } from 'vue';

const props = defineProps({
    post: {
        type: Object,
        required: true
    }
});

const publishedAt = computed(() => {
    return moment(props.post.published_at).fromNow()
});

</script>

<template>
    <Link :href="route('blog.post.single-view', post.slug)">
    <div class="overflow-hidden rounded-md bg-slate-800">
        <div class="aspect-w-3 aspect-h-2 group relative overflow-hidden transition-all duration-500">
            <img class="h-full w-full object-cover object-center transition-all duration-500 group-hover:scale-125"
                :src="post.featured_image" alt="Image post" loading="lazy" />
            <div
                class="absolute bottom-0 flex rounded-tr-md bg-gradient-to-r from-violet-500 to-transparent p-3 dark:bg-gray-900">
                <!-- <img class="h-6 w-6 rounded-full object-cover object-center"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="" /> -->

                <div class="mx-4">
                    <h1 class="text-sm text-slate-50 dark:text-gray-200">
                        Adi Arta Wibawa
                    </h1>
                </div>
            </div>
        </div>
        <div class="px-3 pt-4 pb-6 text-center">
            <h2 class="text-xl font-semibold">
                {{ props.post.title }}
            </h2>
            <div class="mt-1 text-xs text-gray-400">
                Published {{ publishedAt }}
            </div>
            <div class="mt-2 text-sm">
                {{ props.post.summary }}
            </div>
        </div>
    </div>
    </Link>
</template>