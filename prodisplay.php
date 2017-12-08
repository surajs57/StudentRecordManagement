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
			<td>Project ID</td>
			<td>Name</td>
			<td>About</td>
			<td>Category</td>
			<td>Location</td>
            <td>Ratings</td>
			<td>Start Date</td>
			<td>Status</td>
			<td>Action</td>

			</tr>
	</thead>
		
	<?php
	$query="CALL pdisplay()";
		$query1="SELECT FID FROM FOUNDER";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	while($row=mysqli_fetch_assoc($query_run)){
	
		echo "<tr>";
		 echo "<td>".$row['PID']."</td>";
		echo "<td>".$row['PNAME']."</td>";
		echo "<td>".$row['PDESC']."</td>";
		echo "<td>".$row['PCAT']."</td>";
		echo "<td>".$row['PLOC']."</td>";

	    echo "<td>".$row['PRATING']."</td>";
	 	echo "<td>".$row['START_DATE']."</td>";
		echo "<td>".$row['STATUS']."</td>";
        echo "<td><u><a href='update.php?p= ".$row['PID']." '>Update</a></u></td>";
        echo "</tr>";
	}
	?>
	</table>
	
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>

</body>
</html>