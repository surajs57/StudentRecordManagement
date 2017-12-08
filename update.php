<?php
require 'dbconfig/config.php';



 ?>
<html>
<body style="background-color:cream;">


		
	<?php
	
	if(isset($_GET['p'])){
	$pa=(int)$_GET['p'];
	$query="SELECT * FROM PROJECT_DETAILS WHERE PID='$pa'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b'])){
			$upname1=$_POST['upname'];
			$udesc=$_POST['udesc'];
	$upcat=$_POST['upcat'];
	$uploc=$_POST['uploc'];
	$uprating=$_POST['uprating'];
	$ustart=$_POST['ustart'];
	$ustatus=$_POST['ustatus'];
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1',PDESC='$udesc',PCAT='$upcat',PLOC='$uploc',PRATING='$uprating',START_DATE='$ustart',STATUS='$ustatus' WHERE PID='$pa'";
			$run=mysqli_query($con,$sql1);
          if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/prodisplay.php';</script>";
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
 <h3><b>Name:<br>
	<input class ='ui' name='upname' value='<?php echo $row[1];?>'><br>
 Description::<br>
	<input class='ui' name='udesc' value='<?php echo $row[2];?>'><br>
 Category::<br>
		<input class ='ui'name='upcat' value='<?php echo $row[3];?>'><br>
 Location::<br>
		<input class ='ui' name='uploc' value='<?php echo $row[4];?>'><br>
 Rating::<br>
	   <input class='ui' name='uprating' value='<?php echo $row[5];?>'><br>
 Start Date::<br>
 <input class='ui' name='ustart' value='<?php echo $row[6];?>'><br>
		Status:</h3><br></b>
		<input class='ui' name='ustatus' value='<?php echo $row[7];?>'><br>
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

		
		
	