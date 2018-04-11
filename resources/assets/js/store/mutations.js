const mutations = {
    FETCH_USER (state, payload) {
        console.log(payload.user);
        state.user = payload.user;
        state.token = payload.token;
    }
};

export default mutations;