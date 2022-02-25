<template>
    <div class="">
        <div class="card shadow-lg">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2 class="dasplay-6">Panel kuchni</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6 mb-3" v-for="Order in Orders">
                        <div class="card card-body mx-2 border-dark h-100 " :class="{
                            'bg-secondary' : Order.Status == 1,
                            'bg-primary' : Order.Status == 2,
                            'bg-success' : Order.Status == 3,
                            }">
                            <div class="row mb-1">
                                <div class="col">
                                    <h1>Nr. {{ Order.OrderNo }}</h1>
                                </div>
                                <div class="col text-end">
                                    <h1>Typ: {{ Order.OrderType }}</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col">
                                        <h5>Posiłek</h5>
                                    </div>
                                    <div class="col text-end">
                                        <h5>Ilość</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row" v-for="Detail in Order.Details">
                                <div class="row">
                                    <div class="col">
                                        <h5>{{ Detail.Name }}</h5>
                                    </div>
                                    <div class="col text-end">
                                        <h5>{{ Detail.Quantity }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <select class="form-select" v-model="Order.Status" @change="changeStatus(Order.OrderId,Order.Status )">
                                    <option >--Wybierz--</option>
                                    <option value="1">Oczekuje na akceptację</option>
                                    <option value="2">W trakcie realizacji</option>
                                    <option value="3">Gotowe do odbioru</option>
                                    <option value="4">W drodze</option>
                                    <option value="5">Zrealizowano</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>

    import useOrders from "../../composables/Orders";
    import { onMounted, reactive } from "vue";
    
    export default {

        setup() {
            const { getKitchenPrepareOrders, Orders, updateOrder } = useOrders()

            onMounted(getKitchenPrepareOrders)

            const reload = function(){
                setInterval(() => {
                    getKitchenPrepareOrders()
                }, 5000)
            }

            onMounted(reload)

            const changeStatus = async (Id, status) => {
                const data = ({
                    Status: status,
                })
                await updateOrder(Id, data)
                await getKitchenPrepareOrders()
            }

            return {
                Orders,
                changeStatus,
            }
        },
    }
</script>

<style>
</style>