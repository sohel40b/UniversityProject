<?php
session_start();
if(!isset($_SESSION['email'])){
	echo "<script>window.open('admin_login.php?not_admin=You are not an admin','_self')</script>";
}
else{
?>

<!DOCTYPE html>
<html>
  <head>

     <title>Admin Dashborad</title>
     <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">

	 <link rel="stylesheet" type="text/css" href="css/admin_dashboard.css">
	 <link rel="stylesheet" type="text/css" href="../font/css/fontawesome-all.min.css">


  </head>

  <body>



  	    <header>
  	    	<div class="lo">
        		<h1><a href="" id="logo">DIU</a></h1>
        	</div>

		    <div class="dropdown">
                 <button class="dropbtn" onclick="myFunction()">Admin<i class="fa fa-caret-down " aria-hidden="true"></i></button>
                 <div class="dropdown-content" id="myDropdown">

                     <a href="logout.php" style="">Logout</a>
				 </div>
			</div>

	    </header>

	   <div class="main_content">
		   <div class="slidebar">
			   <div class="all_content">
			        <h2>Manage Content</h2>
				        <div class="manage_content">
			              <a href='insert_subject.php'>Insert New Subject</a>
			              <a href='#'>View All Subject</a>
			              <a href='#'>Insert New Semester</a>
			              <a href='#'>View All Semester</a>
			              <a href='#'>Insert New Department</a>
			              <a href='#'>View All Department</a>
			              <a href='#'>View Studnet</a>
			              <a href='#'>View Add Course</a>
			              <a href='#'>View Payments</a>
			            </div>
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


  </body>
</html>

<?php } ?>
