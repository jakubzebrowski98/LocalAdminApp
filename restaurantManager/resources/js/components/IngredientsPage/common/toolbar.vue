<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark py-2">
        <div class="container-fluid px-0">
            <a href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item bg-dark mx-3 rounded py-1">
                        <router-link :to="{ name: 'Ingredients.index' }" class="nav-link text-light">Składniki</router-link>
                    </li>
                    <li class="nav-item bg-dark mx-3 rounded py-1">
                        <router-link :to="{ name: 'meals.index' }" class="nav-link text-light">Posiłki</router-link>
                    </li>
                    <li class="nav-item bg-dark mx-3 rounded py-1">
                        <router-link :to="{ name: 'menu.index' }" class="nav-link text-light">Menu</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>