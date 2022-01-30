import { createRouter, createWebHistory } from "vue-router";

import IngredientsPage from "../components/IngredientsPage/ingredients/IngredientsPage"
import IngredientEdit from "../components/IngredientsPage/ingredients/common/IngredientsEdit"
import MealsPage from "../components/IngredientsPage/meals/MealsPage"
import MealEdit from "../components/IngredientsPage/meals/common/MealEdit"
import MenuPage from "../components/MenuPage/MenuPage"

import Home from "../components/homePage"


const routes  = [
    {
        path: '/lista-skladnikow',
        name: 'Ingredients.index',
        component:
            IngredientsPage,
    },
    {
        path: '/lista-skladnikow/:IngId/edytuj',
        name: 'Ingredients.edit',
        component: IngredientEdit,
        props: true
    },
    {
        path: '/lista-posilkow',
        name: 'meals.index',
        component: MealsPage,
    },
    {
        path: '/lista-posilkow/:MealId/edytuj',
        name: 'meals.edit',
        component: MealEdit,
        props: true
    },
    {
        path: '/lista-kategori',
        name: 'category.index',
        component: MealsPage,
    },
    {
        path: '/lista-menu',
        name: 'menu.index',
        component: MenuPage,
    },
    {
        path: '/home',
        name: 'home',
        component: Home,
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router