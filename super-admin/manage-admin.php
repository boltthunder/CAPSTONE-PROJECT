<?php
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Manage Admin";

include 'include/header.php';

$check_brgy = new fetchBrgy();
$result = $check_brgy->fetchData();

if ($result->rowCount() <= 0) {
    ?>
    <script>
        alert("Please Add first in barangay page");
        window.location.href = "barangay-list.php";
    </script>
    <?php
}

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Admin Account</h1>
        <div class="flex">
            <button data-toggle="modal" data-target="#Manage-admin" class="btn btn-success">Add Admin</button>
        </div>
    </div>
    <div class="d-flex justify-content-end pb-2">
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
    </div>

    <div class="add-box flex justify-center grid-cols-1 h-fit-content">
        <div class="card shadow mb-4 flex justify-center w-[100%] ">
            <div class="card-body">
                <div class="table-responsive" id="result">

                </div>
            </div>
        </div>
    </div>

</div><!-- /.container-fluid -->
</div><!-- End of Main Content -->
<!-- add Organization-->
<div class="modal fade" id="Manage-admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Admin Account</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="inputConfig.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="upload">
                        <img src="../upload/default-profile.png" class="img-preview" style="height:113px !important;" width=200 height=200 id="output">
                        <label class="upload-area">
                            <input type="file" class="hidden" name="profile_img" onchange="loadfile(event);"
                                accept=".jpg, .jpeg, .png, .svg" required>
                            <span class="upload-button">
                                <i class="fas fa-camera round upload-btn" style="top:94px !important;"></i>
                            </span>
                        </label>
                    </div>
                    <div class="form-group sm:flex ">
                        <input type="hidden" name="function" value="add_admin">
                        <div class="grid sm:grid-cols-3">
                            <div class="">
                                <label for="first-name" class="col-form-label">First Name:</label>
                                <input type="text" class="form-control" name="first-name" id="first-name"
                                    placeholder="ex: Juan" required>
                            </div>
                            <div class="sm:ml-2">
                                <label for="middle-name" class="col-form-label">Middle Name:</label>
                                <input type="text" class="form-control" name="middle-name" id="middle-name"
                                    placeholder="Optional">
                            </div>
                            <div class="sm:ml-2">
                                <label for="last-name" class="col-form-label">Last Name:</label>
                                <input type="text" class="form-control" name="last-name" id="last-name"
                                    placeholder="ex: Dela Cruz" required>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex">
                        <div class="grid sm:grid-cols-3">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="example@gmail.com" required>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="phone">Phone no.</label>
                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="09XXXXXXXXX"
                                    maxlength="11" required>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="age">Age.</label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="25" required>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex">
                        <div class="grid sm:grid-cols-3">
                            <div class="form-group">
                                <label for="">Birth Date</label>
                                <input type="date" name="birthdate" id="" class="form-control" required>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="">Address</label>
                                <select name="address" id="" class="form-control appearance-none text-center" required>
                                    <option value="" disabled selected>Please Select</option>
                                    <?php
                                    $fetch_user = new fetchBrgy();
                                    $result = $fetch_user->fetchData();

                                    if ($result) {
                                        while ($row = $result->fetch()) {
                                            ?>
                                            <option>
                                                <?= $row['brgy_name'] ?>
                                            </option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sm:flex ">
                        <div class="grid sm:grid-cols-3">
                            <div class="form-group">
                                <label for="">User Name:</label>
                                <input type="text" name="uname" class="form-control" required>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>
                            </div>
                            <div class="form-group sm:ml-3">
                                <label for="">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm-password" required>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div> <span id="message"></span>
                    <div class="d-flex justify-content-start py-2">
                        <div class="px-1">
                            <input type="checkbox" id="showpass">
                        </div>
                        <label for="showpass" class="text-dark" style="cursor:pointer;">Show Password</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn text-white" style="background-color:gray;" type="button"
                        data-dismiss="modal">Cancel</button>
                    <button type="submit" id="add_admin" name="add_admin" class="btn btn-primary"
                        style="background-color:#4e73df">Add</button>
                </div>
        </div>
        </form>
    </div>
    <?php include 'include/in-footer.php'; ?>

    <script>
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
                    url: "fetchAdmin.php",
                    data: { value: account_status, function: "fetch_admin" },
                    success: function (response) {
                        $("#result").html(response);
                    }
                })
            });
            $("#brgy_list").trigger('change');
        });

        function showpass() {
            if (this.checked) {
                // alert("check");
                document.getElementById('password').setAttribute('type', 'text')
                document.getElementById('confirm-password').setAttribute('type', 'text')
            }
            else {
                // alert("ubcheck");
                document.getElementById('password').setAttribute('type', 'password')
                document.getElementById('confirm-password').setAttribute('type', 'password')
            }
        }
        document.getElementById('showpass').addEventListener('click', showpass);


    </script>