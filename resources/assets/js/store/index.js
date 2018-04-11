import Vue from 'vue';
import Vuex from 'vuex';

import actions from './actions';
import mutations from './mutations';

Vue.use(Vuex);

const store = new Vuex.Store({
    state:{
        user: null,
        token: null
    },
    getters: {
        getUser: state => state.user
    },
    mutations,
    actions
});

export default store;