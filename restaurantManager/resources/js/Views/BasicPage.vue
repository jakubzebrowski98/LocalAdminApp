<template>
<div class="container-fluid px-0">
    <div class="d-flex layout">
        <div class="sidebar">
            <sidebar />
        </div>
        <div class="w-100">
            <navbar />
            <div class="mx-3 mt-3 content overflow-auto">
                 <router-view />
            </div>
           
        </div>
    </div>

</div>

</template>


<script>
import sidebar from "../components/Sidebar/Sidebar"
import navbar from "../components/Navbar/Navbar"

export default {
    components: {
        sidebar,
        navbar
    }
}
</script>

<style>
.content{
    height:92.2vh;
    overflow:auto;
}
</style>