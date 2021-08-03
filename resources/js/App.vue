<template>
    <div class="text-center">
        <Header />

        <main>
            <router-view></router-view>
        </main>
    </div>
</template>


<script>
import Header from "./components/Header.vue";

export default {
    name: 'App',
    data: function(){
        return{
            posts: []
        }
    },
   
    components:{
        Header
    }

}
</script>


<style lang="scss">

</style>