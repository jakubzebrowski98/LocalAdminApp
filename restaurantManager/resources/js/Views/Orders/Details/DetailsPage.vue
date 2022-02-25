<template>
    <div class="card shadow card-body my-3">
        <div class="row">
            <div class="col-8">
                <h2>Zamówienie Id: {{ order.OrderId }}</h2>
            </div>
            <div class="col">
                <div class="d-flex justify-content-end">
                    <router-link class="btn btn-primary btn-sm" :to="{ name: 'order.index' }">
                        Powrót do listy
                    </router-link>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col mx-2">
            <div class="card card-body shadow">
                <div class="col">
                    <h4>Dane do zamówienia</h4>
                    <p><strong>Numer zamówienia: </strong> {{ order.OrderNo }}</p>
                    <p><strong>Wartość zamówienia: </strong> {{ order.OrderPrice }} zł</p>
                    <p><strong>Data zamówienia: </strong> {{ order.OrderDate }}</p>
                    <p><strong>Data ukończenia: </strong> {{ order.EndDate ?? ' - ' }}</p>
                    <p><strong>Typ zamówienia: </strong> {{ order.OrderTypeName }}</p>
                    <p><strong>Status: </strong> {{ order.StatusName }}</p>
                    <p><strong>Zamawiający: </strong> {{ order.UserId }}</p>
                    <h4 class="mt-3">Dane zamawiającego</h4>
                </div>
            </div>
        </div>
        <div class="col mx-2">
            <div class="card card-body shadow">
                <div class="col">
                    <h4>Detale zamówienia</h4>
                    <div class="details ms-1" v-for="Detail in order.Details" :key="Detail.Id">
                        <div class="row">
                            <div class="col-8">
                                <p class="text-start">{{ Detail.Name }}</p>
                            </div>
                            <div class="col-4">
                                <p class="text-end">{{ Detail.Quantity }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>

import useOrders from "../../../composables/Orders";
import { onMounted } from "vue";

export default {
    props: {
        OrderId: {
            required: true,
            type: String
        }
    },
    setup(props) {
        const { order, getCurrentOrder, getOrderStatuses, statuses } = useOrders()

        onMounted(getCurrentOrder(props.OrderId))
        onMounted(getOrderStatuses)
        
        return {
            order,
            statuses
        }
    }
}
</script>