
require('./bootstrap');

import { createApp } from 'vue';
import router from "./Routes/"

createApp({
    components: {
        
    }
}).use(router).mount('#app')
