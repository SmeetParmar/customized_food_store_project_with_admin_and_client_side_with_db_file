<?php
include("header.php");; 
if(isset($_POST["update"]))
{
	$name=$_POST["nm"];
	if(mysqli_query($a,"UPDATE category SET Name='$name' WHERE id='".$_GET["userid"]."'"))
	{
		//echo "<script>alert('Data Updated Successfully')</script>";
		header("location:select_category.php");
	}
	else
	{
		echo "<script>alert('Cannot update data')</script>";
	}
}
?>
<html>
<head>
	<title>Category</title>
</head>
<body>
<form method="POST">
<?php 
include("index.php");
include("connect.php");
$temp=mysqli_query($a,"SELECT * FROM category  WHERE id='".$_GET["userid"]."'");
$data=mysqli_fetch_array($temp);
?>
  Category Name <input type="text" required value="<?php echo $data['Name']; ?>" class="form-control" name="nm"><br>
  <input type="submit" value="Update" name="update" class="btn btn-primary">
</form>
</body>
</html>
