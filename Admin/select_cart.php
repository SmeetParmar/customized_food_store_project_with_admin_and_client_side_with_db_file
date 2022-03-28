<html>
<body>
<?php 
include("header.php");?>
 <table class="table table-bordered  table-hover fs-4">
	<tr align="center" class="table-primary">
		<th>Id</th>
		<th>Username</th>
		<th>Custom 1</th>
		<th>Custom 2</th>
		<th>Custom 3</th>
		<th>Product</th>
		<th>Price</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM cart");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['custom1']; ?></td>
		<td><?php echo $data['custom2']; ?></td>
		<td><?php echo $data['custom3']; ?></td>
		<td><?php echo $data['product']; ?></td>
		<td><?php echo $data['price']; ?></td>
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>