<template>
    <div class="">
        <div class="card shadow-lg">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <h2 class="dasplay-6">Statystyki zamówień</h2>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card card-body shadow mx-1">
                            <h5>Dziś</h5>
                            <div class="col text-center">
                                <h1 class="display-2 mb-0">{{ statistics.today }}</h1>
                                <h6 class="text-secondary">Zamówień</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h6>Średnia wartość zamówienia</h6>
                                <h3><strong>{{ isNaN(statistics.TodayIncome / statistics.today) == 0 ? (statistics.TodayIncome / statistics.today).toFixed(2) : '0'}} zł</strong></h3>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h5>Przychód</h5>
                                <h1><strong>{{ statistics.TodayIncome }} zł</strong></h1>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6 mb-3">
                        <div class="card card-body shadow mx-1">
                            <h5>Ostatni tydzień</h5>
                            <div class="col text-center">
                                <h1 class="display-2 mb-0">{{ statistics.lastWeek }}</h1>
                                <h6 class="text-secondary">Zamówień</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h6>Średnia wartość zamówienia</h6>
                                <h3><strong>{{ (statistics.LastWeekIncome / statistics.lastWeek).toFixed(2) }} zł</strong></h3>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h5>Przychód</h5>
                                <h1><strong>{{ statistics.LastWeekIncome }} zł</strong></h1>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="card card-body shadow mx-1">
                            <h5>Ostatni miesiąc</h5>
                            <div class="col text-center">
                                <h1 class="display-2 mb-0">{{ statistics.getLastMounth }}</h1>
                                <h6 class="text-secondary">Zamówień</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h6>Średnia wartość zamówienia</h6>
                                <h3><strong>{{ (statistics.getLastMounthIncome / statistics.getLastMounth).toFixed(2) }} zł</strong></h3>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h5>Przychód</h5>
                                <h1><strong>{{ statistics.getLastMounthIncome }} zł</strong></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card card-body shadow mx-1">
                            <h5>Ogółem</h5>
                            <div class="col text-center">
                                <h1 class="display-2 mb-0">{{ statistics.getAll }}</h1>
                                <h6 class="text-secondary">Zamówień</h6>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h6>Średnia wartość zamówienia</h6>
                                <h3><strong>{{ (statistics.totalIncome / statistics.getAll).toFixed(2) }} zł</strong></h3>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-1">
                                <h5>Przychód</h5>
                                <h1><strong>{{ statistics.totalIncome }} zł</strong></h1>
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

        const { getOrderStatistics, statistics } = useOrders()

        onMounted(getOrderStatistics)
        console.log(statistics)

        return {
            statistics,
        }
    },
}
</script>
