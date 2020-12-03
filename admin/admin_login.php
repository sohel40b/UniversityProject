<?php include('admin_login_connection.php'); ?>
<!DOCTYPE html>
<html>
  <head>
  
    <title>Admin Page</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="footer, address, phone, icons" />

	<link rel="stylesheet" type="text/css" href="css/admin_login.css">
	  
	 
  </head>
  
  <body>
     <h3 style="text-align: center; float: right; color: red; margin: 0px; margin-right: 10px; padding: 10px 10px;"><?php echo @$_GET['not_admin']; ?> </h3>
  
     <div class="header">
	    <h2>Admin</h2>
	 </div>
	 
	 <form method="post" action="admin_login.php">
	   <!-- display validation errors here -->
	   <div class="input-group">
	      <label>Email</label>
		  <input type="text" name="email">
	   </div>
	   
	   <div class="input-group">
	      <label>Password</label>
		  <input type="password" name="password">
	   </div>
	   
	   <div class="input-group">
	      <button type="submit" name="admin" class="btn">Login</button>
	   </div>

	 </form>
	 
	 
	 
	 
	 
  </body>
</html>