<?php
include 'config/security.php';

if(isset($_POST['add_barangay']) && $_POST['function'] == "add_barangay"){
    $barangay = secured($_POST['brgy']);

    $add_brgy = new add_brgy();
    $add_brgy->addData($barangay);
    
}else if(isset($_POST['delete_brgy']) && $_POST['function'] == "delete_brgy"){
    $deleted_id_brgy = secured($_POST["delete_brgy_id"]);

    $delete_brgy = new delete_brgy();
    $delete_brgy->deleteData($deleted_id_brgy);
    
}else if(isset($_POST['add_admin']) && $_POST['function'] == "add_admin"){
    $profile_img = $_FILES["profile_img"]["name"];
    $fname = secured($_POST['first-name']);
    $mname = secured($_POST['middle-name']);
    $lname = secured($_POST['last-name']);
    $email = secured($_POST['email']);
    $phone = secured($_POST['phone']);
    $age = secured($_POST['age']);
    $birthdate = secured($_POST['birthdate']);
    $address = secured($_POST['address']);
    $uname = secured($_POST['uname']);
    $password = secured($_POST['password']);

    $add_user = new add_admin();
    $add_user->addData($profile_img,$fname,$mname,$lname,$email,$phone,$age,$birthdate,$address,$uname,$password);

}else if(isset($_POST['delete_admin']) && $_POST['function'] == "edit_delete_admin"){
    $acc_id = secured($_POST['acc_id']);

    $delete_admin = new delete_admin();
    $delete_admin->deleteData($acc_id);

}else if(isset($_GET['id']) && $_GET['function'] == "fetching_data"){
    $id = secured($_GET['id']);

    $show_info = new show_info();
    $result = $show_info->fetchData($id);

    if($result){
        while($fetch = $result->fetch()){
            $data = [
                'status' => 200,
                'data' => $fetch
            ];
            echo json_encode($data);
            return false;

        }
    }
    else{
        $data = [
            'message' => "There's Something Wrong to Fetching Data"
        ];
        echo json_encode($data);
        return false;
    }

}else if(isset($_POST['view_org_id']) && $_POST['function'] == "view_org_id"){
    $view_org_id = secured($_POST['view_org_id']);

    $showModal = new modalOrg();
    $res = $showModal->showData($view_org_id);

    if($res){
        while($fetch = $res->fetch()){
            $data = [
                'status' => 200,
                'data' => $fetch
            ];
            echo json_encode($data);
        }

    }
}else if(isset($_POST['value']) && $_POST['function'] == "approved_org"){
    $org_id = secured($_POST['value']);
    $approved_org_id = new approved_org_id();
    $result = $approved_org_id->updateData($org_id);

    if($result){
        $data = [
            'status' => 200,
            'message' => "Successfully Updating Data"
        ];
        echo json_encode($data);
    }else{
        $data = [
            'message' => "There's Something Wrong to Update Data"
        ];
        echo json_encode($data);
    }

}else if(isset($_POST['value']) && $_POST['function'] == "disapproved_org"){
    $org_id = secured($_POST['value']);
    $disapproved_org_id = new disapproved_org_id();
    $result = $disapproved_org_id->updateData($org_id);

    if($result){
        $data = [
            'status' => 200,
            'message' => "Successfully Updating Data"
        ];
        echo json_encode($data);
    }else{
        $data = [
            'message' => "There's Something Wrong to Update Data"
        ];
        echo json_encode($data);
    }

}else if(isset($_POST['value']) && $_POST['function'] == "approved_status"){
    $value = secured($_POST['value']);

    $approved_admin = new approved_admin();
    $result = $approved_admin->updateData($value);

    if($result){
        $data = [
            'status' => 200,
            'message' => "Successfully Update",
        ];
        echo json_encode($data);
        return false;
    }else{
        $data = [
            'message' => "There's Something Wrong to Update Data",
        ];
        echo json_encode($data);
        return false;
    }

}else if(isset($_POST['value']) && $_POST['function'] == "status_disapproved"){
    $value = secured($_POST['value']);

    $disapproved_admin = new disapproved_admin();
    $result = $disapproved_admin->updateData($value);

    if($result){
        $data = [
            'status' => 200,
            'message' => "Successfully Update",
        ];
        echo json_encode($data);
        return false;
    }else{
        $data = [
            'message' => "There's Something Wrong to Update Data",
        ];
        echo json_encode($data);
        return false;
    }
}else if(isset($_POST['delete_user']) && $_POST['function'] == "delete_user"){
    $acc_id = secured($_POST['acc_id']);
    $type_user = secured($_POST['type_user']);

    $delete_admin = new delete_user();
    $delete_admin->deleteData($acc_id,$type_user);

}
else {
    header("Location: index.php");
}
?>