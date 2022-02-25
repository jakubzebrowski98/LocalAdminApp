<template>
    <div class="card shadow-lg mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h1 class="dasplay-6">Lista zamówień</h1>
                </div>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover table-sm">
                <thead>    
                    <tr>
                        <th scope="col">Data zamówienia</th>
                        <th scope="col">Numer zamówienia</th>
                        <th scope="col">Typ zamówienia</th>
                        <th scope="col">Status</th>
                        <th scope="col">Wartość</th>
                        <th scope="col">Data zrealizowania</th>
                        <th scope="col">Id użytkownika</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="Order in Orders" v-bind:key="Order.OrderId">
                        <td>
                           {{ Order.OrderDate }}
                        </td>
                        <td>
                           {{ Order.OrderNo }}
                        </td>
                        <td>
                           {{ Order.OrderTypeName }}
                        </td>
                        <td>
                           {{ Order.Status }}
                        </td>
                        <td>
                           {{ Order.OrderPrice }}
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
            const { getOrders, Orders } = useOrders()

            onMounted(getOrders)

            return {
                Orders,
            }
        }
    }
</script>
