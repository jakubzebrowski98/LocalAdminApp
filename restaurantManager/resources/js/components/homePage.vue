<template>
    <div class="col">
        <div class="row">
            <div class="col-sm">
                <div class="card bg-dark manu-card text-light">
                    <router-link :to="{ name: 'Ingredients.index' }" class="router-link">
                        <div class="card-body py-5">
                            <h3 class="dispany-6">Zarządzaj składnikami</h3>
                            <h1 class="icon-card"><i class="fas fa-carrot"></i></h1>
                        </div>
                    </router-link>
                </div>
            </div>
            <div class="col-sm ">
                <div class="card bg-success manu-card text-light">
                    <div class="card-body py-5">
                        <h3 class="dispany-6">Zarządzaj kuchnią</h3>
                        <h1 class="icon-card text-light"><i class="fas fa-map-signs"></i></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm ">
                <div class="card bg-primary manu-card">
                    <div class="card-body py-5">
                        <h3 class="dispany-6">Zamówienia</h3>
                        <h1 class="icon-card text-dark"><i class="far fa-window-restore"></i></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm ">
                <div class="card bg-danger manu-card text-light">
                    <div class="card-body py-5">
                        <h3 class="dispany-6">Rezerwacje</h3>
                        <h1 class="icon-card text-secondary"><i class="fas fa-book"></i></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm ">
                <div class="card manu-card bg-secondary text-light">
                    <div class="card-body py-5">
                        <h3 class="dispany-6">Płatności</h3>
                        <h1 class="icon-card text-dark"><i class="fas fa-money-bill-alt"></i></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm ">
                <div class="card manu-card">
                    <div class="card-body py-5">
                        <h3 class="dispany-6">Ustawienia</h3>
                        <h1 class="icon-card text-dark"><i class="fas fa-cog"></i></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>
