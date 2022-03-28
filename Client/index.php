<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php include("header2.php"); ?>

<section class="carousel-slider-main text-center mt-3 border-top border-bottom bg-white">
<div class="owl-carousel owl-carousel-slider">
  <?php 
          $a=mysqli_connect("localhost","root","","project");
          $all=mysqli_query($a,"SELECT * FROM slider");
          while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
            { ?>
<div class="item">
<a href="index.php"><img class="img-fluid" height=10px width=800px src="../Admin/<?php  echo $cat['img']; ?>" alt="<?php  echo $cat['name']; ?>"></a>
</div>
<?php } ?>
</div>
</section>

<section class="product-items-slider section-padding">
<div class="container">
<div class="section-header">
<h5 class="heading-design-h5 fs-4">Meals Of The Day  &nbsp;&nbsp;<span class="badge badge-danger">Main Course</span>
<a class="float-right text-secondary" href="menu.php">View All</a>
</h5>
</div>
<div class="owl-carousel owl-carousel-featured">

 <?php 
          $a=mysqli_connect("localhost","root","","project");
          $all=mysqli_query($a,"SELECT * FROM product WHERE category='Main Course' OR category='Brunch'");
          while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
            { ?>
<div class="item">
<div class="product border">
<a href="single_product.php?pname=<?php echo  $cat['pname']; ?>">
<div class="product-header">
<span class="badge badge-success ms-3">30% OFF</span>
<img class="img-fluid" src="../Admin/<?php  echo $cat['pimg']; ?>" alt="">
<span class="veg text-success mdi mdi-circle me-3"></span>
</div>
<div class="product-body">
<h4><font color="Cyan"><?php echo $cat['pname']; ?></font></h4>
<h6><strong><span class="mdi mdi-approval"></span>Recommended</strong></h6>
</div>
<div class="product-footer">
<p class="offer-price mb-0">Rs <?php echo $cat['pprice'];?></i><br>
<button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-information-outline"></i> More Info</button>
</div>
</a>
</div>
</div>
  <?php } ?>
</section>
</div>
</div>

<section class="product-items-slider section-padding">
<div class="container">
<div class="section-header">
<h5 class="heading-design-h5 fs-4">Afternoon Meals &nbsp;&nbsp;<span class="badge badge-info">BreakFast</span>
<a class="float-right text-secondary" href="menu.php">View All</a>
</h5>
</div>
<div class="owl-carousel owl-carousel-featured">
  <?php 
          $a=mysqli_connect("localhost","root","","project");
          $all=mysqli_query($a,"SELECT * FROM product WHERE category='Drinks' OR category='Breakfast' OR category='Dinner'");
          while($cat=mysqli_fetch_array($all,MYSQLI_ASSOC))
            { ?>
<div class="item">
<div class="product border">
<a href="single_product.php?pname=<?php echo  $cat['pname']; ?>">
<div class="product-header">
<span class="badge badge-success ms-3">10% OFF</span>
<img class="img-fluid" src="../Admin/<?php  echo $cat['pimg']; ?>" alt="">
<span class="veg text-success mdi mdi-circle me-3"></span>
</div>
<div class="product-body">
<h4><font color="Cyan"><?php echo $cat['pname']; ?></font></h4>
<h6><strong><span class="mdi mdi-approval"></span>Must Try</strong></h6>
</div>
<div class="product-footer">
<p class="offer-price mb-0">Rs <?php echo $cat['pprice'];?></i><br>
<button type="button" class="btn btn-secondary btn-sm"><i class="mdi mdi-information-outline"></i> More Info </button>
</div>
</a>
</div>
</div>
  <?php } ?>

</div>
</div>
</section>
<section class="section-padding bg-white border-top">
<div class="container">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="feature-box">
<i class="mdi mdi-truck-fast"></i>
<h6 class="fs-6">Free & Next Day Delivery</h6>

</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="feature-box">
<i class="mdi mdi-basket"></i>
<h6 class="fs-6">100% Satisfaction Guarantee</h6>

</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="feature-box">
<i class="mdi mdi-tag-heart"></i>
<h6 class="fs-6">Great Customizations On Items</h6>

</div>
</div>
</div>
</div>
</section>

<?php include("footer.php"); ?>

<script data-cfasync="false" src="scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.min.js" type="66a50b7b17b5d021c9a257e4-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="66a50b7b17b5d021c9a257e4-text/javascript"></script>

<script src="vendor/select2/js/select2.min.js" type="66a50b7b17b5d021c9a257e4-text/javascript"></script>

<script src="vendor/owl-carousel/owl.carousel.js" type="66a50b7b17b5d021c9a257e4-text/javascript"></script>

<script src="js/custom.js" type="66a50b7b17b5d021c9a257e4-text/javascript"></script>

<script src="scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="66a50b7b17b5d021c9a257e4-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c224d4348666bb8","version":"2021.12.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}' crossorigin="anonymous"></script>

</body>
</html>