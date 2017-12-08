<?php
require 'dbconfig/config.php';



 ?>
<html>
<body style="background-color:cream;">


		
	<?php
	
	if(isset($_GET['up'])){
	$up=(int)$_GET['up'];
	$query="SELECT * FROM parent WHERE puserid='$up'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b'])){
			$puserid=$_POST['puserid'];
			$name=$_POST['name'];
	$pemail=$_POST['pemail'];
	$pcontact=$_POST['pcontact'];
		$usn=$_POST['usn'];
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE parent SET psuerid='$puserid',name='$name',pemail='$pemail',pcontact='$pcontact',usn=$usn WHERE puserid='$up'";
			$run=mysqli_query($con,$sql1);
          if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/parentdisplay.php';</script>";
			}
			else
			{
				echo '<script type="text/javascript">alert("Updation Failed!!")</script>';
			}
		}		
		
	
	
	?>
		<form style=" background-color: #ffffff;text-align:center;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;" action="" method="POST">
	<div style="margin:-50px 100px;">	
 <h3><b>Userid:<br>
	<input class ='ui' name='puserid' value='<?php echo $row['puserid'];?>'><br>
 Name:<br>
	<input class='ui' name='name' value='<?php echo $row['name'];?>'><br>
 Email:<br>
		<input class ='ui'name='pemail' value='<?php echo $row['pemail'];?>'><br>
 Contact:<br>
		<input class ='ui' name='pcontact' value='<?php echo $row['pcontact'];?>'><br>
 USN<br>
	   <input class='ui' name='usn' value='<?php echo $row['usn'];?>'><br>
 
		<input type="submit" style="width:60%" name='b' />
		</div>
		</form>
		<style>
		.ui{
			width:60%;padding:7px;margin:0%;color:#42729B;background-color:cream;
		}
		</style>
	
	
	

	
	
	
	
	


</body>
</html>

		
		
	