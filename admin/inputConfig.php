<?php
include 'config/security.php';

 if(isset($_POST['add_org_list']) && $_POST['function'] == "add_org_list"){
    $org_name = secured($_POST['org_name']);
    $org_date = secured($_POST['org_date']);

    $add_org = new add_org();
    $add_org->addData($org_name,$org_date);
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
}else if(isset($_POST['update_org_list']) && $_POST['function'] == "update_delete_org"){
    $org_id = secured($_POST['org_id']);
    $org_name = secured($_POST['org_name']);
    $org_date = secured($_POST['org_date']);
    $org_update = new orgUpdate();
    $org_update->updateData($org_id,$org_name,$org_date);
}else if(isset($_POST['delete_org_list']) && $_POST['function'] == "update_delete_org"){
    $org_id = secured($_POST['org_id']);

    $deleteOrg = new deleteOrg();
    $deleteOrg->deleteData($org_id);
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

    $delete_admin = new delete_admin();
    $delete_admin->deleteData($acc_id,$type_user);

}else if(isset($_POST['add_org_member']) && $_POST['function'] == "add_org_member"){
    $acc_id = secured($_POST['member_id']);
    $position = secured($_POST['mem_position']);

    $add_org_mem = new addOrgMem();
    $add_org_mem->addData($acc_id,$position);
}else if(isset($_POST['delete_org_mem']) && $_POST['function'] == "delete_org_mem"){
    $acc_id = secured($_POST['acc_id']);
    $acc_org = secured($_POST['org']);
    
    $delete_org_mem = new deleteOrgMem();
    $delete_org_mem->deleteData($acc_id,$acc_org);
}else {
    header("Location: index.php");
}
?>