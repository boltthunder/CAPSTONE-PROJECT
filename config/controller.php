<?php
include 'db_conn.php';
include 'security.php';
class logginIn extends Database
{
    private $uname, $pass;
    public function checkData($uname, $pass)
    {
        $checkingInfo = $this->connect()->query("SELECT * FROM `tbl_accounts` WHERE acc_uname='$uname' AND acc_password='" . md5($pass) . "' ");

        if ($checkingInfo->rowCount()) {
            $fetch = $checkingInfo->fetch();

            if ($fetch['acc_type'] == "admin") {

                $_SESSION['user_id'] = $fetch['acc_admin_id'];
                $_SESSION['user_type'] = $fetch['acc_type'];
                $_SESSION['user_fname'] = $fetch['acc_fname'];
                $_SESSION['user_mname'] = $fetch['acc_mname'];
                $_SESSION['user_lname'] = $fetch['acc_lname'];
                header("Location: super-admin/index.php");

            } elseif ($fetch['acc_type'] == "sub_admin") {

                $_SESSION['user_id'] = $fetch['acc_admin_id'];
                $_SESSION['user_type'] = $fetch['acc_type'];
                $_SESSION['user_fname'] = $fetch['acc_fname'];
                $_SESSION['user_mname'] = $fetch['acc_mname'];
                $_SESSION['user_lname'] = $fetch['acc_lname'];
                header("Location: admin/index.php");

            } elseif ($fetch['acc_type'] == "user") {

                if ($fetch['acc_status'] == "Pending") {

                    $_SESSION['decline'] = 'Please Wait to Accept your Account by admin';
                    $_SESSION['icon'] = 'info';
                    $_SESSION['title'] = 'Wait!!';
                    // $_SESSION['pending'] = 'Please Wait to Accept your Account';
                    header('location: login.php');

                } else if ($fetch['acc_status'] == "Decline") {

                    $_SESSION['decline'] = 'Sorry to Inform you that your account are decline by admin';
                    $_SESSION['icon'] = 'error';
                    $_SESSION['title'] = 'Decline';
                    header('location: login.php');
                    // echo "Your account decline by the admin";

                } else {
                    // echo"user";
                    $_SESSION['user_id'] = $fetch['acc_admin_id'];
                    $_SESSION['user_type'] = $fetch['acc_type'];
                    $_SESSION['user_fname'] = $fetch['acc_fname'];
                    $_SESSION['user_mname'] = $fetch['acc_mname'];
                    $_SESSION['user_lname'] = $fetch['acc_lname'];
                    header("Location: user/index.php");

                }
            }
        } else {
            $_SESSION['decline'] = '';
            $_SESSION['icon'] = 'error';
            $_SESSION['title'] = 'Wrong Username & Password';
            header('location: login.php');
           
        }
    }
}
class create_user extends Database
{
    private $profile_img, $fname, $mname, $lname, $email, $phone, $age, $birthdate, $address, $uname, $password;
    public function addData($profile_img, $fname, $mname, $lname, $email, $phone, $age, $birthdate, $address, $uname, $password)
    {
        $target_dir = "upload/";
        $target_file = $target_dir . basename($profile_img);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            ?>
            <script>
                window.alert("Please select format JPG,PNG,JPEG");
                window.location.href = "create_account.php";
            </script>
            <?php
        } else {
            $stmt = "SELECT * FROM tbl_accounts WHERE acc_fname='$fname' AND acc_mname='$mname' AND acc_lname='$lname' AND acc_email='$email' ";
            $stmt_run = $this->connect()->query($stmt);

            if ($stmt_run->rowCount() == 1) {
                ?>  
                <script>
                    alert("Already Added Data");
                    window.location.href = "create_account.php";
                </script>
                <?php
            } else {
                $add_user = "INSERT INTO `tbl_accounts`(`acc_admin_id`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_email`, `acc_age`, `acc_phone`,  `acc_birth`, `acc_address`, `acc_uname`, `acc_password`,`acc_profile`,`acc_type`,`acc_status`) 
                VALUES ('" . rand() . "','$fname','$mname','$lname','$email','$age','$phone','$birthdate','$address','$uname','" . md5($password) . "','$profile_img','user','Pending')";
                $add_user_run = $this->connect()->query($add_user);

                if ($add_user_run) {
                    move_uploaded_file($_FILES["profile_img"]["tmp_name"], $target_file);
                    $_SESSION['decline'] = 'Please wait to accept your account by admin. Thank you!';
                    $_SESSION['icon'] = 'info';
                    $_SESSION['title'] = '';
                    header('location: login.php');
                    // <!-- <script>
                    //     alert("Please wait to accept your account by admin. Thank you!");
                    //     window.location.href = "login.php";
                    // </script> -->
                    
                } else {
                    ?>
                    <script>
                        alert("There's Something Wrong to Add Data");
                        window.location.href = "create_account.php";
                    </script>
                    <?php
                }
            }
        }


    }
}
class fetchBrgy extends Database
{
    public function fetchData()
    {
        $stmt = "SELECT * FROM tbl_brgy";
        $stmt_run = $this->connect()->query($stmt);

        if ($stmt_run) {
            return $stmt_run;
        } else {
            return false;
        }
    }
}
?>