<template>
<div>
    <navbar />
    <router-view></router-view>
    </div>
</template>
<script>
    import navbar from "../views/navbar"
    export default {
        components:{
            navbar
        }
    }
</script>
