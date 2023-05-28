<template>
 <div class="edit">
   <h3>  Edit Post </h3>
    <div class="form-group">
     <label>Title</label>
     <b-form-input type="text"  placeholder="This is a new title of a blog post"></b-form-input>   
    </div>
    <div class="form-group">
      <label>Body</label>
        <b-form-textarea
          id="textarea"
          placeholder="This is a new body of a blog post"
          rows="3"
          max-rows="10">
        </b-form-textarea>
    <b-button variant="primary" class="mt-2">Save post</b-button>
 </div>
 </div>
</template> 

 <script>
  export default{
    name: 'EditPost',   
  }
 </script>
<style>
 .edit{
  margin:75px;
}
</style>


