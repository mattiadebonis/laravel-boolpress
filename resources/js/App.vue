<template>
    <div class="text-center">
        <Header />

        <main>

            <h1>Il mio blog</h1>
            <div class="col-4 my-3 d-flex"
                v-for="post in posts"
                :key="post.id"
            >
            <div class="card">
                <h5>{{post.title}}</h5>
                <p>{{post.content}}</p>
            </div>
                
            </div>
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
    methods:{

    },
    components:{
        Header
    },
    created: function(){
        axios
            .get('http://127.0.0.1:8003/api/posts')
            .then(
                res=>{
                    console.log(res.data)
                    this.posts = res.data.posts;
                }

            )
            .catch(
                err=>{
                    console.log(err);
                }
            );
    }
}
</script>


<style lang="scss">

</style>