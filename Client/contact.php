
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from askbootstrap.com/preview/groci/theme-three/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 14:33:26 GMT -->
<head>

</head>
<?php include("header2.php");?>



<section class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4">
<h3 class="mt-1 mb-5 fs-3">Get In Touch</h3>
<h6 class="text-dark fs-4"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
<p class="fs-6">10th Floor , Atlantis Building , Nana Mauva Chowk , Rajkot</p>
<h6 class="text-dark fs-4"><i class="mdi mdi-phone"></i> Phone :</h6>
<p class="fs-6">+91 12345-67890</p>
<h6 class="text-dark fs-4"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
<p class="fs-6">(+20) 220 145 6589</p>
<h6 class="text-dark fs-4"><i class="mdi mdi-email"></i> Email :</h6>
<p class="fs-6">millenniumstores@gmail.com</p>
<h6 class="text-dark fs-4"><i class="mdi mdi-link"></i> Website :</h6>
<a href="index.php"><p class="fs-6">www.millenniumstores.com</p></a>

</div>
<div class="col-lg-8 col-md-8">
<div class="card">
<div class="card-body">
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109552.19658195564!2d75.78663251672796!3d30.900473637371658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a837462345a7d%3A0x681102348ec60610!2sLudhiana%2C+Punjab!5e0!3m2!1sen!2sin!4v1530462134939" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118147.68201985057!2d70.75125515704319!3d22.27363079452129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c98ac71cdf0f%3A0x76dd15cfbe93ad3b!2sRajkot%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1645958815296!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0"  allowfullscreen=""></iframe>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="section-padding  bg-white">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 section-title text-left mb-4">
<h2>Contact Us</h2>
</div>
<form class="col-lg-12 col-md-12" method="POST"  novalidate>
<div class="control-group form-group">
<div class="controls">
<label>Full Name <span class="text-danger">*</span></label>
<input type="text" placeholder="Full Name" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
<p class="help-block"></p>
</div>
</div>
<div class="row">
<div class="control-group form-group col-md-6">
<label>Phone Number <span class="text-danger">*</span></label>
<div class="controls">
<input type="text" placeholder="Phone Number" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
</div>
</div>
<div class="control-group form-group col-md-6">
<div class="controls">
<label>Email Address <span class="text-danger">*</span></label>
<input type="text" placeholder="Email Address" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
</div>
</div>
</div>
<div class="control-group form-group">
<div class="controls">
<label>Message <span class="text-danger">*</span></label>
<textarea rows="4" cols="100" placeholder="Message" class="form-control" name="msg" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
</div>
</div>


<input type="submit" value="Send" name="ok" class="btn btn-success">
<?php 
if(isset($_POST['ok']))
{
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
    {
        $a=mysqli_connect("localhost","root","","project");
        $nm=$_POST["name"];
        $phone=$_POST["phone"];
        $email=$_POST["email"];
        $msg=$_POST["msg"];
        if($nm=="" || $phone=="" || $email=="" || $msg=="")
        {
            echo "<script>alert('Please Fill All Fields!!!!!!')</script>";
        }
        else
        {
            if(mysqli_query($a,"INSERT INTO feedback (name,phone,email,msg) VALUES ('$nm','$phone','$email','$msg')"))
            {
                //header("location:index.php");
                echo "<script>alert('Success...Thanks For Your Feedback!!!!!')</script>";
            }
            else
            {
                echo "<script>alert('Error!!!!')</script>";
            }
        }
    }
}
?>
</form>
</div>
</div>
</section>
<?php include("footer.php");?>

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/jquery/jquery.min.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>


<script src="js/jqBootstrapValidation.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>
<script src="js/contact_me.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>

 <script src="vendor/select2/js/select2.min.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>

<script src="vendor/owl-carousel/owl.carousel.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>

<script src="js/custom.js" type="1a3c0690d43e04cc6061fa33-text/javascript"></script>
<script src="../../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="1a3c0690d43e04cc6061fa33-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c224d7ba8b2880b","version":"2021.12.0","r":1,"token":"dd471ab1978346bbb991feaa79e6ce5c","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from askbootstrap.com/preview/groci/theme-three/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Dec 2021 14:33:27 GMT -->
</html>