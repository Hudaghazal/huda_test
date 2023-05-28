<template>
<div class="all-post">
  <h3 v-if="user">Hi, {{ user.name }} </h3>
  <router-link to="/blog"> <b-button variant="success" >Go to My Blog</b-button></router-link>
  <h3>All Posts </h3>
    <b-card-group deck>
      <b-card
        header="This is a new post"
        header-tag="header"
        title="Title">
        <b-card-text>this is Body of a blog post</b-card-text>
        <b-form-input type="text" placeholder="Add Comments"></b-form-input>   
        <b-button variant="primary" class="mt-2">Send</b-button>
      </b-card>
    </b-card-group>
</div>
</template> 

 <script>
    import axios from 'axios'

  export default{

    name: 'AllPosts'  , 
    props:['user']

   
  }
 </script>
<style>
.all-post{
  margin:75px;
}
</style>