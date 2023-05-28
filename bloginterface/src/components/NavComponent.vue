<template>
    <nav class="navbar navbar-expand navbar-light fixed-top">
      <div class="container">
      <router-link to="/home" class="navbar-brand">Home</router-link>
        <div class="collapse navbar-collapse">
         <ul  class="navbar-nav ml-auto" v-if="!user">
            <li class="nav-item">
              <router-link to="/" class="nav-link">Login</router-link>
            </li>
            <li class="nav-item">
              <router-link to="/register" class="nav-link">Sign up</router-link>
            </li>
          </ul>
            <ul  class="navbar-nav ml-auto"  v-if="!user">
            <li class="nav-item">
              <a href="javascript:void(0)" @click="handleClick" class="nav-link" >Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> 
</template>


 <script>

  export default{
    name: 'NavComponent',
    props: ['user'],

    methods:{
      handleClick(){
        localStorage.removeItem('token');
        this.$router.push('/home');
      }
    }
 
  }
 </script>
 <style>
 a{
 
 }
 </style>