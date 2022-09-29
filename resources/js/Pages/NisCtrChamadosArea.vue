<script>
    import DataNisCtrChamadosArea from "@/Components/DataNisCtrChamadosArea.vue";
    import AppLayout from "@/Layouts/AppLayout.vue";
    
    
    export default {
      components: {
        DataNisCtrChamadosArea,
        AppLayout,
      },
      props: ["dbData"],
      data() {
        try {
          return {
            keys: Object.keys(this.dbData[0]),
          };
          
        } catch (error) { }

      },
    };
</script>

<template>
  <AppLayout title="NisCtrChamadosAreas" page="NIS CTR CHAMADOS AREA">
    <template #header>
      <!--  -->
    </template>

    <template #content> 
      <DataNisCtrChamadosArea v-if="error" :data="dbData"/>
    </template>
  </AppLayout>
</template>


<style>

</style>