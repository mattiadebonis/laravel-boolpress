window.Vue = require('vue');
import App from './App.vue';
import router from './router'


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = new Vue(
    {
        el: '#root',
        render: h=> h(App),
        router
    }
);

