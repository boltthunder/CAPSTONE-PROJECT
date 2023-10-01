<?php
    class  fetch extends controller {
        public function checkInfo($user_id){
            $result = $this->fetch_data($user_id);
    
            if($result){
                return $result;
            }else{
                return false;
            }
            
        }
    }
?>