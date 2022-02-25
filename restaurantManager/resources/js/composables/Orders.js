import { ref } from 'vue';
import axios from 'axios';

export default function useOrders() {
    const Orders = ref([])
    const order = ref([])
    const statuses = ref('')
    const errors = ref('')

    const getOrders = async () =>{
        let res = await axios.get('/api/orders');
        Orders.value = res.data.data;
    }

    const getCurrentOrder = async (OrderId) =>{
        let res = await axios.get('/api/order/' + OrderId);
        order.value = res.data.data;
    }

    const getOrderStatuses = async () =>{
        let res = await axios.get('/api/order-statuses');
        statuses.value = res.data;
    }

    const getKitchenPrepareOrders = async () =>{
        let res = await axios.get('/api/kitchen-orders');
        Orders.value = res.data.data;
    }

    const updateOrder = async (OrderId, data) =>{
        errors.value = ''
        try {
            await axios.post('/api/update-order/' + OrderId, {...data})
        } catch (e) {
            if (e.response.status === 422) {
               errors.value = e.response.data.errors
            }
        }
    }

    return {
        getOrders,
        Orders,
        order,
        updateOrder,
        getKitchenPrepareOrders,
        getOrderStatuses,
        statuses,
        getCurrentOrder
    }
}