import './bootstrap';

import {createApp} from 'vue';
import App from './App.vue'
import {createRouter, createWebHistory} from 'vue-router';
import routes from './routes';

import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

const app = createApp({});

const router = createRouter({
    history: createWebHistory(), routes
})

app.component('app', App);
app.component('QuillEditor', QuillEditor)
app.use(router)
app.mount('#app');
