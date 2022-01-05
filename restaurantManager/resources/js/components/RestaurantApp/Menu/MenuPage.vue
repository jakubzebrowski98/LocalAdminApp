<template>
    <div>
        <div class="row">
            <div class="col-3">
                <div v-for="menu in Menu" class="card border-2 py-3 rounded-0">
                    <h2 class="display-6">{{ menu.Name }}</h2>
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