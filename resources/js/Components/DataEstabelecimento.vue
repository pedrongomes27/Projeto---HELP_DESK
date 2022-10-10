<script>
    import Button from '../../../vendor/laravel/jetstream/stubs/inertia/resources/js/Components/Button.vue';
    import pagination from "@/Components/Pagination.vue"
    import JetActionMessage from '@/Components/ActionMessage.vue';


    
    export default {
        name: "DataEstabelecimento",
        components: {
            Button, pagination, JetActionMessage,
        },
        data() {
            try {
                return {
                    keys: Object.keys(this.data[0]),
                    editMode: false,
                    isOpen: false,
                    form: {
                        nome: null,
                        estabelecimento_classificacao_id: null,
                        cnes: null,
                        tipo_id: null,
                        cidade_id: null,
                        latitude: null,
                        longitude: null,
                    },
                };
    
            } catch (e) {
    
            }
        },
        props: ['data', 'errors'],
        title: String,
        methods: {
            openModal() {
                this.isOpen = true;
            },
            closeModal() {
                this.isOpen = false;
                this.reset();
                this.editMode = false;
            },
            reset() {
                this.form = {
                    name: null,
                    estabelecimento_classificacao_id: null,
                    cnes: null,
                    tipo_id: null,
                    cidade_id: null,
                    latitude: null,
                    longitude: null,
                }
            },
            save(data) {
                this.$inertia.post('/estabelecimento', data)
                this.reset();
                this.closeModal();
                this.editMode = false;
            },
            edit(data) {
                this.form = Object.assign({}, data);
                this.editMode = true;
                this.openModal();
            },
            update: function (data) {
                if (!confirm('Sure')) return;
                data._method = 'PUT';
                this.$inertia.post('/estabelecimento/' + data.id, data)
                this.reset();
                this.closeModal();
            },
            deleteData(data) {
                if (!confirm('Deseja realmente apagar este estabelecimento?')) return;
                data._method = 'DELETE';
                this.$inertia.post('/estabelecimento/' + data.id, data)
                this.reset();
                this.closeModal();
                
            },
        },
    };
    
    </script>
    
    <style>
    
    </style>
    <template>
        
        <!-- TABELA RESPONSIVA -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-x-auto">
                                    <!-- ADD BTN -->
                                    <button
                                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                                        @click="openModal()">Adicionar novo</button>
                                    <div class="py-0.5"></div>
                                    <!-- TABELA -->
                                    <table class="min-w-full">
                                        <!-- COLUNAS  -->
                                        <thead class="border-b bg-green-nav">
                                            <tr>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    ID
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Nome
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Classificação-ID
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    CNES
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Tipo-ID
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Cidade-ID
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Latitude
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Longitude
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Updated at
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Created at
                                                </th>
                                                <th scope="col" class="border text-sm text-white px-6 py-4 text-left">
                                                    Ações
                                                </th>
                                            </tr>
                                        </thead>
                                        <!-- LINHAS -->
                                        <tbody>
                                            <tr v-for="(data, index) in data" :key="index" :data-table-id="data['id']">
                                                <td class="border text-sm text-gray-900 px-6 py-4 text-left"
                                                    v-for="(key, index) in keys" :key="index">
                                                    {{ data[key] }}
                                                </td>
                                                <td class="border text-sm px-6 py-4 text-left">
                                                    
                                                    <!-- EDITAR -->
                                                    <button
                                                        class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded"
                                                        @click="edit(data)">
                                                        
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>
                                                    </button>

                                                    <div class="py-0.5" />

                                                    <!-- REMOVER -->
                                                    <button
                                                        class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded"
                                                        @click="deleteData(data)">
                                                        
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-4 h-4">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <pagination :links="data.links"></pagination>
    
                                    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
                                        <div
                                            class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
                                            <div class="fixed inset-0 transition-opacity">
                                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                            </div>
    
                                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                                                role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                                <form>
                                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <!-- DADOS -->
                                                        <div class="">
                                                            <div class="mb-4 inline" v-show="editMode">
                                                                <label for="id"
                                                                    class="text-gray-700 text-sm font-bold mb-2">ID:</label>
                                                                <input type="text"
                                                                    class="appearance-none border-none text-gray-700 leading-tight"
                                                                    id="id" v-model="form.id"
                                                                    disabled>
                                                                <!-- <span v-if="form.errors.id" class="text-red-500"> {{ form.errors.id }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="nome"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">Nome:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="nome" name="nome" v-model="form.nome">
                                                                <!-- <span v-if="form.errors.nome" class="text-red-500">{{ form.errors.nome }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="estabelecimento_classificacao_id"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">Classificação-ID:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="estabelecimento_classificacao_id"
                                                                    v-model="form.estabelecimento_classificacao_id">
                                                                <!-- <span v-if="form.errors.estabelecimento_classificacao_id" class="text-red-500">{{ form.errors.estabelecimento_classificacao_id }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="cnes"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">CNES:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="cnes" v-model="form.cnes">
                                                                <!-- <span v-if="form.errors.cnes" class="text-red-500">{{ form.errors.cnes }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="tipo_id"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">Tipo-ID:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="tipo_id"
                                                                    v-model="form.tipo_id">
                                                                <!-- <span v-if="form.errors.tipo_id" class="text-red-500">{{ form.errors.tipo_id }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="cidade_id"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">Cidade-ID:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="cidade_id"
                                                                    v-model="form.cidade_id">
                                                                <!-- <span v-if="form.errors.cidade_id" class="text-red-500">{{ form.errors.cidade_id }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="latitude"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">Latitude:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="latitude"
                                                                    v-model="form.latitude">
                                                                <!-- <span v-if="form.errors.latitude" class="text-red-500">{{ form.errors.latitude }}</span> -->
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="longitude"
                                                                    class="block text-gray-700 text-sm font-bold mb-2">Longitude:</label>
                                                                <input type="text"
                                                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                                    id="longitude"
                                                                    v-model="form.longitude">
                                                                <!-- <span v-if="form.errors.longitude" class="text-red-500">{{ form.errors.longitude }}</span> -->
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- BUTTON -->
                                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                        <!-- SAVE -->
                                                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                            <button type="submit"
                                                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                                v-show="!editMode" @click="save(form)">
                                                                Save
                                                            </button>
                                                        </span>
                                                        <!-- UPDATE -->
                                                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                                            <button type="submit"
                                                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-blue-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"
                                                                v-show="editMode" @click="update(form)">
                                                                Update
                                                            </button>
                                                        </span>
                                                        <!-- CANCELAR -->
                                                        <span
                                                            class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
    
                                                            <button @click="closeModal()" type="button"
                                                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                                                Cancel
                                                            </button>
                                                        </span>
                                                    </div>
                                                </form>
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
    </template>
    