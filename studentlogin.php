<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
<title>
Student Display</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="CSS/style.css">
</head>
<a href="student.php"><button  style="background-color: white;
    color: grey;
    border: 2px solid #555555;
	border-radius:25%;
	width:9%;
	margin:4px 1150px ;
	background-color: cream;
	box-shadow: 2px 2px 2px #888888;
	"
	><h7><b>Assignment</h7><b></button></a>
	<br>
	<a href="login.php"><button  style="background-color: white;
    color: grey;
    border: 2px solid #555555;
	border-radius:25%;
	width:7%;
	margin:4px 1150px ;
	background-color: cream;
	box-shadow: 2px 2px 2px #888888;
	"
	><h7><b>Sign Out</h7><b></button></a>
<body>
<body>

<table class="responsive-table striped">
	<thead>
		<tr>
			<td>USN</td>
			<td>Name</td>
			<td>Email</td>
			<td>Contact</td>
			<td>Semester</td>
            <td>Subject</td>
			

			</tr>
	</thead>
		
	<?php
	$query="SELECT * FROM student";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	while($row=mysqli_fetch_assoc($query_run)){
	
		echo "<tr>";
		 echo "<td>".$row['usn']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['email']."</td>";
				echo "<td>".$row['contact']."</td>";

		echo "<td>".$row['semester']."</td>";
		echo "<td>".$row['subject']."</td>";

	   
        echo "</tr>";
	}
	?>
	</table>
	
	
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>

</body>
</html>