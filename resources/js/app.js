import './bootstrap';
import { createApp } from 'vue';
import {router} from "./router/router";

axios.defaults.withCredentials = true;

const app = createApp({});

import Index from "./Index.vue";

app.component('index', Index);

app.use(router)
app.mount('#app');
