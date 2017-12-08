<?php
require 'dbconfig/config.php';



 ?>
<html>
<body style="background-color:cream;">


		
	<?php
	
	if(isset($_GET['um'])){
	$um=(int)$_GET['um'];
	$query="SELECT * FROM marks WHERE usn='$um'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b'])){
			$usn2=$_POST['usn2'];
						$sub2=$_POST['sub2'];

			$total_score2=$_POST['total_score2'];
						$score2=$_POST['score2'];

						

	
	
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE marks SET USN='$usn2',SCORE='$score2',TOTAL_SCORE='$total_score2',SUB='$sub2' WHERE USN='$um'";
			$run=mysqli_query($con,$sql1);
          if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/marksdisplay.php';</script>";
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
	<input class ='ui' name='usn2' value='<?php echo $row['USN'];?>'><br>
 Subject:<br>
	<input class='ui' name='sub2' value='<?php echo $row['SUB'];?>'><br>
 Total Score:<br>
		<input class ='ui'name='total_score2' value='<?php echo $row['TOTAL_SCORE'];?>'><br>
Scored:<br>
		<input class ='ui'name='score2' value='<?php echo $row['SCORE'];?>'><br>
 
 
		
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

		
		
	