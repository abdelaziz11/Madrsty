<template>
<div>
    <navbar />
    <div id="content">
        <router-view></router-view>
    </div>
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
