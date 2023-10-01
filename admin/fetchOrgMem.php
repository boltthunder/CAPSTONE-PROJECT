<?php

include 'config/security.php';

  if(isset($_GET['value'])&& isset($_GET['function'])=='fetchOrgMem'){
    $org_name = secured($_GET['org_name']);
    $value = secured($_GET['value']);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Position</th>
                    <th>Option</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $fetchOrg = new fetchOrgMem();
                    $res_fetch = $fetchOrg->fetchData($value,$org_name);

                    if($res_fetch){
                        $count = $res_fetch->rowCount();
                        for($x=1; $x<=$count; ++$x){
                            $row = $res_fetch->fetch();
                            ?>
                            
                                <td><?=$x;?></td>
                                <td><?=$row['mem_name']?></td>
                                <td><?=$row['mem_birth']?></td>
                                <td><?=$row['mem_position']?></td>
                                <td class="text-center">
                                    <button class="btn btn-success btn-sm" id="view_admin" value="<?=$row['mem_id_name']?>"><i class="fa fa-eye"></i></button>
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
 <div class="modal fade" id="view-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Admin Account</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="inputConfig.php" method="post">
                <div class="modal-body">
                    <div class="upload">
                        <div id="img" ></div>
                    </div>
                    <div class="form-group sm:flex ">
                        <input type="hidden" name="function" value="delete_org_mem">
                        <input type="hidden" name="type_user" id="acc_type">
                        <input type="hidden" name="acc_id" id="acc_id">
                        <div class="grid sm:grid-cols-3">
                            <div class="">
                                <label for="first-name" class="col-form-label">First Name:</label>
                                <input type="text" class="form-control" name="first-name" id="first-name" placeholder="ex: Juan" disabled>
                            </div>
                            <div class="sm:ml-2">
                                <label for="middle-name" class="col-form-label">Middle Name:</label>
                                <input type="text" class="form-control" name="middle-name" id="middle-name" placeholder="Optional" disabled>
                            </div>
                            <div class="sm:ml-2">
                                <label for="last-name" class="col-form-label">Last Name:</label>
                                <input type="text" class="form-control" name="last-name" id="last-name" placeholder="ex: Dela Cruz"disabled>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex">
                        <div class="grid sm:grid-cols-3" >
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" disabled>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="phone">Phone no.</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="09123456789" disabled>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="age">Age.</label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="25" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex" >
                        <div class="grid sm:grid-cols-3">
                            <div class="form-group">
                                <label for="">Birthdate</label>
                                <input type="date" name="birthdate" id="birthdate" class="form-control" disabled>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control" disabled>
                            </div>
                            <input type="text" name="org" id="org" class="form-control">
                        </div>
                    </div>  

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary bg-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger bg-danger" name="delete_org_mem">Delete</button>
                </div>
            </form>
        </div> 
    </div>

<script>
$(document).on('click','#view_admin',function(){
        var value = $(this).val();
        // alert(value);
        $.ajax({
            method:"GET",
            url:"inputConfig.php?id=" + value + "&function=fetching_data",
            success:function(response){
                var res = jQuery.parseJSON(response);
                    if(res.status == 200){
                        $("#view-admin").modal('show');
                        $("#acc_type").val(res.data.acc_type);
                        $("#img").html("<img src='../upload/"+res.data.acc_profile+"' style='height:124px !important;' width = 200 height = 200 title=> ");
                        $("#acc_id").val(res.data.acc_admin_id);
                        $("#first-name").val(res.data.acc_fname);
                        $("#middle-name").val(res.data.acc_mname);
                        $("#last-name").val(res.data.acc_lname);
                        $("#email").val(res.data.acc_email);
                        $("#phone").val(res.data.acc_phone);
                        $("#age").val(res.data.acc_age);
                        $("#birthdate").val(res.data.acc_birth);
                        $("#address").val(res.data.acc_address);
                        $("#org").val(res.data.acc_org);

                    }else{
                        alert(res.message);
                    }
            }
        })
    });
</script>




<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/demo/datatables-demo.js"></script>