<?php
require 'dbconfig/config.php';



 ?>
<html>
<body style="background-color:cream;">


		
	<?php
	
	if(isset($_GET['u'])){
	$ua=(int)$_GET['u'];
	$query="SELECT * FROM student WHERE usn='$ua'";
	$query_run=mysqli_query($con,$query);
	//echo $mysqli_fetch_assoc($query_run);
	$row=mysqli_fetch_array($query_run);
	}
	
		if(isset($_POST['b'])){
			$uusn=$_POST['uusn'];
			$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$ucontact=$_POST['ucontact'];
		$usemester=$_POST['usemester'];
$usubject=$_POST['usubject'];
	//$sql1="UPDATE PROJECT_DETAILS SET PNAME='$upname1' WHERE PID='$pa'";
	$sql1="UPDATE student SET usn='$uusn',name='$uname',email='$uemail',contact='$ucontact',semester='$usemester',subject='$usubject' WHERE usn='$ua'";
			$run=mysqli_query($con,$sql1);
          if($run){
			echo "<script> type='text/javascript'>alert('Project Updated Successfully!');
			location.href='http://localhost/studentdisplay.php';</script>";
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
	<input class ='ui' name='uusn' value='<?php echo $row['usn'];?>'><br>
 Name:<br>
	<input class='ui' name='uname' value='<?php echo $row['name'];?>'><br>
 Email:<br>
		<input class ='ui'name='uemail' value='<?php echo $row['email'];?>'><br>
 Contact:<br>
		<input class ='ui' name='ucontact' value='<?php echo $row['contact'];?>'><br>
 Semester<br>
	   <input class='ui' name='usemester' value='<?php echo $row['semester'];?>'><br>
 Subject:<br>
 <input class='ui' name='usubject' value='<?php echo $row['subject'];?>'><br>
		
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

		
		
	