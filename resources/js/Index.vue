<template>
    <component :is="layout">
        <router-view></router-view>
    </component>
</template>

<script>
import MainLayout from "./layouts/MainLayout.vue";
import EmptyLayout from "./layouts/EmptyLayout.vue";
export default {
    name: "Index",
    computed: {
        layout() {
            return this.$route.meta.layout + "Layout" || "EmptyLayout"
        }
    },
    components: {
        MainLayout, EmptyLayout
    }
}
</script>

<style scoped>

</style>
