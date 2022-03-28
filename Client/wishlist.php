<!DOCTYPE html>
<html>
<head>
	<title>Wishlist</title>
</head>
<body>
<?php include("header2.php"); ?>
<div class="row row-cols-1 mx-2 row-cols-md-4 mt-4 border-primary g-6">
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
	$wish=mysqli_query($a,"SELECT * FROM wishlist WHERE username='$user'");
	while($vis=mysqli_fetch_array($wish,MYSQLI_ASSOC))
	{
		$tot++;
		$pro=$vis['product'];
	    $all=mysqli_query($a,"SELECT * FROM product WHERE pname='$pro'");
		while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
		{   	
		 ?>
			<div class="col my-3">
   			 <div class="card h-100 border border-dark"><a href="single_product.php?pname=<?php echo  $cat['pname']; ?>">
    		  <img src="../Admin/<?php  echo $cat['pimg']; ?>" class="card-img-top" alt="Error">
    		  
     			 <div class="card-body">
   				 <h3 class="text-center card-title"><?php echo $cat['pname']; ?></h3></a>
          		
       			
      		   	 </div>
      		   	 		 <a href="delete_wishlist.php?uid=<?php echo  $cat['pname']; ?>" class="btn fs-5 btn-danger">Remove</a> 
   		     </div>
  		   </div>
  		   </span>
		<?php 
	   }
	}
 }
	?>
</div>
<?php 
if($tot==0)
{
	?>
	<h1 class="text-center fw-bolder fs-1">Your Wishlist Is Empty</h1>
<?php } ?>
<?php include("footer.php"); ?>
</body>
</html>