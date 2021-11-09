<template>
    <div>
        <toolbar />
    </div>
</template>

<script>
    import listing from './ingredients/ListIngredients';
    import toolbar from "./common/toolbar.vue"
    export default{
        components: { listing, toolbar }
    }
</script>