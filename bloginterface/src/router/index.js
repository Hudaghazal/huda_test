import Vue from 'vue';
import VueRouter from 'vue-router'; 
import AllPosts from '../components/AllPosts.vue'                                  
import RegisterComponent from '../components/RegisterComponent.vue'  
import LoginComponent from '../components/LoginComponent.vue'                                  
import MyBlog from '../components/MyBlog.vue' 
import CreatePost from '../components/CreatePost.vue'                                  
import EditPost from '../components/EditPost.vue'                                  
                                
Vue.use(VueRouter);                                             
 const routes = [                  
     {
        path:'/register',
        name:'register',
        component:RegisterComponent
    }, 
     {
        path:'/home',
        name:'home',
        component:AllPosts
    }, 
    {
        path:'/',
        name:'login',
        component:LoginComponent
    }, 
    {
        path:'/blog',
        name:'myblog',
        component:MyBlog
    }, 
    {
        path:'/create',
        name:'create',
        component:CreatePost
    }, 
    {
        path:'/edit',
        name:'edit',
        component:EditPost
    }, 
    ]                                                   
  const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
  });                
   export default router;