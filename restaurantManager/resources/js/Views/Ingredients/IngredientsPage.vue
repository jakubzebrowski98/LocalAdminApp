<template>
    <div>
        <toolbar />
        <listIng />
    </div>
</template>

<script>
    import toolbar from "../../components/common/toolbar.vue"
    import listIng from "../../components/IngredientsPage/ingredients/ListIngredients.vue"

    export default{
        components: { listIng ,toolbar }
    }
</script>