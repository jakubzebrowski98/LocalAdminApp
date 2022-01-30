<template>
<div class="page">
    <div class="d-flex">
        <div class="col-3 shadow">
            <div class="card text-center py-3 rounded-0 border-end-0 shadow">
                <div class="navbar-brand-text">Restaurant <sup> APP</sup></div>
            </div>
            <div class="categoryBox">
                <div v-for="Category in Categories" class="card text-center border-2 py-3 rounded-0">
                    <router-link :to="{ name: 'restaurant.menu', params: { type: type, Category: Category.id } }"
                        class="no-style-link text-dark">
                        <h2 class="display-6">{{ Category.Name }}</h2>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="col-9" style="z-index: index 100;">
            <div class="card text-center py-3 rounded-0 border-start-0 shadow">
                <div class="navbar-brand-text">Wybierz coś dla siebie</div>
            </div>
            <div class="col-md-4" v-for="meals in MenuByCategory">
                <h3>{{ meals.Name }}</h3>
            </div>
        </div>
    </div>
</div>
    
</template>

<script>

    import useMenu from "../../../composables/Menu"
    import useCategory from "../../../composables/Category"
    import { onMounted, reactive, ref} from "vue"
    
    export default {
        props: {
            type: {
                required: true,
                type: String
            },
            Category: {
                required: true,
                type: String
            },
        },
        setup() {
            const { getMenu, getMenuByCategory, Menu, MenuByCategory } = useMenu()
            const { getCategories, Categories } = useCategory()

            onMounted(getCategories)
            onMounted(getMenuByCategory(props.Category))

            return {
                Menu,
                Categories,
                MenuByCategory
            }
        }
    }
</script>

<style>
.page {
    height:100vh;
    width: 100vw;
}
.categoryBox{
    margin-top: -10vh;
    height: 100.5vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: auto;
    border-right: 1px solid green;
}
</style>