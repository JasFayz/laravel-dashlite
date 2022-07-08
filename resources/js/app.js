import './bootstrap';

import jQuery from 'jquery';
window.jQuery = window.$ = jQuery;
import {createApp} from 'vue';
import App from './App.vue'
import {createRouter, createWebHistory} from 'vue-router';
import routes from './routes';

// import Select2 from 'vue3-select2-component';
import 'bootstrap';
import Pagination from 'v-pagination-3';
import {QuillEditor} from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

const app = createApp({});

const router = createRouter({
    history: createWebHistory(), routes
})



// app.component('select2', Select2)
app.component('pagination', Pagination)
app.component('app', App);
app.component('QuillEditor', QuillEditor)
app.use(router)
app.mount('#app');
