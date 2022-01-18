
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

export default function useIngredients() {
    const Category = ref([])
    const Categories = ref([])
    const router = useRouter()
    const errors = ref('')

    const getCategories = async () =>{
        let res = await axios.get('/api/category');
        Categories.value = res.data.data;
    }

    const getThisCategory = async (id) =>{
        let res = await axios.get('/api/category/' + id);
        Category.value = res.data.data;
    }

    const storeCategory = async (data) => {

        errors.value = ''
        try {
            await axios.post('/api/category/', data)
        } catch (e) {
            if (e.response.status === 422) {
                for (const key in e.response.data.errors) {
                    errors.value += e.response.data.errors[key][0] + ' ';
                }
            }
        }
    }

    const updateCategory = async (id) => {
        errors.value = ''
        try {
            await axios.put('/api/category/' + id, Category.value)
            await router.push({name: 'meals.index'})
        } catch (e) {
            if (e.response.status === 422) {
               errors.value = e.response.data.errors
            }
        }
    }

    const destroyCategory = async (id) => {
        await axios.delete('/api/category/' + id);
    }

    return {
        Category,
        Categories,
        getCategories,
        getThisCategory,
        storeCategory,
        updateCategory,
        destroyCategory,
        errors
    }
}