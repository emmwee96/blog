
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Profile</title>


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


  <div class="row">
 
    
 
<table class="table table-bordered table-striped" action="<?= base_url() ?>User/user_profile" id="user_profile" >
 
<?php foreach($user_profile as $row){?>

   <tr>
     <th colspan="2"><h4 class="text-center">User Info</h3></th>
     
   </tr>
  
   <tr class="m-0">
                <td class="w-25">Username </td>
                <td class="w-50">
                <?= $row['user_name']; ?>
                </td>
    </tr>
<tr class="m-0">
                <td class="w-25">User Email </td>
                <td class="w-50">
                <?= $row['user_email']; ?>
                </td>
                </tr>

                <tr class="m-0">
                <td class="w-25">User Age </td>
                <td class="w-50">
                <?= $row['user_age']; ?>
                </td>
</tr>
<tr class="m-0">
                <td class="w-25">Phone Number</td>
                <td class="w-50">
                <?= $row['user_phone']; ?>
                </td>
</tr>
   <?php } ?>
 </table>

  </div>

  <a href="<?php echo base_url('User/user_profile_update');?>" >  <button type="button" class="btn btn-danger">Edit</button></a>
         




  <hr>
      
      <footer>
              <p>&copy; @Blogger 2018</p>
      </footer>
      
  </body>
</html>

