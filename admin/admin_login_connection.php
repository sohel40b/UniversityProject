  <?php
    session_start();
    include('../db.php');

    if(isset($_POST['admin'])){
    	$email = mysqli_real_escape_string($con,$_POST['email']);
    	$pass = mysqli_real_escape_string($con,$_POST['password']);
    	$sel_user = "select * from admins where email='$email' AND pass='$pass'";
    	$run_user = mysqli_query($con, $sel_user);
    	$check_user = mysqli_num_rows($run_user);
    	if($check_user==0){
    		echo "<script>alert('Password or Email is Worong, try again')</script>";

    	}
    	else{
    		$_SESSION['email']=$email;
    		echo "<script>window.open('admin_dashboard.php?logged_in=You Have successfully logged in!','_self')</script>";
    	}

    }
   ?>