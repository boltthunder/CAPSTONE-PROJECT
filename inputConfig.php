<?php
include 'config/controller.php';
function secured($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    $data = str_replace("'", "\'", $data);
    return $data;
}

if(isset($_POST['logging_in']) && secured($_POST['function'] == "logging_in")){
    $uname = secured($_POST['uname']);
    $pass = secured($_POST['pass']);

    $logging_in = new logginIn();
    $logging_in->checkData($uname,$pass);

}else if(isset($_POST['create_user']) && secured($_POST['function'] == "create_user")){
    $profile_img = $_FILES['profile_img']['name'];
    $fname = secured($_POST['fname']);
    $mname = secured($_POST['mname']);
    $lname = secured($_POST['lname']);
    $email = secured($_POST['email']);
    $phone = secured($_POST['phone']);
    $age = secured($_POST['age']);
    $birthdate = secured($_POST['birth']);
    $address = secured($_POST['address']);
    $uname = secured($_POST['uname']);
    $password = secured($_POST['password']);

    $create_user = new create_user();
    $create_user->addData($profile_img,$fname,$mname,$lname,$email,$phone,$age,$birthdate,$address,$uname,$password);
}else{
    header("Location: index.php");
}
?>
