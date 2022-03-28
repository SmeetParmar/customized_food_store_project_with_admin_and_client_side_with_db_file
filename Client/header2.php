<!DOCTYPE html><html>
<head>
  <title></title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
<link href="vendor/select2/css/select2-bootstrap.css" />
<link href="vendor/select2/css/select2.min.css" rel="stylesheet" />
<link href="css/osahan.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
</head>
<body>
<nav class="navbar navbar-expand-lg fs-4 navbar-light bg-dark" style="background-color:#fff;">
  <div class="container-fluid me-5">
    <a class="navbar-brand fs-3" href="#">Millennium</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0 ml-auto">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="index.php"><font class= "tempfont">Home</font></a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link hfont" href="menu.php"><font class="tempfont">Menu</font></a>
        </li>
        
        <li class="nav-item mx-2">
          <a class="nav-link hfont" href="about.php"><font class=" tempfont">About Us</font></a>
        </li>
           <li class="nav-item mx-2 hfont">
          <a class="nav-link hfont" href="contact.php"><font class=" tempfont">Contact Us</font></a>
        </li>
         <li class="nav-item mx-2">
          <a class="nav-link hfont" href="myorders.php"><font class="tempfont">Orders</font></a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="wishlist.php" class="mx-2 mt-2 tempfont"></small><span class="mdi mdi-heart"></span></a>
        <a href="cart.php" class="mx-2 mt-2 tempfont"></small><span class="mdi mdi-cart"></span></a>
     <?php 
     session_start();
     if(!isset($_SESSION['name']) && !isset($_SESSION['pass']))
     {
       ?>
       <a href="login.php" class="mx-2 mt-2 tempfont"></small><span class="mdi mdi-account"></span></a>
     <?php
     }
     else
     {
       ?>
       <a href="logout.php" class="mx-2 mt-2 tempfont"></small><span class="mdi mdi-logout"></span></a>
     <?php
       }
       ?>
      </form>
    </div>
  </div>
</nav>
</body>
</html>