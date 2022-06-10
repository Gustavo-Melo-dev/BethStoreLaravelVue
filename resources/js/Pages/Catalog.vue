<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Catálogo
            </h2>
        </template>
        <div class="items-center p-5 grid grid-cols-5 gap-5 justify-evenly">
            <div v-for="(product, index) in products" :key="index" class="w-full shadow-lg rounded-lg p-5 bg-white text-gray-800" style="max-width: 400px">
                <div class="w-full flex mb-4">
                    <div class="overflow-hidden">
                        <img src="http://cdn.shopify.com/s/files/1/0281/7815/3547/products/card-captor-sakura-kinomoto-red-battle-dress-cosplay-costume-gotamochi-29852756738219.jpg?v=1631364025" alt="">
                    </div>
                </div>
                <div class="w-full flex flex-start">
                    <p class="text-xl text-gray-800 text-right">{{ product.model }}</p>
                </div>
                <div class="w-full flex flex-start mb-3">
                    <p class="text-xs text-gray-500 text-right">{{ product.qtd_product }} disponível</p>
                </div>
                <div v-if="canCreateUsers" class="btn flex justify-between mr-5">
                    <div>
                        <button class="h-10 w-full px-5 m-2 text-white transition-colors duration-150 bg-orange-400 rounded-lg focus:shadow-outline hover:bg-orange-700">Editar</button>
                    </div>
                    <div>
                        <button class="h-10 w-full px-5 m-2 text-white transition-colors duration-150 bg-red-400 rounded-lg focus:shadow-outline hover:bg-red-700">Excluir</button>
                    </div>
                </div>
                <div v-else class="btn flex justify-center">
                    <Link :href="route('show', product.id)">
                        <button class="h-10 w-full px-5 m-2 text-white transition-colors duration-150 bg-orange-400 rounded-lg focus:shadow-outline hover:bg-orange-700">Comprar</button>
                    </Link>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Link
    },
    props: {
        products: String,
        canCreateUsers: Boolean
    }
}
</script>