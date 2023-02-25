import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import Index from "./components/Index.vue";

app.component('index', Index);

app.mount('#app');
