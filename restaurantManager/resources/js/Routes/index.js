import { createRouter, createWebHistory } from "vue-router";

import IngredientsPage from "../components/IngredientsPage/IngredientsPage"
import Home from "../components/homePage"

const routes  = [
    {
        path: '/lista-skladnikow',
        name: 'Ingredients.index',
        component: IngredientsPage,
    },
    {
        path: '/home',
        name: 'home',
        component: Home,
    }
]

export default createRouter({
    history: createWebHistory(),
    routes 
})