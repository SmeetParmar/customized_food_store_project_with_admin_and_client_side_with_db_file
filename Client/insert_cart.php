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
	$cus1=$_GET['cus1']; $cus2=$_GET['cus2']; $cus3=$_GET['cus3'];
	$total=$_GET['total'];
	$pname=$_GET['name'];
	$name=$_SESSION['name'];
	$a=mysqli_connect("localhost","root","","project");
	echo "<script>alert('$cus1 $cus2 $cus3 $name $pname $total')</script>";
	if($cus1==""){ $cus1="Not Choosen";}
	if($cus2==""){ $cus2="Not Choosen";}
	if($cus3==""){ $cus3="Not Choosen";}
	if(mysqli_query($a,"INSERT INTO cart (username,custom1,custom2,custom3,product,price) VALUES ('$name','$cus1','$cus2','$cus3','$pname','$total')"))
	{
		$_SESSION['grandtotal']+=$total;
		header("location:single_product.php?pname=$pname");
	}
	else
	{
		echo "<script>alert('Error....')</script>";
	}
}
?>