<template>
    <div class="login-form">
        <h1 class="login-form__title">Grupo Car Platform <span class="version">v0.1</span></h1>
        <img class="login-form__logo" src="images/svg/logo.svg" alt="Grupo Car">
        <form class="login-form__form" @submit.prevent="login">
            <div class="login-form__error" v-if="errors.length">
                <b>Error al inciar sessión:</b>
                <ul>
                    <li v-for="error in errors" class="login-form__error-message">{{ error }}</li>
                </ul>
            </div>
            <input type="email" class="login-form__input" placeholder="Correo corporativo" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" v-model="email">
            <input type="password" class="login-form__input" placeholder="Contraseña" required v-model="password">
            <input type="submit" class="login-form__submit" value="Ingresar">
        </form>
    </div>
</template>

<script>
    export default {
        name: "login-form",
        methods: {
            login: function (event) {
                if(this.email === '' && this.password === '') {
                    this.errors.push('Existen campos vacíos.');
                    return;
                } else {
                    this.$store.dispatch('fetchUser', {
                        email: this.email,
                        password: this.password
                    });
                    this.$router.push('resumen');
                }
            }
        },
        data: function () {
            return {
                errors: [],
                email: '',
                password: ''
            }
        }
    }
</script>

<style scoped lang="scss">
    @import "~ed-grid";

    .login-form {
        @include edContainer;
        @include flexColumn;
        @include crossCenter;
        padding: 30px;
        text-align: center;
        max-width: 500px;
        border: 1px solid gray;
        border-radius: 3px;

        &__title {
            @include edItem();
            font-size: 20px;
        }

        &__logo {
            @include edItem();
            margin: 16px 0 16px 0;
            height: 150px;
        }

        &__form {
            @include edItem();
            @include edContainer;
            @include flexColumn;
        }
        &__input {
            @include edItem();
            border-radius: 3px;
            border: 1px solid gray;
            height: 25px;
            margin-top: 5px;
        }
        &__submit {
            @include edItem();
            border-radius: 3px;
            border: 1px solid gray;
            height: 25px;
            margin-top: 5px;
        }
    }

    .version {
        font-size: 12px;
        color: lightgray;
    }
</style>