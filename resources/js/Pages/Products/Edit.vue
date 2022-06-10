<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editando produto
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex justify-center p-6">
                        <form class="w-full max-w-lg p-6" @submit.prevent="handleUpdate">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Nome
                                    </label>
                                    <input v-model="productData.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text" placeholder="Digite o nome">
                                </div>
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                        Código do Produto
                                    </label>
                                    <input v-model="productData.cod_product" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cod_product" name="cod_product" type="number" placeholder="Digite o código">
                                </div>
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                        Qtd. do Produto
                                    </label>
                                    <input v-model="productData.qtd_product" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qtd_product" name="qtd_product" type="number" placeholder="Digite a quantidade">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                        Marca
                                    </label>
                                    <input v-model="productData.brand" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text" placeholder="Digite o nome">
                                </div>
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                        Tamanho
                                    </label>
                                    <select v-model="productData.size" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="size" name="size">
                                        <option>P</option>
                                        <option>M</option>
                                        <option>G</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    </div>
                                </div>
                                <div class="w-full md:w-1/3 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                        Preço
                                    </label>
                                    <input v-model="productData.price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qtd_product" name="qtd_product" type="number" placeholder="Digite a quantidade">
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                    Descrição do produto
                                </label>
                                <input class="w-100 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" v-model="productData.description_product" id="description_product" name="description_product" type="text" placeholder="Descrição do Produto">
                                <p class="text-gray-600 text-xs italic">Breve descrição</p>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                    Código da categoria
                                </label>
                                    <input v-model="productData.cod_category" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qtd_product" name="qtd_product" type="text" placeholder="Digite a quantidade">
                                </div>
                                <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                    Setor
                                </label>
                                <div class="relative">
                                    <select v-model="productData.sector" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="sector" name="sector">
                                    <option value="Cama, Mesa e Banho">Cama, Mesa e Banho</option>
                                    <option value="Beleza">Beleza</option>
                                    <option value="Vestuário">Vestuário</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                        Descrição da categoria
                                    </label>
                                    <input class="w-100 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" v-model="productData.description_category" id="description_category" name="description_category" type="text" placeholder="Descrição da categoria">
                                    <p class="text-gray-600 text-xs italic">Breve descrição</p>
                                </div>
                            </div>
                            <div class="row">
                                <button class="h-10 w-full px-5 m-2 text-white transition-colors duration-150 bg-orange-400 rounded-lg focus:shadow-outline hover:bg-orange-700">Atualizar</button>
                            </div>
                        </form>
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
        product: Object
    },
    data(){
        return {
            productData: this.product
        }
    },
    methods: {
        handleUpdate(){
            this.$inertia.patch('/edit/' + this.productData.id, this.productData)
        },
        
    },
}
</script>