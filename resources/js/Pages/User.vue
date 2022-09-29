<script>
    import DataUser from "@/Components/DataUser.vue";
    import AppLayout from "@/Layouts/AppLayout.vue";
    
    export default {
      components: {
        DataUser,
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
      <AppLayout title="Usuarios" page="USUÁRIOS">
        <template #header>
          <!--  -->
        </template>
    
        <template #content>
          <DataUser :data="dbData" />
        </template>
      </AppLayout>
    </template>
    
    
    <style>
    
    </style>