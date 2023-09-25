<?php
include 'config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "services";

include 'include/header.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Services</h1>
        <button class="btn btn-primary" data-toggle="modal" data-target="#announcement">Create Announcement</button>
    </div>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr class="text-center">
                <th>TITLE</th>
                <th>VIEW</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="text-center"><button class="">Lebre Tuli</button></td>
                <td class="text-center"><button class="btn btn-success"><i class="fa fa-eye"></i></button></td>
                <td class="text-center">
                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                </td>
            </tr>

        </tbody>
    </table>





</div>
<!-- /.container-fluid -->
<?php include 'include/in-footer.php'; ?>
<!-- Logout Modal-->
<div class="modal fade" id="announcement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Announcement</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="flex justify-center">
                    <div class="form-group">
                        <h3 class="title flex justify-center">Title of Service</h3>
                        <div class="">
                            <input type="text" class="form-control text-center ">
                        </div>
                        <br><br>
                        <div class="form-group">
                            <h3 class="text-black flex justify-center">ANNOUNCEMENT</h3>
                            <div class="form-group">
                                <textarea class="form-control text-center" style="width: 410px !important;"></textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal"
                    style="background-color: #858796;">Cancel</button>
                <input type="submit" value="Submit" class="btn btn-success" style="background-color:#1cc88a;">
            </div>
        </div>
    </div>
</div>