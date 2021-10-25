require('./bootstrap');
import Vue from 'vue';
import App from './vue/app.vue';
require("bootstrap-css-only/css/bootstrap.min.css");
require("mdbvue/lib/css/mdb.min.css");
require("@fortawesome/fontawesome-free/css/all.min.css");

window.Vue = require('vue').default;
const app = new Vue({
    el: '#contactapp',
    components: { App }
});