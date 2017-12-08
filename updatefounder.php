<?php
require 'dbconfig/config.php';

?>
<html>
<body>


		
	<?php
	
	if(isset($_GET['f'])){
	$fa=(int)$_GET['f'];
	$query="SELECT * FROM FOUNDER WHERE FID='$fa'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b1'])){
			$upfname=$_POST['upfname'];
	$upfteamname=$_POST['upfteamname'];
	
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE FOUNDER SET PFNAME='$upfname',PFTEAMNAME='$upfteamname' WHERE FID='$fa'";
			$run=mysqli_query($con,$sql1);
			if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/founderdisplay.php';</script>";
			}
			else
			{
				echo '<script type="text/javascript">alert("Updation Failed!!")</script>';
			}
		}
	
	
	?>
		<form style=" background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;text-align:center;" action="" method="POST">
		 
	<h3>Project Founder Name:<br>
	<input class ='ui' name='upfname' value='<?php echo $row[1];?>'><br>
	Team:</h3><br>
	<input class='ui' name='upfteamname' value='<?php echo $row[2];?>'><br>
		
		<input type="submit" style="width:60%;"  name='b1' />
		</form>
		<style>
		.ui{
			width:60%;padding:7px;margin:0 auto;color:#42729B;
		}
		</style>
	
	
	

	
	
	
	
	


</body>
</html>

		
		
	