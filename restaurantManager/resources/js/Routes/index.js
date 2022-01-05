import { createRouter, createWebHistory } from "vue-router";

import IngredientsPage from "../components/IngredientsPage/ingredients/IngredientsPage"
import IngredientEdit from "../components/IngredientsPage/ingredients/common/IngredientsEdit"
import MealsPage from "../components/IngredientsPage/meals/MealsPage"
import MealEdit from "../components/IngredientsPage/meals/common/MealEdit"
import MenuPage from "../components/MenuPage/MenuPage"

import Home from "../components/homePage"

import RestaurantApp from "../components/RestaurantApp/WelcomePage"
import orderMenu from "../components/RestaurantApp/Menu/MenuPage"


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
        path: '/lista-menu',
        name: 'menu.index',
        component: MenuPage,
    },
    {
        path: '/home',
        name: 'home',
        component: Home,
    },
    {
        path: '/restaurant-app/home',
        name: 'restaurant-app',
        component: RestaurantApp,
    },
    {
        path: '/restaurant-app/home/menu/:type',
        name: 'restaurant.menu',
        component: orderMenu,
        props: true,
    },
]

export default createRouter({
    history: createWebHistory(),
    routes 
})