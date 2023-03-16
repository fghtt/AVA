<template>
    <Header></Header>
    <router-view></router-view>
</template>

<script>
import Header from "../components/Header.vue";
export default {
    name: "MainLayout",
    mounted() {

    },
    components: {
        Header
    }
}
</script>

<style scoped>

</style>
