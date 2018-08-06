<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
<br>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-12">

          <h1 class="my-4">Welcome


          
          <?php if($this->session->userdata('user_id')) : ?>
   
          <small> <?= $this->session->userdata('user_name') ?> </small>

            <?php endif; ?>

          </h1>

           <?php foreach($post->result() as $post): ?>
   

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
            <div class="card-body">



              <h2 class="card-title"><?php echo $post->post_title; ?></h2>
              <p class="card-text"><?php echo $post->post_description; ?></p>
              <a  href="<?php echo base_url(); ?>Blogcontent/viewblogpost" class="btn btn-danger">Read More &raquo;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#" value="<?php echo $post->user_name; ?>"></a>
            </div>
          </div>

          <!-- Blog Post -->
    
           <?php endforeach; ?>

          <!-- Pagination -->
          <!-- <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#"> 1</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">2</a>
              <!--&rarr;-->
            </li>
          </ul>     

        </div>

      

      </div>
      <!-- /.row -->

  <hr>
      
<footer>
        <p>&copy; @Blogger 2018</p>
</footer>

    </div>
    <!-- /.container -->


</body>
</html>
