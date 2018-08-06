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

    <?php if($this->session->userdata('user_id')) : ?>
           <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url(); ?>Blogcontent/newblog">Create Blog Post</a>
           </li>
    <?php endif; ?>

    

        <?php if($this->session->userdata('user_id')) : ?>
           <li class="nav-item active">
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

 <div class="container">
  <form method="post" action="<?= base_url() ?>User/user_profile_update" id="user_profile_update">
  <?php foreach($user_profile_update as $row){?>

      <div class="form-group">
        <label for="user_name">Username:</label>
        <input type="text" class="form-control" id="user_name" placeholder="Enter username" name="user_name" value="<?= $row['user_name']; ?>">
      </div>

    <div class="form-group">
        <label for="user_email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Enter your Email" name="user_email" value="<?= $row['user_email']; ?>">
      <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

     <div class="form-group">
      <label for="user_age">User age:</label>
    <input type="number" class="form-control" id="user_age" placeholder="Enter your age" name="user_age" value="<?= $row['user_age']; ?>">
  </div>

  <div class="form-group">
      <label for="user_phone">Phone Number:</label>
    <input type="text" class="form-control" id="user_phone" placeholder="Enter your phone number" name="user_phone" value="<?= $row['user_phone']; ?>">
  </div>

  <input type="submit" id="update" value="Update" name="update" class="btn btn-primary"  >

     <?php } ?>
</form>
<hr>

<footer>
              <p>&copy; @Blogger 2018</p>
            </footer>
          
</div>


        </body>
</html>