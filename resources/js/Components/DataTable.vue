<script>
    // import AppLayout from "@/Layouts/AppLayout.vue";

    // defineProps({
    // title: String,
    // });

    // export default {
  
    // props: ["data"],
    // data() {
    //     return {
    //     keys: Object.keys(this.data[0]),
    //     };
    // },
    // };
    
    export default {
        name: "DataTable",
        data() {
            return {
                keys: Object.keys(this.data[0]),
            };
        },
        props: ["data"], title: String,
    };

</script>

<style>
    
</style>
<template>
    <!-- <AppLayout> -->
        <!-- <template #header>
        </template> -->

        <!-- TABELA RESPONSIVA -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                        <!-- COLUNAS   -->
                        <thead class="border-b bg-green-700">
                            <tr>
                            <th
                                scope="col"
                                class="border text-sm font-medium text-white px-6 py-4 text-left"
                                v-for="(column, index) in keys"
                                :key="index"
                            >
                                {{ column }}
                            </th>
                            </tr>
                        </thead>
                        <!-- LINHAS -->
                        <tbody>
                            <tr
                            v-for="(data, index) in data"
                            :key="index"
                            :data-table-id="data['id']"
                            >
                            <td
                                class="border text-sm font-medium text-gray-900 px-6 py-4 text-left"
                                v-for="(key, index) in keys"
                                :key="index"
                            >
                                {{ data[key] }}
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                </div>
                <div
                class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400"
                v-if="isOpen"
                >
                <div
                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
                >
                    <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>
                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                    <div
                    class="inline-blockalign-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
                    role="dialog"
                    aria-modal="true"
                    aria-labelledby="modal-headline"
                    >
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
<!-- </AppLayout> -->

</template>
