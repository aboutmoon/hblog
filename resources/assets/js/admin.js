
require('./bootstrap');

window.Vue = require('vue');

Vue.component(
    'auth',
    require('./components/auth/auth')
);

const app = new Vue({
    el: '#admin'
});