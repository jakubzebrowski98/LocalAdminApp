<template>
    <div>
        <toolbar />
        <listIng />
    </div>
</template>

<script>
    import listIng from './common/MenuList.vue'
    import toolbar from '../IngredientsPage/common/toolbar.vue'

export default {
        components: { toolbar, listIng }
}
</script>