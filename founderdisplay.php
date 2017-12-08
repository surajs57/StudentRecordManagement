<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
<title>
Project Details
</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="CSS/style.css">
</head>
<body>


	

<table class="responsive-table striped">
	<thead>
		<tr>
			
			<td>FOUNDER ID</td>
			<td>FOUNDER</td>
			<td>TEAM</td>
			<td>Action</td>

			
			
		</tr>
	</thead>
		
	<?php
	$query="SELECT * FROM FOUNDER";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	while($row=mysqli_fetch_assoc($query_run)){
		echo "<tr>";
		 echo "<td>".$row['FID']."</td>";
		echo "<td>".$row['PFNAME']."</td>";
		echo "<td>".$row['PFTEAMNAME']."</td>";
		
        echo "<td><u><a href='updatefounder.php?f= ".$row['FID']."'>Update</a></u>
		<u><a href='founderdisplay.php?df= ".$row['FID']."'>Delete</a></u></td>";

		

        echo "</tr>";
	}
	if(isset($_GET['df'])){
		$df=$_GET['df'];
		
			$query="delete from FOUNDER where FID='$df'";
			
			mysqli_query($con,$query);
			echo "<script>location.href='http://localhost/founderdisplay.php';</script>";
	}
	?>
	</table>
	
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>











</body>
</html>