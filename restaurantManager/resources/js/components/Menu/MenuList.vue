<template>
<div class="card shadow-lg mt-3">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <h2 class="dasplay-6">Lista Menu</h2>
            </div>
            <div class="col">
                <!-- <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-success btn-sm" @click="showEditMenu()">
                        <i class="fas fa-cog"></i>
                    </button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="card-body table-responsive" :style="{display: isActive ? 'block' : 'none'}">
        <table class="table table-striped table-hover table-sm">
            <thead>    
                <tr>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Kategoria</th>
                    <th scope="col">Cena</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="menu in Menu">
                    <td>
                       {{ menu.Name }}
                    </td>
                    <td>
                       {{ menu.CategoryName }}
                    </td>
                    <td>
                       {{ menu.Price }} zł
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <form v-on:submit.prevent="saveToMenu">
        <div class="card-body table-responsive" :style="{display: !isActive ? 'block' : 'none'}">
            <table class="table table-striped table-hover table-sm mb-2">
                <thead>    
                    <tr>
                        <th >Nazwa</th>
                        <th >Cena</th>
                        <th class="col-ms-1 text-right me-2">Dodaj</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="meal in meals">
                        <td>
                           {{ meal.Name }}
                        </td>
                        <td>
                           {{ meal.Price }} zł
                        </td>
                        <td class=" d-flex justify-content-end pe-2">
                            <div class="form-check">
                                <input class="form-check-input" :checked="meal.Status == 1" type="checkbox" v-model="form.MealId[meal.MealId]">
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success btn-sm">Zapisz</button>
            </div>
        </div>
    </form>
</div>
    
</template>

<script>

    import useMenu from "../../composables/Menu"
    import useMeals from "../../composables/Meals"
    import { onMounted, reactive, ref} from "vue"
    
    export default {
        setup() {
            const { getMenu, Menu, updateMenu, errors } = useMenu()
            const { meals, getMeals } = useMeals()

            const isActive = ref(true);
            
            const form = reactive({
                MealId: []
            })

            const showEditMenu = () => {
                return isActive.value = !isActive.value;
            }

            const saveToMenu = async () => {
                await updateMenu({...form})
            }

            onMounted(getMenu)
            onMounted(getMeals)

            return {
                Menu,
                meals,
                isActive,
                showEditMenu,
                form,
                saveToMenu
            }
        }
    }
</script>