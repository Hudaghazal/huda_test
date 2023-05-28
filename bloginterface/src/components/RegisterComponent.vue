<template>
<div class="form">

     <form @submit.prevent="handleSubmit">
     <h3> Sign up</h3>

     <div class="form-group ">
          <label>Name</label>
          <input type="text" class="form-control" v-model="name" placeholder="Enter your name" />
     </div>
     <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" v-model="password" placeholder="Enter your password" />
     </div>
     <div class="form-group">
          <label>Phone number</label>
          <input type="text" class="form-control" v-model="phone_number" placeholder="Enter your phon number" />
     </div>
     <div class="form-group">
          <label>City</label>
          <input type="text" class="form-control" v-model="city" placeholder="Enter your city" />
     </div>
     <div class="form-group">
          <label>Age</label>
          <input type="text" class="form-control" v-model="age" placeholder="Enter your age" />
     </div>
     <div class="form-group">
          <label>Sex</label>
          <input type="text" class="form-control" v-model="sex" placeholder="Enter your sex" />
     </div>
      <b-button variant="primary" class="m-2">Sign up</b-button>
       <router-link to="/"><b-button variant="primary" class="m-2">Or Login Now</b-button></router-link>

     </form>
     </div>
 </div>

</template> 


 <script>
   import axios from 'axios'

  export default{

    name: 'RegisterComponent' ,
    data(){
     return{
          name:'',
          password:'',
          phone_number:'',
          city:'',
          age:'',
          six:'',
     }
    },
    methods:{
       async handleSubmit(){
         await axios.post('/register', {
             name:this.name,
             password:this.password,
             phone_number:this.phone_number,
             city:this.city,
             age:this.age,
             sex:this.sex,
          });

         this.$router.push('/login');

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
