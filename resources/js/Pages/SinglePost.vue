<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import AppLayout from "@/Layouts/AppLayout.vue";
</script>

<template>
    <Head title="Single Post" />

    <AppLayout>
        <div class="mx-auto max-w-screen-xl px-4 py-6">
            <h1 class="text-center text-3xl font-bold">Typography example</h1>
            <div class="mt-2 text-center text-sm text-gray-400">
                By Adi Arta Wibawa on Jan 6, 2023
            </div>
            <div class="mx-auto mt-5 w-full max-w-2xl">
                <div class="aspect-w-3 aspect-h-2">
                    <img
                        class="h-full w-full rounded-lg object-cover object-center"
                        src="https://images.unsplash.com/photo-1522199755839-a2bacb67c546?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=872&q=80"
                        alt="Image post"
                        loading="lazy"
                    />
                </div>
                <div
                    class="prose prose-invert mx-auto mt-8 max-w-2xl prose-img:rounded-lg"
                >
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Dolor sequi, mollitia nulla dicta voluptatem modi aliquid
                    explicabo porro vitae, praesentium voluptas temporibus
                    cumque optio impedit accusamus quas hic adipisci consectetur
                    eum nisi consequuntur dolore reprehenderit tempore minus!
                    Quo perferendis omnis ad rerum labore, aspernatur, sequi,
                    laboriosam modi sapiente ex sunt facere repellendus fugiat
                    beatae nobis et? Id voluptatum sapiente, ducimus, ea
                    consectetur exercitationem explicabo aliquam earum obcaecati
                    sunt culpa, suscipit amet. Natus ratione nulla sequi
                    deleniti earum. Obcaecati minus sed tempore harum fugiat
                    possimus amet eaque assumenda esse veritatis delectus
                    doloribus consequatur qui consectetur dolorem, officiis hic
                    ullam facere explicabo. Hic saepe ad ducimus ea, cupiditate
                    recusandae perspiciatis dolor cumque. Aut, voluptatum qui ab
                    ut fugit tempora voluptas possimus provident? Ad, explicabo
                    sint obcaecati accusamus voluptate nemo. Qui cumque omnis
                    eligendi quam animi quae iure repudiandae quod nostrum
                    laudantium, asperiores, possimus obcaecati quia odit aliquid
                    aperiam nesciunt fuga tempora quasi excepturi praesentium
                    fugiat? Dolores maiores fugit voluptas aspernatur voluptatem
                    sint iste porro, dicta sapiente aliquid consequuntur nostrum
                    eveniet non reiciendis eum iure minima doloribus iusto
                    dolorem! Laboriosam consequatur nostrum optio iure vel nisi
                    nesciunt soluta sapiente nulla impedit laborum reprehenderit
                    nam corporis recusandae, tempore tenetur corrupti aspernatur
                    molestias similique dolorum quo in ex, doloribus temporibus!
                    Quis reiciendis ipsum maxime optio aut, praesentium facere
                    vel fugiat veritatis, enim iure rerum harum repudiandae
                    tempore deleniti mollitia cumque. Maxime, voluptate dolorum!
                    Harum iusto hic quod non. Corporis possimus quisquam qui
                    tempore odio aliquam repellendus! Fugiat vero quam dolorum
                    minus aut magnam assumenda molestiae.
                </div>
            </div>
        </div>
    </AppLayout>
</template>
