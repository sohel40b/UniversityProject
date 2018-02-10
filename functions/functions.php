<?php 
   
   $con = mysqli_connect("localhost","root","","cse");

   //getting the Semester

   function getSems(){

   	global $con;

   	$get_sems = "select * from semester";
   	$run_sems = mysqli_query($con, $get_sems);

   	while ($row_sems=mysqli_fetch_array($run_sems)){

   		$sem_id = $row_sems['sem_id'];
   		$sem_title = $row_sems['sem_title'];
   		echo "<a href='#'>$sem_title</a>";
   	}




   }


      //getting the Department

   function getDepts(){

   	global $con;

   	$get_depts = "select * from department";
   	$run_depts = mysqli_query($con, $get_depts);

   	while ($row_depts=mysqli_fetch_array($run_depts)){

   		$dept_id = $row_depts['dept_id'];
   		$dept_title = $row_depts['dept_title'];
   		echo "<a href='#'>$dept_title</a>";
   	}




   }







?>