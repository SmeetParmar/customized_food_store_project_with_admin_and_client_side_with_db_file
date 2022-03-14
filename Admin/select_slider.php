<html>
<body>
<?php 
include("header.php");?>
 <table border="5" class="table  table-bordered fs-5 table-hover">
	<tr align="center" class="table-primary">
		<th>Slider Id</th>
		<th>Name</th>
		<th>Image</th>
		<th colspan="2">Action</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM slider");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><img height=150px width=300px src="<?php echo $data['img']; ?>"></td>
		<td><a href="delete_slider.php?userid=<?php echo $data['id']; ?>">Delete</td>	
		<td><a href="update_slider.php?userid=<?php echo $data['id']; ?>">Update</td>	
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>