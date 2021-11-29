import { createRouter, createWebHistory } from "vue-router";

import App from "../components/IngredientsPage/IngredientsPage"

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