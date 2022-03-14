<html>
<body>
<?php 
include("header.php");?>
 <table border="5" class="table table-bordered fs-5 table-hover">
	<tr align="center" class="table-primary">
		<th>Product Id</th>
		<th>Category Id</th>
		<th>Name</th>
		<th>Price</th>
		<th>Description</th>
		<th>Button 1</th>
		<th>Customization 1</th>
		<th>Price 1</th>
		<th>Button 2</th>
		<th>Customization 2</th>
		<th>Price 2</th>
		<th>Button 3</th>
		<th>Customization 3</th>
		<th>Price 3</th>
		<th>Image</th>
		<th colspan="2">Action</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM product");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center" classa="text-wrap">
		<td><?php echo $data['pid']; ?></td>
		<td><?php echo $data['category']; ?></td>
		<td><?php echo $data['pname']; ?></td>
		<td><?php echo $data['pprice']; ?></td>
		<td><?php echo $data['pdesc']; ?></td>
		<td><?php echo $data['btn1']; ?></td>
		<td><?php echo $data['custom1']; ?></td>
		<td><?php echo $data['price1']; ?></td>
		<td><?php echo $data['btn2']; ?></td>
		<td><?php echo $data['custom2']; ?></td>
		<td><?php echo $data['price2']; ?></td>
		<td><?php echo $data['btn3']; ?></td>
		<td><?php echo $data['custom3']; ?></td>
		<td><?php echo $data['price3']; ?></td>
		<td><img height=150px width=160px src="<?php echo $data['pimg']; ?>"></td>
		<td><a href="delete_product.php?userid=<?php echo $data['pid']; ?>">Delete</td>	
		<td><a href="update_product.php?userid=<?php echo $data['pid']; ?>">Update</td>	
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>