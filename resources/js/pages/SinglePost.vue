<template>
  <!-- <section class="my-5" v-if="!loading && JSON.stringify(post) != '{}'"> -->
    <section >
        <h1>{{ post.title }}</h1>

        <p class="my-4">{{ post.content }}</p>

        <router-link class="btn btn-primary" :to="{ name: 'blog' }">Torna al Blog</router-link>
  </section>
</template>

<script>

export default {
    name: 'SinglePost',
    data: function() {
        return {
            post: null,
            loading: true
        }
    },
    created: function() {
        this.getPost(this.$route.params.slug);
    },
    methods: {
        getPost: function(slug) {
            axios
                .get(`http://127.0.0.1:8000/api/posts/${slug}`)
                .then(
                    res => {
                        if(Object.keys(res.data).length == 0){    
                           this.$router.push({ name: 'not-found' });     
                        } else {
                            this.post = res.data;
                            this.loading = false;
                        }              
                    }
                )
                .catch(
                    err => {
                        console.log(err);
                    }
                );
        }
    }
}
</script lang="scss">

<style>
</style>