<?php
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = "Create Account";

include "include/header.php";
?>
<div class="container mt-3">
    <div class="flex justify-center">
        <form action="" method="post">
            <div class="flex ">
                <div class="form-group">
                    <div class="flex justify-center">
                        <img src="css/image/12.png" alt="" class="image-box ">
                    </div>
                    <div class="form-group flex sm:grid-cols-2 gap-3 mt-4">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group flex gap-3">
                        <div class="form-group">
                            <label for="bdate">Birth Date</label>
                            <input type="date" id="bdate" class="form-control text-center date-control">
                        </div>
                        <div class="form-group">
                            <label for="bdate">Age</label>
                            <input type="Number" id="bdate" class="form-control text-center">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="" id="email" class="form-control">
                    </div>
                    <div class="form-group flex gap-3">
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" name="" id="pass" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cpass"> Confirm Password</label>
                            <input type="password" id="cpass" class="form-control">
                        </div>
                    </div>
                    <div class="form-group flex ">
                            <input type="checkbox" class="rounded" id=""><span class="ml-2">Show password</span>
                        </div>
                    <div class="form-group flex gap-3 ">
                            <input type="submit" class="form-control btn btn-success" value="Register">
                            <a href="index.php" type="submit" class="form-control btn btn-danger">Back</a>
                        </div>
                </div>

            </div>

        </form>
    </div>
</div>
<?php
include 'include/footer.php';
?>