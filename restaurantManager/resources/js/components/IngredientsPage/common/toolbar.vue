<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link :to="{ name: 'Ingredients.index' }" class="nav-link">Składniki</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'home' }" class="nav-link">Składniki</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'home' }" class="nav-link">Składniki</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>