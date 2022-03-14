
<!DOCTYPE html>
<html>
<head>
	<title>Wishlist</title>
</head>
<body>
<?php include("header2.php"); ?>
<div class="row row-cols-1 mx-2 row-cols-md-4 border-primary g-6">
<?php
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
		$pro=$vis['product'];
	    $all=mysqli_query($a,"SELECT * FROM product WHERE pname='$pro'");
		while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
		{   	
		 ?>
			<div class="col my-3">
   			 <div class="card h-100 border border-dark">
    		  <img src="../Admin/<?php  echo $cat['pimg']; ?>" class="card-img-top" alt="Error">
     			 <div class="card-body">
   				 <h3 class="card-title"><?php echo $cat['pname']; ?></h3>
          		 <h4 class="card-text">Rs-<?php echo $cat['pprice']; ?></h4>
       			 <p class="card-text fs-6"><?php echo $cat['pdesc']; ?></p>
      		   	 </div>
      		   	 		 <a href="#" class="btn fs-5 btn-primary">Order</a> 
   		     </div>
  		   </div>
  		   </span>
		<?php 
	   }
	}
 }
	?>
</div>
<?php include("footer.php"); ?>
</body>
</html>





<!-- <div class="row row-cols-1 mx-2 row-cols-md-4 border-primary g-6">
<?php
	$a=mysqli_connect("localhost","root","","project");
	if(isset($_SESSION['name']))
	{
		$user=$_SESSION['name'];
		$wish=mysqli_query($a,"SELECT * FROM wishlist WHERE username='$user");
	}
	while($vis=mysqli_fetch_array($wish,MYSQLI_ASSOC))
	{
	    $all=mysqli_query($a,"SELECT * FROM product WHERE pname='$pname");
		while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
		{   	
		 ?>
			<div class="col my-3">
   			 <div class="card h-100 border border-dark">
    		  <img src="../Admin/<?php  echo $cat['pimg']; ?>" class="card-img-top" alt="Error">
     			 <div class="card-body">
   				 <h3 class="card-title"><?php echo $cat['pname']; ?></h3>
          		 <h4 class="card-text">Rs-<?php echo $cat['pprice']; ?></h4>
       			 <p class="card-text fs-6"><?php echo $cat['pdesc']; ?></p>
      		   	 </div>
      		   	 		 <a href="#" class="btn fs-5 btn-primary">Order</a> 
   		     </div>
  		   </div>
  		   </span>
		<?php 
	   }
	}
	?>
</div> -->
