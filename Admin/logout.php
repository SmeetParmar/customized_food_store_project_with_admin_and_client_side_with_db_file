<script type="text/javascript">
<?php 
session_start();
unset($_SESSION['uname']);
unset($_SESSION['upass']);  ?>
window.location.href='index.php';
alert("Successfully Logged Out.....");
</script>