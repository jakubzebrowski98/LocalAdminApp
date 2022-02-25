<template>
    <div class="card shadow-lg mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2 class="dasplay-6">Lista składników</h2>
                </div>
                <div class="col">
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#AddIngModal">
                          <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm">
                <thead>    
                    <tr>
                        <th scope="col">Składnik</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="ingredient in ingredients" v-bind:key="ingredient.IngId">
                        <td>
                           {{ ingredient.IngName }}
                        </td>
                        <td>
                           {{ ingredient.StatusName }}
                        </td>
                        <td class="d-flex justify-content-end">
                            <router-link class="btn btn-secondary btn-sm text-light mx-1" :to="{ name: 'Ingredients.edit', params: { IngId: ingredient.IngId } }">
                                <i class="fas fa-edit"></i>
                            </router-link>
                            <button class="btn btn-danger btn-sm text-light mx-1" @click="deleteIng(ingredient.IngId)"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="modal fade" id="AddIngModal" tabindex="-1" aria-labelledby="AddIngModallabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form @submit.stop.prevent="saveIng">
                            <div class="modal-header">
                                <h5 class="modal-title" id="AddIngModallabel">Dodanie składnika</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" v-model="form.IngName" id="name" placeholder="Nazwa">
                                    <label for="name">Nazwa</label>
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

    import useIngredients from "../../../composables/ingredients";
    import { onMounted, reactive } from "vue";
    
    export default {

        setup() {
            const { ingredients, ingredient, getIng, getThisIng , destroyIng, errors, storeIng } = useIngredients()

            onMounted(getIng)
        
            const form = reactive({
                IngName: '',
            })

            const saveIng = async () => {
                await storeIng({...form});
                $('#AddIngModal').modal('hide');
                await getIng();
            }

            const deleteIng = async (IngId) => {
                if(!window.confirm('Czy napewno usunąć ten składnik?')){
                    return
                }

                await destroyIng(IngId);
                await getIng();
            }

            onMounted(getIng)

            return {
                ingredients,
                deleteIng,
                form,
                errors,
                saveIng,
                ingredient,
            }
        }
    }
</script>
