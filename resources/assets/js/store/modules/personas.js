import axios from 'axios';
import api from '../../api.json';

const personaStore = {
    state: {
        personas: []
    },
    getters: {
        getPersonas: state => state.personas
    },
    mutations: {
        FETCH(state, personas) {
            state.personas = personas
        }
    },
    actions: {
        fetch({commit}) {
            return axios.get(`${api.personas}`)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        deletePersona({}, id) {
            axios.delete(`${api.personas}/${id}`)
                .then(() => this.dispatch('fetch'))
                .catch();
        },
        editPersona({}, persona) {
            axios.put(`${api.personas}/${persona.id}`, {
                dni: persona.id,
                nombres: persona.nombres,
                apellidos: persona.apellidos,
                f_nac: persona.f_nac,
                fv_brevete: persona.fv_brevete,
                regiom: persona.region,
                ciudad: persona.ciudad,
                direccion: persona.direccion,
                email: persona.email,
                telefono: persona.telefono,
                celular: persona.celular,
                id_empresa: persona.id_empresa,
                ocupacion: persona.ocupacion,
                como_llego: persona.como_llego,
                descripcion: persona.descripcion,
                id_referido: persona.id_referido
            });
        },
        addPersona({}, persona) {
            axios.post(`${api.personas}/${persona.id}`, {
                id: 0,
                dni: persona.id,
                nombres: persona.nombres,
                apellidos: persona.apellidos,
                f_nac: persona.f_nac,
                fv_brevete: persona.fv_brevete,
                regiom: persona.region,
                ciudad: persona.ciudad,
                direccion: persona.direccion,
                email: persona.email,
                telefono: persona.telefono,
                celular: persona.celular,
                id_empresa: persona.id_empresa,
                ocupacion: persona.ocupacion,
                como_llego: persona.como_llego,
                descripcion: persona.descripcion,
                id_referido: persona.id_referido
            });
        }
    },
};

export default personaStore;