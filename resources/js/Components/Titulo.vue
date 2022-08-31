<template>
    <div class="caixa">
        <h1>
            {{  texto }} array[0]
        </h1>        
    </div>
</template>

<script>
export default {
    data() {
        return {

        }
    },
    props: {
        texto: String, DataBase
    }
}
</script>

<style>

    .caixa {
        color: #fff;
        background-color: black;
        padding: 1rem;
    }

</style>