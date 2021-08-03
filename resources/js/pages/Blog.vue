<template>
    <div>Blog

        <h1>Il mio blog</h1>
            <Card class="col-4 my-3 d-flex"
                v-for="post in posts"
                :key="post.id"
                :item="post"
            />
    </div>
</template>


<script>
import Card from "../components/Card.vue";

export default {
    name: 'Blog',
    components: {
        Card
    },
    data: function(){
        return{
            posts: []
        }
    },
    created: function(){
        axios
            .get('http://127.0.0.1:8001/api/posts')
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