<?php 
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Home';

include 'include/header.php'
?>




<?php include 'include/footer.php';?>