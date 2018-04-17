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
        margin: auto;
        width: 80%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>