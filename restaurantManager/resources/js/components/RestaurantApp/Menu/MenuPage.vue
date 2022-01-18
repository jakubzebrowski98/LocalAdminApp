<template>
<div class="page">
    <div class="row">
        <div class="col-3">
            <div class="card text-center text-light bg-dark border-2 py-3 rounded-0">
                <h2 class="display-6">Wybierz</h2>
            </div>
            <div class="categoryBox">
                <div v-for="menu in Menu" class="card text-center border-2 py-3 rounded-0">
                    <h2 class="display-6">{{ menu.Name }}</h2>
                </div>
            </div>
        </div>
        <div class="col-9 bg-success">
        </div>
    </div>
</div>
    
</template>

<script>

    import useMenu from "../../../composables/Menu"
    import { onMounted, reactive, ref} from "vue"
    
    export default {
        setup() {
            const { getMenu, Menu } = useMenu()

            onMounted(getMenu)

            return {
                Menu,
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
    height: 80vh;
    overflow: auto;
}
</style>