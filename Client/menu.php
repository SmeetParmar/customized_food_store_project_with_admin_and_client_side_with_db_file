<!DOCTYPE html>
<html>
<head></head>
<body>
<?php include("header2.php"); ?>
<div class="dropdown">
  <button class="btn btn-info fs-6 my-2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   Categories
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  	<li><a class="dropdown-item" href="menu.php?nm=all">All Products</a></li>
  		<?php 
					$a=mysqli_connect("localhost","root","","project");
					$all=mysqli_query($a,"SELECT * FROM category");
					while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
					{
					?> <li><a class="dropdown-item" href="menu.php?nm=<?php echo $cat["Name"]; ?>"><?php echo $cat["Name"]; ?></a></li>
							 <?php 
								}
							 ?>
  </ul>
</div>
<div class="row row-cols-1 mx-2 row-cols-md-4 border-primary g-6">
<?php
	$a=mysqli_connect("localhost","root","","project");
	$all=mysqli_query($a,"SELECT * FROM product");
	if(isset($_GET['nm']))
	{
		$nm=$_GET['nm'];
		if($nm=="all")
		{
			$all=mysqli_query($a,"SELECT * FROM product");
		}
		else
		{
		$all=mysqli_query($a,"SELECT * FROM product WHERE category='$nm'");
		}
	}
		while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
		{   	
		 ?>
			<div class="col my-3">
   			 <div class="card h-100 border border-dark">
   			 
    		  <img src="../Admin/<?php  echo $cat['pimg']; ?>" class="card-img-top" alt="Error">
     			 <div class="card-body">
     			 		<a href="single_product.php?pname=<?php echo  $cat['pname']; ?>">
   				 <h3 class="card-title"><?php echo $cat['pname']; ?></h3>
          		 <h4 class="card-text">Rs-<?php echo $cat['pprice']; ?></h4>
       			 <p class="card-text fs-6"><?php echo $cat['pdesc']; ?></p>	</a>
      		   	 </div>
      		   	 		 <a href="single_product.php?pname=<?php echo  $cat['pname']; ?>" class="btn fs-5 btn-primary"><i class="mdi mdi-food"></i>     View</a>	   	 	
   		     </div>
  		   </div>   
		<?php 
	   }
	?>
</div>
<?php include("footer.php"); ?>
</body>
</html>