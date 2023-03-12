<template>
<form class="form">
    <div class="form-top">
        <h1 class="form-top_h1">Войти</h1>
    </div>
    <div class="form-body">
        <text-field v-model="data.name" label="Email" name="name"></text-field>
        <text-field v-model="data.password" label="Пароль" name="name"></text-field>
    </div>
    <div class="form-bottom">
        <button @click.prevent="login" class="btn">Войти</button>
        <router-link class="link" :to="{name: 'registration'}">Регистрация</router-link>
    </div>
</form>
</template>

<script>
import textField from "../components/forms/text-field.vue";

export default {
    name: "Login",
    components: {
        textField
    },
    data() {
        return {
            data: {
                name: '',
                password: ''
            }
        }
    },
    methods: {
        login() {
            axios.get('/sanctum/csrf-cookie').then(res => {
                axios.post('/login', {
                    data
                })
            })
        }
    }
}
</script>

<style scoped>

</style>
