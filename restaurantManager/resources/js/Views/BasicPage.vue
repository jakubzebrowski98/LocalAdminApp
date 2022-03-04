<template>
<div class="container-fluid px-0">
    <div class="d-flex layout">
        <div class="sidebar" :class="{showNavbar: active, closeNavbar: !active}">
            <sidebar />
        </div>
        <div class="w-100">
            <navbar 
            v-on:close-sidebar="closeSidebar()"/>
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
    },
    data () {
        return {
            active: true
        }
    },
    methods: {
        closeSidebar(){
            this.active = !this.active
            console.log(this.active)
        }
    }
}
</script>

<style>
.content{
    height:91vh;
    overflow:auto;
}

    .showNavbar{
        display: block;
        -webkit-animation: fade-in 0.5s; /* Safari, Chrome and Opera > 12.1 */
           -moz-animation: fade-in 0.5s; /* Firefox < 16 */
            -ms-animation: fade-in 0.5s; /* Internet Explorer */
             -o-animation: fade-in 0.5s; /* Opera < 12.1 */
                animation: fade-in 0.5s;
                animation-fill-mode: both;
    }
    .closeNavbar{
        position: relative;
        -webkit-animation: fade-out 0.5s; /* Safari, Chrome and Opera > 12.1 */
           -moz-animation: fade-out 0.5s; /* Firefox < 16 */
            -ms-animation: fade-out 0.5s; /* Internet Explorer */
             -o-animation: fade-out 0.5s; /* Opera < 12.1 */
                animation: fade-out 0.5s;
        animation-fill-mode: both;
    }

    @keyframes fade-in {
        from { opacity: 0;margin-left: -220px; }
        to   { opacity: 1;margin-left: 0px; }
    }
    @keyframes fade-out {
        from { opacity: 1; }
        to   { opacity: 0;
        margin-left: -220px; }
    }
</style>