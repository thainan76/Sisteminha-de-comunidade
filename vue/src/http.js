import axios from 'axios';
import storeUser from '@/components/store/storeUser.js';
let api = 'http://localhost:8000/api/';
//let api = 'http://154.56.40.58:8080/api/';
import router from "./router.js";

const http = axios.create({
  baseURL: api
});

http.interceptors.request.use((config) => {
  const token = storeUser.getters.userAuth;

  if (token) {
    config.headers.Authorization = `Bearer ${token.authorization.token}`
  }

  return config;
}, (err) => {
  return Promise.reject(err)
});

http.interceptors.response.use((response) => {
  return response;
}, (error) => {
  if (error.response != undefined) {
    if (error.response.status === 401) {
      storeUser.commit('setAuth', null);
      window.location = '/login';
    }

    if (error.response.status === 403) {
      console.log('Error403');
      router.push({ name: 'Error-403'});
    }
  }

  return Promise.reject(error)
});

export default http;
