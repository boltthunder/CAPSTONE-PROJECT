<?php
include '../config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "View Election";

include 'include/header.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">View Organization Election</h1>
    </div>

    <!-- <div class="d-flex justify-content-end pb-2">
        <div>
            <label class="px-2">Barangay </label>

            <select class="custom-select custom-select-sm select2" style="width: 150px; height: auto;" id="brgy_list">
                <option class="text-center" selected value="All">All</option>
                <?php
                $fetch_user = new fetchBrgy();
                $result = $fetch_user->fetchData();

                if ($result) {
                    while ($row = $result->fetch()) {
                        ?>
                        <option class="text-center">
                            <?= $row['brgy_name'] ?>
                        </option>
                        <?php
                    }
                }
                ?>
            </select>
        </div>
    </div> -->

    <div class="add-box flex justify-center grid-cols-1 h-fit-content">
        <div class="card shadow mb-4 flex justify-center w-[100%] ">
            <div class="card-body">
                <div class="table-responsive" id="result">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Barangay</th>
                                <th>Candidates</th>
                                <th>Election Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <button class="custom-hover" id="view_admin" value="">
                                        
                                    </button>
                                </td>
                                <td class="text-center">1</td>
                                <td class="text-center">10-09-2023</td>
                                <td class="flex justify-center">
                                    <button class="btn btn-primary ">start</button>
                                    <button class="btn btn-danger sm:ml-2">close</button>
                                </td>
                            </tr>
                            <?php

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





</div>
<!-- /.container-fluid -->

<?php include 'include/in-footer.php'; ?>
<!-- <script>
    var loadfile = function (event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src);
        }
    };

    $(document).ready(function () {
        $("#brgy_list").change(function () {
            var account_status = document.getElementById("brgy_list").value;
            // alert(value);
            $.ajax({
                method: "GET",
                url: "../super-admin/fetchElection.php",
                data: { value: account_status, function: "fetch_admin" },
                success: function (response) {
                    $("#result").html(response);
                }
            })
        });
        $("#brgy_list").trigger('change');
    });
</script> -->