<?php
class controller extends db{
    protected function fetch_data($user_id){
        $stmt = "SELECT * FROM tbl_accounts WHERE acc_admin_id=? ";
        $stmt_run = $this->connect()->prepare($stmt);
        $stmt_run->execute([$user_id]);

        return $stmt_run;
    }

    protected function update_info_user($user_id,$profile,$fname,$mname,$lname,$email,$uname,$cpass,$npass){
        $stmt="SELECT * FROM `tbl_accounts` WHERE acc_admin_id=? ";
        $stmt_run = $this->connect()->prepare($stmt);
        $stmt_run->execute([$user_id]);

        if($stmt_run->rowCount()==1){
            $fetch = $stmt_run->fetch();
            if($profile >= 1){
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($profile);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                if($imageFileType != 'jpeg' && $imageFileType != 'png' && $imageFileType != 'jpg'){
                    ?>
                        <script>
                             window.alert("Please select format JPG,PNG,JPEG");
                            window.location.href = "profile.php";
                        </script>
                    <?php
                }else{
                    if($cpass!==""){
                        if($fetch['acc_password'] != md5($cpass)){
                            ?>
                                <script>
                                    window.alert("Password Are Not Matched");
                                    window.location.href="profile.php";
                                </script>
                            <?php
                        }else{
                            $update_user_info = "UPDATE tbl_accounts SET acc_fname=? ,acc_mname=? acc_lname=?, acc_email=?, acc_password=? , acc_profile=? WHERE acc_admin_id=?";
                            $update_user_info_run = $this->connect()->prepare($update_user_info);
                            $update_user_info_run->execute([$fname,$mname,$lname,$email,md5($npass),$profile,$fetch['acc_admin_id']]);

                            if($update_user_info){
                                    move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);  
                                ?>
                                    <script>
                                        window.alert("Successfully Update");
                                        window.location.href = "profile.php";
                                    </script>
                                <?php
                            }else{
                                ?>
                                    <script>
                                        window.alert("There's Something Wrong To Update Data");
                                        window.location.href = "profile.php";
                                    </script>
                                <?php
                            }
                        }
                    }else{
                            $update_user_info = "UPDATE tbl_accounts SET acc_fname=? ,acc_mname=?, acc_lname=?, acc_email=?, acc_profile=? WHERE acc_admin_id=?";
                            $update_user_info_run = $this->connect()->prepare($update_user_info);
                            $update_user_info_run->execute([$fname,$mname,$lname,$email,$profile,$fetch['acc_admin_id']]);

                            if($update_user_info){
                                    move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file);  

                                ?>
                                    <script>
                                        window.alert("Successfully Update");
                                        window.location.href = "profile.php";
                                    </script>
                                <?php
                            }else{
                                ?>
                                    <script>
                                        window.alert("There's Something Wrong To Update Data");
                                        window.location.href = "profile.php";
                                    </script>
                                <?php
                            }
                    }

                }
            }else{
                if($cpass!==""){
                    if($fetch['acc_password'] != md5($cpass)){
                        ?>
                            <script>
                                window.alert("Password Are Not Matched");
                                window.location.href="profile.php";
                            </script>
                        <?php
                    }else{
                        $update_user_info = "UPDATE tbl_accounts SET acc_fname=? ,acc_mname=?, acc_lname=?, acc_email=?, acc_password=? WHERE acc_admin_id=?";
                        $update_user_info_run = $this->connect()->prepare($update_user_info);
                        $update_user_info_run->execute([$fname,$mname,$lname,$email,md5($npass),$fetch['acc_admin_id']]);

                        if($update_user_info){
                            ?>
                                <script>
                                    window.alert("Successfully Update");
                                    window.location.href = "profile.php";
                                </script>
                            <?php
                        }else{
                            ?>
                                <script>
                                    window.alert("There's Something Wrong To Update Data");
                                    window.location.href = "profile.php";
                                </script>
                            <?php
                        }
                    }
                }else{
                        $update_user_info = "UPDATE tbl_accounts SET acc_fname=? ,acc_mname=?, acc_lname=?, acc_email=? WHERE acc_admin_id=?";
                        $update_user_info_run = $this->connect()->prepare($update_user_info);
                        $update_user_info_run->execute([$fname,$mname,$lname,$email,$fetch['acc_admin_id']]);

                        if($update_user_info){
                            ?>
                                <script>
                                    window.alert("Successfully Update");
                                    window.location.href = "profile.php";
                                </script>
                            <?php
                        }else{
                            ?>
                                <script>
                                    window.alert("There's Something Wrong To Update Data");
                                    window.location.href = "profile.php";
                                </script>
                            <?php
                        }
                }
            }
        }

    }
}
?>