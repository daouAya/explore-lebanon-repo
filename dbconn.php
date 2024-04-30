<?php 
$name="root";
$password="";
$dbname="login";
$con=mysqli_connect("localhost",$name,$password);
mysqli_select_db($con,$dbname);
?>