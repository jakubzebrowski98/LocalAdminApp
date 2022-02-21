<template>
    <div>
        <toolbar />
        <listIng />
    </div>
</template>

<script>
    import listIng from '../../components/meals/ListMeals.vue'
    import toolbar from "../../components/common/toolbar.vue"

export default {
        components: { toolbar, listIng }
}
</script>