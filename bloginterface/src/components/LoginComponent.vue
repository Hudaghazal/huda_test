<template>
    <div class="form">
   <form @submit.prevent="handleSubmit">
  <h3> Login </h3>

  <div class="form-group">
       <label>Name</label>
       <input type="text" class="form-control" v-model="name" placeholder="Enter your name" />
  </div>
  <div class="form-group">
       <label>Password</label>
       <input type="password" class="form-control" v-model="password" placeholder="Enter your password" />
  </div>

   <b-button variant="primary" class="m-2">Login</b-button> 
</form>
</div>

</template> 

 <script>
     import axios from 'axios'

  export default{
    name: 'LoginComponent'  ,
    data(){
      return{
        name:'',
        password:'',

      }
    },
    methods:{
      async handleSubmit(){
        const response = await axios.post('/login',{
           name:this.name,
          password:this.password,
        });
        console.log(response)
        localStorage.setItem('token',response.data.token);
        this.$router.push('/home')
      }
    }
 
  }
 </script>


  <style>
.form{
  padding:75px;
}
.form .btn{
  margin-top:20px;
}
</style>

