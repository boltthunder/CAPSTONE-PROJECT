<?php
session_start();

if(isset($_SESSION['user_id']) && $_SESSION['user_type']=="admin"){
    header("Location: super-admin/index.php");
}
if(isset($_SESSION['user_id']) && $_SESSION['user_type']=="sub_admin"){
    header("Location: admin/index.php");
}if(isset($_SESSION['user_id']) && $_SESSION['user_type']=="user"){
    header("Location: user/index.php");
}

?>