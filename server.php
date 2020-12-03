<?php 
    include('manage_session.php'); 
    include('db.php'); 
	
	$username = "";
	$email = "";
	$errors = array();
   
   //if the register button is clicked
   if (isset($_POST['register'])){
	   
	   $username = mysqli_real_escape_string($con,$_POST['username']);
	   $email = mysqli_real_escape_string($con,$_POST['email']);
	   $password_1 = mysqli_real_escape_string($con,$_POST['password_1']);
	   $password_2 = mysqli_real_escape_string($con,$_POST['password_2']);
	   
	 
	   
	   //ensure that form fields are filled properly
	   if(empty($username)){
		   array_push($errors, "Username is required");
	   }
	   else{
		     if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
             array_push($errors, "Only letters are allowed.Digit are not Allow.");
        }
	   }
	   if(empty($email)){
		   array_push($errors, "Email is required");
	   }
	   else{
		   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           array_push($errors, "Enter Valid Email");
        }
	   }
	   if(empty($password_1)){
		   array_push($errors, "Password is required");
	   }
	   if($password_1 != $password_2){
		   array_push($errors, "The Two passwords do not match");
	   }
	   
	   
	   
	   
	   //if username already exits
	  $sql = "SELECT id FROM users WHERE username = '$username' LIMIT 1";
	  $check_query = mysqli_query($con,$sql);
	  $count_username = mysqli_num_rows($check_query);
	  if($count_username > 0){
					array_push($errors , "Username already exists");
		}
	   
	   //if email already exists
	  $sql = "SELECT id FROM users WHERE email = '$email' LIMIT 1";
	  $check_query = mysqli_query($con,$sql);
	  $count_email = mysqli_num_rows($check_query);
	  if($count_email > 0){
					array_push($errors , "Email already exists");
		}
		
	   //if there are no errors, save user to database
	   if(count($errors) == 0){
		   $password = md5($password_1);
		   $sql = "INSERT INTO users(username, email, password) 
		   VALUES('$username', '$email', '$password')";
		   if(mysqli_query($con, $sql)){
				  $_SESSION['username'] = $username;
		          //$_SESSION['success'] = "You are now logged in";
		          //header('location: login.php');
				  header('Location: login.php?register=true');
		   }
		 
		   
	   }
	   
	   
	   
   }
   //log user in from login page
   if(isset($_POST['login'])){
	   $username = mysqli_real_escape_string($con,$_POST['username']);
	   $password = mysqli_real_escape_string($con,$_POST['password']);
	   
	   //ensure that form fields are filled properly
	   if(empty($username)){
		   array_push($errors, "Username is required");
	   }
	   if(empty($password)){
		   array_push($errors, "Password is required");
	   }
	   if(count($errors) == 0 ){
		   $password = md5($password);
		   $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		   $result = mysqli_query($con, $query);
		   if(mysqli_num_rows($result) == 1){
			   //log user in
			   $_SESSION['username'] = $username;
               header('location: student_dashboard/dashboard.php');
		   }else{

			   array_push($errors, "Wrong username/password combination");
		   }
	   }
	   
   }

   /*
   //logout
   if(isset($_GET['logout'])){
	   session_destroy();
	   unset($_SESSION['username']);
	   header('location: ../login.php');
   }
   */

?>