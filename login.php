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
    <script src="include/script/jquery-3.6.0.min.js"></script>
    <script src="include/script/sweetalert.min.js"></script>
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
                            <div class="col-lg-6 d-none d-lg-block">
                            <img src="img/Banner.jpg" class="img-responsive-1 " alt="Image">
                            </div>
                            <div class="col-lg-6 bg-image">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php
                                        if(isset($_SESSION['message'])){
                                            ?>
                                                <span class="text-danger"><?=$_SESSION['message']?></span>
                                            <?php
                                            unset($_SESSION['message']);
                                        }
                                    ?>

                                    <form class="user" action="inputConfig.php" method="POST">
                                        <input type="hidden" name="function" value="logging_in">
                                        <div class="form-group">
                                            <input type="text" name="uname" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username..">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" id="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Show Password</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="logging_in" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="create_account.php" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i>Create Account
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
<?php include 'include/index/footer.php'; include 'include/php/alert.php' ?>


<script>
    function showpass(){
        if(this.checked){
            // alert("check");
            document.getElementById('password').setAttribute('type','text')
        }
        else{
            // alert("ubcheck");
            document.getElementById('password').setAttribute('type','password')
        }
    }
    document.getElementById('customCheck').addEventListener('click' , showpass);
</script>
