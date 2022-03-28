<?php 
$a=mysqli_connect("localhost","root","","project");
$id=$_GET["id"];
	if(mysqli_query($a,"DELETE FROM orders WHERE id='$id'"))
	{
		echo "<script>alert('Order Cancelled!!!!!!!')</script>";
		echo "<script>window.history.back();</script>";
	}
	else
	{
		echo "<script>alert('Cannot Remove Item)</script>";
	}
?>