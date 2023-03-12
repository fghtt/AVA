<template>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="title">
                    <h1>AVA</h1>
                </div>
                <div class="search">
                    <input class="search-input" type="text" placeholder="Поиск">
                </div>
                <div class="notifications">
                    <a href="#"><i class="fa fa-bell"></i></a>
                </div>
                <div class="account">
                    <span>Your Name</span>
                </div>
                <div class="logout">
                    <a class="link" href="#" @click.prevent="logout">Выйти</a>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header",
    methods: {
        logout() {
            axios.post('/logout')
                .then(res => {
                    this.$router.push({name: 'login'})
                })
        }
    }
}
</script>

<style scoped>

</style>
