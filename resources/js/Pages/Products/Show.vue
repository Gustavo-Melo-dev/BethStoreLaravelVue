<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Comprar produto
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex justify-between px-2 py-2">
                        <div>
                            <a :href="route('products.index')">
                                <button class="btn bg-indigo-400 hover:bg-indigo-700 text-white px-2 py-2 rounded-lg">Voltar</button>
                            </a>
                        </div>
                        <div v-if="user.role === 'admin'">
                            <!-- <form action="{{route('products.delete', product.id)}}" method=""></form>
                            <a :href="route('products.delete', product.id)">
                                <button class="h-10 w-full px-5 text-white transition-colors duration-150 bg-red-400 rounded-lg focus:shadow-outline hover:bg-red-700">Excluir</button>
                            </a> -->
                            <button @click="destroy(product.id)" class="h-10 w-full px-5 text-white transition-colors duration-150 bg-red-400 rounded-lg focus:shadow-outline hover:bg-red-700">Excluir</button>
                        </div>
                    </div>
                    <div class="flex justify-between flex-column p-6 col col-xl-6">
                        <div class="informations p-6 shadow-lg">
                            <div class="w-full flex mb-4 justify-center">
                                <div class="overflow-hidden">
                                    <img width="500" src="http://cdn.shopify.com/s/files/1/0281/7815/3547/products/card-captor-sakura-kinomoto-red-battle-dress-cosplay-costume-gotamochi-29852756738219.jpg?v=1631364025" alt="">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div style="">
                                <div class="name">
                                    <p class="font-bold">Nome do Produto:</p>
                                    <p>{{product.name}}</p>
                                </div>
                                <div class="qtd_product">
                                    <p class="font-bold">Quantidade do Produto:</p>
                                    <p>{{product.qtd_product}}</p>
                                </div>
                                <div class="cod_product">
                                    <p class="font-bold">Código do Produto:</p>
                                    <p>{{product.cod_product}}</p>
                                </div>
                                <div class="Price">
                                    <p class="font-bold">Preço do Produto:</p>
                                    <p>{{product.price}}</p>
                                </div>
                                <div class="description_product w-80">
                                    <p class="font-bold">Descrição do Produto:</p>
                                    <p>{{product.description_product}}</p>
                                </div>
                                <div class="brand">
                                    <p class="font-bold">Marca do Produto:</p>
                                    <p>{{product.brand}}</p>
                                </div>
                                <div class="size">
                                    <p class="font-bold">Tamanho do Produto:</p>
                                    <p>{{product.size}}</p>
                                </div>
                                <div class="sector">
                                    <p class="font-bold">Setor do Produto:</p>
                                    <p>{{product.sector}}</p>
                                </div>
                                <div class="description_category w-80">
                                    <p class="font-bold">Descrição da Categoria:</p>
                                    <p>{{product.description_category}}</p>
                                </div>
                            </div>
                            <div class="row w-full mt-5">
                                <a :href="route('products.index')">
                                    <button class="h-10 w-full px-5 text-white transition-colors duration-150 bg-indigo-400 rounded-lg focus:shadow-outline hover:bg-indigo-700">Comprar</button>
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

export default {
    components: {
        AppLayout,
        Welcome,
    },
    props: {
        product: Array,
        user: Object
    },
}
</script>