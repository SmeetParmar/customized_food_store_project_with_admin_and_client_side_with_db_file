<?php 
if(isset($_POST['insert']))
{
		$name=$_POST['snm'];
	 
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$path="uploads/".$filename;

		move_uploaded_file($tempname,$path);
		// if(move_uploaded_file($tempname,$path))
		// {
		//   echo "Success";
		// }
		// else
		// {
		//   echo "Cannot Upload";
		// }
		include("connect.php");

		if(mysqli_query($a,"INSERT INTO slider (name,img) VALUES ('$name','$path')"))
		{
			 header("location:select_slider.php");
		}
		else
		{
			  echo "<script>alert('Cannot Insert Data')</script>";
			//echo "Cannot";
		}
}
if(isset($_POST['select']))
{
	header("location:select_slider.php");
}
?>
<html>
<head>
	<title>Product</title>
</head>
<body>
<?php include("header.php"); ?>
<form method="POST" enctype="multipart/form-data">
	<table class="table table-bordered  table-hover">
		<tr>
				<td class="fs-4">Slider Name</td>
				<td><input type="text" name="snm"></td>
		</tr>
		<tr>
			<td class="fs-4">Slider Image</td> 
			<td><input type="file"  name="img"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Insert" name="insert" class="btn btn-primary">
			<input type="submit" value="See" name="select" class="btn btn-primary"></td>
		</tr>
	</table>
</form>
</body>
</html>
