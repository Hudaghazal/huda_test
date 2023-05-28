<template>
  <div id="app">
    <NavComponent :user="user"  />
    <router-view :user="user" />
    </div>
  </div>
</template>

<script>
import NavComponent  from './components/NavComponent'
import axios from 'axios'
export default {
  name: 'App',
  components: {
    NavComponent,
  },
     data(){
      return{
        user:null,
      }
    },

    async Created(){
      const response =await axios.get('user');
      this.user=response.data;
      console.log(response);
    } 
    
   
}

</script>

<style>

</style>






