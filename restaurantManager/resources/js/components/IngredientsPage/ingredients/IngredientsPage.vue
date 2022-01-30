<template>
    <div>
        
        <toolbar />
        <listIng />
    </div>
</template>

<script>
    import toolbar from "../common/toolbar.vue"
    import listIng from "../ingredients/common/ListIngredients.vue"

    export default{
        components: { listIng ,toolbar }
    }
</script>