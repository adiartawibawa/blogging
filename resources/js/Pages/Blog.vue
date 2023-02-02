<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="Blog" />

    <AppLayout>
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="text-center">
                <h1 class="text-3xl font-bold">Tulisan Saya</h1>
                <div class="mt-3 text-gray-200">
                    <p class="blockquote">
                        Karena saya adalah tipekal orang pelupa, jadinya saya
                        tuangkan apa yang telah saya baca, pelajari dan alami
                        kedalam bentuk tulisan.
                    </p>
                    <p>
                        Siapa tahu ada tulisan saya disini yang bisa berguna
                        bagi yang membaca.
                    </p>
                    <p>Selamat Membaca</p>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <a class="hover:translate-y-1" href="#/sixth-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://source.unsplash.com/random/800x500/?landscape&1"
                                alt="Image post"
                                loading="lazy"
                            />
                        </div>
                        <div class="px-3 pt-4 pb-6 text-center">
                            <h2 class="text-xl font-semibold">
                                Typography example
                            </h2>
                            <div class="mt-1 text-xs text-gray-400">
                                Feb 6, 2020
                            </div>
                            <div class="mt-2 text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur vero esse non
                                molestias eos excepturi.
                            </div>
                        </div>
                    </div></a
                ><a class="hover:translate-y-1" href="#/fifth-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://source.unsplash.com/random/800x500/?landscape&2"
                                alt="Image post 2"
                                loading="lazy"
                            />
                        </div>
                        <div class="px-3 pt-4 pb-6 text-center">
                            <h2 class="text-xl font-semibold">
                                5th Lorem ipsum dolor sit
                            </h2>
                            <div class="mt-1 text-xs text-gray-400">
                                Feb 5, 2020
                            </div>
                            <div class="mt-2 text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur vero esse non
                                molestias eos excepturi.
                            </div>
                        </div>
                    </div></a
                ><a class="hover:translate-y-1" href="#/forth-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://source.unsplash.com/random/800x500/?landscape&3"
                                alt="Image post 3"
                                loading="lazy"
                            />
                        </div>
                        <div class="px-3 pt-4 pb-6 text-center">
                            <h2 class="text-xl font-semibold">
                                4th Lorem ipsum dolor sit
                            </h2>
                            <div class="mt-1 text-xs text-gray-400">
                                Feb 4, 2020
                            </div>
                            <div class="mt-2 text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur vero esse non
                                molestias eos excepturi.
                            </div>
                        </div>
                    </div></a
                ><a class="hover:translate-y-1" href="#/third-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://source.unsplash.com/random/800x500/?landscape&4"
                                alt="Image post 4"
                                loading="lazy"
                            />
                        </div>
                        <div class="px-3 pt-4 pb-6 text-center">
                            <h2 class="text-xl font-semibold">
                                3rd Lorem ipsum dolor sit
                            </h2>
                            <div class="mt-1 text-xs text-gray-400">
                                Feb 3, 2020
                            </div>
                            <div class="mt-2 text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur vero esse non
                                molestias eos excepturi.
                            </div>
                        </div>
                    </div></a
                ><a class="hover:translate-y-1" href="#/second-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://source.unsplash.com/random/800x500/?landscape&5"
                                alt="Image post 5"
                                loading="lazy"
                            />
                        </div>
                        <div class="px-3 pt-4 pb-6 text-center">
                            <h2 class="text-xl font-semibold">
                                2nd Lorem ipsum dolor sit
                            </h2>
                            <div class="mt-1 text-xs text-gray-400">
                                Feb 2, 2020
                            </div>
                            <div class="mt-2 text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur vero esse non
                                molestias eos excepturi.
                            </div>
                        </div>
                    </div></a
                ><a class="hover:translate-y-1" href="#/first-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://source.unsplash.com/random/800x500/?landscape&6"
                                alt="Image post 6"
                                loading="lazy"
                            />
                        </div>
                        <div class="px-3 pt-4 pb-6 text-center">
                            <h2 class="text-xl font-semibold">
                                1st Lorem ipsum dolor sit
                            </h2>
                            <div class="mt-1 text-xs text-gray-400">
                                Feb 1, 2020
                            </div>
                            <div class="mt-2 text-sm">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Tenetur vero esse non
                                molestias eos excepturi.
                            </div>
                        </div>
                    </div></a
                >
            </div>
        </div>
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="flex justify-center gap-8">
                <a href="#/posts/2/">Older Posts →</a>
            </div>
        </div>
    </AppLayout>
</template>
