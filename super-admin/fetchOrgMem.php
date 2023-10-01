<?php
include 'config/security.php';

if(isset($_GET['brgy_list']) && isset($_GET['function']) == "fetchOrgMem"){
    $value = secured($_GET['brgy_list']);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr class="text-center">
                    <th>Organization Name</th>
                    <th>Number of Member</th>
                    <th>Location</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $fetch_org_mem = new fetch_org_mem();
                    $result = $fetch_org_mem->fetchData($value);

                    if($result){
                        while($row = $result->fetch()){
                        ?>
                        <tr>
                            <td><?=$row['org_name']?></td>
                            <td>
                                <?php
                                    $counting = $row['org_name'];
                                    $count_mem = new count_mem();
                                    $count_mem->countData($counting)
                                ?>
                            </td>
                            <td><?=$row['org_name']?></td>
                            <td>
                                
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

<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/demo/datatables-demo.js"></script>