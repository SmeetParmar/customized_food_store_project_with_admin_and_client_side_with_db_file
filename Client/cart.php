<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
<?php include("header2.php");
$GLOBALS['gtotal']=0;

$cart="";
?><center>
<div class="container text-start mt-4 row row-cols-1 g-2 row-cols-2">
<?php
	if(!isset($_SESSION['name']) && !isset($_SESSION['pass']))
	{
		?>
		<script type="text/javascript">
		if (confirm("Please Login First...")==true) 
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
	{	?>
		<?php
		$name=$_SESSION['name'];
		$a=mysqli_connect("localhost","root","","project");
	 	$temp=mysqli_query($a,"SELECT * FROM cart WHERE username='$name'");
	 	while($data=mysqli_fetch_array($temp,MYSQLI_ASSOC))
	 	{	
	 		$GLOBALS['gtotal']+=$data['price'];
	 		$product=$data['product'];
	    	$all=mysqli_query($a,"SELECT * FROM product WHERE pname='$product'");
			while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
			{
	 			$cart.=$cat['pname']." = ".$data['price'].",";
				?>  

				<a href="single_product.php?pname=<?php echo  $cat['pname']; ?>">
				<div class="card mb-3 ms-2" style="max-width:600px;">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="../Admin/<?php echo $cat['pimg']; ?>" width="200px" height="200px" class="img-fluid rounded-start p-1 m-2" alt="Error...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body ms-2"> 
				      	<!-- <a href="remove_cart.php"><i class="mdi mdi-close position-absolute bottom-70 end-0"></i></a> -->
				        <h4 class="card-title"><?php echo $data['product']; ?></h4>
				        <p class="card-text"><?php echo $cat['btn1']; ?> = <?php echo $data['custom1']; ?><br>
				        					 <?php echo $cat['btn2']; ?> = <?php echo $data['custom2']; ?><br>
				         	 				 <?php echo $cat['btn3']."=".$data['custom3']; ?><br>
				        </p>

				        <h5 class="card-title mt-0">Price = <?php echo $data['price']; ?><br>
				        

				        </h5>
				        
				      </div> 
				    </div>
				  </div>
				</div></a>
				<?php		
	 		}
	 	} ?>
	 <?php 
	}
?>
</div>
</center>
<?php 
if($GLOBALS['gtotal']>0)
{
?>
<center><br><br>
	<div class="container flex">
		<a data-bs-toggle="collapse" href="#checkout" href="#checkout.php" class="btn btn-primary fs-5 me-4" text="Checkout">Checkout</a>
<div class="btn btn-danger fs-5">
 <?php 
 echo "Grand Total = ".$GLOBALS['gtotal']; ?>
</div>
</div>
<br><br>
 <div class="collapse col-md-4" id="checkout">
 	<form method="POST" enctype="multipart/form-data">
	<table class="table table-bordered width:ml-auto fs-4 table-hover">
		<tr>
				<td>Address</td>
				<td><input type="text" name="address" required></td>
		</tr>
		<tr>
			<td>Mobile Number</td> 
			<td><input type="text"  name="mno" required></td>
		</tr>
		<tr class="ml-auto flex">
			<td>Payment</td> 
			<td><input type="radio" name="mode" value="Cash On Delivery"> Cash on Delivery <br>
				<input type="radio" name="mode" value="Credit Card"> Credit Card <br>
				<input type="radio" name="mode" value="UPI"> UPI 
			</td>
		</tr>
		<tr class="text-center">
			<td colspan="2"><input type="submit" value="Submit" name="ok" class="fs-4 btn btn-outline-success"></td>
		</tr>
	</table>
</form>
 </div>
</form>
</center>
<?php } 
else
{
	?>
	<h1 class="text-center fw-bolder fs-1">Your Cart Is Empty</h1>
	<?php
}
?>

<?php 
 if(isset($_POST['ok']))
 {
 	$name=$_SESSION['name'];
 	$amt=$GLOBALS['gtotal'];
 	$items=$cart;
 	$address=$_POST['address'];
 	$mobile=$_POST['mno'];
 	$mode=$_POST['mode'];
 	// if(isset($_POST['cod']))
 	// 	$mode="Cash On Delivery";
 	// if(isset($_POST['cc']))
 	// 	$mode="Credit Card";
 	// if(isset($_POST['upi']))
 	// 	$mode="UPI";
 	$a=mysqli_connect("localhost","root","","project");
 	if(mysqli_query($a,"INSERT INTO orders (billname,items,address,mobile,mode,total) VALUES ('$name','$items','$address','$mobile','$mode','$amt')"))
 	{
 		echo "<script>alert('Order Placed Successfully......')</script>";
 		mysqli_query($a,"DELETE FROM cart WHERE username='$name'");
 		echo "<script>window.location.href='myorders.php'</script>";
 	}
 	else
 	{
 		echo "<script>alert('Error')</script>";
 	}
 }
?>
<?php include("footer.php"); ?>
</body>
</html>
