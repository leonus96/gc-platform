require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import App from './App.vue';

import store from './store/index';

import 'ed-grid/ed-grid.scss';

Vue.use(VueRouter);
const router = new VueRouter({routes});

const app = new Vue({
    el: '#app',
    store,
    router,
    components: {App},
    template: '<App/>',

});

