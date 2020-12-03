<?php include('../server.php'); ?>
<?php include('../logout.php'); ?>
<?php 

if(!$_SESSION["isLogin"] ){
	header('location: ../login/login.php');
}


?>
<!DOCTYPE html>
<html>
  <head>
   
     <title>Student Dashborad</title>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	 <link rel="stylesheet" type="text/css" href="css/payment.css">
	 <link rel="stylesheet" type="text/css" href="../font/css/fontawesome-all.min.css">
	 
	 
  </head>
  
  <body>
	
        <section class="sideMenu">
		   <nav>
		      <a href="../student/dashboard.php" class="activeHome"><i class="fas fa-home"></i>Home</a>
			  <a href="#" class="accordion"><i class="fas fa-registered"></i>Payment</a>
			  <div class="panel">
				  <a href="payment.php">Pay Tuition free</a>
				  <a>Payment Ledger</a>
				  <a>Payment Scheme</a>
			  </div>		
              <a href="#"><i class="fas fa-id-card"></i>Smart Card</a>
		      <a href="#" class="accordion"><i class="fas fa-registered"></i>Registration</a>
			  <div class="panel">
				  <a>Pre Registration</a>
				  <a>Course Registration</a>
				  <a>Drop Semester</a>
			  </div>
		      <a href="#"><i class="fas fa-columns"></i>Live Result</a>
		      <a href="#"><i class="fas fa-user-circle"></i>Teaching Evaluation</a>
		      <a href="#"><i class="fas fa-archive"></i>Result</a>
		      <a href="#"><i class="fas fa-graduation-cap"></i>Convocation Apply</a>
			  <div class="content">
	                <?php if (isset($_SESSION['success'])): ?>
		    
			      <div class="error success">
			          <h3>
				          <?php 
				               echo $_SESSION['success'];
					           unset($_SESSION['success']);
				            ?>
				      </h3>
			      </div>
			
		            <?php endif ?>
		
		            <?php if(isset($_SESSION["username"])): ?>
		            
			        <p> <a href="../student/dashboard.php?logout='1'" style=""><i class="fas fa-sign-out-alt"></i>Logout</a> </p>
		            <?php endif ?>
	            </div>
		   </nav>
        </section>
       
	   
	   <header>
	      <div class="search-area">
		     <i class="fas fa-search"></i>
			 <input type="text" name="" value="">
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
					 <div class="content">
	                        <?php if (isset($_SESSION['success'])): ?>
		    
							   <div class="error success">
								  <h3>
									 <?php 
										   echo $_SESSION['success'];
										   unset($_SESSION['success']);
									 ?>
								  </h3>
							   </div>
			
							 <?php endif ?>
					
							 <?php if(isset($_SESSION["username"])): ?>	
							 <p> <a href="../student/dashboard.php?logout='1'" style="">Logout</a> </p>
							 <?php endif ?>
					 </div>
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
	        <a style="color:red;">hello</a>
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
		 
		       <script src="../js/buttons.js"></script>
		 
         <!-- End JS Link -->		 
	 
	 
  </body>
</html>