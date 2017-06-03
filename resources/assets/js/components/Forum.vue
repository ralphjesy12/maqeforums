<template>
    <div class="posts">
        <div class="box" v-if="posts" v-for="post in posts">
            <article class="media">
                <figure class="media-left">
                    <p class="image is-4by3">
                        <img :src="post['image_url']">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{ post['title'] }}</strong>
                            <br>
                            {{ post['body'] }}
                            <br>
                            <em> <i class="fa fa-fw fa-clock-o"></i></em>
                        </p>
                    </div>
                </div>
                <div class="media-right has-text-centered">
                    <figure>
                        <p class="image is-128x128">
                            <img :src="authors[post['author_id'] - 1]['avatar_url']">
                        </p>
                    </figure>
                    <h1 class="title">
                        {{ authors[post['author_id'] - 1]['name'] }}
                    </h1>
                    <h2 class="subtitle">
                        {{ authors[post['author_id'] - 1]['role'] }}
                    </h2>
                    <h3>
                        <i class="fa fa-fw fa-map-marker"></i> {{ authors[post['author_id'] - 1]['place'] }}
                    </h3>
                </div>

            </article>
        </div>
        <nav class="pagination is-centered">
            <a class="pagination-previous">Previous</a>
            <a class="pagination-next">Next page</a>
            <ul class="pagination-list">
                <li><a class="pagination-link">1</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
                <li><a class="pagination-link">45</a></li>
                <li><a class="pagination-link is-current">46</a></li>
                <li><a class="pagination-link">47</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
                <li><a class="pagination-link">86</a></li>
            </ul>
        </nav>
    </div>
</template>
<script>

import Axios from 'axios';
export default {
    data(){
        return {
            posts : null,
            authors : null,
        }
    },
    mounted() {
        var self = this;
        axios.all([self.getPosts(), self.getAuthors()])
        .then(axios.spread(function (posts, authors) {
            self.posts = posts.data;
            self.authors = authors.data;
        }));
    },
    methods: {
        getPosts() {
            return Axios.get('/posts');
        },
        getAuthors() {
            return Axios.get('/authors');
        }
    }
}
</script>
