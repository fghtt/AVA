import './bootstrap';
import { createApp } from 'vue';
import router from "./router/router";
import store from "./store";

axios.defaults.withCredentials = true;

const app = createApp({});

import Index from "./Index.vue";

app.component('index', Index);

app.use(router)
app.use(store)
app.mount('#app');
