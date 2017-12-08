<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>
CPRO Registration
</title>
<link rel="stylesheet" href="CSS/style.css">
</head>
<body style="font-family: 'Montserrat', sans-serif; background-image: url('/img/technology-background-18.jpg');" >

<div id="main-wrapper" style="border:white;width:500px;
	margin:125px 400px;
	background:#F6F7F2;
	padding:1px;
	border-radius:10px;
	">
	<img src="\img\signup-consumer-logo-black.png" style="width:200px;border-radius:25%;margin:0 150px;"/>
<font color="#1D2247" size="2">
<center><h2>REGISTER</h2></font>


<form class="myform" 
 action="register.php" method="post">
<font color="#1D2247" size="3">
<label><B>Email          </b></label>
<input name="email" type="text" class="inputvalues" style="width:30%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Email"/ required><br><br>

<label><b>Username        </b></label>
<input name="username" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="Sign In"/ required><br><br>
<label><b>Password        </b></label></font>
<input name="password" type="password" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;" placeholder="Enter Password"/ required><br><br>

<label><b>Confirm Password</b></label></font>
<input name="cpassword" type="password" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Confirm Password" required/>

<a href"home.php"><input name="submit_btn" type="submit" id="signup_btn" 
style="font-weight:bold;
background-color: #27ae60;
    border: none;
    color: #1D2247 ;
    padding: 13px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	margin:4px 2px;
	width:40%;
	border-radius:10%;
	
	box-shadow: 2px 2px 2px #888888;" value="Sign Up"/></a>
	<a href="login.php">
<input name="back_btn" type="button" id="back_btn" style="font-weight:bold;
background-color: #2980b9;
    border: none;
    color: #1D2247;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
	width:25%;
	border-radius:10%;
	font-size:12px;
	box-shadow: 2px 2px 2px #888888;" value="<<Back"/></a><br>
</form>
<?php
if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript">alert("Sign Up Button Clicked")</script>';
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];
	
	if($password==$cpassword)
	{
		$query="select * from logininfo where username='$username' and EMAIL='$email'";
		$query_run=mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run)>0)
		{
			//there is existing username
			echo '<script type="text/javascript">alert("Try Different User Name/Email")</script>';
		}
		else
		{
			$query="insert into logininfo values('$email','$username','$password')";
			$query_run=mysqli_query($con,$query);
			if($query_run)
			{echo '<script type="text/javascript">alert("User Registered!")</script>';}
		else
		{echo '<script type="text/javascript">alert("Not Registered!")</script>';}
		}
	}
	else{echo '<script type="text/javascript">alert("Passwords do not match!")</script>';}
		
}

?>
</center>
</div>


</body>

</html>