<?php
    
    class memberOrg extends Database{
        public function fetchData($org){
            $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");

            if($fetch->rowCount()){
                $fetch_info = $fetch->fetch();
                $member_list = $this->connect()->query("SELECT * FROM `tbl_accounts` WHERE acc_address='".$fetch_info['acc_address']."' AND acc_org='$org' AND acc_type='user' AND acc_status='Accept' ");

                if($member_list->rowCount()){
                    return $member_list;
                }else{
                    return false;
                }
            }
        }
    }
    class add_org extends Database{
        public function addData($org_name,$org_date){
            $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");

            if($fetch->rowCount()){
                $fetch_info = $fetch->fetch();

                $stmt = "SELECT * FROM tbl_org WHERE org_name='$org_name' AND org_brgy='".$fetch_info['acc_address']."'  ";
                $stmt_run = $this->connect()->query($stmt);
        
                if($stmt_run->rowCount()<=1){
                   
                    $add_data = "INSERT INTO `tbl_org`(`org_name`, `org_establish`, `org_brgy`,`org_status`) 
                    VALUES ('$org_name','$org_date','".$fetch_info['acc_address']."','Pending')";
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
    private $org_id,$org_name,$org_date;
    public function updateData($org_id,$org_name,$org_date){
        $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");
        if($fetch->rowCount()){
            $fetch_info = $fetch->fetch();

            $update_data = "UPDATE `tbl_org` SET `org_name`='$org_name',`org_establish`='$org_date' WHERE org_id='$org_id' AND org_brgy='".$fetch_info['acc_address']."' ";
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
class check_user extends Database{
    public function checking(){
        $fetch = $this->connect()->query("SELECT * FROM tbl_accounts WHERE acc_admin_id='".$_SESSION['user_id']."' ");
        if($fetch->rowCount()){
            $fetch_info = $fetch->fetch();

            $stmt = "SELECT * FROM tbl_accounts WHERE acc_type=? AND acc_address=? AND acc_status=? ";
            $stmt_run = $this->connect()->prepare($stmt);
            $stmt_run->execute(['user',$fetch_info['acc_address'],'Pending']);
            if($stmt_run->rowCount()>0){
               echo "<span class='badge badge-dark'>".$stmt_run->rowCount()."</span>";
    
            }else{
                return false;   
            }
        
        }
    }
}

class addOrgMem extends Database{
    public function addData($acc_id,$position){
        $fetch_info = $this->connect()->prepare("SELECT * FROM tbl_accounts WHERE acc_admin_id=?");
        $fetch_info->execute([$acc_id]);

        if($fetch_info->rowCount()==1){
            $fetch_info = $fetch_info->fetch();

            $check_member = $this->connect()->prepare("SELECT * FROM tbl_org_member WHERE mem_orgname=? AND mem_name=? AND mem_position=?");
            $check_member->execute([$fetch_info['acc_org'],$fetch_info['acc_fname'].' '.$fetch_info['acc_mname'].' '.$fetch_info['acc_lname'],$position]);

            if($check_member->rowCount()==1){
                ?>
                    <script>
                        alert("Already Added Data");
                        window.location.href="view_member_org.php?org_name=<?=$fetch_info['acc_org']?>";
                    </script>
                <?php
            }else{
                $insert_data = $this->connect()->prepare("INSERT INTO `tbl_org_member`(`mem_orgname`,`mem_id_name`,`mem_name`, `mem_birth`, `mem_position`) 
                VALUES (?,?,?,?,?)");
                $insert_data->execute([$fetch_info['acc_org'],$acc_id,$fetch_info['acc_fname'].' '.$fetch_info['acc_mname'].' '.$fetch_info['acc_lname'],$fetch_info['acc_birth'],$position]);

                if($insert_data){
                    ?>
                        <script>
                            alert('Successfully Added Data');
                            window.location.href="view_member_org.php?org_name=<?=$fetch_info['acc_org']?>"
                        </script>
                    <?php
                }else{
                    ?>
                        <script>
                            alert("There's Something Wrong To Add Data");
                            window.location.href="view_member_org.php?org_name=<?=$fetch_info['acc_org']?>"
                        </script>
                    <?php
                }
                    
            }
        }
    }
}

class fetchOrgMem extends Database{
    public function fetchData($value,$org_name){
        if($value =="All"){
            $member_check = $this->connect()->prepare("SELECT * FROM tbl_org_member WHERE mem_orgname=?");
            $member_check->execute([$org_name]);
    
            if($member_check->rowCount()>0){
                return $member_check;
            }else{
                return false;
            }
        }else{
            $member_check = $this->connect()->prepare("SELECT * FROM tbl_org_member WHERE mem_orgname=? AND mem_position=?");
            $member_check->execute([$org_name,$value]);
    
            if($member_check->rowCount()>0){
                return $member_check;
            }else{
                return false;
            }
        }
    }
}

class deleteOrgMem extends Database{
    public function deleteData($acc_id,$acc_org){
        $delete = $this->connect()->prepare("DELETE FROM `tbl_org_member` WHERE mem_id_name=?");
        $delete->execute([$acc_id]);

        if($delete){
            ?>
                <script>
                    alert("Successfully Deleted Data");
                    window.location.href="view_member_org.php?org_name=<?=$acc_org?>";
                </script>
            <?php
        }else{
            ?>
                <script>
                    alert("There's Something Wrong to Delete Data");
                    window.location.href="view_member_org.php?org_name=<?=$acc_org?>";
                </script>
            <?php
        }
    }
}
?>