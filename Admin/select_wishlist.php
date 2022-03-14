<html>
<body>
<?php 
include("header.php");?>
 <table class="table table-bordered  table-hover fs-4">
	<tr align="center" class="table-primary">
		<th>Id</th>
		<th>User Name</th>
		<th>Product</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM wishlist");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['username']; ?></td>
		<td><?php echo $data['product']; ?></td>
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>