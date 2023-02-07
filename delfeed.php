<?php

$con=mysqli_connect("localhost","root","","shri_web");
if(!$con)
{
die("connection to this database failed due to " .mysqli_connect_error());
}
$srno=$_GET['id'];
$sql= "DELETE FROM contact WHERE `contact`.`srno` = '$srno';";
$result=mysqli_query($con,$sql) or die("query unsuccessful.");
header("location:feedback.php");

?>
