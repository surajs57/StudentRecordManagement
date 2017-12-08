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
	` <h1>REGISTRATION</h1>

 
  <!-- One "tab" for each step in the form: -->
  <div class="tab">STUDENT:
    <p><input name="usn" type="text" class="inputvalues" style="width:30%;padding:7px;margin:0 auto;color:#42729B;" placeholder="USN*"/ required></p>
    <p><input name="name" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="NAME *"/ required></p>
	<p><input name="email" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;" placeholder="EMAIL*"/required><br><br></p>
	<p><input name="contact" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="CONTACT*"/required></p>
		<p><input name="semester" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="SEMESTER*"/required></p>
      <p><input name="subject" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Subject code*"/required></p>
	  <p><input name="password" type="password" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Password"/ required></p>
	  <p> <div >
      <input   type="submit" name='submit1'  ></input>
     
    </div></p>
	
  </div>
  </form>
  
  

  
  <form  class="regForm" action="" method="post">

  <div class="tab">PARENT:
    <p><input name="puserid" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="User Id*"/required ></p>
    <p><input name="pname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Full Name"/></p>
	    <p><input name="pemail" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Email"/></p>

		    <p><input name="pcontact" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Contact"/></p>

    <p><input name="pusn" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="USN"/></p>
		  <p><input name="ppassword" type="password" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Password"/ required></p>

    <p> <div >
      <input   type="submit" name='submit3'  ></input>
     
    </div></p>

  
  
  
  
    </div >
 
</form>




<?php

if(isset($_POST['submit1']))
{
	$userid=$_POST['usn'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
		$semester=$_POST['semester'];
$subject=$_POST['subject'];
$password=$_POST['password'];
		$query1="insert into student values('$userid','$name','$email','$contact','$semester','$subject')";
		$query6="insert into login values('$userid','$password','student')";
$run=mysqli_query($con,$query1);
$run1=mysqli_query($con,$query6);

if($run && $run1)
{
	echo '<script type="text/javascript">alert("Student Data Successfully Registered!")</script>';
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
	$puserid=$_POST['puserid'];
	$name=$_POST['pname'];
	$pemail=$_POST['pemail'];
	$pcontact=$_POST['pcontact'];
	$userid=$puserid;
		
$usn=$_POST['pusn'];
$password=$_POST['ppassword'];
		$query4="insert into parent values('$puserid','$name','$pemail','$pcontact','$usn')";
		$query5="insert into login values('$userid','$password','$parent')";
$run4=mysqli_query($con,$query4);
$run5=mysqli_query($con,$query5);

if($run4 && $run5)
{
	echo '<script type="text/javascript">alert("parent Data Successfully Registered!")</script>';
}
else
	{
	echo '<script type="text/javascript">alert("Failed!")</script>';
}

	
}
	
?>

</body>
</html>
