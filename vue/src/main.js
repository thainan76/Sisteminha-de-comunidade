import { createApp } from 'vue';
import App from './App.vue';
import router from "./router.js";
import store from "./components/store/storeUser.js";
//import axios from 'axios';
import VueAxios from 'vue-axios';
import Notifications from '@kyvg/vue3-notification'
import moment from 'moment';
//import VueMoment from 'vue-moment';
import interceptor from './http.js';
import VueTheMask from 'vue-the-mask';
import mitt from 'mitt';
import CKEditor from '@ckeditor/ckeditor5-vue';


const emitter = mitt();

// Load Locales ('en' comes loaded by default)
require('moment/locale/pt-br');

//registerInterceptor();

const app = createApp(App);
app.use(router);
app.use(store);
//app.use(VueAxios, axios);
app.use(VueAxios, interceptor);
app.use(VueTheMask);
app.use(Notifications);
app.use( CKEditor );

app.config.globalProperties.$filters = {
    moment(date) {
        return moment(date)
    },
};

app.config.globalProperties.emitter = emitter;

app.mount('#kt_body');