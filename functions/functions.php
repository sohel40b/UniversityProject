<?php 

   //connect to the database
   include('../db.php'); 




   //getting the user ip address
   function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}

//creating the cart
   function cart(){

    if(isset($_GET['add_cart'])){
      global $con;
      $ip = getIp();
      $sub_id = $_GET['add_cart'];
      $check_sub = "select * from cart where ip_add='$ip' AND s_id='$sub_id'";
      $run_check = mysqli_query($con, $check_sub);
      if(mysqli_num_rows($run_check)>0){
        echo "";
      }
      else{
        $insert_sub ="insert into cart(s_id,ip_add) values('$sub_id','$ip')";
        $run_sub = mysqli_query($con, $insert_sub);
        echo "<script>window.open('pre-registation.php','_self')</script>";



      }

    }

}
 // getting the total added Subject
 
 function total_subject(){
 
  if(isset($_GET['add_cart'])){
  
    global $con; 
    
    $ip = getIp(); 
    
    $get_sub = "select * from cart where ip_add='$ip'";
    
    $run_sub = mysqli_query($con, $get_sub); 
    
    $count_sub = mysqli_num_rows($run_sub);
    
    }
    
    else {
    
    global $con; 
    
    $ip = getIp(); 
    
    $get_sub = "select * from cart where ip_add='$ip'";
    
    $run_sub = mysqli_query($con, $get_sub); 
    
    $count_sub = mysqli_num_rows($run_sub);
    
    }
  
  echo $count_sub;
  }



// Getting the total price of the items in the cart 
  
  function total_cost(){
  
    $total = 0;
    
    global $con; 
    
    $ip = getIp(); 
    
    $sel_cost = "select * from cart where ip_add='$ip'";
    
    $run_cost = mysqli_query($con, $sel_cost); 
    
    while($s_price=mysqli_fetch_array($run_cost)){
      
      $subs_id = $s_price['s_id']; 
      
      $sub_cost = "select * from subject where subject_id='$subs_id'";
      
      $run_sub_cost = mysqli_query($con,$sub_cost); 
      
      while ($ss_price = mysqli_fetch_array($run_sub_cost)){
      
      $subject_price = array($ss_price['subject_cost']);
      
      $values = array_sum($subject_price);
      
      $total +=$values;
      
      }
    
    
    }
    
    echo "$" . $total;
    
  
  }





   //getting the Semester

   function getSems(){

   	global $con;

   	$get_sems = "select * from semester";
   	$run_sems = mysqli_query($con, $get_sems);

   	while ($row_sems=mysqli_fetch_array($run_sems)){

   		$sem_id = $row_sems['sem_id'];
   		$sem_title = $row_sems['sem_title'];
   		echo "<a href='pre-registation.php?sem=$sem_id'>$sem_title</a>";
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
   		echo "<a href='pre-registation.php'>$dept_title</a>";
   	}




   }

   //getting the Subject

function getSub(){

  if(!isset($_GET['sem'])){

   global $con;

   $get_sub = "select * from subject ORDER BY rand() LIMIT 4";
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

}


}



 //getting the Semester Based Subject

function getSemSub(){

  if(isset($_GET['sem'])){
    $sem_id = $_GET['sem'];

   global $con;

   $get_sem_sub = "select * from subject where subject_sem='$sem_id'";
   $run_sem_sub = mysqli_query($con, $get_sem_sub);
   while ($row_sem_sub=mysqli_fetch_array($run_sem_sub)) {
      $sub_id = $row_sem_sub['subject_id'];
      $sub_sem = $row_sem_sub['subject_sem'];
      $sub_dept = $row_sem_sub['subject_dept'];
      $sub_code = $row_sem_sub['subject_code'];
      $sub_title = $row_sem_sub['subject_title'];
      $sub_cost = $row_sem_sub['subject_cost'];

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

}


}





?>