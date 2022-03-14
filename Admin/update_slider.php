<?php
include("connect.php"); 
if(isset($_POST["update"]))
{
		
		$name=$_POST['snm'];
	 
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$path="uploads/".$filename;

		move_uploaded_file($tempname,$path);
	if(mysqli_query($a,"UPDATE `slider` SET `name`='$name',`img`='$path' WHERE id='".$_GET["userid"]."'"))
	{
		//echo "<script>alert('Data Updated Successfully')</script>";
		header("location:select_slider.php");
	}
	else
	{
		echo "<script>alert('Cannot update data')</script>";
	}
}
?>
<html>
<head>
	<title>Product</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
<?php 
include("header.php");
include("connect.php");
$temp=mysqli_query($a,"SELECT * FROM slider WHERE id='".$_GET["userid"]."'");
$data=mysqli_fetch_array($temp);
?>
 <table>
		<tr>
				<td>Product Name</td>
				<td><input type="text" name="snm" value="<?php echo $data['name']; ?>"></td>
		</tr>
		<tr>
			<td>Product Image</td> 
			<td><input type="file"  name="img"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Update" name="update" class="btn btn-primary">
			<input type="submit" value="See" name="select" class="btn btn-primary"></td>
		</tr>
	</table>
</form>
</body>
</html>
