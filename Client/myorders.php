<?php include ('header2.php'); ?>
<br><br>

	<?php 
  	$tot=0;
	$a=mysqli_connect("localhost","root","","project");
	if(!isset($_SESSION['name']) && !isset($_SESSION['pass']))
	{
		echo "<script>alert('Logini First.......')</script>";
		echo "<script>window.location.href='login.php'</script>";
	}
	else
	{
		$user=$_SESSION['name'];
		$temp=mysqli_query($a,"SELECT * FROM orders WHERE billname='$user'");
		while($data=mysqli_fetch_array($temp,MYSQLI_ASSOC))
		{

			?>
				<div class="alert fs-3 alert-info" role="alert">
				<table class="table table-borderless">
				<tr>
					<td>Bill Name : </td>
					<td><?php echo $data['billname']; ?></td>
				</tr>
				<tr>
					<td>Items : </td>
					<td><?php echo rtrim($data['items'],","); ?></td>
				</tr>
				<tr>
					<td>Address : </td>
					<td><?php echo $data['address']; ?></td>
				</tr>
				<tr>
					<td>Mobile Number : </td>
					<td><?php echo $data['mobile']; ?></td>
				</tr>
				<tr>
					<td>Payment Mode : </td>
					<td><?php echo $data['mode']; ?></td>
				</tr>
				<tr>
					<td colspan="2"><h1>Total : <?php echo $data['total']; ?> </h1></td>
				</tr>
				</table>
				<a href="delete_order.php?id=<?php echo $data['id'] ?>" class="btn btn-danger fs-5 btn-lg">Cancel Order</a>

					</div>
					<br>
			<?php 
		}
	}
  ?>

<?php include ('footer.php'); ?>