<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex justify-between">
                        <div class="px-4 py-4">
                            <form action="{{route('contacts.index')}}" method="get">
                                <input type="text" name="search" id="search" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Faça sua busca">
                            </form>
                        </div>
                        <div v-if="user.role" class="flex justify-end px-4 py-4">
                            <a  :href="route('products.create')">
                                <button class="btn bg-indigo-400 hover:bg-indigo-700 text-white px-2 py-2 rounded-lg">+Add</button>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="items-center p-5 grid grid-cols-5 gap-5 justify-evenly">
                            <div v-for="(product, index) in products" :key="index" class="w-full shadow-lg rounded-lg p-5 bg-white text-gray-800" style="max-width: 400px">
                                <a :href="route('products.show', product.id)">
                                    <div class="w-full flex mb-4">
                                        <div class="overflow-hidden">
                                            <img src="http://cdn.shopify.com/s/files/1/0281/7815/3547/products/card-captor-sakura-kinomoto-red-battle-dress-cosplay-costume-gotamochi-29852756738219.jpg?v=1631364025" alt="">
                                        </div>
                                    </div>
                                    <div class="w-full flex flex-start">
                                        <p class="text-xl text-gray-800 text-right">{{ product.name }}</p>
                                    </div>
                                    <div class="w-full flex flex-start mb-3">
                                        <p class="text-xs text-gray-500 text-right">{{ product.qtd_product }} disponível</p>
                                    </div>
                                    <div>
                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">Vestuário</span>
                                    </div>
                                    <div class="w-full flex mb-6">
                                        <div>R$ 199,00</div>
                                    </div>
                                    <div v-if="user.role" class="row flex justify-center">
                                        <div>
                                            <a :href="route('products.edit', product.id)">
                                                <button class="h-10 w-full px-5 text-white transition-colors duration-150 bg-indigo-400 rounded-lg focus:shadow-outline hover:bg-indigo-700">Editar</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div v-else class="row flex justify-center">
                                        <a :href="route('products.show', product.id)">
                                            <button class="h-10 w-full px-5 text-white transition-colors duration-150 bg-indigo-400 rounded-lg focus:shadow-outline hover:bg-indigo-700">Comprar</button>
                                        </a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
import { Inertia } from '@inertiajs/inertia';

export default {
    components: {
        AppLayout,
        Welcome,
    },
    props: {
        products: Array,
        user: Object,
    },
    methods: {
        handleDelete(){
            Inertia.delete(route('products.destroy', product.id));
        }
    }
}
</script>