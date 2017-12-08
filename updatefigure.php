<?php
require 'dbconfig/config.php';

?>
<html>
<body>


		
	<?php
	
	if(isset($_GET['pf'])){
	$pf=(int)$_GET['pf'];
	$query="SELECT * FROM FIGURES WHERE PID='$pf'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b4'])){
			$upcost=$_POST['upcost'];
	$uval=$_POST['uval'];

	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE FIGURES SET PCOST='$upcost',PAREN_VAL='$uval' WHERE PID='$pf'";
			$run=mysqli_query($con,$sql1);
			if($run){
			echo "<script type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/costdisplay.php';</script>";
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
		 <h3>Project Cost:<br><input  name='upcost' class="ui" value="<?php echo $row[0];?>"><br>
		 
	Parent Valuation:<br></h3><input class="ui" name='uval' value='<?php echo $row[1];?>'><br>


		<input type="submit" style="width:60%;" name='b4' />
		</form>
		<style>
		.ui{
			width:60%;padding:7px;margin:0 auto;color:#42729B;
		}
		</style>
	
	
	

	
	
	
	
	


</body>
</html>

		
		
	