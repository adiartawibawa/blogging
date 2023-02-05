<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>

    <Head title="Beranda" />
    <AppLayout>
        <!-- Intro  -->
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="flex flex-col items-center md:flex-row md:justify-between md:gap-x-24">
                <div>
                    <h1 class="mb-3 text-3xl font-bold">
                        Hi, Saya
                        <span class="bg-gradient-to-r from-violet-500 to-indigo-500 bg-clip-text text-transparent">Adi
                            Arta Wibawa</span>
                        👋
                    </h1>
                    <span class="mt-6 text-lg leading-9">
                        <p>
                            Sebelumnya saya ingin mengucapkan terima kasih
                            banyak atas kunjungan Anda ke situs yang saya kelola
                            ini. Perkenalkan nama saya Adi Arta Wibawa, saya
                            biasa disapa Adi. Saat ini pekerjaan utama saya
                            adalah menjadi seorang guru komputer di sebuah
                            Sekolah Menengah Kejuruan Negeri di Bali, namun saya
                            juga mengambil biasa mengerjakan pekerjaan sampingan
                            dalam pembuatan website. Apabila Anda tertarik untuk
                            mengebrol dengan saya lebih banyak, Anda dapat
                            mengkontak saya pada alamat berikut
                        </p>
                    </span>
                    <div class="mt-3 flex gap-1">
                        <a href="#">
                            <svg fill="url(#grad1)" stroke="none" class="h-10 w-10 hover:translate-y-1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="
                                                stop-color: #8b5cf6;
                                                stop-opacity: 1;
                                            " />

                                        <stop offset="100%" style="
                                                stop-color: #6366f1;
                                                stop-opacity: 1;
                                            " />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg fill="url(#grad1)" stroke="none" class="h-10 w-10 hover:translate-y-1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="
                                                stop-color: #8b5cf6;
                                                stop-opacity: 1;
                                            " />

                                        <stop offset="100%" style="
                                                stop-color: #6366f1;
                                                stop-opacity: 1;
                                            " />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg fill="url(#grad1)" stroke="none" class="h-10 w-10 hover:translate-y-1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="
                                                stop-color: #8b5cf6;
                                                stop-opacity: 1;
                                            " />

                                        <stop offset="100%" style="
                                                stop-color: #6366f1;
                                                stop-opacity: 1;
                                            " />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg fill="url(#grad1)" stroke="none" class="h-10 w-10 hover:translate-y-1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="
                                                stop-color: #8b5cf6;
                                                stop-opacity: 1;
                                            " />

                                        <stop offset="100%" style="
                                                stop-color: #6366f1;
                                                stop-opacity: 1;
                                            " />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg fill="url(#grad1)" stroke="none" class="h-10 w-10 hover:translate-y-1"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                <!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <defs>
                                    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                        <stop offset="0%" style="
                                                stop-color: #8b5cf6;
                                                stop-opacity: 1;
                                            " />

                                        <stop offset="100%" style="
                                                stop-color: #6366f1;
                                                stop-opacity: 1;
                                            " />
                                    </linearGradient>
                                </defs>
                                <path
                                    d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="shrink-0">
                    <img class="h-80 w-64 drop-shadow-lg"
                        src="https://www.pngarts.com/files/5/Cartoon-Avatar-Transparent-Image.png" alt="Avatar image"
                        loading="lazy" />
                </div>
            </div>
        </div>

        <!-- Recent Projects  -->
        <div class="mx-auto max-w-screen-lg px-3 py-6">
            <div class="mb-6 text-2xl font-bold">
                <div class="flex items-baseline justify-between">
                    <div>
                        Recent
                        <span
                            class="bg-gradient-to-r from-violet-500 to-indigo-500 bg-clip-text text-transparent">Projects</span>
                    </div>
                    <div class="text-sm">
                        <a href="#/posts">View all Projects →</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-5 md:flex-row">
                    <div class="w-full md:w-2/12">
                        <div
                            class="group relative overflow-hidden rounded-lg transition-all duration-500 hover:scale-95">
                            <a href="#">
                                <img class="h-36 w-full bg-cover bg-center transition-all duration-500 group-hover:rotate-6 group-hover:scale-150 md:group-hover:rotate-12 md:group-hover:scale-125"
                                    src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                    alt="Project Web Design" loading="lazy" />
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-10/12">
                        <div class="flex flex-col items-center gap-y-2 md:flex-row">
                            <a class="hover:text-cyan-400" href="#">
                                <div class="py-5 text-xl font-semibold md:py-0">
                                    Project 3
                                </div>
                            </a>
                        </div>
                        <p class="text-gray-400 md:mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Perspiciatis quibusdam sit doloremque
                            similique voluptatem porro fugit excepturi aut
                            suscipit officiis mollitia enim nihil laudantium,
                            nulla quia repudiandae fuga atque reiciendis iure.
                            At deserunt similique excepturi nostrum, vel
                            exercitationem in quam vitae eius nesciunt. Laborum
                            non quia eveniet ea reprehenderit error!
                        </p>
                        <div class="my-3 flex gap-2">
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Laravel
                            </div>
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Vuejs
                            </div>
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Mapbox
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-5 md:flex-row">
                    <div class="w-full md:w-2/12">
                        <div
                            class="group relative overflow-hidden rounded-lg transition-all duration-500 hover:scale-95">
                            <a href="#">
                                <img class="h-36 w-full bg-cover bg-center transition-all duration-500 group-hover:rotate-6 group-hover:scale-150 md:group-hover:rotate-12 md:group-hover:scale-125"
                                    src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                    alt="Project Web Design" loading="lazy" />
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-10/12">
                        <div class="flex flex-col items-center gap-y-2 md:flex-row">
                            <a class="hover:text-cyan-400" href="#">
                                <div class="py-5 text-xl font-semibold md:py-0">
                                    Project 3
                                </div>
                            </a>
                        </div>
                        <p class="text-gray-400 md:mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Perspiciatis quibusdam sit doloremque
                            similique voluptatem porro fugit excepturi aut
                            suscipit officiis mollitia enim nihil laudantium,
                            nulla quia repudiandae fuga atque reiciendis iure.
                            At deserunt similique excepturi nostrum, vel
                            exercitationem in quam vitae eius nesciunt. Laborum
                            non quia eveniet ea reprehenderit error!
                        </p>
                        <div class="my-3 flex gap-2">
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Laravel
                            </div>
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Vuejs
                            </div>
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Mapbox
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-x-8 rounded-md bg-slate-800 p-5 md:flex-row">
                    <div class="w-full md:w-2/12">
                        <div
                            class="group relative overflow-hidden rounded-lg transition-all duration-500 hover:scale-95">
                            <a href="#">
                                <img class="h-36 w-full bg-cover bg-center transition-all duration-500 group-hover:rotate-6 group-hover:scale-150 md:group-hover:rotate-12 md:group-hover:scale-125"
                                    src="https://images.unsplash.com/photo-1621839673705-6617adf9e890?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
                                    alt="Project Web Design" loading="lazy" />
                            </a>
                        </div>
                    </div>
                    <div class="w-full md:w-10/12">
                        <div class="flex flex-col items-center gap-y-2 md:flex-row">
                            <a class="hover:text-cyan-400" href="#">
                                <div class="py-5 text-xl font-semibold md:py-0">
                                    Project 3
                                </div>
                            </a>
                        </div>
                        <p class="text-gray-400 md:mt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Perspiciatis quibusdam sit doloremque
                            similique voluptatem porro fugit excepturi aut
                            suscipit officiis mollitia enim nihil laudantium,
                            nulla quia repudiandae fuga atque reiciendis iure.
                            At deserunt similique excepturi nostrum, vel
                            exercitationem in quam vitae eius nesciunt. Laborum
                            non quia eveniet ea reprehenderit error!
                        </p>
                        <div class="my-3 flex gap-2">
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Laravel
                            </div>
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Vuejs
                            </div>
                            <div
                                class="rounded-md bg-gradient-to-r from-violet-500 to-indigo-500 px-2 py-1 text-xs font-semibold text-slate-200">
                                Mapbox
                            </div>
                        </div>
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
                            class="bg-gradient-to-r from-violet-500 to-indigo-500 bg-clip-text text-transparent">Posts</span>
                    </div>
                    <div class="text-sm">
                        <a href="#/posts">View all Posts →</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <a class="" href="#/posts/fifth-post">
                    <div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2 group relative overflow-hidden transition-all duration-500">
                            <img class="h-full w-full object-cover object-center transition-all duration-500 group-hover:scale-125"
                                src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                alt="Image post 1" loading="lazy" />
                            <div
                                class="absolute bottom-0 flex rounded-tr-md bg-gradient-to-r from-violet-500 to-transparent p-3 dark:bg-gray-900">
                                <img class="h-6 w-6 rounded-full object-cover object-center"
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="" />

                                <div class="mx-4">
                                    <h1 class="text-sm text-slate-50 dark:text-gray-200">
                                        Adi Arta Wibawa
                                    </h1>
                                </div>
                            </div>
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
                    </div>
                </a>

                <a class="" href="#/posts/fifth-post">
                    <div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2 group relative overflow-hidden transition-all duration-500">
                            <img class="h-full w-full object-cover object-center transition-all duration-500 group-hover:scale-125"
                                src="https://images.unsplash.com/photo-1564865878688-9a244444042a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                                alt="Image post 2" loading="lazy" />
                            <div
                                class="absolute bottom-0 flex rounded-tr-md bg-gradient-to-r from-violet-500 to-transparent p-3 dark:bg-gray-900">
                                <img class="h-6 w-6 rounded-full object-cover object-center"
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="" />

                                <div class="mx-4">
                                    <h1 class="text-sm text-slate-50 dark:text-gray-200">
                                        Adi Arta Wibawa
                                    </h1>
                                </div>
                            </div>
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
                    </div>
                </a>

                <a class="" href="#/posts/fifth-post">
                    <div class="overflow-hidden rounded-md bg-slate-800">
                        <div class="aspect-w-3 aspect-h-2 group relative overflow-hidden transition-all duration-500">
                            <img class="h-full w-full object-cover object-center transition-all duration-500 group-hover:scale-125"
                                src="https://images.unsplash.com/photo-1604537466158-719b1972feb8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80"
                                alt="Image post 3" loading="lazy" />
                            <div
                                class="absolute bottom-0 flex rounded-tr-md bg-gradient-to-r from-violet-500 to-transparent p-3 dark:bg-gray-900">
                                <img class="h-6 w-6 rounded-full object-cover object-center"
                                    src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="" />

                                <div class="mx-4">
                                    <h1 class="text-sm text-slate-50 dark:text-gray-200">
                                        Adi Arta Wibawa
                                    </h1>
                                </div>
                            </div>
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
                    </div>
                </a>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>
.drop-shadow-lg {
    --tw-drop-shadow: drop-shadow(0 10px 8px rgba(255, 255, 255, 0.2)) drop-shadow(0 4px 3px rgba(255, 255, 255, 0.4));
}
</style>
