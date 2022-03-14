<?php 
include("connect.php");
if(mysqli_query($a,"DELETE FROM product WHERE pid='".$_GET["userid"]."'"))
{
	header("location:select_product.php");
}
else
{
	echo "<script>alert('Cannot Delete Data')</script>";
}
?>