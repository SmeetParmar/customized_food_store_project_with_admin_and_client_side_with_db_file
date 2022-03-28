<?php 
include("connect.php");

if(isset($_POST["insert"]))
{
	$name=$_POST["nm"];
	$query="INSERT INTO category (Name) VALUES ('$name')";

	if(mysqli_query($a,$query) && $name!="")
	{
		echo "<script>alert('Data Insertd Successfully')</script>";
		header("location:select_category.php");
	}
	else
	{
		echo "Cannot Insert";
	}
}
if(isset($_POST["select"]))
{
	header("location:select_category.php");
}
?>
<html>
<head>
	<title>Category</title>
</head>
<body>
	<?php include("header.php"); ?>
<form method="POST">
	<table class="table table-bordered ">
		<tr>
			<td class="fs-4">Category Name</td>
		    <td><input type="text"  required class="form-control" name="nm"></td>
		</tr>
        <tr>
        <td colspan="2" align="center"> <input type="submit" value="Insert" name="insert" class="btn btn-primary">
 		 <input type="submit" value="See" name="select" class="btn btn-primary"></td>
        </tr>
  </table>
</form>
</body>
</html>
