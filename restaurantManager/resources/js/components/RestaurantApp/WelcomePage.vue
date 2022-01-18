<template>
    <div class="welcome-background d-flex justify-content-center align-items-center">
        <div class="col-sm-8 welcome-card">
            <div class="card card-body text-center bg-dark shadow-lg">
                <h1 class="text-light mb-5">
                    <div class="navbar-brand-text">Restaurant <sup> APP</sup></div>
                </h1>
                <div class="row mb-5">
                    <div class="col">
                        <img :src="OutRestaurant" alt="">
                        <router-link :to="{ name: 'restaurant.menu', params: { type: '1' } }" class="no-style-link text-dark">
                            <div class="col-sm mb-3">
                                <div class="card mx-2">
                                    <h1 class="display-6 mt-3">
                                        Na miejscu
                                    </h1>
                                </div>
                            </div>
                        </router-link>
                    </div>
                    <div class="col">
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
    </div>
</template>

<script>
    import InRestaurant from "../../../asset/RestaurantApp/in-restaurant.png"
    import OutRestaurant from "../../../asset/RestaurantApp/out-restaurant.png"

    export default {
        setup() {

            return {
                OutRestaurant,
                InRestaurant
            }
        }
    }
</script>
