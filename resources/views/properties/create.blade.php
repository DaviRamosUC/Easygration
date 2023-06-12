<x-app-layout>
    <div class="container mx-auto">
        <h1 class="text-xl font-medium font-serif p-4">Cadastrar novo imóvel</h1>
        <section class="bg-white dark:bg-gray-900">
            <div class="px-4 mx-auto max-w-2xl py-4">
                <form action="{{ route('cadastrarimovel') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2">
                            <label for="titulo"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titulo do
                                anuncio</label>
                            <input type="text" name="titulo" id="titulo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Ex. Casa 2/4 com suíte" required="">
                        </div>
                        <div>
                            <label for="tipo"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de
                                residência</label>
                            <select id="tipo" name="tipo"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Selecione o tipo</option>
                                <option value="Casa">Casa</option>
                                <option value="Apartamento">Apartamento</option>
                                <option value="Sítio">Sítio</option>
                                <option value="Kitnet">Kitnet</option>
                            </select>
                        </div>
                        <div class="w-full">
                            <label for="endereco"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Endereço</label>
                            <input type="address" name="endereco" id="endereco"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Rua das garças" required="">
                        </div>
                        <div class="w-full">
                            <label for="preco"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor do
                                aluguel</label>
                            <input type="number" name="Preco" id="Preco"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="R$5.000,00" required="">
                        </div>
                        <div>
                            <label for="valor_condominio"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor do
                                Condomínio</label>
                            <input type="number" name="valor_condominio" id="valor_condominio"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="R$ 998,99" required="">
                        </div>
                        <div>
                            <label for="iptu"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IPTU</label>
                            <input type="number" name="iptu" id="iptu"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="R$ 998,99" required="">
                        </div>
                        <div>
                            <label for="metros_quadrados"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Metros
                                Quadrados</label>
                            <input type="number" name="metros_quadrados" id="metros_quadrados"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="120 m²" required="">
                        </div>
                        <div>
                            <label for="quantidade_banheiros"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantidade de
                                banheiros</label>
                            <select id="quantidade_banheiros" name="quantidade_banheiros"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Selecione o valor</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div>
                            <label for="aceita_pets"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aceita
                                pet's</label>
                            <select id="aceita_pets" name="aceita_pets"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Selecione o valor</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div>
                            <label for="garagem"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Possui
                                garagem</label>
                            <select id="garagem" name="garagem"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                <option>Selecione o valor</option>
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição</label>
                            <textarea id="description" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Imóvel com 2/4, na baixada fluminense..."></textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Cadastrar imóvel
                    </button>
                </form>
            </div>
        </section>
    </div>
</x-app-layout>
