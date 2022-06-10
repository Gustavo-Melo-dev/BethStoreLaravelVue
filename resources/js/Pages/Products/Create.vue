<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Cadastrar Produto
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex justify-center p-6">
                        <form class="w-full max-w-lg p-6" @submit.prevent="handleSubmit">
                            <section>
                                <div id="step1">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                Nome
                                            </label>
                                            <input v-model="form.name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text" placeholder="Digite o nome">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                                Código do Produto
                                            </label>
                                            <input v-model="form.cod_product" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cod_product" name="cod_product" type="number" placeholder="Digite o código">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                                Qtd. do Produto
                                            </label>
                                            <input v-model="form.qtd_product" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qtd_product" name="qtd_product" type="number" placeholder="Digite a quantidade">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                Marca
                                            </label>
                                            <input v-model="form.brand" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text" placeholder="Digite o nome">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                                Tamanho
                                            </label>
                                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="size" name="size" v-model="form.size">
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
                                            <input v-model="form.price" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qtd_product" name="qtd_product" type="number" placeholder="Digite a quantidade">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6 px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="">
                                            Descrição do Produto
                                        </label>
                                        <input v-model="form.description_product" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="qtd_product" name="qtd_product" type="text" placeholder="Digite a quantidade">
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div id="step2" class="step w-full max-w-xl" style="min-width: 350px;">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Código da categoria
                                        </label>
                                        <input class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="cod_product" name="cod_product" type="number" v-model="form.cod_category"  placeholder="Código da categoria">
                                        </div>
                                        <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                            Setor
                                        </label>
                                        <div class="relative">
                                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="sector" name="sector" v-model="form.sector">
                                            <option value="Cama, Mesa e Banho">Cama, Mesa e Banho</option>
                                            <option value="Beleza">Beleza</option>
                                            <option value="Vestuário">Vestuário</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> -->
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                            Descrição da categoria
                                        </label>
                                        <input class="w-100 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" v-model="form.description_category" id="description_category" name="'description_category'" type="text" placeholder="Descrição da categoria">
                                        <p class="text-gray-600 text-xs italic">Breve descrição</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <button class="h-10 w-full px-5 text-white transition-colors duration-150 bg-indigo-400 rounded-lg focus:shadow-outline hover:bg-indigo-700">Cadastrar</button>
                                </div>
                            </section>
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
    data(){
        return {
            form: {
                name: null,
                qtd_product: null,
                cod_product: null,
                brand: null,
                size: null,
                price: null,
                description_product: null,
                cod_category: null,
                sector: null,
                description_category: null,
            }
        }
    },
    methods: {
        handleSubmit(){
            this.$inertia.post(route('products.store', this.form))
        }
    }
}
</script>