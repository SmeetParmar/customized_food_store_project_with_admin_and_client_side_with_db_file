<?php
include("connect.php"); 
if(isset($_POST["update"]))
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
	    
	if(mysqli_query($a,"UPDATE `product` SET `category`='$category',`pname`='$name',`pprice`='$price',`pdesc`='$desc',`btn1`='$btn1',`custom1`='$custom1',`price1`='$price1',`btn2`='$btn2',`custom2`='$custom2',`price2`='$price2',`btn3`='$btn3',`custom3`='$custom3',`price3`='$price3',`pimg`='$path' WHERE pid='".$_GET["userid"]."'"))
	{
		//echo "<script>alert('Data Updated Successfully')</script>";
		header("location:select_product.php");
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
$temp=mysqli_query($a,"SELECT * FROM product WHERE pid='".$_GET["userid"]."'");
$data=mysqli_fetch_array($temp);
?>
 <table class="table table-bordered table-hover">
		<tr>
				<td>Product Name</td>
				<td><input type="text" name="pnm" value="<?php echo $data['pname']; ?>"></td>
		</tr>
		<tr>
				<td>Product Category</td>
				<td><select name="category">
					<?php 
					include("connect.php");
					$all=mysqli_query($a,"SELECT * FROM category");
					while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
					{
					?>
							 <?php if($data['category']==$cat['Name'])
							 {
							 ?>
							    <option value="<?php echo $cat["Name"]; ?>" selected>
							   	<?php echo $cat["Name"]; ?> 
							    </option>
							 <?php  
							 }
							 else
							 { ?>
							 <option value="<?php echo $cat["Name"]; ?>">
							 <?php echo $cat["Name"]; ?> 
							 </option>
							 <?php 
								}
							 }
							 ?>
						</select></td>
		</tr>
		<tr>
				<td>Product Price</td>
				<td><input type="text"  name="ppr" value="<?php echo $data['pprice']; ?>"></td>
		</tr>
		<tr>
			<td>Product Description </td>
			<td><input type="compose-textarea"  name="pdesc" value="<?php echo $data['pdesc']; ?>"></td>
		</tr>
		<tr>
			<td class="fs-4">Customization</td>
			<td><table class="table tabble-bordered">
				<tr>
			  	<td>	Button 1 <input type="text" name="b1" value="<?php echo $data['btn1']; ?>"><br>    </td>
				<td>	Customization 1 <input type="text" name="custom1" value="<?php echo $data['custom1']; ?>"><br></td>
				<td>	Price  <input type="text" name="price1" value="<?php echo $data['price1']; ?>"><br>    </td>
				</tr>
				<tr>
			    <td>	Button 2  <input type="text" name="b2" value="<?php echo $data['btn2']; ?>"><br>   </td>
			    <td>	Customization 2  <input type="text" name="custom2" value="<?php echo $data['custom2']; ?>"><br></td>
			    <td>	Price   <input type="text" name="price2" value="<?php echo $data['price2']; ?>"><br>    </td>
			    </tr>
			    <tr>
			    <td>    Button 3  <input type="text" name="b3" value="<?php echo $data['btn3']; ?>"><br> </td>
			    <td> 	Customization 3  <input type="text" name="custom3" value="<?php echo $data['custom3']; ?>"><br></td>
			    <td>	Price   <input type="text" name="price3" value="<?php echo $data['price3']; ?>"><br>    </td>
				</tr>
				</table>
			</td>
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
