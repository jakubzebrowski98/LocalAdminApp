<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dodanie składnika</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form @submit.prevent="saveIng">
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control" id="name" placeholder="Nazwa">
                            <label for="name">Nazwa</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Dodaj</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive } from "vue";
import useIngredients from '../../../composables/ingredients';

export default {
    setup() {

        const form = reactive({
            name: '',
        })

        const { errors, storeIng } = useIngredients()

        const saveIng = async () => {
            console.log('asd');
            await storeIng({...form});
        }

        return {
            form,
            errors,
            saveIng
        }
    }
}
</script>