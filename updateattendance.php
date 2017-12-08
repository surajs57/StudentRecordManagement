<?php
require 'dbconfig/config.php';



 ?>
<html>
<body style="background-color:cream;">


		
	<?php
	
	if(isset($_GET['uat'])){
	$uat=(int)$_GET['uat'];
	$query="SELECT * FROM attendance WHERE usn='$uat'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b'])){
			$usn1=$_POST['usn1'];
			$ac1=$_POST['ac1'];
	$tnc1=$_POST['tnc1'];
	
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE attendance SET usn='$usn1',ac='$ac1',tnc='$tnc1' WHERE usn='$uat'";
			$run=mysqli_query($con,$sql1);
          if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/attendisplay.php';</script>";
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
 <h3><b>USN:<br>
	<input class ='ui' name='usn1' value='<?php echo $row['usn'];?>'><br>
 Attended Classes:<br>
	<input class='ui' name='ac1' value='<?php echo $row['ac'];?>'><br>
 Total Classes:<br>
		<input class ='ui'name='tnc1' value='<?php echo $row['tnc'];?>'><br>
 
		
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

		
		
	