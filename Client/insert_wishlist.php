<?php 
session_start();
if(!isset($_SESSION['name']) && !isset($_SESSION['pass']))
{
	?>
	<script type="text/javascript">
		if (confirm("Please Loogin First...")==true) 
		{
			window.location.href='login.php';
		}
		else
		{
			window.history.back();
		}
	</script>
<?php 
}
else
{
	$pro=$_GET['uid'];
	$name=$_SESSION['name'];
	$a=mysqli_connect("localhost","root","","project");
	if(mysqli_query($a,"INSERT INTO wishlist (username,product) VALUES ('$name','$pro')"))
	{
			echo "<script>window.history.back()</script>";
	}
	else
	{
		echo "<script>alert('Error....')</script>";
	}
}
?>