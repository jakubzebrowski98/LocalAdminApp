<template>
    <div class="card">
        <div class="card-header row ">
            <div class="col">
                <h1 class="dasplay-6">List składników</h1>
            </div>
            <div class="col">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fas fa-plus"></i>
                </button>
            </div>
            
        </div>
        <div class="card-body">
            <listing></listing>
        </div>
        <addModal></addModal>
    </div>
</template>

<script>
    import listing from './ingredients/ListIngredients';
    import addModal from './ingredients/modals/AddIng.vue';

    export default{
        components: { listing, addModal }
    }
</script>