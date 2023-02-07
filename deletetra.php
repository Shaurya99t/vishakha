<?php

$con = mysqli_connect("localhost","root","","gross");
$sql="DELETE FROM buy;";
$result=mysqli_query($con,$sql) or die("unsuccessful".mysqli_error);
header("location:trade.php");
mysqli_close($con);

?>