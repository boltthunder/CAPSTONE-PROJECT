<?php
    
    class memberOrg extends Database{
        public function fetchData(){
            $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");

            if($fetch->rowCount()){
                $fetch_info = $fetch->fetch();
                $member_list = $this->connect()->query("SELECT * FROM `tbl_accounts` WHERE acc_address='".$fetch_info['acc_address']."' AND acc_type='user' AND acc_status='Accept' ");

                if($member_list->rowCount()){
                    return $member_list;
                }else{
                    return false;
                }
            }
        }
    }
    class add_org extends Database{
        private $org_name,$org_date,$org_press,$org_vpress;
        public function addData($org_name,$org_date,$org_press,$org_vpress){
            $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");

            if($fetch->rowCount()){
                $fetch_info = $fetch->fetch();

                $stmt = "SELECT * FROM tbl_org WHERE org_name='$org_name' AND org_brgy='".$fetch_info['acc_address']."' AND org_pres='$org_press' AND org_vpress='$org_vpress' ";
                $stmt_run = $this->connect()->query($stmt);
        
                if($stmt_run->rowCount()<=1){
                   
                    $add_data = "INSERT INTO `tbl_org`(`org_name`, `org_establish`, `org_brgy`, `org_pres`, `org_vpress`,`org_status`) 
                    VALUES ('$org_name','$org_date','".$fetch_info['acc_address']."','$org_press','$org_vpress','Pending')";
                    $add_data_run = $this->connect()->query($add_data);
        
                    if($add_data_run){
                        ?>
                            <script>
                                alert("Successfully Added Data");
                                window.location.href="manage-organization.php";
                            </script>
                        <?php
                    }else{
                        ?>
                            <script>
                                alert("There's Something wrong to add data");
                                window.location.href="manage-organization.php";
                            </script>
                        <?php
                    }
    
                }else {
                    ?>
                        <script>
                            alert("Data is Already Added");
                            window.location.href="manage-organization.php";
                        </script>
                    <?php
                }
            }
        }
    }

    class orgFetch extends Database{
        private $value;
        public function fetchData($value){
            $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");
            if($fetch->rowCount()){
                $fetch_info = $fetch->fetch();
                if($value == "All"){
                    $stmt = $this->connect()->query("SELECT * FROM `tbl_org` WHERE org_brgy='".$fetch_info['acc_address']."' ");
                    if($stmt->rowCount()){
                        return $stmt;
                    }else {
                        return false;
                    }
                }else {
                    $stmt = $this->connect()->query("SELECT * FROM `tbl_org` WHERE org_brgy='".$fetch_info['acc_address']."' AND org_status='$value' ");
                    if($stmt->rowCount()){
                        return $stmt;
                    }else {
                        return false;
                    }
                }
            }

        }
    }
class modalOrg extends Database{
    private $view_org_id;
    public function showData($view_org_id){
        $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");
        if($fetch->rowCount()){
            $fetch_info = $fetch->fetch();

            $stmt = $this->connect()->query("SELECT * FROM `tbl_org` WHERE org_id='$view_org_id' AND org_brgy='".$fetch_info['acc_address']."' ");

            if($stmt->rowCount()==1){
                return $stmt;
            }else{
                return false;
            }
        }
    }
}
class orgUpdate extends Database{
    private $org_id,$org_name,$org_date,$org_press,$org_vpress;
    public function updateData($org_id,$org_name,$org_date,$org_press,$org_vpress){
        $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");
        if($fetch->rowCount()){
            $fetch_info = $fetch->fetch();

            $update_data = "UPDATE `tbl_org` SET `org_name`='$org_name',`org_establish`='$org_date',`org_pres`='$org_press',`org_vpress`='$org_vpress' WHERE org_id='$org_id' AND org_brgy='".$fetch_info['acc_address']."' ";
            $update_data_run = $this->connect()->query($update_data);
    
            if($update_data_run){
                ?>
                    <script>
                        alert("Successfully Update Data");
                        window.location.href="manage-organization.php";
                    </script>
                <?php
            }else{
                ?>
                    <script>
                        alert("There's Something wrong to update data");
                        window.location.href="manage-organization.php";
                    </script>
                <?php
            }
        }
    }
}
class deleteOrg extends Database{
    private $org_id;
    public function deleteData($org_id){
        $delete_data = $this->connect()->query("DELETE FROM `tbl_org` WHERE org_id='$org_id' ");

        if($delete_data){
            ?>
                <script>
                    alert("Successfully Deleted Data");
                    window.location.href="manage-organization.php";
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("There's Something wrong to delete data");
                    window.location.href="manage-organization.php";
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
                $stmt = "SELECT * FROM tbl_accounts WHERE acc_address='".$fetch_info['acc_address']."' AND acc_type='user' ";
                $stmt_run = $this->connect()->query($stmt);
        
                if($stmt_run->rowCount()){
                    return $stmt_run;
                }else{
                    return false;
                }
            }
            else {
                $stmt = "SELECT * FROM tbl_accounts WHERE acc_address='".$fetch_info['acc_address']."' AND acc_type='user' AND acc_status='$value' ";
                $stmt_run = $this->connect()->query($stmt);
        
                if($stmt_run->rowCount()){
                    return $stmt_run;
                }else{
                    return false;
                }
            }
        }
    }
}
class show_info extends Database{
    private $id;
    public function fetchData($id){
        $stmt_run = $this->connect()->query("SELECT * FROM `tbl_accounts` WHERE `acc_admin_id`='$id' ");

        if($stmt_run->rowCount()){
            return $stmt_run;
        }else{
            return false;
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
class delete_admin extends Database{
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
?>