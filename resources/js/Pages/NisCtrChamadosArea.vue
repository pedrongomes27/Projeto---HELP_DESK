<script>
    import DataTable from "@/Components/DataTable.vue";
    import AppLayout from "@/Layouts/AppLayout.vue";
    
    
    export default {
      components: {
        DataTable,
        AppLayout,
      },
      props: ["dbData"],
      data() {
        return {
          keys: Object.keys(this.dbData[0]),
        };
      },
    };
</script>

<template>
    <AppLayout title="NisCtrChamadosAreas" page="NIS_CTR_CHAMADOS_AREA">
        <template #header>
          <!--  -->
        </template>
    
        <template #content> 
          <DataTable :data="dbData"/>
        </template>
    </AppLayout>
</template>


<style>

</style>