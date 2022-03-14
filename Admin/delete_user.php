<?php 
include("connect.php");
if(mysqli_query($a,"DELETE FROM user WHERE id='".$_GET["userid"]."'"))
{
	header("location:users.php");
}
else
{
	echo "<script>alert('Cannot Delete Data')</script>";
}
?>