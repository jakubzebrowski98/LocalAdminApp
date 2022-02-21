import { createRouter, createWebHistory } from "vue-router";

import IngredientsPage from "../Views/Ingredients/IngredientsPage"
import IngredientEdit from "../views/Ingredients/Edit/IngredientsEdit"
import MealsPage from "../views/Meals/MealsPage"
import MealEdit from "../views/Meals/Edit/MealEdit"
import MenuPage from "../views/Menu/MenuPage"
import OrderPage from "../views/Orders/OrdersPage"
import KitchenPage from "../views/Kitchen/KitchenPage"

import Home from "../views/Home/homePage"


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
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/lista-zamowien',
        name: 'order.index',
        component: OrderPage,
    },
    {
        path: '/kuchnia/panel',
        name: 'kitchen.index',
        component: KitchenPage,
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router