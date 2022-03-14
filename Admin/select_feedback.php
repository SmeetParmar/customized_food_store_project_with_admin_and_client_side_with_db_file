<html>
<body>
<?php 
include("header.php");?>
 <table class="table table-bordered fs-4 table-hover">
	<tr align="center" class="table-primary">
		<th>Id</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Email</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
	<?php 
	include("connect.php");
	$temp=mysqli_query($a,"SELECT * FROM feedback");
	while($data=mysqli_fetch_array($temp))
	{
	?>
	<tr align="center">
		<td><?php echo $data['id']; ?></td>
		<td><?php echo $data['name']; ?></td>
		<td><?php echo $data['phone']; ?></td>
		<td><?php echo $data['email']; ?></td>
		<td><?php echo $data['msg']; ?></td>
		<td><a href="delete_feedback.php?userid=<?php echo $data['id']; ?>">Delete</td>
		</center>
	</tr>
	<?php 
		}
	?>
</table>
</body>
</html>