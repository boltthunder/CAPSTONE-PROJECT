<?php
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Barangay List";

include 'include/header.php'; 
?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Barangay List</h1>
        <div class="flex">
            <button data-toggle="modal" data-target="#add-organization" class="btn btn-success">Add Barangay</button>
        </div>
    </div>

    <div class="add-box flex justify-center grid-cols-1 h-fit-content">
        <div class="card shadow mb-4 flex justify-center w-[100%] ">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Name of Barangay</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                                $fetch_brgy = new fetchBrgy();
                                $result = $fetch_brgy->fetchData();

                                if($result->rowCount()){
                                    while($row = $result->fetch()){
                                        ?>
                                            <tr>
                                                <td><?=$row['brgy_name']?></td>
                                                <td class="text-center">
                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteBrgy<?=$row['brgy_id']?>"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        <?php

                                        include 'include/modals.php';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div><!-- /.container-fluid -->
</div><!-- End of Main Content -->
<!-- add Organization-->
<div class="modal fade" id="add-organization" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Barangay</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="inputConfig.php" method="post">
                    <div class="modal-body">
                        <div>
                                <div>
                                    <div class="form-group">
                                        <input type="hidden" name="function" value="add_barangay">
                                        <label>Name of Barangay</label>
                                        <input type="text" name="brgy" class="form-control org-box" required>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn text-white" style="background-color:gray;" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit" name="add_barangay" style="background-color:#4e73df">Add</button>
                    </div>
                </form>
            </div>
            
        </div>

<?php include 'include/in-footer.php'; ?>