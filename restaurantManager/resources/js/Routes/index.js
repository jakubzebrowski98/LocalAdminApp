import { createRouter, createWebHistory } from "vue-router";

import App from "../components/App"

const routes  = [
    {
        path: '/',
        name: 'Ingredients.index',
        component: App,
    }
]

export default createRouter({
    history: createWebHistory(),
    routes 
})