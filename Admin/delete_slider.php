<?php 
include("connect.php");
if(mysqli_query($a,"DELETE FROM slider WHERE id='".$_GET["userid"]."'"))
{
	header("location:select_slider.php");
}
else
{
	echo "<script>alert('Cannot Delete Data')</script>";
}
?>