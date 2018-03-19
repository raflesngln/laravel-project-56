require('./bootstrap');

import Vue from 'vue';

import VueRouter from 'vue-router';
Vue.use(VueRouter);


import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);

import App from './components/companies/CompaniesCreate.vue';
import ContactForm from './components/companies/ContactForm.vue';
import ContactView from './components/companies/ContactView.vue';
import ContactEdit from './components/companies/ContactEdit.vue';

const routes = [
    {
      name: 'ContactForm',
      path: '/items/create',
      component: ContactForm
    },
    {
          name: 'ContactView',
          path: '/',
          component: ContactView
    },
    {
        name: 'ContactEdit',
        path: '/edit/:id',
        component: ContactEdit
     }
  ];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
// new Vue(Vue.util.extend({ router })).$mount('#app');