import { createStore } from 'vuex';
import createPersistedState from "vuex-plugin-persistedstate";

const store = createStore({
  plugins: [createPersistedState()],
  state: {
    userAuth: null
  },
  mutations: {
    setAuth (state, auth) {
      state.userAuth = auth;
    },
  },
  getters: {
    getAuth (state) {
      return state.userAuth;
    }
  }
});

export default store;