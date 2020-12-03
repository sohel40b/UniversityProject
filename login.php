<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
  
    <title>Login Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<link rel="stylesheet" type="text/css" href="css/login.css">
	  
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
      <?php
		if (@$_GET['register'] == 'true')
			echo '<div id="notification" style="width: 300px; float: right; background: #4CAF50; color: #FFFFFF; text-align: center; margin: 10px 40px; padding: 6px 6px; border: 1px solid #4CAF50;">You have registered successfully.</div>'
	  ?>
	  <script>
		  setTimeout(function(){
			document.getElementById('notification').style.display = 'none';
			/* or
			var item = document.getElementById('notification')
			item.parentNode.removeChild(item); 
			*/
		  }, 2000);
	  </script>
	  <h3 style="width: 300px; float: right; color: #1C6740; text-align: center; margin: 20px 20px; padding: 6px 6px;"><?php echo @$_GET['not_login']; ?> </h3>
  
     <div class="header">
	    <h2>Login</h2>
	 </div>
	 
	 <form method="post" action="login.php">
	   <!-- display validation errors here -->
	  <?php include('errors.php'); ?>
	   <div class="input-group">
	      <label>Username</label>
		  <input type="text" name="username">
	   </div>
	   
	   <div class="input-group">
	      <label>Password</label>
		  <input type="password" name="password">
	   </div>
	   
	   <div class="input-group">
	      <button type="submit" name="login" class="btn">Login</button>
	   </div>
	   <p>
	      Not Yet a member? <a href="register.php">Sign Up</a>
	   </p>
	 </form>
	 
	 
	 
	 
	<!-- footer start -->
		<?php include 'footer.php';?>
    <!-- footer End -->
	 
  </body>
</html>