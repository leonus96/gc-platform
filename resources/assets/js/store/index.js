import Vue from 'vue';
import Vuex from 'vuex';

import actions from './actions';
import mutations from './mutations';

import personaStore from './modules/personas';

Vue.use(Vuex);

const store = new Vuex.Store({
    state:{
        user: null,
        token: null
    },
    getters: {
        getUser: state => state.user,
        getToken: state => state.token
    },
    mutations,
    actions,
    modules: {
        personaStore: personaStore
    }
});

export default store;