<template>
    <div class="">
        <div class="card shadow">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2 class="dasplay-6">Odbiór</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h1 class="mb-3">W trakcie przygotowywania</h1>
                        <div v-for="Order in Orders">
                            <div class="col-6" v-if="Order.Status < 3">
                                <h1 class="display-1 text-secondary mb-0" >
                                    {{ Order.OrderNo }}
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <h1 class="mb-3">Do odbioru</h1>
                        <div v-for="Order in Orders">
                            <div class="col-6" v-if="Order.Status === 3">
                                <h1 class="display-1 text-success ready-to-order mb-0" >
                                    {{ Order.OrderNo }}
                                </h1>
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
    import { onMounted } from "vue";
    
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

            return {
                Orders,
            }
        },
    }
</script>

<style>
.order-ready{
    border-left: 1px solid black;
    padding-left:10px;
    -webkit-box-shadow: -5px 0px 14px -10px rgb(0, 0, 0);
    -moz-box-shadow: -5px 0px 14px -10px rgb(0, 0, 0);
    box-shadow: -5px 0px 14px -10px rgb(0, 0, 0);
}

.ready-to-order{
    text-shadow: 0px 0px 17px #00fd4c;
}
</style>