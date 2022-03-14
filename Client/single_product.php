<?php 
$_GLo
?>
<!DOCTYPE html>
<html>
<head><link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<title></title>
</head>
<body>
<?php include("header2.php"); 
$id=$_GET["pname"];
  $a=mysqli_connect("localhost","root","","project");
	$temp=mysqli_query($a,"SELECT * FROM product WHERE pname='$id'");
	$data=mysqli_fetch_array($temp);
	?>
       <form method="POST">
<section class="text-gray-600 body-font overflow-hidden">
  <div class="  py-10 mx-5">
    <div class="lg:w-7/6 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="../Admin/<?php echo $data['pimg'];  ?>">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <?php 
        $uname="";
        if(isset($_SESSION['name']))
        {
           $uname=$_SESSION['name'];
        }
             $name=$data['pname'];
             $demo=mysqli_query($a,"SELECT * FROM wishlist WHERE product='$name' AND username='$uname'");
          if(mysqli_num_rows($demo)==0)
          {
             ?>
             <a href="insert_wishlist.php?uid=<?php echo $data['pname'];?>"><div class="position-absolute bottom-70 end-0"><i class="heart mdi mdi-heart-outline fs-1"></i></a>
          <?php 
          }
          else
          {    ?>
              <a href="delete_wishlist.php?uid=<?php echo $data['pname'];?>"><div class="position-absolute bottom-70 end-0"><i class="heart mdi mdi-heart fs-1"></i></a>
          <?php
          }
          ?>
        </div>
        <h1 class="text-gray-900 text-5xl title-font font-medium mb-1"><?php echo $data['pname'];?></h1>
        <div class="flex mb-4"> 
        </div>
        <p class="leading-relaxed text-3xl font-medium text-black"><?php echo $data['pdesc']; ?></p>
   
        <div class="flex mt-6 items-center pb-5">
          
          <div class="flex ml-6 items-center text-2xl">
           
 <a class="btn fs-5 btn-outline-primary me-2 justify-content-start flex" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
    Customize
  </a>        
     <div class="collapse" id="collapseExample">
     <a class="btn btn-outline-info fs-5 me-2 flex" data-bs-toggle="collapse" href="#<?php echo $data['btn1']; ?>" role="button" aria-expanded="true" aria-controls="collapseExample"><?php echo $data['btn1']; ?></a>
     <a class="btn btn-outline-warning fs-5 me-2 flex" data-bs-toggle="collapse" href="#<?php echo $data['btn2']; ?>" role="button" aria-expanded="true" aria-controls="collapseExample"><?php echo $data['btn2']; ?></a> 
     <a class="btn fs-5 btn-outline-success me-2 flex" data-bs-toggle="collapse" href="#<?php echo $data['btn3']; ?>" role="button" aria-expanded="true" aria-controls="collapseExample"><?php echo $data['btn3']; ?></a>
     <button name="ok" class="btn fs-5 btn-outline-danger">Ok</button>
         <div class="collapse p-2" id="<?php  echo $data['btn1']; ?>"><b>Choose <?php echo $data['btn1']; ?> / Rs.<?php echo $data['price1']; ?> </b><br>
          <?php

          $custom=explode(",",$data['custom1']); 
          for($i=0;$i<sizeof($custom);$i++)
          {
            ?>
            <input type="radio" name="c1[]" value="<?php echo $custom[$i]; ?>"> <?php echo $custom[$i]; ?>   <br>
            <?php
          }
          ?>
         </div>
          <div class="collapse p-2" id="<?php  echo $data['btn2']; ?>"><b>Choose <?php echo $data['btn2']; ?> &gt; Rs.<?php echo $data['price2']; ?> / Item</b><br>
          <?php
          $custom=explode(",",$data['custom2']); 
          for($i=0;$i<sizeof($custom);$i++)
          {
            ?>
             <input type="checkbox" name="c2[]" value="<?php echo $custom[$i]; ?>"> <?php echo $custom[$i]; ?>   <br>
          <?php } ?>
         </div>
          <div class="collapse p-2" id="<?php echo $data['btn3']; ?>"><b>Choose <?php echo $data['btn3']; ?>  &gt; Rs.<?php echo $data['price3']; ?> / Item</b><br>
          <?php 
          $custom=explode(",",$data['custom3']); 
          for($i=0;$i<sizeof($custom);$i++)
          {
            ?>
             <input type="checkbox" name="c3[]" value="<?php echo $custom[$i]; ?>"> <?php echo $custom[$i]; ?>   <br>
          <?php } ?>
         </div>
</div>
          </div>
        </div>
         <?php
        $a=0;$b=0;$c=0;
        $total=0;
        $cus1="";$cus2="";$cus3="";

       if(isset($_POST['ok']))
       {
        if(isset($_POST['c1']))
        {
          foreach ($_POST['c1'] as $value)
          {
            $a++;
            $cus1.=$value;
          }
          $pr1=$data['price1'];
          $total+=$a*(int)$pr1;
        }
        if(isset($_POST['c2']))
        {
          foreach ($_POST['c2'] as $value)
          {
            $b++;
            $cus2.=$value.",";
          }
          $pr2=$data['price2'];
          $total+=$b*(int)$pr2; 
        }
        if(isset($_POST['c3']))
        {
          foreach ($_POST['c3'] as $value)
          {
            $c++;
            $cus3.=$value.",";
          }
          $pr3=$data['price3'];
          $total+=$c*(int)$pr3;
        }
        // $GLOBALS['custom1']=$cus1;
        // $GLOBALS['custom2']=$cus2;
        // $GLOBALS['custom3']=$cus3;
        // $GLOBALS['total']=$total;
          // echo "<script>alert('$cus1 $cus2 $cus3 $total')</script>";
      } 

      else
      {
          $total=$data['pprice'];
      }

   
?>
        <div class="flex">
          <?php if($GLOBALS['total']==0)
          {
            ?>
            <span class="title-font font-medium text-3xl text-black">Price : ₹ <?php echo  $data['pprice']; ?> /-</span> 
          <?php 
           }
          else
          {  ?>
              <span class="title-font font-medium text-3xl text-black">Price : ₹ <?php echo $GLOBALS['total']; ?> /-</span> 
  <?php           }?>
        </div>
       

       <?php 
        $uname="";
        if(isset($_SESSION['name']))
        {
           $uname=$_SESSION['name'];
        }
            $a=mysqli_connect("localhost","root","","project");
             $name=$data['pname'];
             $demo=mysqli_query($a,"SELECT * FROM cart WHERE product='$name' AND username='$uname'");
          if(mysqli_num_rows($demo)==0)
          {
             ?>
       <a href="insert_cart.php?name=<?php echo $data['pname']; ?>&amp;total=<?php echo $GLOBALS['total']; ?>&amp;cus1=<?php echo $GLOBALS['cus1']; ?>&amp;cus2=<?php echo $GLOBALS['cus2']; ?>&amp;cus3=<?php echo $GLOBALS['cus3']; ?>" class="btn btn-danger btn-lg mt-5 fs-5">Add To Cart </a>
       <?php 
        }
        else
        {
        ?>
         <a href="delete_cart.php?pname=<?php echo $data['pname']; ?>&amp;uname=<?php echo $uname; ?>" class="btn btn-danger btn-lg mt-5 fs-5">Remove From Cart</a>
       <?php 
       }
       ?>
    </div>
  </div>
</section></form>


<?php include("footer.php"); ?>
</body>
</html>