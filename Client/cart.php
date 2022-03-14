<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
<?php include("header2.php"); ?>
<div class="container row row-cols-1 ms-5 mt-4 row-cols-2">
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
	 		if($_SESSION['grandtotal']<$data['price'])
	 		{
	 			$_SESSION['grandtotal']+=$data['price'];
	 		}
	 		$product=$data['product'];
	    	$all=mysqli_query($a,"SELECT * FROM product WHERE pname='$product'");
			while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
			{
				?>  
				<a href="single_product.php?pname=<?php echo  $cat['pname']; ?>">
				<div class="card mb-3 ms-2" style="max-width:600px;">
				  <div class="row g-0">
				    <div class="col-md-4">
				      <img src="../Admin/<?php echo $cat['pimg']; ?>" width="200px" height="200px" class="img-fluid rounded-start p-1 m-2" alt="Error...">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body ms-2">
				        <h4 class="card-title"><?php echo $data['product']; ?></h4>
				        <p class="card-text"><?php echo $cat['btn1']; ?> = <?php echo $data['custom1']; ?><br>
				        					 <?php echo $cat['btn2']; ?> = <?php echo $data['custom2']; ?><br>
				         	 				 <?php echo $cat['btn3']; ?> = <?php echo $data['custom3']; ?><br>
				        </p>
				        <h5 class="card-title">Price = <?php echo $data['price']; ?></h5>
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


 <?php 
 echo "Grand Total = ".$_SESSION['grandtotal']; ?>

<?php include("footer.php"); ?>
</body>
</html>
