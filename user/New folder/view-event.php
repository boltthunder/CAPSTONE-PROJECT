<?php
include 'config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "View Event";

include 'include/header.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">View Incoming Event</h1>
  </div>







</div>
<!-- /.container-fluid -->

<?php include 'include/in-footer.php'; ?>