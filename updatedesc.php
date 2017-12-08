<?php
require 'dbconfig/config.php';

?>
<html>
<body>


		
	<?php
	
	if(isset($_GET['pd'])){
	$pd=(int)$_GET['pd'];
	$query="SELECT * FROM PDESCRIPTION WHERE PID='$pd'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b3'])){
			$ud=$_POST['ud'];
	$ua=$_POST['ua'];
		$uchal=$_POST['uchal'];

	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE PDESCRIPTION SET PDESCRIP='$ud',PAPP='$ua',PCHAL='$uchal' WHERE PID='$pd'";
			$run=mysqli_query($con,$sql1);
			if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/descdisplay.php';</script>";
			}
			else
			{
				echo "<script> type='text/javascript'>alert('Updation Failed!!')</script>";
			}
		}
	
	
	?>
		<form style=" background-color: #ffffff;text-align:center;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;" action="" method="POST">
		 
	<h3>Description:<br><input class ='ui' name='ud' value='<?php echo $row[1];?>'><br>
	Applications:<br><input class='ui' name='ua' value='<?php echo $row[2];?>'><br>
			Challenges:<br></h3><input class='ui' name='uchal' value='<?php echo $row[2];?>'><br>

		<input type="submit" style="width:60%;"  name='b3' />
		</form>
		<style>
		.ui{
			width:60%;padding:7px;margin:0 auto;color:#42729B;
		}
		</style>
	
	
	

	
	
	
	
	


</body>
</html>

		
		
	