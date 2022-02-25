<template>
    <div class="card shadow-lg mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2 class="dasplay-6">Lista zamówień</h2>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm">
                <thead>    
                    <tr>
                        <th scope="col">Numer zamówienia</th>
                        <th scope="col">Typ zamówienia</th>
                        <th scope="col">Status</th>
                        <th scope="col">Wartość</th>
                        <th scope="col">Data zamówienia</th>
                        <th scope="col">Data zrealizowania</th>
                        <th scope="col">Id użytkownika</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Order in Orders" v-bind:key="Order.OrderId">

                        <td>
                           {{ Order.OrderNo }}
                        </td>
                        <td>
                           {{ Order.OrderTypeName }}
                        </td>
                        <td>
                           {{ statuses[Order.Status] }}
                        </td>
                        <td>
                           {{ Order.OrderPrice }}
                        </td>
                        <td>
                           {{ Order.OrderDate }}
                        </td>
                        <td>
                           {{ Order.EndDate }}
                        </td>
                        <td v-if="!Order.UserId === 0">
                           {{ Order.UserId }}
                        </td>
                        <td v-else>
                           Lokal
                        </td>
                        <td>
                            <router-link class="btn btn-primary btn-sm text-light mx-1 p-1 px-2" :to="{ name: 'OrderDetails', params: { OrderId: Order.OrderId } }">
                                <i class="fas fa-ellipsis-h"></i>
                            </router-link>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</template>

<script>

    import useOrders from "../../composables/Orders";
    import { onMounted } from "vue";
    
    export default {

        setup() {
            const { getOrders, Orders, getOrderStatuses, statuses } = useOrders()

            onMounted(getOrders)
            onMounted(getOrderStatuses)

            return {
                Orders,
                statuses
            }
        }
    }
</script>
