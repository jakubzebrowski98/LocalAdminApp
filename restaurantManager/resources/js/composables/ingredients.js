
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default function useIngredients() {
    const ingredients = ref([])
    const router = useRouter()
    const errors = ref('')

    const getIng = async () =>{
        let res = await axios.get('/api/ingredients');
        ingredients.value = res.data.data;
    }


    const storeIng = async (data) => {

        errors.value = ''
        try {
            await axios.post('/api/ingredients/', data)
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }


    const destroyIng = async (IngId) => {
        await axios.delete('/api/ingredients/' + IngId);

    }



    return {
        ingredients,
        getIng,
        destroyIng,
        storeIng,
        errors
    }
}