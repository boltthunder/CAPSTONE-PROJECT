<?php
// database connection
include "connection.php";
// functiion
if (isset($_POST['action'])) {

    if ($_POST['action'] == 'login') {
        login();
    }
}

// login function
function login()
{
    global $connection;

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check username and password are not empty or null
    if (!empty($username) && !empty($password)) {

        $login_page = mysqli_query($connection, "SELECT * FROM account WHERE uname='$username'");

        if (mysqli_num_rows($login_page) > 0) {

            $login_row = mysqli_fetch_array($login_page);

            if ($password == $login_row['pass']) {
                echo 'login success';
                $_SESSION['login'] = true;
                $_SESSION['id'] = $login_row['id'];
            } else {
                echo "Incorrect Password!";
            }
        } else {
            echo "Incorrect Username & Password!";
            exit;
        }
    } else {
        echo "User Not Registered";
        exit;
    }
}
