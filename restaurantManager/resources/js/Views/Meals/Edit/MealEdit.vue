<template>
    <div class="">
        <toolbar />
        <div class="row mt-3">
            <div class="col-md-6 px-2">
                <div class="card card-body shadow-lg mb-3">
                    <h1>Edytuj posiłek</h1>
                    <form v-on:submit.prevent="saveMeal">
                        <div class="form-floating mb-3">
                            <input type="text" id="Name" class="form-control" name="Name" v-model="meal.Name">
                            <label for="Name">Nazwa</label>
                        </div>
                        <div class="form-floating mb-3">
                          <textarea class="form-control" style="height:150px" v-model="meal.Description" name="Description" placeholder="Opis" id="Description"></textarea>
                          <label for="Description">Opis</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="Price" class="form-control" name="Price" v-model="meal.Price">
                            <label for="Price">Cena</label>
                        </div>
                        <div class="form-floating pb-3">
                            <select class="form-select" id="floatingSelect" v-model="meal.Category">
                                <option value="0">--Wybierz--</option>
                                <option v-for="Category in Categories" v-bind:value="Category.id">{{ Category.Name }}</option>
                            </select>
                          <label for="floatingSelect">Kategoria</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="Status" v-model="meal.Status">
                                <option value="">-- Wybierz --</option>
                                <option value="1">Aktywny</option>
                                <option value="0">Nieaktywny</option>
                                <option value="2">Brak na stanie</option>
                            </select>
                            <label for="Status">Status</label>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-success">Zapisz</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 mb-3 px-2">
                
                <div class="card card-body shadow-lg">
                    <h1 class="dasplay-6">Lista składników</h1>
                    <table class="table table-striped table-hover table-sm mb-0">
                        <thead>    
                            <tr>
                                <th scope="col">Składnik</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="mealIngredient in mealsIngredients" for="belongsTo">
                                <td>
                                    {{ mealIngredient.IngName }}
                                </td>
                                <td class=" d-flex justify-content-end pe-2">
                                    <button class="btn btn-sm p-0" @click="deleteMealIngredient(mealIngredient.MealIngId)"><i class="fa fa-minus"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="col d-flex justify-content-end p-0">
                        <button type="button" class="btn px-2 btn-sm" data-bs-toggle="collapse" data-bs-target="#AddIngForm"><i class="fa fa-plus"></i></button>
                    </div>
                    <div class="collapse" id="AddIngForm">
                        <form v-on:change="saveOnChange" method="post">
                            <div class="form-floating">
                                <select v-model="form.IngId" class="form-select" id="floatingSelect">
                                    <option value="" selected>--wybierz--</option>
                                    <option v-for="ingredient in ingredients" v-bind:value="ingredient.IngId">
                                        {{ingredient.IngName}}
                                    </option>
                                </select>
                                <label for="floatingSelect">Dodaj skłdanik</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import toolbar from "../../../components/common/toolbar"
import { onMounted, reactive, ref } from "vue"
import useCategory from "../../../composables/Category";
import useMeals from "../../../composables/Meals.js";
import useIngredients from "../../../composables/ingredients";
import useMealsIngredients from "../../../composables/MealsIngredients";

export default{
    props: {
        MealId: {
            required: true,
            type: String
        }
    },
    components: {
        toolbar 
    },
    setup(props) {
        const { getCategories, Categories } = useCategory()
        const { getThisMeal, updateMeal, meal, errors } = useMeals()
        const { getIng, ingredients } = useIngredients()
        const { getMealsIngredients, mealsIngredients, storeMealsIngredients, destroyMealsIngredients } = useMealsIngredients()

        const form = reactive({
            IngId: '',
            MealId: props.MealId,
        })


        onMounted(getCategories)
        onMounted(getIng)
        onMounted(getMealsIngredients(props.MealId))
        onMounted(getThisMeal(props.MealId))

        const saveMeal = async () => {
            await updateMeal(props.MealId)
        }

        const saveOnChange = async () => {
            await storeMealsIngredients({...form})
            await getMealsIngredients(props.MealId)
            form.IngId = '';
        }

        const deleteMealIngredient = async (MealIngId) => {
            await destroyMealsIngredients(MealIngId)
            await getMealsIngredients(props.MealId)
        }
        
        return {
            meal,
            errors,
            saveMeal,
            ingredients,
            mealsIngredients,
            saveOnChange,
            deleteMealIngredient,
            form,
            Categories,
        }
    }
}

</script>

<style>
.mx-n3{
    margin: 0 -1rem;
}
</style>