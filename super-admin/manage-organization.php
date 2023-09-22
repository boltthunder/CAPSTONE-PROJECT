<?php 
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Manage Organization"; 

include 'include/header.php'; 

$check_brgy = new fetchBrgy();
$result = $check_brgy->fetchData();

    if($result->rowCount()<=0){
        ?>
            <script>
                alert("Please Add first in barangay page");
                window.location.href="barangay-list.php";
            </script>
        <?php
    }
$brgy ="";
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Organization</h1>

    </div>

    <div class="add-box flex justify-center grid-cols-1 h-fit-content">
        <div class="card shadow mb-4 flex justify-center w-[100%] ">
            <div class="card-body">
                <div class="table-responsive" id="result">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Barangay</th>
                            <th>Total Num. of Organization</th>
                            <th>Option</th>

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $fetch_brgy = new fetchBrgy();
                        $result = $fetch_brgy->fetchData();

                        if($result->rowCount())
                        {
                            while($row = $result->fetch())
                            {
                                ?>
                                    <tr>
                                        <td><?=$row['brgy_name']?></td>
                                        <?php
                                            $brgy = $row['brgy_name'];
                                            $org_list = new org_list();
                                            $result_org_list = $org_list->checkData($brgy);
                                        ?>
                                        <td class="text-center"><?=$result_org_list->rowCount()?></td>

                                        <td class="text-center">
                                            <a href="manage-organization1.php?brgy=<?=$row['brgy_name']?>" class="btn btn-success btn-sm"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php
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

<!-- End of Main Content -->

<?php include 'include/in-footer.php'; ?>
