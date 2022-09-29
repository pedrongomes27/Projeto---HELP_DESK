<script>
export default {
    name: "DataUser",
    data() {
        try {
            return {
                keys: Object.keys(this.data[0]),
            };

        } catch (error) {

        }
    },
    props: ['data', 'errors'],
    title: String,
    methods: {
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
                                <div class="py-0.5"></div>
                                <!-- TABELA -->
                                <table class="min-w-full">
                                    <!-- COLUNAS  -->
                                    <thead class="border-b bg-green-nav">
                                        <tr>
                                            <th class="border text-sm text-white px-6 py-4 text-left" v-for="(key, index) in keys"
                                                :key="index" scope="column">
                                                {{ key }}
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
    