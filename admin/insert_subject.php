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
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Semester</td>
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Department</td>
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Image</td>
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Price</td>
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Description</td>
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		    <td align="center">Subject Keywords</td>
		    <td><input type="text" name="product_title"></td>
		  </tr>
		  <tr>
		  	<td colspan="2" align="right"><input type="submit" class="button" name="insert_post" value="Add Course"></td>
		  </tr>
  
       </table>
		
	</form>
    
</body>
</html>