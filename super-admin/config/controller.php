<?php
class add_brgy extends Database{
    private $barangay;
    public function addData($barangay){
        $stmt = "SELECT * FROM tbl_brgy WHERE brgy_name='$barangay' ";
        $stmt_run = $this->connect()->query($stmt);

        if($stmt_run->rowCount()==1){
            ?>
                <script>
                    alert("Name of Barangay is Already Added");
                    window.location.href="barangay-list.php";
                </script>
            <?php
        }else {
            $add_data = "INSERT INTO `tbl_brgy`(`brgy_name`) VALUES ('$barangay')";
            $add_data_run = $this->connect()->query($add_data);

            if($add_data_run){
                ?>
                    <script>
                        alert("Successfully Added");
                        window.location.href="barangay-list.php";
                    </script>
                <?php
            }else {
                ?>
                    <script>
                        alert("There's Something Wrong to Added");
                        window.location.href="barangay-list.php";
                    </script>
                <?php
            }
        }
    }
}

class fetchBrgy extends Database{
    public function fetchData(){
        $stmt = "SELECT * FROM tbl_brgy";
        $stmt_run = $this->connect()->query($stmt);

        if($stmt_run){
            return $stmt_run;
        }else{
            return false;
        }
    }
}

class delete_brgy extends Database{
    private $deleted_id_brgy;
    public function deleteData($deleted_id_brgy){
        $delete_data = $this->connect()->query("DELETE FROM `tbl_brgy` WHERE brgy_id='$deleted_id_brgy' ");

        if($delete_data){
            ?>
                <script>
                    alert("Deleted Data");
                    window.location.href="barangay-list.php";
                </script>
            <?php
        }else {
            ?>
                <script>
                    alert("There's Something Wrong to Delete Data");
                    window.location.href="barangay-list.php";
                </script>
            <?php
        }
    }
}

class org_list extends Database{
    public function checkData($brgy){
        $stmt = $this->connect()->query("SELECT * FROM `tbl_org` WHERE org_brgy='$brgy' ");
        if($stmt){
            return $stmt;
        }else{
            return false;
        }
    }
}
class check_page extends Database{
    private $value;
    public function checkData($value){
        $checking = $this->connect()->query("SELECT * FROM tbl_brgy WHERE brgy_name='$value' ");
        if($checking->rowCount()!=1){
           ?>
            <script>
                window.location.href="manage-organization.php";
            </script>
           <?php
        }
    }
}
class approved_org_id extends Database{
    private $org_id;
    public function updateData($org_id){
        $approved_org = $this->connect()->query("UPDATE  `tbl_org` SET `org_status`='Accept' WHERE org_id='$org_id' ");
        if($approved_org){
           return $approved_org;
        }else{
           return false;
        }
    }
}
class disapproved_org_id extends Database{
    private $org_id;
    public function updateData($org_id){
        $approved_org = $this->connect()->query("UPDATE  `tbl_org` SET `org_status`='Decline' WHERE org_id='$org_id' ");
        if($approved_org){
           return $approved_org;
        }else{
           return false;
        }
    }
}

class orgFetch extends Database{
    private $value,$brgy;
    public function fetchData($value,$brgy){
        if($value == "All"){
            $stmt = $this->connect()->query("SELECT * FROM `tbl_org` WHERE org_brgy='$brgy' ");
            if($stmt){
                return $stmt;
            }else {
                return false;
            }
        }else {
            $stmt = $this->connect()->query("SELECT * FROM `tbl_org` WHERE org_brgy='$brgy' AND  org_status='$value' ");
            if($stmt){
                return $stmt;
            }else {
                return false;
            }
        }
    }
}
class modalOrg extends Database{
    private $view_org_id;
    public function showData($view_org_id){
    
        $stmt = $this->connect()->query("SELECT * FROM `tbl_org_member` WHERE mem_orgname='$view_org_id ' ");

        if($stmt->rowCount()){
            return $stmt;
        }else{
            return false;
        }
    
    }
}

class add_admin extends Database {
    private $profile_img,$fname,$mname,$lname,$email,$phone,$age,$birthdate,$address,$uname,$password;
    public function addData($profile_img,$fname,$mname,$lname,$email,$phone,$age,$birthdate,$address,$uname,$password){
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($profile_img);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType !="svg") {
            ?>
            <script>
                window.alert("Please select format JPG,PNG,JPEG");
                window.location.href = "manage-admin.php";
            </script>
            <?php
        }else if($imageFileType ==""){
            $profile_img ="default-img.png";
        }
        else{
            $exist_email = "SELECT * FROM tbl_accounts WHERE acc_email='$email' ";
            $exist_email_run = $this->connect()->query($exist_email);
            
            if($exist_email_run->rowCount()==1){
                ?>
                    <script>
                        alert("Email Address is Already Added");
                        window.location.href="manage-admin.php";
                    </script>
                <?php
            }
            $exist_adress = $this->connect()->query("SELECT * FROM `tbl_accounts` WHERE acc_address='$address' AND acc_type='sub_admin' ");
    
            if($exist_adress->rowCount()==1){
                ?>
                    <script>
                        alert("Only 1 admin each Barangay");
                        window.location.href="manage-admin.php";
                    </script>
                <?php
            }
    
    
            else{
                $add_user = "INSERT INTO `tbl_accounts`(`acc_admin_id`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_email`, `acc_age`, `acc_phone`,  `acc_birth`, `acc_address`, `acc_uname`, `acc_password`,`acc_profile`,`acc_type`) 
                VALUES ('".rand()."','$fname','$mname','$lname','$email','$age','$phone','$birthdate','$address','$uname','".md5($password)."','$profile_img','sub_admin')";
                $add_user_run = $this->connect()->query($add_user);
    
                if($add_user_run){
                    move_uploaded_file($_FILES["profile_img"]["tmp_name"], $target_file);
                    ?>
                        <script>
                            alert("Successfully Added Data");
                            window.location.href="manage-admin.php";
                        </script>
                    <?php
                }else {
                    ?>
                        <script>
                            alert("There's Something Wrong to Add Data");
                            window.location.href="manage-admin.php";
                        </script>
                    <?php
                }
            }
        }

    }
}

class fetchAdmin extends Database{
    private $value;
    public function fetchData($value){
        if($value =="All"){
            $stmt = "SELECT * FROM tbl_accounts WHERE acc_type='sub_admin' ";
            $stmt_run = $this->connect()->query($stmt);
    
            if($stmt_run->rowCount()){
                return $stmt_run;
            }else{
                return false;
            }
        }
        else {
            $stmt = "SELECT * FROM tbl_accounts WHERE acc_type='sub_admin' AND acc_address='$value' ";
            $stmt_run = $this->connect()->query($stmt);
    
            if($stmt_run->rowCount()){
                return $stmt_run;
            }else{
                return false;
            }
        }
    }
}
class show_info extends Database{
    private $id;
    public function fetchData($id){
        $stmt_run = $this->connect()->query("SELECT * FROM `tbl_accounts` WHERE `acc_admin_id`='$id' ");

        if($stmt_run->rowCount()){
            $this->connect()->query("UPDATE `tbl_accounts` SET acc_check='View' WHERE acc_admin_id='$id' ");
            return $stmt_run;
        }else{
            return false;
        }
    }
}
class delete_admin extends Database{
    private $acc_id;
    public function deleteData($acc_id){
        $delete_data = $this->connect()->query("DELETE FROM `tbl_accounts` WHERE acc_id='$acc_id' ");
        if($delete_data){
                ?>
                    <script>
                        alert("Successfully Deleted Data");
                        window.location.href="manage-admin.php";
                    </script>
                <?php 

        }else{
            ?>
                <script>
                    alert("There's Something Wrong to delete data");
                    window.location.href="manage-admin.php";
                </script>
            <?php 
        }
    }
}
class fetchUser extends Database{
    private $value;
    public function fetchData($value){
        $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");
        if($fetch->rowCount()){
            $fetch_info = $fetch->fetch();
            if($value =="All"){
                $stmt = "SELECT * FROM tbl_accounts WHERE acc_type='user' AND acc_status='Accept' ";
                $stmt_run = $this->connect()->query($stmt);
        
                if($stmt_run->rowCount()){
                    return $stmt_run;
                }else{
                    return false;
                }
            }
            else {
                $stmt = "SELECT * FROM tbl_accounts WHERE acc_type='user' AND acc_address=? AND acc_status='Accept' ";
                $stmt_run = $this->connect()->prepare($stmt);
                $stmt_run->execute([$value]);
                if($stmt_run->rowCount()){
                    return $stmt_run;
                }else{
                    return false;
                }
            }
        }
    }
}
class approved_admin extends Database{
    private $value;
    public function updateData($value){
        $update_data = $this->connect()->query("UPDATE `tbl_accounts` SET `acc_status`='Accept' WHERE acc_admin_id='$value' ");

        if($update_data){
            return $update_data;
        }else{
            return false;
        }
    }
}
class disapproved_admin extends Database{
    private $value;
    public function updateData($value){
        $update_data = $this->connect()->query("UPDATE `tbl_accounts` SET `acc_status`='Decline' WHERE acc_admin_id='$value' ");

        if($update_data){
            return $update_data;
        }else{
            return false;
        }
    }
}
class delete_user extends Database{
    private $acc_id,$type_user;
    public function deleteData($acc_id,$type_user){
        $delete_data = $this->connect()->query("DELETE FROM `tbl_accounts` WHERE acc_id='$acc_id' ");
        if($delete_data){
            ?>
                <script>
                    alert("Successfully Deleted Data");
                    window.location.href="manage-user.php";
                </script>
            <?php 
        }else{
            ?>
                <script>
                    alert("There's Something Wrong to delete data");
                    window.location.href="manage-user.php";
                </script>
            <?php 
        }
    }
}

class check_user extends Database{
    public function checking(){
        $stmt = "SELECT * FROM tbl_accounts WHERE acc_type='user' AND acc_status='Accept' AND acc_check='Not View' ";
        $stmt_run = $this->connect()->query($stmt);
        if($stmt_run->rowCount()>0){
           return $stmt_run;

        }else{
            return false;   
        }
    }
}



class fetch_org_mem extends Database{
    public function fetchData($value){
       if($value == "All"){
        $stmt = "SELECT * FROM tbl_org";
        $stmt_run = $this->connect()->query($stmt);

        if($stmt_run->rowCount()>0){
            return $stmt_run;
        }else{
            return false;
        }
       }else{
        $stmt = "SELECT * FROM tbl_org WHERE org_brgy=? ";
        $stmt_run = $this->connect()->prepare($stmt);
        $stmt_run->execute([$value]);

        if($stmt_run->rowCount()>0){
            return $stmt_run;
        }else{
            return false;
        }
       }
    }
}
class count_mem extends Database{
    public function countData($counting){
        $stmt = "SELECT * FROM tbl_org WHERE org_name=? ";
        $stmt_run = $this->connect()->prepare($stmt);
        $stmt_run->execute([$counting]);


        if($stmt_run->rowCount()>0){
            echo $stmt_run->rowCount();
        }else{
            return false;
        }
    }
}
?>