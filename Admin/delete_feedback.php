<?php 
include("connect.php");
if(mysqli_query($a,"DELETE FROM feedback WHERE id='".$_GET["userid"]."'"))
{
	header("location:select_feedback.php");
}
else
{
	echo "<script>alert('Cannot Delete Data')</script>";
}
?>