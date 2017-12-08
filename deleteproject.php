<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>
Delete project
</title>
<link rel="stylesheet" href="CSS/style.css">
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

.deleteForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */


#btn{
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  width:25%;
}

button:hover {
  opacity: 0.8;
}

.step.active {
  opacity: 1;
}
}
</style>
<body>
<div style="width:70%;padding:7px;margin:0 auto;color:#42729B;">
<u><h2>Delete Projects</h2></u>
<form style="background-color:white;" class="deleteform" method="post">
	<table>
	<thead>
		<tr>
			<td>Project ID</td>
			<td>Name</td>
			<td>Delete</td>
			</tr>
	</thead>
	<?php 
		if(isset($_GET['d'])){
			$d=$_GET['d'];
			$query1="CREATE TRIGGER `user_trig` AFTER DELETE ON `PROJECT_DETAILS`, FOR EACH ROW INSERT INTO `tgtime` VALUES( NOW())";
						mysqli_query($con,$query1);

			$query="delete from PROJECT_DETAILS where PID='$d'";
			
			mysqli_query($con,$query);
			}
	?>
		
	<?php
	$query="SELECT * FROM `PROJECT_DETAILS`";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	while($row=mysqli_fetch_assoc($query_run)){
		echo "<tr>";
		 echo "<td>".$row['PID']."</td>";
		echo "<td>".$row['PNAME']."</td>";
		
		echo "<td><a href='deleteproject.php?d=".$row['PID']."'>Delete</a></td>";
	echo "</tr>";}
		
		?>
	</table>
	
		</body>
</html>
	