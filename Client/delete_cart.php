<?php 
$a=mysqli_connect("localhost","root","","project");
$name=$_GET['pname'];
$uname=$_GET['uname'];
if(mysqli_query($a,"DELETE FROM cart WHERE product='$name' AND username='$uname'"))
{
	echo "<script>window.history.back()</script>";
}
else
{
	echo "<script>alert('Cannot Delete Data')</script>";
}
?>