<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="Beranda" />
    <AppLayout>
        <!-- Intro  -->
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div
                class="flex flex-col items-center md:flex-row md:justify-between md:gap-x-24"
            >
                <div>
                    <h1 class="text-3xl font-bold">
                        Hi there, I&#x27;m
                        <span
                            class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"
                            >Adi Arta Wibawa</span
                        >
                        👋
                    </h1>
                    <p class="mt-6 text-xl leading-9">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus<!-- -->
                        <a class="text-cyan-400 hover:underline" href="#"
                            >malesuada</a
                        >
                        <!-- -->nisi tellus, non imperdiet nisi tempor at. Lorem
                        ipsum dolor sit amet,<!-- -->
                        <a class="text-cyan-400 hover:underline" href="#"
                            >consectetur</a
                        >
                        <!-- -->adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore.
                    </p>
                    <div class="mt-3 flex gap-1">
                        <a href="#"
                            ><img
                                class="h-12 w-12 hover:translate-y-1"
                                src="https://cdn-icons-png.flaticon.com/512/3256/3256013.png"
                                alt="Twitter icon"
                                loading="lazy" /></a
                        ><a href="#"
                            ><img
                                class="h-12 w-12 hover:translate-y-1"
                                src="https://cdn-icons-png.flaticon.com/512/124/124010.png"
                                alt="Facebook icon"
                                loading="lazy"
                        /></a>
                    </div>
                </div>
                <div class="shrink-0">
                    <img
                        class="h-80 w-64 drop-shadow-lg"
                        src="https://www.pngarts.com/files/5/Cartoon-Avatar-Transparent-Image.png"
                        alt="Avatar image"
                        loading="lazy"
                    />
                </div>
            </div>
        </div>

        <!-- Recent Projects  -->
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="mb-6 text-2xl font-bold">
                Recent
                <span
                    class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"
                    >Projects</span
                >
            </div>
            <div class="flex flex-col gap-6">
                <div
                    class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row"
                >
                    <div class="shrink-0">
                        <a href="#"
                            ><img
                                class="h-36 w-36 hover:translate-y-1"
                                src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                alt="Project Web Design"
                                loading="lazy"
                        /></a>
                    </div>
                    <div>
                        <div
                            class="flex flex-col items-center gap-y-2 md:flex-row"
                        >
                            <a class="hover:text-cyan-400" href="#"
                                ><div class="text-xl font-semibold">
                                    Project 1
                                </div></a
                            >
                            <div class="ml-3 flex gap-2">
                                <div
                                    class="rounded-md bg-fuchsia-400 px-2 py-1 text-xs font-semibold text-fuchsia-900"
                                >
                                    Astro.js
                                </div>
                                <div
                                    class="rounded-md bg-lime-400 px-2 py-1 text-xs font-semibold text-lime-900"
                                >
                                    Web design
                                </div>
                                <div
                                    class="rounded-md bg-sky-400 px-2 py-1 text-xs font-semibold text-sky-900"
                                >
                                    Tailwind.css
                                </div>
                                <div
                                    class="rounded-md bg-rose-400 px-2 py-1 text-xs font-semibold text-rose-900"
                                >
                                    TypeScript
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Suspendisse bibendum. Nunc non posuere
                            consectetur, justo erat semper enim, non hendrerit
                            dui odio id enim.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row"
                >
                    <div class="shrink-0">
                        <a href="#"
                            ><img
                                class="h-36 w-36 hover:translate-y-1"
                                src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                alt="Project Fire"
                                loading="lazy"
                        /></a>
                    </div>
                    <div>
                        <div
                            class="flex flex-col items-center gap-y-2 md:flex-row"
                        >
                            <a class="hover:text-cyan-400" href="#"
                                ><div class="text-xl font-semibold">
                                    Project 2
                                </div></a
                            >
                            <div class="ml-3 flex gap-2">
                                <div
                                    class="rounded-md bg-violet-400 px-2 py-1 text-xs font-semibold text-violet-900"
                                >
                                    Next.js
                                </div>
                                <div
                                    class="rounded-md bg-emerald-400 px-2 py-1 text-xs font-semibold text-emerald-900"
                                >
                                    Blog
                                </div>
                                <div
                                    class="rounded-md bg-yellow-400 px-2 py-1 text-xs font-semibold text-yellow-900"
                                >
                                    JavaScript
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Suspendisse bibendum. Nunc non posuere
                            consectetur, justo erat semper enim, non hendrerit
                            dui odio id enim.
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-3 md:flex-row"
                >
                    <div class="shrink-0">
                        <a href="#"
                            ><img
                                class="h-36 w-36 hover:translate-y-1"
                                src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                alt="Project Maps"
                                loading="lazy"
                        /></a>
                    </div>
                    <div>
                        <div
                            class="flex flex-col items-center gap-y-2 md:flex-row"
                        >
                            <a class="hover:text-cyan-400" href="#"
                                ><div class="text-xl font-semibold">
                                    Project 3
                                </div></a
                            >
                            <div class="ml-3 flex gap-2">
                                <div
                                    class="rounded-md bg-fuchsia-400 px-2 py-1 text-xs font-semibold text-fuchsia-900"
                                >
                                    Astro.js
                                </div>
                                <div
                                    class="rounded-md bg-indigo-400 px-2 py-1 text-xs font-semibold text-indigo-900"
                                >
                                    Bootstrap
                                </div>
                                <div
                                    class="rounded-md bg-rose-400 px-2 py-1 text-xs font-semibold text-rose-900"
                                >
                                    TypeScript
                                </div>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-400">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Suspendisse bibendum. Nunc non posuere
                            consectetur, justo erat semper enim, non hendrerit
                            dui odio id enim.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Posts  -->
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="mb-6 text-2xl font-bold">
                <div class="flex items-baseline justify-between">
                    <div>
                        Recent
                        <span
                            class="bg-gradient-to-br from-sky-500 to-cyan-400 bg-clip-text text-transparent"
                            >Posts</span
                        >
                    </div>
                    <div class="text-sm">
                        <a href="#/posts">View all Posts →</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <a class="hover:translate-y-1" href="#/posts/sixth-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
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
                ><a class="hover:translate-y-1" href="#/posts/fifth-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1564865878688-9a244444042a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
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
                ><a class="hover:translate-y-1" href="#/posts/forth-post"
                    ><div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2">
                            <img
                                class="h-full w-full object-cover object-center"
                                src="https://images.unsplash.com/photo-1604537466158-719b1972feb8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
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
                >
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.drop-shadow-lg {
    --tw-drop-shadow: drop-shadow(0 10px 8px rgba(255, 255, 255, 0.2))
        drop-shadow(0 4px 3px rgba(255, 255, 255, 0.4));
}
</style>
