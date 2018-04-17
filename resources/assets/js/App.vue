<template>
    <div id="app">
        <header v-if="token" class="header">
            <div class="header__brand">
                <img class="header__logo" src="images/svg/logo.svg" alt="Grupo Car">
                <div class="header__burguer">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="header__menu">
                <router-link to="/resumen" class="header__navlink">Resumen</router-link>
                <router-link to="/registro" class="header__navlink">Registro</router-link>
                <router-link to="/reportes" class="header__navlink">Reportes</router-link>
            </div>
        </header>
        <div class="body-container">
            <aside-menu v-if="token"/>
            <router-view class="view"/>
        </div>
    </div>
</template>

<script>
    import AsideMenu from "./components/AsideMenu";

    export default {
        name: 'App',
        components: {
            AsideMenu
        },
        computed: {
            token: function () {
                return this.$store.getters.getUser;
            }
        }
    }
</script>

<style scoped lang="scss">
    //$devMode: true;
    @import "~ed-grid";
    .header {
        width: 100%;
        height: 80px;
        margin: 0;
        padding: 10px 0;
        display: flex;
        background-color: slategray;

        &__brand {
            @include edContainer;
            @include mainJustify;
            @include crossCenter;
            width: 20%;
            max-width: 300px;
            margin-left: 0;
        }
            &__logo {
                @include edItem(50);
                height: 60px;
                width: auto;
            }
            &__burguer {
                @include edContainer;
                @include flexColumn;
                @include crossEnd;
                @include edItem(50);
                span {
                    display: block;
                    width: 33px;
                    height: 4px;
                    margin-bottom: 5px;
                    position: relative;
                    background: white;
                    border-radius: 3px;
                }
            }
        &__menu {
            @include edContainer;
            width: 100%;
            a {
                @include edItem();
                width: 100px;
                display: flex;
                align-items: center;
            }
        }
            &__navlink {
                color: white;
            }
    }

    .body-container {
        display: flex;
        flex-wrap: nowrap;
        height: calc(100vh - 80px);
        width: 100%;
    }

    .view {
        width: 80%;
    }
</style>
