<?php

include 'config/security.php';

  if(isset($_GET['value'])&& isset($_GET['brgy'])&& isset($_GET['function'])=='org_status'){
   
    $value = secured($_GET['value']);
    $brgy = secured($_GET['brgy']);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>Organization Name</th>
                    <th>Organization Establish</th>
                    <th>Status</th>
                    <th>Option</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $fetchOrg = new orgFetch();
                    $res_fetch = $fetchOrg->fetchData($value,$brgy);

                    if($res_fetch->rowCount()){
                        while($row = $res_fetch->fetch()){
                            ?>
                            <tr>
                                <td><?=$row['org_name']?></td>
                                <td><?=$row['org_establish']?></td>
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
                                   <?php
                                        if($row['org_status']=="Pending"){
                                        ?>
                                            <button type="button" class="btn btn-success btn-sm bg-success" value="<?=$row['org_id']?>" id="status_approved" title="Accept"><i class="fa fa-check"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm bg-danger" value="<?=$row['org_id']?>" id="status_disapproved" title="Decline"><i  class="fa fa-times"></i></button>
                                        <?php
                                        }else{
                                            ?>
                                                <button type="button" class="btn btn-success btn-sm bg-success" id="viewOrganization" value="<?=$row['org_name']?>"><span><i class="fa fa-eye"></i></span></button>
                                            <?php
                                        }
                                   ?>
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
                    <div class="modal-body">
                        <div>
                                <div>
                                    <div class="form-group">
                                        <label for="">Organization Name</label>
                                        <input type="text" name="org_name" id="org_name" class="form-control text-center org-box" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Year Establish:</label>
                                        <input type="date" name="org_date" id="org_date" class="form-control text-center" disabled>
                                    </div>
                                    <div>
                                        <label for="">Brangay Name</label>
                                        <input name="org_brgy" id="org_brgy" class="form-control text-center" disabled>

                                        <!-- <input type="text"> -->
                                    </div>
                                    <div class="text-center py-4">
                                        <h1 class="fs-1"><b>-- Officer List --</b></h1>
                                    </div>
                                    <div class="form-group">
                                        <label for="">President:</label>
                                        <input type="text" name="org_press" id="org_press" class="form-control text-center" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Vice-President:</label>
                                        <input type="text" name="org_vpress" id="org_vpress" class="form-control text-center" disabled>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                       <button class="btn btn-secondary bg-secondary" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>

<script>
    $(document).on('click','#viewOrganization',function(){
        var value = $(this).val();
        alert(value);
        $.ajax({
            method:"POST",
            url:"inputConfig.php",
            data:{view_org_id:value, function:"view_org_id"},
            success:function(response){
                 var res = jQuery.parseJSON(response);

                if(res.status == 200){
                    $("#view-organization").modal('show');
                    // $("#org_id").val(res.data.org_id);
                    // $("#org_name").val(res.data.org_name);
                    // $("#org_date").val(res.data.org_establish);
                    // $("#org_brgy").val(res.data.org_brgy);
                    // $("#org_press").val(res.data.org_pres);
                    // $("#org_vpress").val(res.data.org_vpress); 
                }else{
                    alert("asd");
                }
            }
        });
    });

        // Approval
        $(document).on('click','#status_approved',function(){
        var value = $(this).val();
        // alert(value);
        $.ajax({
            method:"POST",
            url:"inputConfig.php",
            data:{value:value, function:"approved_org"},
            success:function(response){
                var res = jQuery.parseJSON(response);

                if(res.status == 200){
                    alert(res.message);
                    location.reload();
                }else{
                    alert("there's something wrong");
                }
            }
        });
    });
    // Disapproved
    $(document).on('click','#status_disapproved',function(){
        var value = $(this).val();
        // alert(value);
        $.ajax({
            method:"POST",
            url:"inputConfig.php",
            data:{value:value, function:"disapproved_org"},
            success:function(response){
                var res = jQuery.parseJSON(response);

                if(res.status == 200){
                    alert(res.message);
                    location.reload();
                }else{
                    alert("there's something wrong");
                }
            }
        })
    });

</script>




<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/demo/datatables-demo.js"></script>