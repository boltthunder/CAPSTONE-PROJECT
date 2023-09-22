<?php
session_start();
include '../config/db_conn.php';
include 'controller.php';

function secured($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace("'", "\'", $data);
    return $data;
  }

if(!isset($_SESSION['user_id'])){
    header("Location: ../login.php");
}

if(isset($_SESSION['user_id']) && $_SESSION['user_type']=="admin"){
    header("Location: ../super-admin/index.php");
}
elseif(isset($_SESSION['user_id']) && $_SESSION['user_type']=="user"){
    header("Location: ../user/index.php");
}
?>