<?php
include 'include/autoload.php';


session_unset();
session_destroy();

header("Location: ../login.php");
?>