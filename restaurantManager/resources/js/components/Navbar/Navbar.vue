<template>
    <nav class="navbar navbar-expand-lg navbar-light shadow bg-light">
        <div class="container-fluid py-1">
            <i class="fas fa-bars pointer" @click="$emit('close-sidebar')"></i>
            <div class="d-flex justify-content-end">
                <a href="/logout" class="noStyleLink text-dark">Wyloguj <i class="fas fa-sign-out-alt me-1"></i></a>
            </div>
        </div>

    </nav>
</template>



<style>
.pointer{
    cursor: pointer;
}
    .noStyleLink{
        text-decoration:none;
        color: white;
    }
</style>