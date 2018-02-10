 <?php
 //logout
   if(isset($_GET['logout'])){
	   session_destroy();
	   header('location: ../login/login.php');
   }
   
?>