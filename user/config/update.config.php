<?php
class update extends controller{
    public function updateInfo($user_id,$profile,$fname,$mname,$lname,$email,$uname,$cpass,$npass){
        $result = $this->update_info_user($user_id,$profile,$fname,$mname,$lname,$email,$uname,$cpass,$npass);

        if($result){
            return $result;
        }else{
            return false;
        }
    }
}
?>