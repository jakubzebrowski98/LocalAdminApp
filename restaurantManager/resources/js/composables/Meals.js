
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default function useIngredients() {
    const meal = ref([])
    const meals = ref([])
    const router = useRouter()
    const errors = ref('')

    const getMeals = async () =>{
        let res = await axios.get('/api/meals');
        meals.value = res.data.data;
    }

    const getThisMeal = async (MealId) =>{
        let res = await axios.get('/api/meals/' + MealId);
        meal.value = res.data.data;
    }

    const storeMeal = async (data) => {

        errors.value = ''
        try {
            await axios.post('/api/meals/', data)
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const storeMealPicture = async (data) => {

        errors.value = ''
        try {
            await axios.post('/api/meals/', data)
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const updateMeal = async (MealId) => {
        errors.value = ''
        try {
            await axios.put('/api/meals/' + MealId, meal.value)
            await router.push({name: 'meals.index'})
        } catch (e) {
            if (e.response.status === 422) {
               errors.value = e.response.data.errors
            }
        }
    }

    const destroyMeal = async (MealId) => {
        await axios.delete('/api/meals/' + MealId);
    }

    return {
        meals,
        meal,
        getMeals,
        destroyMeal,
        storeMeal,
        errors,
        getThisMeal,
        updateMeal
    }
}