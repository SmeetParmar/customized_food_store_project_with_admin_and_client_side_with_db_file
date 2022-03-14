<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title></title>
</head>
<body>

<form method="POST">
  <table align="center" class="col-md-4">
    <tr align="center"><td>
  <h1> Registration Form </h1></td></tr>
  <tr><td>
   <div class="form-group fs-1">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
  </div></td></tr>
   <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Email Address</label>
    <input type="email" class="form-control" name="email">
  </div></td></tr>
  <tr><td>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass">
  </div></td></tr>
  <tr><td>
      <div class="form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">Remember Me</label>
  </div>
  </td></tr>
  <tr align="center"><td>
  <input type="submit" class="btn btn-primary" name="ok"><br><br></td></tr>
   <tr class="text-center"><td> <h4>Already Registered? You can <a href="login.php">Login</a> Here.</h4><br></tr></td>
</table>
</form>
</body>
</html>
<?php 
$a=mysqli_connect("localhost","root","","project");
if(isset($_POST['ok']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  if(mysqli_query($a,"INSERT INTO user (name,email,password) VALUES ('$name','$email','$pass')"))
  {
    echo "<script>window.location.href='login.php'</script>";
  }
  else
  {
     echo "<script>alert('Error In Registering......')</script>";
  }
}
?>