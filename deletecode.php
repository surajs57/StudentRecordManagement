<?php
require 'dbconfig/config.php';

?>
<html>
<body>
<form method="GET">
{
<?php
$PID=$_GET['PID'];
query1="delete from PROJECT_DETAILS WHERE PID='$PID'";

mysqli_query($con,$query1);
echo '<script type="text/javascript">alert("Deleted!")</script>';

?>
}