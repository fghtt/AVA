<template>
    <form class="form">
        <div class="form-top">
            <h1 class="form-top_h1">Войти</h1>
        </div>
        <div class="form-body">
            <text-field v-model="data.name" label="Имя" name="name"></text-field>
            <text-field v-model="data.email" label="Email" name="email"></text-field>
            <text-field v-model="data.password" label="Пароль" name="password"></text-field>
            <text-field v-model="data.password_confirmation"
                        label="Подтвердите пароль" name="password_confirmation"></text-field>
        </div>
        <div class="form-bottom">
            <button @click.prevent="register" class="btn">Зарегистрироваться</button>
            <router-link class="link" :to="{name: 'login'}">Вход</router-link>
        </div>
    </form>
</template>

<script>
import textField from "../components/forms/text-field.vue";

export default {
    name: "Registration",
    components: {
        textField
    },
    data() {
        return {
            data: {
                name: '',
                email: '',
                password: '',
                password_confirmation: ''
            }
        }
    },
    methods: {
        register() {
            axios.get('/sanctum/csrf-cookie').then(res => {
                axios.post('/register', this.data)
                    .then(res => {
                        this.$router.push({name: 'index'})
                    })
            })
        }
    }
}
</script>

<style scoped>

</style>
