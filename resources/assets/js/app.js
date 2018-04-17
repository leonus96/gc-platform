require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';
import App from './App.vue';

import store from './store/index';

// EDgrid:
import 'ed-grid/ed-grid.scss';

// vCalendar
import VCalendar from 'v-calendar';
import 'v-calendar/lib/v-calendar.min.css';
Vue.use(VCalendar);

Vue.use(VueRouter);
const router = new VueRouter({routes});

const app = new Vue({
    el: '#app',
    store,
    router,
    components: {App},
    template: '<App/>',

});

