<template>
    <div class="col">
        <div class="row">
            <div class="col-sm px-3">
                <div class="card bg-dark manu-card text-light">
                    <router-link :to="{ name: 'menu.index' }" class="noStyleLink">
                        <div class="card-body py-5">
                            <h3 class="dispany-6">Zarządzaj menu</h3>
                            <h1 class="icon-card"><i class="fas fa-carrot"></i></h1>
                        </div>
                    </router-link>
                </div>
            </div>
            <div class="col-sm  px-3">
                <div class="card bg-success manu-card text-light">
                    <router-link :to="{ name: 'kitchen.index' }" class="noStyleLink">
                        <div class="card-body py-5">
                            <h3 class="dispany-6">Panel kuchni</h3>
                            <h1 class="icon-card text-light"><i class="fas fa-map-signs"></i></h1>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm  px-3">
                <div class="card bg-info manu-card text-light">
                    <router-link :to="{ name: 'toCollect' }" class="noStyleLink">
                        <div class="card-body py-5">
                            <h3 class="dispany-6">Odbór zamówień</h3>
                            <h1 class="icon-card text-light"><i class="fas fa-shopping-bag"></i></h1>
                        </div>
                    </router-link>
                </div>
            </div>
            <div class="col-sm px-3">
                <router-link :to="{ name: 'order.index' }" class="noStyleLink">
                    <div class="card bg-primary manu-card">
                        <div class="card-body py-5">
                            <h3 class="dispany-6 text-dark">Zamówienia</h3>
                            <h1 class="icon-card text-dark"><i class="far fa-window-restore"></i></h1>
                        </div>
                    </div>
                </router-link>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-6 px-3">
                <div class="card manu-card bg-secondary text-light">
                    <div class="card-body py-5">
                        <h3 class="dispany-6">Statystyki</h3>
                        <h1 class="icon-card text-dark"><i class="fas fa-chart-line"></i></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>

    .noStyleLink{
        text-decoration:none;
        color: white;
    }
</style>
