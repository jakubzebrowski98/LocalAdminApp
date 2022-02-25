<template>
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-light">
        <div class="container-fluid py-1">
            <i class="fas fa-bars pointer" @click="$emit('close-sidebar')"></i>
        </div>
    </nav>
</template>



<style>
.pointer{
    cursor: pointer;
}
</style>