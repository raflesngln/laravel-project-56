
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';
import Vuex from 'vuex'
window.Vue.use(VueRouter);
Vue.use(Vuex)

// coding line start here
import App from './components/vuejs/add_form.vue';
import list_data from './components/vuejs/list_data.vue';

const routes = [
    {
    path: '/',
        components: {
            Index: App,
            list: list_data
            }
    },
    {path: '/admin/list_data', component: list_data, name: 'list_data'},
    {path: '/admin/edit/:id', component: App, name: 'editCompany'},
]

const router = new VueRouter({ routes })

const app = new Vue({ router }).$mount('#app')
