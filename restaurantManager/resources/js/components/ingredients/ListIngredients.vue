<template>
<div class="table-responsive px-3">
    <table class="table table-striped table-hover table-sm">
        <thead>    
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Składnik</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="ingredient in ingredients" :key="ingredient.IngId">
                <td>
                   {{  ingredient.IngId }}
                </td>
                <td>
                   {{  ingredient.IngName }}
                </td>
                <td>
                   {{  ingredient.Status }}
                </td>
                <td class="d-flex justify-content-end">
                    <button class="btn btn-danger btn-sm text-light" @click="deleteIng(ingredient.IngId)"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>

    import useIngredients from "../../composables/ingredients.js";
    import { onMounted } from "vue";
    
    export default {
        setup() {
            const { ingredients, getIng, destroyIng } = useIngredients()

            onMounted(getIng)

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
                deleteIng
            }
        }
    }
</script>
