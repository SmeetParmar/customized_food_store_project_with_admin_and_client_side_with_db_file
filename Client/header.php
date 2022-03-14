<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Askbootstrap">
<meta name="author" content="Askbootstrap">
<title>Millennium</title>

<link rel="icon" type="image/png" href="img/favicon.png">

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

<nav class="navbar navbar-light navbar-expand-lg bg-dark bg-faded osahan-menu">
<div class="container">
<a class="navbar-brand" href="index.html"> <img src="img/logo2.png" alt="logo"> </a>
<div class="navbar-collapse" id="navbarNavDropdown ">
<div class="navbar-nav mr-auto mt-5 mt-lg-2 margin-auto top-categories-search-main">
<div class="top-categories-search">
<div class="input-group">

<input class="form-control" placeholder="Search products in Your City" aria-label="Search products in Your City" type="text">
<span class="input-group-btn">
<button class="btn btn-secondary" type="button"><i class="mdi mdi-file-find"></i> Search</button>
</span>
</div>
</div>
</div>
<div class="my-2 my-lg-0">
<ul class="list-inline main-nav-right">
<li class="list-inline-item cart-btn">
	<a href="#" data-toggle="offcanvas" class="btn btn-link border-none"><i class="mdi mdi-heart"></i>
	</a>
    <a href="#" class="btn btn-link border-none"><i class="mdi mdi-cart"></i>
	</a>
	<?php 
	session_start();
	if(!isset($_SESSION['name']) && !isset($_SESSION['pass']))
	{
		?>
		<a href="login.php"  class="btn btn-link border-none"><i class="mdi mdi-account"></i></a>
	<?php
	}
	else
	{
		?>
		<a href="logout.php" class="btn btn-link border-none"></small><span class="mdi mdi-logout"></span></a>
		
	<?php

	}
	?>
</li>
</ul>
</div>
</div>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light osahan-menu-2 pad-none-mobile">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="navbarText">
<ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
<li class="nav-item">
<a href="index.php" class="nav-link"><b>Home</b></a>
</li>
<li class="nav-item">
<a href="about.php" class="nav-link"><b>About Us</b></a>
</li>
<li class="nav-item">
<a href="menu.php" class="nav-link"><b>Menu</b></a>
</li>
<li class="nav-item">
<a href="customize.php" class="nav-link"><b>Customize</b></a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php"><b>Contact Us</b></a>
</li>
</ul>
</div>
</div>
</nav>
</body>
</html>
	