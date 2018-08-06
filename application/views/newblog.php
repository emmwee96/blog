<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Register</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

       <script src="//cdn.ckeditor.com/4.10.0/full/ckeditor.js"></script>
    </head>
    <body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Blogger</a>

  <!-- Links -->
  <ul class="navbar-nav ">
  

<li class="nav-item ">
      <a class="nav-link" href="<?php echo base_url('home'); ?>">Home</a>
    </li>


     <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url('User/newblog'); ?>">New Blog Post</a>
      </li>
    </li>


    <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('User/user_profile'); ?>">My Profile</a>
          </li>
    </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('User/logout'); ?>">Logout</a>
      </li>
    </li>

    </nav>


 
<br>

 <div class="container">
  <form method="post" action="<?= base_url() ?>Blogcontent/newblog" id="newblog">
      <div class="form-group">
        <label for="post_title">Title:</label>
        <input type="text" class="form-control" id="post_title" placeholder="Enter your blog Title" name="post_title">
      </div>

    <div class="form-group">
        <label for="post_description">Description:</label>
        <textarea id="editor1" name="post_description" class="form-control" placeholder="Enter your blog description" rows=8 ></textarea>
    </div>

    

    

    

     <!-- <div class="form-group">
      <label for="user_age">User age:</label>
    <input type="number" class="form-control" id="user_age" placeholder="Enter your age" name="user_age">
  </div> -->



  <input type="submit" id="newblog" value="newblog" name="newblog"class="btn btn-primary">
</form>
<hr>

<footer>
              <p>&copy; @Blogger 2018</p>
            </footer>
          
</div>
<script>
        CKEDITOR.replace('editor1');
    </script>


        </body>
</html>