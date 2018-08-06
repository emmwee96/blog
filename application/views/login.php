<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
      <title>Login</title>
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

    <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url('User/register'); ?>">Register</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('User/login'); ?>">Login</a>
      </li>
    </li>


  </ul>
</nav>
<br>


 <div class="container">

 <?php if(isset($_SESSION)) {
        echo $this->session->flashdata('flash_data');
    } ?>
  <form method="post" action="<?= base_url() ?>User/login_user" id="login_user">
      

<div class="form-group">
        <label for="user_email">Email:</label>
      <input type="email" class="form-control" id="user_email" placeholder="Enter your Email" name="user_email">
      <small id="" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

 <div class="form-group">
    <label for="user_password">Password</label>
    <input type="password" class="form-control" id="user_password" placeholder="Enter your Password" name="user_password">
  </div>
 
  <input type="submit" id="login_user" value="Login" name="login_user" class="btn btn-primary">
</form>

<hr>
<footer>
              <p>&copy; @Blogger 2018</p>
            </footer>
          
</div>
        </body>
</html>