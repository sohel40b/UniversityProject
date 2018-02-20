<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
   
      <title>Register Page</title>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="keywords" content="footer, address, phone, icons" />


	  <link rel="stylesheet" type="text/css" href="css/register.css">
	 
	  
	  <!-- Start Nav And Footer Links -->
	  <link rel="stylesheet" type="text/css" href="css/home.css"/>
	  <link rel="stylesheet" href="css/footer-responsive.css">
	  <link rel="stylesheet" type="text/css" href="font/css/fontawesome-all.min.css">
	  <!-- End Nav And Footer Links -->
	 
  </head>
  
  <body>
  
    <!-- Nav header start -->
		<?php include 'nav_header.php';?>
	<!-- Nav header End -->
  
  
  
  
  
     <div class="header">
	    <h2>Register</h2>
	 </div>
	 
	 <form method="post" action="register.php">
	  <!-- display validation errors here -->
	  <?php include('errors.php'); ?>
	   <div class="input-group">
	      <label>Username</label>
		  <input type="text" name="username" value="<?php echo $username; ?>">
	   </div>
	   <div class="input-group">
	      <label>Email</label>
		  <input type="text" name="email" value="<?php echo $email; ?>">
	   </div>
	   <div class="input-group">
	      <label>Password</label>
		  <input type="password" name="password_1">
	   </div>
	   <div class="input-group">
	      <label>Confirm Password</label>
		  <input type="password" name="password_2">
	   </div>
	   <div class="input-group">
	      <button type="submit" name="register" class="btn">Register</button>
	   </div>
	   <p>
	      Already a member? <a href="login.php">Sign In</a>
	   </p>
	 </form>
	 
	 
	 
	 
		<!-- footer start -->
		  <?php include 'footer.php';?>
		<!-- footer End -->
	 
	 
	 
	 
  </body>
</html>