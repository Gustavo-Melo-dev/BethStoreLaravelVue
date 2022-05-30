<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex justify-center">
                    <div class="p-6 bg-white border-b border-gray-200">
                         <div class="title">
                            <div class="flex justify-center pb-8 text-orange-300 text-lg">
                                <p class="text-3xl">Cadastro de produto</p>
                            </div>
                            <div class="steps pb-5 flex justify-end text-orange-300">
                                <p>Passo <span id="step">{{step}}</span></p>
                            </div>
                        </div>
                        <form class="w-full max-w-lg" method="POST" enctype="multipart/form-data" id="app">
                            <section>
                                <div id="step1" class="step" v-if="step == 1">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Código do produto
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="cod_product" name="cod_product" type="number" v-model="form.cod_product" placeholder="Código do produto">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Qtd do produto
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="qtd_product" name="qtd_product" type="number" v-model="form.qtd_product" placeholder="Código do produto">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                                            modelo
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="model" name="model" type="text" v-model="form.model" required placeholder="Modelo do produto">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                                            marca
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="brand" name="brand" v-model="form.brand" type="text" required placeholder="Marca">
                                        </div>
                                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                            tamanho
                                        </label>
                                        <div class="relative">
                                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="size" name="size" v-model="form.size">
                                            <option>P</option>
                                            <option>M</option>
                                            <option>G</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <!-- <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg> -->
                                            </div>
                                        </div>
                                        </div>
                                        <div class="w-full md:w-1/3 px-3 mb-6">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                                            preço
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="price" name="price" type="number" v-model="form.price" required placeholder="Preço">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                            Descrição do produto
                                        </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="description_product" name="description_product" v-model="form.description_product" type="text" placeholder="Descrição do produto">
                                        <p class="text-gray-600 text-xs italic">Breve descrição</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div id="step2" class="step w-full max-w-xl" v-if="step == 2" style="min-width: 350px;">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Código da categoria
                                        </label>
                                        <input class="appearance-none w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="cod_product" name="cod_product" type="number"  placeholder="Código da categoria">
                                        </div>
                                        <div class="w-full md:w-2/4 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                                            sector
                                        </label>
                                        <div class="relative">
                                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="sector" name="sector">
                                            <option>Cama, Mesa e Banho</option>
                                            <option>Beleza</option>
                                            <option>Vestuário</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                            Descrição da categoria
                                        </label>
                                        <input class="w-100 appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-orange-500" id="description_category" name="'description_category'" type="text" placeholder="Descrição da categoria">
                                        <p class="text-gray-600 text-xs italic">Breve descrição</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div id="step3" class="step w-full px-3 mb-6" v-if="step == 3">
                                    <p class="text-2xl">Tem certeza de que os dados estão corretos ?</p>
                                </div>
                            </section>
                        </form>
                        <div class="row">
                            <div class="next-previous flex justify-between">
                                <div v-if="step > 1">
                                    <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-orange-400 rounded-lg focus:shadow-outline hover:bg-orange-700" id="prev" @click="prevStep">Voltar</button>
                                </div>
                                <div class="submit" v-if="step === 3">
                                    <button type="submit" class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-orange-400 rounded-lg focus:shadow-outline hover:bg-orange-700" id="next" @click="notificationSubmit">Cadastrar</button>
                                </div>
                                <div v-else>
                                    <button class="h-10 px-5 m-2 text-indigo-100 transition-colors duration-150 bg-orange-400 rounded-lg focus:shadow-outline hover:bg-orange-700" id="next" @click="nextStep">Próximo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head
    },
    data(){
        return{
            step: 1,
            form: {
                cod_product: null,
                qtd_product: null,
                model: null,
                brand: null,
                size: null,
                description_product: null,
                description_category: null,
                price: null,
                cod_category: null,
                sector: null,
            }
        }
    },
        methods:{
        nextStep(){
            if(this.step === 3){
                this.step
            } else {
                this.step++
            }
        },
        prevStep(){
            if(this.step === 1){
                this.step
            } else {
                this.step--
            }
        },
        handleSubmit(){
            this.$inertia.post('/product', this.form);
        }
    }
}
</script>
