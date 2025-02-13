<?php include('../server.php'); ?>
<?php include('../logout.php'); ?>
<?php
if(!$_SESSION["isLogin"] ){
	header('location: ../login/login.php');
}
?>
<?php include("../functions/functions.php"); ?>
<!DOCTYPE html>
<html>
  <head>
   
     <title>Student Dashborad</title>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	 <link rel="stylesheet" type="text/css" href="css/pre-registation.css">
	 <link rel="stylesheet" type="text/css" href="../font/css/fontawesome-all.min.css">
	 
	 
  </head>
  
  <body>



  	    <header>
  	    	<div class="lo">
        		<h1><a href="../student/dashboard.php" id="logo">DIU</a></h1>
        	</div>
		    <div id="form">
		      <form method="get" action="results.php" enctype="multipart/form-data">
		      	<i class="fas fa-search"></i>
		      	<input type="text" name="user_query">
				<!--<input type="submit" name="search" value="search">-->
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
	
        <div class="main_content">
		   <div class="slidebar">
		   	<div class="dept">
		      <h2>Department</h2>
			        <div class="department">
				      <?php getDepts(); ?>
				    </div>
			</div>
			<div class="sem">
			  <h2>Semester</h2>
				    <div class="semester">	
		              <?php getSems(); ?>
			        </div>
		    </div>	
		   </div>


		   <div class="content_area">
	                <div class="subject_box">
	                	<table id="student_box">
						  <tr>
						    <th>Course Code</th>
						    <th>Course Title</th>
						    <th>Credit</th>
						    <th>Add Course</th>
						  </tr>
						  <?php getSub(); ?>
						</table>
	                </div>
	       </div>



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