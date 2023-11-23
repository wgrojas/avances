require('./bootstrap');
import Vue from 'vue'
window.Vue = Vue;

import App from './components/App.vue';

//importamos Axios
import VueAxios from 'vue-axios';
import axios from 'axios';

//Importamos y configuramos el Vue-router
import VueRouter from 'vue-router';
import {routes} from './routes';

 
Vue.use(VueRouter);
Vue.use(VueAxios, axios);
// axios.defaults.baseURL='http://localhost:8000/'
 
const router = new VueRouter({
    mode: 'history',
    routes: routes
});
 
//finalmente, definimos nuestra app de Vue
const app = new Vue({
    el: '#app',
    router: router,
    render: h => h(App),
});
