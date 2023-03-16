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
                    <span>{{ user.name }}</span>
                </div>
                <Logout></Logout>
            </div>
        </div>
    </header>
</template>

<script>
import Logout from "./Logout.vue";

export default {
    name: "Header",
    data() {
        return {
            user: {}
        }
    },
    mounted() {
        this.$store.dispatch('setUser')
        this.user = this.$store.getters.user
    },
    components: {
        Logout
    }
}
</script>

<style scoped>

</style>
