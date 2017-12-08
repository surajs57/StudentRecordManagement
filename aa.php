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

#regForm {
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
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}



.step.active {
  opacity: 1;
}


</style>
<body>

<form id="regForm" action="/action_page.php">
  <div class="tab">About:
    <p><input name="pid" type="text" class="inputvalues" style="width:30%;padding:7px;margin:0 auto;color:#42729B;" placeholder="PROJECT ID * "/ required></p>
    <p><input name="pname" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;color:#42729B;" placeholder="PROJECT NAME *"/ required></p>
	<p><input name="pdesc" type="text" class="inputvalues" style="width:35%;padding:7px;margin:0 auto;" placeholder="PROJECT BRIEF DESCRIPTION"/><br><br></p>
	<p><input name="pcat" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="CATEGORY"/></p>
		<p><input name="ploc" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Project Location"/></p>

	<p><input name="prating" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="PROJECT RATING"/></p>
	<P><input name="start_date" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="START DATE"/></P>
	<P><input name="status" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="STATUS"/></P>
  </div>
  <div class="tab">Project Founder Details:
    <p><input name="pfname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder Name"/></p>
    <p><input name="pfteamname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Project Team Name"/></p>
  </div>
  <div class="tab">Parent Company Details:
    <p><input name="paren_com" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Parent Company *"/ required></p>
    <p><input name="paren_cat" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Parent Category"/></p>
    <p><input name="paren_location" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="LOCATION"/></p>
    <p><input name="fname" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder Name"/></p>
	    <p><input name="fportfolio" type="text" class="inputvalues" style="width:48%;padding:7px;margin:0 auto;" placeholder="Founder portfolio"/></p>
  <!-- Circles which indicates the steps of the form: -->
 
</form>
<?php
if(isset($_POST['submit']))
{
	$pid=$_POST['pid'];
	$pname=$_POST['pname'];
	$pdesc=$_POST['pdesc'];
	$pcat=$_POST['pcat'];
	$ploc=$_POST['ploc'];
	$prating=$_POST['prating'];
	$start_date=$_POST['start_date'];
	$status=$_POST['status'];
	
	$pfname=$_POST['pfname'];
	$pfteamname=$_POST['pfteamname'];
		
	$paren_com=$_POST['paren_com'];
	$paren_cat=$_POST['paren_cat'];
	$paren_location=$_POST['paren_location'];
	$pfname=$_POST['pfname'];
	$fname=$_POST['fname'];
	$fportfolio=$_POST['fportfolio'];
		
	$pdescription=$_POST['pdescription'];
	$papplication=$_POST['papplication'];
	$pchallenges=$_POST['pchallenges'];
					
	$pcost=$_POST['pcost'];
	$paren_val=$_POST['paren_val'];
	
	$query="INSERT INTO PROJECT_DETAILS(pid,pname,pdesc,pcat,ploc,prating,start_date,status) VALUES('$pid','$pname','$pdesc','$pcat','$ploc','$prating','$start_date','$status')";
			
				$query1="INSERT INTO FOUNDER(pid,pfname,pfteamname) VALUES('$pid','$pfname','$pfteamname')";
							
				$query2="INSERT INTO PARENT_COMPANY(pid,paren_com,paren_cat,paren_location,pfname,fname,fportfolio) VALUES('$pid','$paren_com','$paren_cat','$paren_location','$pfname','$fname','$fportfolio')";
	
							
$query3="INSERT INTO DESCRIPTION(pid,pdescription,papplication,pchallenges) VALUES('$pid','$pdescription','$papplication','$pchallenges')";

			$query4="INSERT INTO FIGURES(pid,pcost,paren_val) VALUES('$pid','$pcost','$paren_val')";
			    	if((mysqli_query($con,$query)&&mysqli_query($con,$query1)&&mysqli_query($con,$query2)&&mysqli_query($con,$query3)&&mysqli_query($con,$query4))==TRUE)
					{echo '<script type="text/javascript">alert("	Project Successfully Inserted!")</script>';}

					else
					{echo '<script type="text/javascript">alert("Insertion not sucessful")</script>';}











	
}


?>



</body>
</html>
