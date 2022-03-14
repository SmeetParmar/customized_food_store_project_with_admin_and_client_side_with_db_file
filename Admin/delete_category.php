<?php 
include("connect.php");
$id=$_GET["userid"];
$nm=$_GET['name'];
$temp=mysqli_query($a,"SELECT * FROM product WHERE category='$nm'");
if(mysqli_num_rows($temp)>0)
{
    echo "<script>alert('Cannot Delete Data As Product Of These Category Exists......');
    window.location='select_category.php';</script>";

}
else
{
	if(mysqli_query($a,"DELETE FROM category WHERE id='$id'"))
	{
		header("location:select_category.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Data')</script>";
	}
}
?>