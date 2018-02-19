<?php include('include/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Inserting Subject</title>

	<style>
		#customers {
		    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		    border-collapse: collapse;
		    width: 60%;
		    margin-left: 300px;
		}

		#customers td, #customers th {
		    border: 1px solid #ddd;
		    padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: center;
		    background-color: #4CAF50;
		    color: white;
		}
		#customers td{
		}
		.button {
		    background-color: #4CAF50;
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
		}
</style>
</head>
<body>
	<form action="insert_subject.php" method="post" enctype="multipart/form-data">

		<table id="customers">
		  <tr>
		    <th colspan="2"><h3>Add New Subject Here</h3></th>
		  </tr>
		  <tr>
		    <td align="center">Subject Title</td>
		    <td><input type="text" name="subject_title" required></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Semester</td>
		    <td>
		    	<select name="subject_sem" required>
		    		<option>Select a Semester</option>
		    		<?php
		    		  $get_sems = "select * from semester";
					   	$run_sems = mysqli_query($con, $get_sems);

					   	while ($row_sems=mysqli_fetch_array($run_sems)){

					   		$sem_id = $row_sems['sem_id'];
					   		$sem_title = $row_sems['sem_title'];
					   		echo "<option value='$sem_id'>$sem_title</option>";
					   	}
		    		?>
		    	</select>
		    </td>
		  </tr>
		  <tr>
		    <td align="center">Subject Department</td>
		    <td>
		    	<select name="subject_dept" required>
		    		<option>Select a Deparment</option>
		    		<?php
		    		  $get_depts = "select * from department";
					   	$run_depts = mysqli_query($con, $get_depts);

					   	while ($row_depts=mysqli_fetch_array($run_depts)){

					   		$dept_id = $row_depts['dept_id'];
					   		$dept_title = $row_depts['dept_title'];
					   		echo "<option value='$dept_id'>$dept_title</option>";
					   	}

		    		?>
		    	</select>
		    </td>
		  </tr>
		  <tr>
		    <td align="center">Subject Code</td>
		    <td><input type="text" name="subject_code" required></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Cost</td>
		    <td><input type="text" name="subject_cost" required></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Keywords</td>
		    <td><input type="text" name="subject_keywords" required></td>
		  </tr>
		  <tr>
		  	<td colspan="2" align="right"><input type="submit" class="button" name="insert_post" value="Add Course"></td>
		  </tr>
  
       </table>
		
	</form>
</body>
</html>

<?php

    if(isset($_POST['insert_post'])){
    	//getting the text data from the fields
        $subject_title = $_POST['subject_title'];
    	$subject_sem = $_POST['subject_sem'];
    	$subject_dept = $_POST['subject_dept'];
    	$subject_code = $_POST['subject_code'];
    	$subject_cost = $_POST['subject_cost'];
    	$subject_keywords = $_POST['subject_keywords'];

        $insert_subject = "insert into subject (subject_sem,subject_dept,subject_code,subject_title,subject_cost,subject_keywords) values('$subject_sem','$subject_dept','$subject_code','$subject_title','$subject_cost','$subject_keywords')";

        $insert_sub = mysqli_query($con, $insert_subject);
        if($insert_sub){
        	echo "<script>alert('Subject Has Been Inserted')</script>";
        	echo "<script>window.open('insert_subject.php','_self')</script>";

        }






    }









 ?>