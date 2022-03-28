<script type="text/javascript">
<?php 
session_start();

unset($_SESSION['name']);
unset($_SESSION['pass']);  ?>
window.location.href='index.php';
alert("Successfully Logged Out.....");
</script>