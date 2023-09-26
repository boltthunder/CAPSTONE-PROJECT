<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$_SESSION['title']?></title>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../dist/custom.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body style="background-color: #3a335c !important; ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">HIMAYA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SESSION['title'] == 'Home'){echo "active";}?> p-2" aria-current="page" href="index.php">
                            <i class="fa-solid fa-house p-1"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($_SESSION['title'] == 'Store'){echo "active";}?>" href="Store.php"><i class="fa-solid fa-user p-1"></i>Profile</a>
                    </li>
                   
                </ul>
                
            </div>
        </div>
    </nav>