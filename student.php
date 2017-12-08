<?php
require 'dbconfig/config.php';

?>

<!DOCTYPE html>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

.regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */


#btn{
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  width:25%;
}

button:hover {
  opacity: 0.8;
}





.step.active {
  opacity: 1;
}


}
</style>
<body>

<form  class="regForm" action="" method="post">
	`

 
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Assignment Submission:
    <p><input name="assignmentid" type="text" class="inputvalues" style="width:30%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Assignment Id"/ required></p>
    <p><input name="usn" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="USN"/ required></p>
	<p><input name="assignmenta" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;" placeholder="Assignment Solution link"/required><br><br></p>
	
      <input   type="submit" name='submit1'  ></input>
     
    </div></p>
	
  </div>
  </form>
  
  


<?php

if(isset($_POST['submit1']))
{
	$assignmentid=$_POST['assignmentid'];
	$usn=$_POST['usn'];
	$assignmenta=$_POST['assignmenta'];
	
		$query1="insert into submission values('$assignmentid','$usn','$assignmenta')";
	
$run=mysqli_query($con,$query1);

if($run)
{
	echo '<script type="text/javascript">alert("Assignment Successfully Submitted!")</script>';
}
else
	{
	echo '<script type="text/javascript">alert("Failed!")</script>';
}

	
}
	
?>


</body>
</html>
