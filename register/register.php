<?php include('../server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
   
      <title>Register Page</title>
	  <link rel="stylesheet" type="text/css" href="css/register.css">
	 
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="keywords" content="footer, address, phone, icons" />
	  
	  <link href="../css/home.css" rel="stylesheet" type="text/css"/>
	  
	  <!-- Start Footer Links -->
	  <link rel="stylesheet" href="../css/footer-responsive.css">
	  <link rel="stylesheet" type="text/css" href="../font/css/fontawesome-all.min.css">
	  <!-- End Footer Links -->
	 
  </head>
  
  <body>
  
      <div class="nav">
        <img src="../img/logo.jpg"/>
		<a class="active" href="../home.php">home</a>
        <a href="../about.php">About</a>
        <a href="../contact.php">Contact</a>
        <a href="../support.php">Support</a>
        <button onclick="window.location='../login/login.php'" class="sign">Log In</button>
     </div>
  
  
  
  
  
     <div class="header">
	    <h2>Register</h2>
	 </div>
	 
	 <form method="post" action="register.php">
	  <!-- display validation errors here -->
	  <?php include('../errors.php'); ?>
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
	      Already a member? <a href="../login/login.php">Sign In</a>
	   </p>
	 </form>
	 
	 
	 
	 
	 <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Daffodil International University</h3>

				<p class="footer-links">
					<a href="home.php">Home</a>
					·
					<a href="partner.php">Partners</a>
					·
					<a href="support.php">Faq</a>
					·
					<a href="contact.php">Contact</a>
					·
					<a href="about.php">About</a>
				</p>

				<p class="footer-company-name">Daffodil International University &copy; 2017</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fas fa-map-marker-alt"></i>
					<p><span>4/2, Sobhanbag, Mirpur Road</span> Dhanmondi, Dhaka-1207</p>
				</div>

				<div>
					<i class="fas fa-phone"></i>
					<p>+88 48111639, 48111670</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:admission@daffodilvarsity.edu.bd">admission@daffodilvarsity.edu.bd</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>Daffodil International University</span>
					Daffodil International University (DIU) is recognized in independent government assessments as one of top graded universities 
					in Bangladesh.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/daffodilvarsity.edu.bd"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/daffodilvarsity"><i class="fab fa-twitter"></i></a>
					<a href="https://www.linkedin.com/company/daffodil-international-university"><i class="fab fa-linkedin-in"></i></a>
					<a href="https://www.youtube.com/user/webmasterdiu"><i class="fab fa-youtube"></i></a>

				</div>

			</div>

		</footer>
	 
	 
	 
	 
	 
	 
  </body>
</html>