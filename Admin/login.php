<?php 
session_start();
if(isset($_SESSION['uname']) && isset($_SESSION['upass']))
{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title></title>
</head>
<body>

<form class="" method="POST">
  <table align="center" class="col-md-4">
    <tr align="center"><td>
  <h1> Login Form </h1></td></tr>
  <tr><td>
   <div class="form-group fs-1">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="uname" aria-describedby="emailHelp">
  </div></td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass">
  </div></td></tr>
  <tr align="center"><td>
  <input type="submit" class="btn btn-primary" name="ok"><br><br></td></tr>
</table>
  <!-- <h4>New User? You can <a href="register.php">Register</a> Here. -->
</form>
</body>
</html>
<?php
$a=mysqli_connect("localhost","root","","project");
$temp=mysqli_query($a,"SELECT * FROM admin");
$reg=mysqli_fetch_array($temp);
// echo $reg['name'];
// echo $reg['password'];
if(isset($_POST['ok']))
{
if($reg['name']==$_POST['uname'] && $reg['password']==$_POST['pass'])
  {
    session_start();
    $_SESSION['uname']=$reg['name'];
    $_SESSION['upass']=$reg['password'];
    echo  $_SESSION['uname'];
    echo  $_SESSION['upass']; 
    header("location:index.php");
  }
  else
  {
    echo "<script>alert('Invalid Credentials.......')</script>";
  }
}
?>