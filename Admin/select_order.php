<html>
<body>
<?php 
include("header.php");?>
 <table class="table table-bordered table-hover fs-4">
	<tr align="center" class="table-primary">
		<th>Id</th>
		<th>User Name</th>
		<th>Items</th>
		<th>Address</th>
		<th>Mobile Number</th>
		<th>Payment Method</th>
		<th>Total</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM orders");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['billname']; ?></td>
		<td><?php echo $data['items']; ?></td>
		<td><?php echo $data['address']; ?></td>
		<td><?php echo $data['mobile']; ?></td>
		<td><?php echo $data['mode']; ?></td>
		<td><?php echo $data['total']; ?></td>
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>