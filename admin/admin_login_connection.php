  <?php
    $errors = array();
    $db2 = mysqli_connect('localhost','root', '', 'admin');
  //if the admin login button is clicked
   if(isset($_POST['admin'])){

	   $email = mysqli_real_escape_string($db2,$_POST['email']);
	   $pass = mysqli_real_escape_string($db2,$_POST['password']);
	   
	   //ensure that form fields are filled properly
	   if(empty($email)){
		   array_push($errors, "Username is required");
	   }
	   if(empty($pass)){
		   array_push($errors, "Password is required");
	   }
	   if(count($errors) == 0 ){

		   $query = "SELECT * FROM admin_user WHERE email='$email' AND pass='$pass'";
		   $result = mysqli_query($db2, $query);
		 
		   if(mysqli_num_rows($result) == 1){
			   //log user in
			   $_SESSION['email'] = $email;

		       header('location: admin_dashboard.php');
		   }else{
			   array_push($errors, "Wrong username/password combination");
		   }
	   }
	   
   }
   ?>