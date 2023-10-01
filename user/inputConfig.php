<?php
include 'include/autoload.php';

if(isset($_POST['change_profile']) && $_POST['function'] == 'change_profile'){
    $user_id = secured($_POST['user_id']);
    $profile = $_FILES['profile']['name'];
    $fname = secured($_POST['fname']);
    $mname = secured($_POST['mname']);
    $lname = secured($_POST['lname']);
    $email = secured($_POST['email']);
    $uname = secured($_POST['uname']);
    $cpass = secured($_POST['cpass']);
    $npass = secured($_POST['npass']);

    $update_prof = new update();
    $update_prof->updateInfo($user_id,$profile,$fname,$mname,$lname,$email,$uname,$cpass,$npass);
}
?>