import './bootstrap';

import { createApp } from 'vue';
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router';
import routes from './routes';

const app = createApp({});

const router = createRouter({
    history: createWebHistory(),
    routes
})

app.component('app', App);
app.use(router)
app.mount('#app');