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
  <div class="tab">Attendace:
    <p><input name="usn" type="text" class="inputvalues" style="width:30%;padding:7px;margin:0 auto;color:#42729B;" placeholder="USN*"/ required></p>
    <p><input name="ac" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Attended Classes*"/ required></p>
	<p><input name="tnc" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;" placeholder="Total Classes"/required><br><br></p>
	
      <input   type="submit" name='submit1'  ></input>
     
    </div></p>
	
  </div>
  </form>
  
  
<form  class="regForm" action="" method="post">
	
  <div class="tab">Marks:
      <p><input name="musn" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="USN"/required></p>

    <p><input name="msub" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Subject"/required></p>
    <p><input name="totalscore" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Max Score"/required></p>
	<p><input name="score" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Scored"/required></p>

	<p> <div >
      <input   type="submit" name='submit2'  ></input>
     
    </div></p>
  </div></form>
  
  <form  class="regForm" action="" method="post">

  <div class="tab">Assignment:
    <p><input name="assignmentid" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Assignment Id*"/required ></p>
    <p><input name="asem" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Semester"/></p>
	    <p><input name="asubject" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Subjectcode"/></p>

		    <p><input name="assignmentq" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Assignment link"/></p>

  
    <p> <div >
      <input   type="submit" name='submit3'  ></input>
     
    </div></p>

  
  
  
  
    </div >
 
</form>




<?php

if(isset($_POST['submit1']))
{
	$usn=$_POST['usn'];
	$ac=$_POST['ac'];
	$tnc=$_POST['tnc'];
	
		$query1="insert into attendance values('$usn','$ac','$tnc')";
	
$run=mysqli_query($con,$query1);

if($run)
{
	echo '<script type="text/javascript">alert("Attendace Successfully Recorded!")</script>';
}
else
	{
	echo '<script type="text/javascript">alert("Failed!")</script>';
}

	
}
	
?>

<?php

if(isset($_POST['submit2']))
{
	$musn=$_POST['musn'];
	$msub=$_POST['msub'];
	$totalscore=$_POST['totalscore'];
	$score=$_POST['score'];
		
		$query2="insert into marks values('$musn','$msub','$totalscore','$score')";
		
$run2=mysqli_query($con,$query2);


if($run2)
{
	echo '<script type="text/javascript">alert("Marks Successfully Recorded!")</script>';
}
else
	{
	echo '<script type="text/javascript">alert("Failed!")</script>';
}

	
}
	
?>
<?php

if(isset($_POST['submit3']))
{
	$assignmentid=$_POST['assignmentid'];
	$asem=$_POST['asem'];
	$asubject=$_POST['asubject'];
	$assignmentq=$_POST['assignmentq'];
	
		$query3="insert into assignment values('$asem','$asubject','$assignmentid','$assignmentq')";
		
$run3=mysqli_query($con,$query3);


if($run3)
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
