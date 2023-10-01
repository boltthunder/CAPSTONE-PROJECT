<?php
include 'include/autoload.php';
unset($_SESSION['title']);
$_SESSION['title'] = "UPDATE PROFILE";

include 'include/header.php';
include 'include/navbar.php';
?>
</div>
<div class="container py-5">
<form action="inputConfig.php" method="post" class="form-group" enctype="multipart/form-data">
    <input type="hidden" name="function" value="change_profile">
    <input type="hidden" name="user_id" value="<?=$_SESSION['user_id']?>">
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-12">
            <?php
                $user_id = $_SESSION['user_id'];
                $user_info = new fetch();
                $result = $user_info->checkInfo($user_id);

                if($result){
                    $row = $result->fetch();
                    ?>
                        <img class="border bg-secondary" src="../upload/<?=$row['acc_profile']?>" alt="" width="220" height="250" id="output"><br>
                            <input type="file" name="profile" id="" onchange="changeimg(event);">
                        </div>
                        <div class="col-xl-9 col-lg-9 col-12">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-12">
                                <label for="" class="py-1">First Name: </label>
                                <input type="text" name="fname" value="<?=$row['acc_fname']?>" class="form-control">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12">
                                <label for="" class="py-1">Middle Name: </label>
                                <input type="text" name="mname" value="<?=$row['acc_mname']?>" class="form-control">
                            </div><div class="col-xl-4 col-lg-4 col-12">
                                <label for="" class="py-1">Last Name: </label>
                                <input type="text" name="lname" value="<?=$row['acc_lname']?>" class="form-control">
                            </div>
                        </div>
                        <label for="" class="py-1">Email: </label>
                        <input type="text" name="email" value="<?=$row['acc_email']?>" class="form-control">
                        <label for="" class="py-1">UserName: </label>
                        <input type="text" name="uname" value="<?=$row['acc_uname']?>" class="form-control">
                        <label for="" class="py-1">Current Password: </label>
                        <input type="password" name="cpass" id="cpass" class="form-control">
                        <label for="" class="py-1">New Password: </label>
                        <input type="password" name="npass" id="npass" class="form-control">
                        
                        <div class="form-group py-2">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Show Password</label>
                            </div>
                        </div>
                    <?php
                }
            ?>
                <div class="text-end py-3">
                    <button type="submit" name="change_profile" class="btn btn-success">Save</button>
                </div>
            </form> 
        </div>
    </div>
</div>
<script>
    function showpass(){
        if(this.checked){
            // alert("check");
            document.getElementById('cpass').setAttribute('type','text');
            document.getElementById('npass').setAttribute('type','text');
        }
        else{
            // alert("ubcheck");
            document.getElementById('cpass').setAttribute('type','password');
            document.getElementById('npass').setAttribute('type','password');
        }
    }
    document.getElementById('customCheck').addEventListener('click' , showpass);

        var changeimg = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src);
        }
    };
</script>


<?php
include 'include/footer.php';
?>
