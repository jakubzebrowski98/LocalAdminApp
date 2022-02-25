
require('./bootstrap');

import { createApp } from 'vue';
import router from "./Routes/"
import basicpage from './Views/BasicPage'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

createApp({
    components: {
        basicpage
    }
}).component('font-awesome-icon', FontAwesomeIcon).use(router).mount('#app')
