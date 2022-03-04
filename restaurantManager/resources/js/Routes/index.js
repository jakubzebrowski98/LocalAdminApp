import { createRouter, createWebHistory } from "vue-router";

import IngredientsPage from "../Views/Ingredients/IngredientsPage"
import IngredientEdit from "../views/Ingredients/Edit/IngredientsEdit"
import MealsPage from "../views/Meals/MealsPage"
import MealEdit from "../views/Meals/Edit/MealEdit"
import MenuPage from "../views/Menu/MenuPage"
import OrderPage from "../views/Orders/OrdersPage"
import OrderDetails from "../views/Orders/Details/DetailsPage"
import KitchenPage from "../views/Kitchen/KitchenPage"
import CollectPanel from "../views/ToCollect/CollectPanel"
import StatisticsOrder from "../views/Statistics/MainPage"

import Home from "../views/Home/homePage"


const routes  = [
    {
        path: '/lista-skladnikow',
        name: 'Ingredients.index',
        component:
            IngredientsPage,
    },
    {
        path: '/edytuj-skladnik-:IngId',
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
        path: '/edytuj-posilek-:MealId',
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
        path: '/kuchnia',
        name: 'kitchen.index',
        component: KitchenPage,
    },
    {
        path: '/wydawka',
        name: 'toCollect',
        component: CollectPanel,
    },
    {
        path: '/szczegoly-zamowienia-:OrderId',
        name: 'OrderDetails',
        component: OrderDetails,
        props: true
    },
    {
        path: '/statystyki-zamowien',
        name: 'StatisticsOrder',
        component: StatisticsOrder,
    },
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
  })
  
  export default router