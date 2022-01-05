<template>
    <div class="welcome-background d-flex justify-content-center align-items-center">
        <div class="col-sm-8 welcome-card">
            <div class="card card-body text-center bg-dark shadow-lg">
                <h1 class="display-2 text-light mb-5">
                    Witaj
                </h1>
                <div class="row mb-5">
                    <router-link :to="{ name: 'restaurant.menu', params: { type: '1' } }" class="no-style-link text-dark">
                        <div class="col-sm mb-3">
                            <div class="card mx-2">
                                <h1 class="display-6 mt-3">
                                    Na miejscu
                                </h1>
                            </div>
                        </div>
                    </router-link>
                    <router-link :to="{ name: 'restaurant.menu', params: { type: '2' } }" class="no-style-link text-dark">
                        <div class="col-sm">
                            <div class="card mx-2">
                                <h1 class="display-6 mt-3">
                                    Na wynos
                                </h1>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>
