<template>
    <div class="logout">
        <a class="link" href="#" @click.prevent="logout">Выйти</a>
    </div>
</template>

<script>
export default {
    name: "Logout",
    methods: {
        logout() {
            axios.post('/logout')
                .then(res => {
                    this.$router.push({name: 'login'})
                    localStorage.removeItem('x-xsrf-token')
                })
        }
    }
}
</script>

<style scoped>

</style>
