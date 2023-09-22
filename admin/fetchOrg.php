<?php

include 'config/security.php';

  if(isset($_GET['value'])&& isset($_GET['function'])=='fetchOrg'){
    $value = secured($_GET['value']);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Organization Name</th>
                    <th>Organization Establish</th>
                    <th>Barangay</th>
                    <th>Status</th>
                    <th>Option</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $fetchOrg = new orgFetch();
                    $res_fetch = $fetchOrg->fetchData($value);

                    if($res_fetch->rowCount()){
                        while($row = $res_fetch->fetch()){
                            ?>
                            <tr>
                                <td><?=$row['org_id']?></td>
                                <td><?=$row['org_name']?></td>
                                <td><?=$row['org_establish']?></td>
                                <td><?=$row['org_brgy']?></td>
                                <?php
                                        if($row['org_status']=="Accept"){
                                            echo"<td class='bg-success text-white'>".$row['org_status']."</td>";
                                        }
                                        else if($row['org_status']=="Decline"){
                                            echo"<td class='bg-danger text-white'>".$row['org_status']."</td>";
                                        }else{
                                            echo"<td class='bg-secondary text-white'>".$row['org_status']."</td>";
                                        }
                                    ?>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="viewOrganization" value="<?=$row['org_id']?>"><i class="fa fa-eye"></i></button>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    <?php
  }
?>

 <!-- view org Modal -->
 <div class="modal fade" id="view-organization" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Organization</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="inputConfig.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="function" value="update_delete_org">
                        <input type="hidden" name="org_id" id="org_id" >
                        <div>
                                <div>
                                    <div class="form-group">
                                        <label for="">Organization Name</label>
                                        <input type="text" name="org_name" id="org_name" class="form-control org-box" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Year Establish:</label>
                                        <input type="date" name="org_date" id="org_date" class="form-control" required>
                                    </div>
                                    <div class="text-center py-4">
                                        <h1 class="fs-1"><b>-- Officer List --</b></h1>
                                    </div>
                                    <div class="form-group">
                                        <label for="">President:</label>
                                        <select name="org_press" id="org_press" class="form-control org-box text-center">
                                            <?php
                                                $member = new memberOrg();
                                                $result = $member->fetchData();
                                                if($result){
                                                    while($fetch = $result->fetch()){
                                                        ?>
                                                            <option value="<?=$fetch['acc_fname']." ".$fetch['acc_mname']." ".$fetch['acc_lname']?>">
                                                                <?=$fetch['acc_fname']." ".$fetch['acc_mname']." ".$fetch['acc_lname']?>
                                                            </option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Vice-President:</label>
                                        <select name="org_vpress" id="org_vpress" class="form-control org-box text-center">
                                            <?php
                                                $member = new memberOrg();
                                                $result = $member->fetchData();
                                                if($result){
                                                    while($fetch = $result->fetch()){
                                                        ?>
                                                            <option value="<?=$fetch['acc_fname']." ".$fetch['acc_mname']." ".$fetch['acc_lname']?>">
                                                                <?=$fetch['acc_fname']." ".$fetch['acc_mname']." ".$fetch['acc_lname']?>
                                                            </option>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                   
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="submit" name="delete_org_list" style="background-color:#e74a3b;">Delete</button>
                        <button class="btn btn-success" type="submit" name="update_org_list" style="background-color:#1cc88a;">Update</button>
                    </div>
                </form>
            </div>
        </div>

<script>
    $(document).on('click','#viewOrganization',function(){
        var value = $(this).val();
        // alert(value);
        $.ajax({
            method:"POST",
            url:"inputConfig.php",
            data:{view_org_id:value, function:"view_org_id"},
            success:function(response){
                 var res = jQuery.parseJSON(response);

                if(res.status == 200){
                    $("#view-organization").modal('show');
                    $("#org_id").val(res.data.org_id);
                    $("#org_name").val(res.data.org_name);
                    $("#org_date").val(res.data.org_establish);
                    $("#org_brgy").val(res.data.org_brgy);
                    $("#org_press").val(res.data.org_pres);
                    $("#org_vpress").val(res.data.org_vpress);
                   
                }
            }
        });
    });
</script>




<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/demo/datatables-demo.js"></script>