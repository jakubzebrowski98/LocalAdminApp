<template>
<div class="row">
    <div class="d-flex">
        <router-link :to="{ name: 'Ingredients.index' }" class="text-light no-styled-link">
            <button class="btn btn-primary btn-sm mx-1">
                Składniki
            </button>
        </router-link>
        <router-link :to="{ name: 'meals.index' }" class="text-light no-styled-link">
            <button class="btn btn-primary btn-sm mx-1">
                Posiłki
            </button>
        </router-link>
        <router-link :to="{ name: 'menu.index' }" class="text-light no-styled-link">
            <button class="btn btn-primary btn-sm mx-1">
                Menu
            </button>
        </router-link>
    </div>
</div>

</template>

<style scoped>
    .no-styled-link {
        text-decoration: none;
    }
</style>