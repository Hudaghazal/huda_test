<template>
<div class="my-blog">
   <h1>MY BLOG</h1>
      
     <router-link to="/create"><b-button variant="danger" class="mb-2">Add Post</b-button><hr></router-link>
     <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <tr v-for="(post,index) in this.posts" :key="index">
      <th scope="col">{{post.title }}</th>
      <th scope="col">{{ post.created_at }}</th>
      <th scope="col">Action</th>
      <router-link to="/edit"><b-button variant="primary" class="m-2">Edit</b-button></router-link>
     <b-button variant="danger"  class="m-2">Delete</b-button> 

    </tr>

  </tbody>
</table>

</div>
</template>

<script>
import axios from "axios";
  export default {
    name : 'MyBlog',
    data(){
      return{
        posts:[],
      }
    },
    mounted(){
      axios.get('http://127.0.0.1:8000/api/post').then((response)=>{
         console.log(response.data)
         this.posts = response.data
      }).catch((err)=>{
        console.log(err)
      });
    },
    
  }
  
</script>

<style>
.my-blog{
  margin:75px;
}
</style>