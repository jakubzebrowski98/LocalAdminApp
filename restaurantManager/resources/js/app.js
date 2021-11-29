

require('./bootstrap');

import { createApp } from 'vue';
import router from "./Routes/"
import ListIngredients from "./components/IngredientsPage/IngredientsPage"

createApp({
    components: {
        ListIngredients
    }
}).use(router).mount('#app')
