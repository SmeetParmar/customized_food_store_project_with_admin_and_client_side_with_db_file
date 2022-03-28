<?php 
if(isset($_POST['insert']))
{
		$category=$_POST['category'];
		$name=$_POST['pnm'];
		$price=$_POST['ppr'];
		$desc=$_POST['pdesc'];
		$btn1=$_POST["b1"];
		$btn2=$_POST["b2"];
		$btn3=$_POST["b3"];
		$custom1=$_POST["custom1"];
		$custom2=$_POST["custom2"];
		$custom3=$_POST["custom3"];
		$price1=$_POST["price1"];
		$price2=$_POST["price2"];
		$price3=$_POST["price3"];
	 
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

		if(mysqli_query($a,"INSERT INTO product (category,pname,pprice,pdesc,btn1,custom1,price1,btn2,custom2,price2,btn3,custom3,price3,pimg) VALUES ('$category','$name','$price','$desc','$btn1','$custom1','$price1','$btn2','$custom2','$price2','$btn3','$custom3','$price3','$path')"))
		{
			 header("location:select_product.php");
		}
		else
		{
			  echo "<script>alert('Cannot Insert Data')</script>";
			//echo "Cannot";
		}
}
if(isset($_POST['select']))
{
	header("location:select_product.php");
}
?>
<html>
<head>
	<title>Product</title>
</head>
<body>
<?php include("header.php"); ?>
<form method="POST" enctype="multipart/form-data">
	<table class="table table-bordered table-hover">
		<tr>
				<td class="fs-4">Product Name</td>
				<td><input type="text" name="pnm" required></td>
		</tr>
		<tr>
				<td class="fs-4">Product Category</td>
				<td><select name="category">
					<?php 
					include("connect.php");
					$all=mysqli_query($a,"SELECT * FROM category");
					while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
					{
					?>
							 <option value="<?php echo $cat["Name"]; ?>">
							 <?php echo $cat["Name"]; ?> 
							 </option>
							 <?php 
								}
							 ?>
						</select></td>
		</tr>
		<tr>
				<td class="fs-4">Product Price</td>
				<td><input type="text"  required  name="ppr"></td>
		</tr>
		<tr>
			<td class="fs-4">Product Description </td>
			<td><input type="compose-textarea" required name="pdesc"></td>
		</tr>
	    	<tr>
			<td class="fs-4">Customization</td>
			<td><table class="table table-primary">
				<tr>
			  	<td>	Button 1 : <input type="text"  required name="b1"><br>    </td>
				<td>	Customization 1 : <input type="text"  required name="custom1"><br>    </td>
				<td>	Price : <input type="text"  required name="price1"><br>    </td>
				</tr>
				<tr>
			    <td>	Button 2 : <input type="text"  required name="b2"><br>   </td>
			    <td>	Customization 2 : <input type="text"  required name="custom2"><br></td>
			    <td>	Price  : <input type="text"  required name="price2"><br>    </td>
			    </tr>
			    <tr>
			    <td>    Button 3 : <input type="text"  required name="b3"><br> </td>
			    <td> 	Customization 3 : <input type="text"  required name="custom3"><br>  </td>
			    <td>	Price : <input type="text"  required name="price3"><br>    </td>
				</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td class="fs-4">Product Image</td> 
			<td><input type="file" required name="img"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" value="Insert" name="insert" class="btn btn-primary">
			<input type="submit" value="See" name="select" class="btn btn-primary"></td>
		</tr>
	</table>
</form>
</body>
</html>
