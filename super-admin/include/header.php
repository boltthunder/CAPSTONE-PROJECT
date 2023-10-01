<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HWFMS || <?=$_SESSION['title']?></title>
    <link rel="icon" href="../img/chmsu-icon.png" type="image/x-icon"/>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- <link href="../css/sb-admin-2.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../include/css/index.css">
    <link rel="stylesheet" href="../dist/output.css">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="../include/script/jquery-3.6.0.min.js"></script>
    <script src="../include/script/sweetalert.min.js"></script>

    <style>
        .custom-hover{
            transition: transform .2s; /* Animation */   
        }
        .custom-hover:hover{
            transform: scale(1.1);
        }
                .upload{
                width: 125px;
                position: relative;
                margin: auto;
                }

                .upload img{
                border-radius: 50%;
                border: 10px solid #DCDCDC;
                }

                .upload .round{
                position: absolute;
                bottom: 0;
                right: 0;
                background: #00B4FF;
                width: 32px;
                height: 32px;
                line-height: 33px;
                text-align: center;
                border-radius: 50%;
                overflow: hidden;
                }

                .upload .round input[type = "file"]{
                position: absolute;
                transform: scale(2);
                opacity: 0;
                }

                input[type=file]::-webkit-file-upload-button{
                    cursor: pointer;
                } 
    </style>
</head>
<body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#2c2c43; ">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">WFMS<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php if($_SESSION['title']=="Home"){echo "active";}?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Barangay Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if($_SESSION['title']=="Manage Organization" || $_SESSION['title']=="Barangay List"){echo "active";}?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Barangay Organization</span>
                </a>
                <div id="collapseTwo" class="collapse <?php if($_SESSION['title']=="Manage Organization" || $_SESSION['title']=="Barangay List"){echo "show";}?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Management</h6>
                        <a class="collapse-item <?php if($_SESSION['title']=="Barangay List"){echo "active";}?>" href="barangay-list.php">Barangay List</a>
                        <a class="collapse-item <?php if($_SESSION['title']=="Manage Organization"){echo "active";}?>" href="manage-organization.php">Manage Organization</a>
                    </div>
                </div>
            </li>


            <li class="nav-item <?php if($_SESSION['title']=="Manage Admin"){echo "active";}?>">
                <a class="nav-link <?php if($_SESSION['title']=="Manage Admin"){echo "active";}?>" href="manage-admin.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Manage Admin</span></a>
            </li>
            <li class="nav-item <?php if($_SESSION['title']=="Manage User"){echo "active";}?>">
                <a class="nav-link <?php if($_SESSION['title']=="Manage User"){echo "active";}?>" href="user-list.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>User List 
                        <?php $checking = new check_user(); 
                                $result = $checking->checking();
                                if($result){
                                    echo "<span class='badge badge-dark'>".$result->rowCount()."</span>";
                                }
                        ?>
                    </span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage Notice
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?php if($_SESSION['title']=="Election Management" || $_SESSION['title']=="Event Management"){echo "active";}?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Event Management</span>
                </a>
                <div id="collapsePages" class="collapse <?php if($_SESSION['title']=="Election Management" || $_SESSION['title']=="Event Management" || $_SESSION['title']=="services"){echo "show";}?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Manage:</h6>
                        <a class="collapse-item <?php if($_SESSION['title']=="Election Management"){echo "active";}?>" href="election.php">Manage election</a>
                        <a class="collapse-item <?php if($_SESSION['title']=="Event Management"){echo "active";}?>" href="event.php">Manage Event</a>
                        <a class="collapse-item <?php if($_SESSION['title']=="services"){echo "active";}?>" href="services.php">Services</a>
                        <!-- <a class="collapse-item" href="#">Job Reccomendation</a> -->
                        
                    </div>
                </div>
            </li>

            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background:#2c2c43;">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><b><?php echo $_SESSION['user_fname']. ' '.$_SESSION['user_mname']. ' '.$_SESSION['user_lname']?></b></span>
                                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->