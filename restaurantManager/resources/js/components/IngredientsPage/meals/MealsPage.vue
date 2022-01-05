<template>
    <div>
        <toolbar />
        <listIng />
    </div>
</template>

<script>
    import listIng from './common/ListMeals'
    import toolbar from "../common/toolbar.vue"

export default {
        components: { toolbar, listIng }
}
</script>