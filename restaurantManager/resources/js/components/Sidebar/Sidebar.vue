<template>
    <div class="sidebar bg-dark" >
        <div class="logo">
            <p>
              <router-link :to="{ name: 'home' }" class="noStyleLink text-secondary">BestBurgers <i class="fas fa-hamburger"></i></router-link>
            </p>
            
        </div>
        <div class="row my-2">
            <div class="d-flex justify-content-between align-items-center text-light"
                 data-bs-toggle="collapse" href="#Produkcja" role="button" aria-expanded="false" aria-controls="Produkcja">
                <p class="text-light py-0 mb-0">
                    Produkcja
                </p>
                <i class="fas fa-sort-down"></i>
            </div>
            <div class="collapse" id="Produkcja">
                <div class="colapsedNav">
                    <p>
                      <router-link :to="{ name: 'Ingredients.index' }" class="noStyleLink">Składniki</router-link>
                    </p>
                    <p>
                        <router-link :to="{ name: 'meals.index' }" class="noStyleLink">Posiłki</router-link>
                    </p>
                    <p class="mb-0">
                        <router-link :to="{ name: 'menu.index' }" class="noStyleLink">Menu</router-link>
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="d-flex justify-content-between align-items-center text-light"
                 data-bs-toggle="collapse" href="#Kitchen" role="button" aria-expanded="false" aria-controls="Kitchen">
                <p class="text-light py-0 mb-0">
                    Panele
                </p>
                <i class="fas fa-sort-down"></i>
            </div>
            <div class="collapse" id="Kitchen">
                <div class="colapsedNav">
                    <p class="">
                      <router-link :to="{ name: 'kitchen.index' }" class="noStyleLink">Kuchnia</router-link>
                    </p>
                    <p class="mb-0">
                      <router-link :to="{ name: 'toCollect' }" class="noStyleLink">Odbór zamówienia</router-link>
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="d-flex justify-content-between align-items-center text-light"
                 data-bs-toggle="collapse" href="#Orders" role="button" aria-expanded="false" aria-controls="Orders">
                <p class="text-light py-0 mb-0">
                    Zamówienia
                </p>
                <i class="fas fa-sort-down"></i>
            </div>
            <div class="collapse" id="Orders">
                <div class="colapsedNav">
                    <p class="mb-0">
                      <router-link :to="{ name: 'order.index' }" class="noStyleLink">Lista zamówień</router-link>
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-2">
            <div class="d-flex justify-content-between align-items-center text-light"
                 data-bs-toggle="collapse" href="#Payment" role="button" aria-expanded="false" aria-controls="Payment">
                <p class="text-light py-0 mb-0">
                    Statystyki
                </p>
                <i class="fas fa-sort-down"></i>
            </div>
            <div class="collapse" id="Payment">
                <div class="colapsedNav">
                    <p>
                      <router-link :to="{ name: 'StatisticsOrder' }" class="noStyleLink">Statystyki zamówień</router-link>
                    </p>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            active: true,
        }
    },
    methods: {
        CloseSidebar(){
            console.log("asd")
            this.active = !this.active
        }
    }
}
</script>

<style scoped>
    .showNavbar{
        display: block;
        -webkit-animation: fade-in 0.5s; /* Safari, Chrome and Opera > 12.1 */
           -moz-animation: fade-in 0.5s; /* Firefox < 16 */
            -ms-animation: fade-in 0.5s; /* Internet Explorer */
             -o-animation: fade-in 0.5s; /* Opera < 12.1 */
                animation: fade-in 0.5s;
    }

    .closeNavbar{

    }

    .sidebar {
        position: relative;
        width: 220px;
        height: 100vh;
        padding: 1rem;
    }

    .logo{
        text-align: center;
        color: rgb(201, 201, 201);
        margin-bottom:1rem;
    }
    .colapsedNav{
        color: white;
        margin: 0.5rem;
    }
    .noStyleLink{
        text-decoration:none;
        color: white;
    }

    @media (max-width: 768px){
        .sidebar {
            position: relative;
            width: 220px;
            height: 100vh;
            padding: 1rem;
        }
    }

    @keyframes fade-in {
        from { opacity: 0;transform:translateX(-500px) }
        to   { opacity: 1; }
    }
</style>