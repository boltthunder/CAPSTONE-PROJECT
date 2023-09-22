<?php
include '../config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "Home";

include 'include/header.php'; 

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>



<div class="row">
    <!-- Total Number Organization -->
<div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                           Total Num. of Organization: </div>

                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="manage-organization.php"><i class="fas fa-user fa-2x text-gray-300"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Number admin -->
    <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Admin Acc :</div>

                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a href="manage-admin.php"><i class="fas fa-user fa-2x text-gray-300"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    




    </div>
<!-- /.container-fluid -->

<?php include 'include/in-footer.php'; ?>