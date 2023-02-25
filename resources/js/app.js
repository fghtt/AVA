import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import Index from "./components/Index.vue";
import Header from "./components/Header.vue";

app.component('index', Index);
app.component('Header', Header);

app.mount('#app');
