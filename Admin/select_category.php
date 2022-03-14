<html>
<body>
<?php 
include("header.php");?>
 <table class="table table-bordered  table-hover fs-4">
	<tr align="center" class="table-primary">
		<th>Category Id</th>
		<th>Category Name</th>
		<th colspan="2">Action</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM category");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['Name']; ?></td>
		<td><a href="delete_category.php?userid=<?php echo $data['id']; ?>&amp;name=<?php echo $data['Name']; ?>">Delete</td>	
		<td><a href="update_category.php?userid=<?php echo $data['id']; ?>">Update</td>	
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>