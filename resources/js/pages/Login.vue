<template>
    <form class="form">
        <div class="form-top">
            <h1 class="form-top_h1">Войти</h1>
        </div>
        <div class="form-body">
            <text-field v-model="data.email" label="Email" name="email"></text-field>
            <password-field v-model="data.password" label="Пароль" name="password"></password-field>
        </div>
        <div class="form-bottom">
            <button @click.prevent="login" class="btn">Войти</button>
            <router-link class="link" :to="{name: 'registration'}">Регистрация</router-link>
        </div>
    </form>
</template>

<script>
import textField from "../components/forms/text-field.vue";
import passwordField from "../components/forms/password-field.vue";
export default {
    name: "Login",
    components: {
        textField, passwordField
    },
    data() {
        return {
            data: {
                email: '',
                password: ''
            }
        }
    },
    methods: {
        login() {
            this.$store.dispatch('login', this.data);
        }
    }
}
</script>

<style scoped>

</style>
