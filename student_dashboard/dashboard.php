<?php include('../server.php'); ?>
<?php
if(!isset($_SESSION['username'])){
	echo "<script>window.open('../login.php?not_login=Please Login Again','_self')</script>";
}
else{
?>
<!DOCTYPE html>
<html>
  <head>
   
     <title>Student Dashborad</title>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="css/dashboard.css">
	 <link rel="stylesheet" type="text/css" href="../font/css/fontawesome-all.min.css">
	 
	 
  </head>
  
  <body>
	
        <section class="sideMenu">
		   <nav>
		      <a href="#" class="activeHome"><i class="fas fa-home"></i>Home</a>
			  <a href="#"><i class="fas fa-registered"></i>Payment</a>		
              <a href="#"><i class="fas fa-id-card"></i>Smart Card</a>
		      <a href="#" class="accordion"><i class="fas fa-registered"></i>Registration</a>
			  <div class="panel">
				  <a href="pre-registation.php">Pre Registration</a>
				  <a>Course Registration</a>
				  <a>Drop Semester</a>
			  </div>
		      <a href="#"><i class="fas fa-columns"></i>Live Result</a>
		      <a href="#"><i class="fas fa-user-circle"></i>Teaching Evaluation</a>
		      <a href="#"><i class="fas fa-archive"></i>Result</a>
		      <a href="#"><i class="fas fa-graduation-cap"></i>Convocation Apply</a>

		   </nav>
        </section>
       
	   
	   <header>
	      <div id="form">
	      	<form method="get" action="results.php" enctype="multipart/form-data">
	      	<i class="fas fa-search"></i>
	      	<input type="text" name="user_query">
			<input type="submit" name="search" value="">
			</form>
	      </div>
		  
		  <div class="dropdown">
                 <button class="dropbtn" onclick="myFunction()">Profile<i class="fa fa-caret-down " aria-hidden="true"></i></button>
                 <div class="dropdown-content" id="myDropdown">
				 
				      <?php if(isset($_SESSION["username"])): ?>
							 <p id="username">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
					  <?php endif ?>
					  
					  <hr>
                     <a href="#">Edit Profile</a>
                     <a href="#">Change Password</a>
                     <a href="../logout.php" style="">Logout</a>
				 </div>
			</div>
		  
		  <div class="user-area">
		      <a href="#" class="add">+ Add</a>
		      <a href="#" class="notification"><i class="fas fa-bell"></i><span class="circle">3</span></a>
		      <a href="#" class="down">
			     <div class="user-img"></div>
			  </a>
		  </div>
		   
	   </header>
	   
	   <div class="mainbody">
	        <a style="color:red;"></a>
	   </div>
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   <!-- Start profile dropdown menu -->
	   <script>
				/* When the user clicks on the button, 
				toggle between hiding and showing the dropdown content */
				function myFunction() {
					document.getElementById("myDropdown").classList.toggle("show");
				}

				// Close the dropdown if the user clicks outside of it
				window.onclick = function(e) {
				  if (!e.target.matches('.dropbtn')) {
					var myDropdown = document.getElementById("myDropdown");
					  if (myDropdown.classList.contains('show')) {
						myDropdown.classList.remove('show');
					  }
				  }
				}
	  </script>
	  
	  <!-- End profile dropdown menu -->
		
      <!-- Start Accrodion menu -->
       <script>
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
				  acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight){
					  panel.style.maxHeight = null;
					} else {
					  panel.style.maxHeight = panel.scrollHeight + "px";
					} 
				  });
				}
		</script>	
        
         <!-- End Accrodion menu -->






         
		 <!-- Start JS Link -->
		 
		       <script src="js/buttons.js"></script>
		 
         <!-- End JS Link -->		 
	 
	 
  </body>
</html>
<?php } ?>