<script>
import DataEstabelecimento from "@/Components/DataEstabelecimento.vue";
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
  components: {
    DataEstabelecimento,
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
  <AppLayout title="Estabelecimentos" page="ESTABELECIMENTOS">
    <template #header>
      <!--  -->
    </template>

    <template #content>
      <DataEstabelecimento :data="dbData" />
    </template>
  </AppLayout>
</template>


<style>

</style>