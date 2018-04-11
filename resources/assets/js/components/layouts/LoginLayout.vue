<template>
    <div class="login-layout">
        <login-form/>
    </div>

</template>

<script>
    import LoginForm from '../LoginForm'
    export default {
        name: "login-layout",
        components: {LoginForm}
    }
</script>

<style scoped lang="scss">
    @import "~ed-grid";

    .login-layout {
        height: 100%;
        @include edContainer;
        @include mainCenter;
        @include crossCenter;

    }
</style>