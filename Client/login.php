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
  <tr><td>
      <div class="form-check">
    <input type="checkbox" class="form-check-input">
    <label class="form-check-label">Remember Me</label>
  </div>
  </td></tr>
  <tr align="center"><td>
  <input type="submit" class="btn btn-primary" name="ok"><br><br></td></tr>
   <tr class="text-center"><td><h4>New user?<a href="register.php">Register</a> Here.</h4></tr></td>
</table>
</form>
</body>
</html>
<?php
$a=mysqli_connect("localhost","root","","project");
if(isset($_POST['ok']))
{
  $name=$_POST['uname'];
  $pass=$_POST['pass'];
  $temp=mysqli_query($a,"SELECT * FROM user WHERE name='$name' AND password='$pass'");
  $data=mysqli_fetch_array($temp);
  if($data['name']==$_POST['uname'] && $data['password']==$_POST['pass'])
    {
      session_start();
      header("location:index.php");
      //echo "<br><h3>Logged in Successfully";
      //echo "<br><h4>You can go to <a href='index.php'>Home Page</h4>";
      // print_r($data['name']);
      // session_start();

      $_SESSION['name']=$data['name'];
      $_SESSION['pass']=$data['password'];
      // echo  $_SESSION['uname'];
      // echo  $_SESSION['upass']; 
      // header("location:index.php");
    }
    else
    {
      echo "<script>alert('Invalid Credentials........')</script>";
    }
}
?>