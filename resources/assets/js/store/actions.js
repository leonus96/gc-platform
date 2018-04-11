import axios from "axios/index";
import api from "../api.json"
const actions = {
    fetchUser ({commit}, payload) {
        return axios.post(`${api.auth}/login`, {
            email: payload.email,
            password: payload.password
        })
            .then(response => commit('FETCH_USER', response.data))
            .catch(error => console.log(error.message));
    }
};

export default actions;