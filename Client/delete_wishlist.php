<?php 
session_start();
$a=mysqli_connect("localhost","root","","project");
$name=$_GET['uid'];
$uname=$_SESSION['name'];
if(mysqli_query($a,"DELETE FROM wishlist WHERE product='$name' AND username='$uname'"))
{
	echo "<script>window.history.back()</script>";
}
else
{
	echo "<script>alert('Cannot Delete Data')</script>";
}
?>