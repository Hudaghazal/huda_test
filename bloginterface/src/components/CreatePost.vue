<template>
  <div class="create">
      <h3>Create Posts </h3>
      <div class="form-group">
       <label>Title</label>
       <b-form-input type="text"></b-form-input>   
      </div>
      <div class="form-group">
          <label>Body</label>
            <b-form-textarea
                id="textarea"
                rows="3"
                max-rows="10">
            </b-form-textarea>
     <b-button variant="primary" class="mt-2">Add post</b-button>

      </div>
    </div>
</template> 

 <script>
  export default{
    name: 'CreatePost',   
  }
 </script>
<style>
 .create{
  margin:75px;
}
</style>


