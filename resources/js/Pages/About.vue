<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Sobre
            </h2>
        </template>

        <div class="flex flex-wrap container mx-auto px-20 py-20">
        <div class="w-full">
          <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
              <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(1)" v-bind:class="{'text-orange-400 bg-white': openTab !== 1, 'text-white bg-orange-200': openTab === 1}">
                Quem Somos
              </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
              <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(2)" v-bind:class="{'text-orange-400 bg-white': openTab !== 2, 'text-white bg-orange-200': openTab === 2}">
                O que fazemos de melhor ?
              </a>
            </li>
            <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
              <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal" v-on:click="toggleTabs(3)" v-bind:class="{'text-orange-400 bg-white': openTab !== 3, 'text-white bg-orange-200': openTab === 3}">
                Contato
              </a>
            </li>
          </ul>
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
            <div class="px-4 py-5 flex-auto">
              <div class="tab-content tab-space">
                <div v-bind:class="{'hidden': openTab !== 1, 'block': openTab === 1}">
                    <div class="my-5">
                        <p>Somos cerca de 50 mil colaboradores. Estamos presente em mais de 400 municípios, 20 Estados e no Distrito Federal e já somamos mais de 1.000 lojas. Com mais de 60 milhões de clientes, registramos uma receita bruta de R$ 30.6 bilhões em 2017.</p>
                    </div>
                    <div>
                        <p>No e-commerce somos um dos líderes do mercado online, com mais de 2 milhões de SKUS e 15 milhões de pedidos por ano. Mas não paramos por aí! Os Serviços Financeiros são 7% da nossa receita bruta, resultando em mais de 1,7 milhão de clientes ativos no CDC e 5 milhões de clientes com crédito pré-aprovado. Além disso, somos um dos maiores vendedores de serviços e garantia estendida do país.</p>
                    </div>
                </div>
                <div v-bind:class="{'hidden': openTab !== 2, 'block': openTab === 2}">
                    <div class="flex flex-row justify-between p-20">
                        <div class="w-1/3 mx-5">
                            <div class="my-10">
                                <p class="text-xl text-orange-400">Missão</p>
                                <div class="text">
                                    <p>Profissionalizar a Gestão Estratégica e a Tecnologia da Informação empresarial através de e-commerces dinâmicos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="my-10 mx-5">
                                <p  class="text-xl text-orange-400">Princípios</p>
                                <div class="text">
                                    <p>Desenvolver e Atender 50 projetos simultâneos até 2023 no Brasil.</p>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3">
                            <div class="my-10 mx-5">
                                <p  class="text-xl text-orange-400">Valores</p>
                                <div class="text">
                                    <p>Agilidade, Pontualidade, Trabalho em Equipe, Comprometimento e Disciplina.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-bind:class="{'hidden': openTab !== 3, 'block': openTab === 3}">
                  <div class="flex flex-row justify-between p-20 mx-20">
                      <div class="w-1/2">
                          <div class="my-10">
                              <p class="text-xl text-orange-400">Endereço:</p>
                              <div class="text">
                                  <p>Em qualquer lugar do MUNDO, todos os cantos e ao mesmo tempo perto de você 24 horas. Estamos Home Office.</p>
                              </div>
                          </div>
                           <div>
                              <p  class="text-xl text-orange-400">Email:</p>
                              <div class="text">
                                  <p>Nosso e-mail de contato para maiores informações. contato@bethstore.com</p>
                              </div>
                          </div>
                      </div>
                      <div class="w-1/2">
                          <div class="my-10">
                              <p  class="text-xl text-orange-400">Telefone:</p>
                              <div class="text">
                                  <p>Para melhor atender você pode chamar no WhatsApp aqui: +55 (74) 99954-0912</p>
                              </div>
                          </div>
                           <div>
                              <p  class="text-xl text-orange-400">Nosso atendimento:</p>
                              <div class="text">
                                  <p>Atendimento 24 horas por meio dos nossos canais de comunicação.</p>
                              </div>
                          </div>
                      </div>
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
  data() {
    return {
      openTab: 1
    }
  },
  methods: {
    toggleTabs: function(tabNumber){
      this.openTab = tabNumber
    }
  }
}
</script>
