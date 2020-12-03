<?php include('../server.php'); ?>
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
        		<h1><a href="dashboard.php" id="logo">DIU</a></h1>
        	</div>
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
		      <a href="all_subject.php" class="cart"><i class="fas fa-book"></i></a>
		      <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
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
						  <?php

						   $get_sub = "select * from subject";
						   $run_sub = mysqli_query($con, $get_sub);
						   while ($row_sub=mysqli_fetch_array($run_sub)) {
						      $sub_id = $row_sub['subject_id'];
						      $sub_sem = $row_sub['subject_sem'];
						      $sub_dept = $row_sub['subject_dept'];
						      $sub_code = $row_sub['subject_code'];
						      $sub_title = $row_sub['subject_title'];
						      $sub_cost = $row_sub['subject_cost'];

						      echo "
						         <div id='single_subject'>
						                 <tr>
						                   <td>$sub_code</td>
						                   <td>$sub_title</td>
						                   <td>$sub_cost</td>
						                   <td><a href='pre-registation.php?add_cart=$sub_id'><button class='course'>Add to Course</button></a></td>
						                 </tr>
						         </div>


						        ";
						      
						   }
						   ?>
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
		 
		       <script src="js/buttons.js"></script>
		 
         <!-- End JS Link -->		 
	 
	 
  </body>
</html>