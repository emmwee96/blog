<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-post.css" rel="stylesheet">

  </head>

  <body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="<?php echo base_url('home'); ?>">Blogger</a>

  <!-- Links -->
  <ul class="navbar-nav ">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url('home'); ?>">Home</a>
    </li>

    <?php if($this->session->userdata('user_id')) : ?>
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url(); ?>Blogcontent/newblog">Create Blog Post</a>
           </li>
    <?php endif; ?>

        <?php if($this->session->userdata('user_id')) : ?>
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url(); ?>User/user_profile">User Profile</a>
           </li>
    <?php endif; ?>

      
      <?php if(!$this->session->userdata('user_id')) : ?>
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url(); ?>user/register">Register</a>
           </li>
            <?php endif; ?>

<?php if(!$this->session->userdata('user_id')) : ?>
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url(); ?>user/login">Login</a>
           </li>
            <?php endif; ?>

            <?php if($this->session->userdata('user_id')) : ?>
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url(); ?>user/logout">Logout</a>
           </li>
            <?php endif; ?>

  </ul>
</nav>

    <!-- Page Content -->
    <div class="container"> 

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

          <?php foreach($viewblogpost->result() as $viewblogpost): ?>

          <!-- Title -->
          <h1 class="mt-4" value="<?php echo $post->post_title; ?>"></h1>

          

          <hr>

          <!-- Date/Time -->
          <p>Posted on January 1, 2018 at 12:00 PM</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead"  value="<?php echo $post->post_description; ?>">

        
          </p>
          
          
            <blockquote class="blockquote">
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer class="blockquote-footer">Someone famous in
              <cite title="Source Title">Source Title</cite>
            </footer>
          </blockquote>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

             <?php } ?>
          <hr>


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

   <hr>

<footer>
              <p>&copy; @Blogger 2018</p>
            </footer>



  </body>

</html>
