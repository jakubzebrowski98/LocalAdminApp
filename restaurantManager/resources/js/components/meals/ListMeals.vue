<template>
    <div class="card shadow-lg mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h1 class="dasplay-6">Lista posiłków</h1>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#AddMealModal">
                          <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm" id="MenuTable">
                <thead>    
                    <tr>
                        <th class="col-sm-4" scope="col">Nazwa</th>
                        <th class="col-sm-3" scope="col">Cena</th>
                        <th class="col-sm-3" scope="col">Kategoria</th>
                        <th class="col-sm-3" scope="col">Status</th>
                        <th></th>
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
                        <td>
                           {{ meal.Category }} 
                        </td>
                        <td>
                           {{ meal.StatusName }}
                        </td>
                        <td class="d-flex justify-content-end">
                            <router-link class="btn btn-secondary btn-sm text-light mx-1" :to="{ name: 'meals.edit', params: { MealId: meal.MealId } }">
                                <i class="fas fa-edit"></i>
                            </router-link>
                            <button class="btn btn-danger btn-sm text-light mx-1" @click="deleteMeal(meal.MealId)"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade" id="AddMealModal" tabindex="-1" aria-labelledby="AddMealModallabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form @submit.stop.prevent="saveMeal">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddMealModallabel">Dodanie składnika</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" v-model="form.Name" id="Name" placeholder="Nazwa">
                                    <label for="Name">Nazwa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" v-model="form.Price" id="Price" placeholder="Cena">
                                    <label for="Price">Cena</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect" v-model="form.Category">
                                        <option value="">--Wybierz--</option>
                                        <option v-for="Category in Categories" v-bind:value="Category.id">{{ Category.Name }}</option>
                                    </select>
                                  <label for="floatingSelect">Kategoria</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="Status" v-model="form.Status">
                                        <option value="">-- Wybierz --</option>
                                        <option value="1">Aktywny</option>
                                        <option value="0">Nieaktywny</option>
                                        <option value="2">Brak na stanie</option>
                                    </select>
                                    <label for="Status">Status</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-success" >Dodaj</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import useMeals from "../../composables/Meals.js"
    import useCategory from "../../composables/Category";
    import { onMounted, reactive } from "vue"
    
    export default {
        setup() {
            const { meals, getMeals, getThisMeal, storeMeal, meal, errors } = useMeals()
            const { getCategories, Categories } = useCategory()

            const form = reactive({
                Name: '',
                Status: '',
                Price: '',
                Category: '',
            })

            onMounted(getCategories)
            onMounted(getMeals)

            const saveMeal = async () => {
                await storeMeal({...form});
                $('#AddMealModal').modal('hide');
                await getMeals();
            }

            const deleteMeal = async (MealId) => {
                if(!window.confirm('Czy napewno usunąć tą pozycję?')){
                    return
                }
                
                await axios.delete('/api/meals/' + MealId);
                await getMeals();
            }

            onMounted(getMeals)

            return {
                meals,
                errors,
                deleteMeal,
                saveMeal,
                form,
                Categories
            }
        }
    }
</script>