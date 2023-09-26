<?php
include 'config/controller.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="include/css/index.css">
    <link rel="stylesheet" href="include/css/mobile.css">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="include/script/jquery-3.6.0.min.js"></script>
    <style>
        .upload {
            width: 150px;
            position: relative;
            margin: auto;
        }

        .upload img {
            border-radius: 50%;
            border: 5px solid #DCDCDC;
        }

        .upload .round {
            position: absolute;
            bottom: 0;
            right: 0%;
            background: #00B4FF;
            width: 38px;
            height: 38px;
            line-height: 40px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .upload .round input[type="file"] {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }

        input[type=file]::-webkit-file-upload-button {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-1"></div>

                            <div class="col-xl-8 p-5 ">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create Account</h1>
                                </div>

                                <form action="inputConfig.php" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="function" value="create_user">

                                    <div class="upload">
                                        <img width=150 src="upload/default-profile.png" class="img-preview" height=150 title="" id="output">
                                        <label class="upload-area">
                                            <input type="file" class="hidden" name ="profile_img" onchange="loadfile(event);"  accept=".jpg, .jpeg, .png, .svg" required>
                                            <span class="upload-button">
                                                <i class="fas fa-camera round upload-btn" ></i>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <div class="row px-xl-2 px-lg-2">
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="fname">First Name</label>
                                                <input type="text" name="fname" class="form-control"
                                                    aria-describedby="fname" placeholder="ex. (juan)">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="fname">Middle Name</label>
                                                <input type="text" name="mname" class="form-control"
                                                    aria-describedby="mname" placeholder="(optional)">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="fname">Last Name</label>
                                                <input type="text" name="lname" class="form-control"
                                                    aria-describedby="lname" placeholder="ex. (tamad)">
                                            </div>
                                        </div>

                                        <div class="row px-xl-2 px-lg-2">
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="email">Email Address</label>
                                                <input type="email" name="email" class="form-control"
                                                    aria-describedby="email" placeholder="ex. (asd@asd.com)">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="phone">Phone Number</label>
                                                <input type="tel" name="phone" class="form-control" maxlength="11"
                                                    aria-describedby="phone" placeholder="Phone Number">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="age">Age</label>
                                                <input type="number" name="age" class="form-control"
                                                    aria-describedby="age" placeholder="Age">
                                            </div>
                                        </div>

                                        <div class="row px-xl-2 px-lg-2">
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="birth">Birthdate</label>
                                                <input type="date" name="birth" class="form-control"
                                                    aria-describedby="birth" placeholder="birth">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="address">Select your barangay</label>
                                                <select name="address" class="form-control appearance-none text-center"
                                                    aria-describedby="address" placeholder="address" required>
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

                                        <div class="row px-xl-2 px-lg-2">
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="uname">Username</label>
                                                <input type="text" name="uname" class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" id="password"
                                                    class="form-control">
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-12 px-xl-1 px-lg-1 xl-py-3 lg-py-3 py-2">
                                                <label for="confirm-password">Confirm Password</label>
                                                <input type="password" id="confirm-password" class="form-control">
                                            </div>
                                        </div>
                                        <span id="message"></span>

                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Show Password</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="create_user" id="create_user"
                                        class="btn btn-primary btn-user btn-block" disabled>
                                        Create Account
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="login.php">Back to login!</a>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-2 col-1"></div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php include 'include/index/footer.php' ?>


    <script>
        var loadfile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src);
            }
        };

        function showpass() {
            if (this.checked) {
                // alert("check");
                document.getElementById('password').setAttribute('type', 'text');
                document.getElementById('confirm-password').setAttribute('type', 'text');
            }
            else {
                // alert("ubcheck");
                document.getElementById('password').setAttribute('type', 'password');
                document.getElementById('confirm-password').setAttribute('type', 'password');
            }
        }
        document.getElementById('customCheck').addEventListener('click', showpass);


        $("#password, #confirm-password").on('keyup', function () {
            if ($("#password").val() == "" && $("#confirm-password").val() == "") {
                $("#message").html("").css('color', 'green');
                document.getElementById('create_user').disabled = true;
            } else if ($("#password").val() === $("#confirm-password").val()) {
                $("#message").html("Password Match").css('color', 'green');
                document.getElementById('create_user').disabled = false;
            } else {
                $("#message").html("Password Not Match").css('color', 'red');
                document.getElementById('create_user').disabled = true;
            }
        });

    </script>