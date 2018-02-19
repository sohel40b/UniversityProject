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

function getSub(){

   global $con;

   $get_sub = "select * from subject order by RAND() LIMIT 0,6";
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
                   <td><button class='course'>Add to Course</button></td>
                 </tr>
         </div>


        ";
      
   }








}






?>