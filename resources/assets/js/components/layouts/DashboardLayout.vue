<template>
    <div class="dashboard">
        <h2>Documentos por Vencer</h2>
        <h3>Personas</h3>
        <table class="toExpire">
            <thead>
                <th v-for="">{{}}</th>
            </thead>
            <tbody>
                <tr v-for="">
                    <td v-for="">{{}}</td>
                </tr>
            </tbody>
        </table>
        <h3>Empresas</h3>
    </div>
</template>

<script>
    export default {
        name: "dashboard-layout",
        created() {
            this.$store.dispatch('personaStore/fetchToExpire', {token: this.$store.getters.getToken});
        }
    }
</script>

<style scoped lang="scss">
    @import "~ed-grid";
    .dashboard {
        @include edContainer;
    }
</style>