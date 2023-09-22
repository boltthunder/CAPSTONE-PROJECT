<?php
include '../config/security.php';
// include '../super-admin/config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "View Election";

include 'include/header.php';

?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Election</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#run-officer">Run For Officer</button>
  </div>


  <!-- Modal -->
  







</div>
<!-- /.container-fluid -->

<?php include 'include/in-footer.php'; ?>
<div class="modal fade" id="run-officer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-gray-200">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Register For Officer</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class=" flex p-4">
            <form action="" method="post">
              <div class="grid sm:grid-cols-3">

                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control ">
                </div>

                <div class="form-group sm:ml-2">
                  <label for="mname">Middle Name</label>
                  <input type="text" class="form-control" id="mname">
                </div>

                <div class="form-group sm:ml-2">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname">
                </div>
              </div>

              <div class="grid sm:grid-cols-3">
                <div class="form-group">
                  <label for="bdate">Birth Date</label>
                  <input type="date" name="" id="bdate" class="form-control">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" id="age">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="nationality">Nationality</label>
                  <input type="text" class="form-control" id="nationality">
                </div>
              </div>

              <h2 class="flex justify-center">Address</h2>
              <div class="grid sm:grid-cols-3">
                <div class="form-grooup ">
                  <label for="street">Street:</label>
                  <input type="text" id="street" class="form-control">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="brgy">Barangay</label>
                  <input type="text" class="form-control" id="brgy">
                </div>
                <div class="form-group  sm:ml-2">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city">
                </div>
              </div>

              <div class="grid sm:grid-cols-3">
                <div class="form-group">
                  <label for="zip-code">Zip code</label>
                  <input type="text" class="form-control" id="zip-code">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="phone">Phone no.</label>
                  <input type="text" class="form-control" id="phone">
                </div>
              </div>
              <div class="d-flex justify-center mb-2">
                <h2>Mother Full Name</h2>
              </div>
              <hr>
              <div class="grid sm:grid-cols-3">
                <div class="form-group">
                  <label for="mothername">First Name</label>
                  <input type="text" class="form-control" id="mothername">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="mothermiddle">Middle Name</label>
                  <input type="text" class="form-control" id="mothermiddle">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="motherlast">Middle Name</label>
                  <input type="text" class="form-control" id="motherlast">
                </div>
              </div>

              <div class="d-flex justify-center mb-2">
                <h2>Father Full Name</h2>
              </div>
              <hr>
              <div class="grid sm:grid-cols-3">
                <div class="form-group">
                  <label for="fathername">First Name</label>
                  <input type="text" class="form-control" id="fathername">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="fathermiddle">Middle Name</label>
                  <input type="text" class="form-control" id="fathermiddle">
                </div>
                <div class="form-group sm:ml-2">
                  <label for="fatherlast">Middle Name</label>
                  <input type="text" class="form-control" id="fatherlast">
                </div>
                <div class="form-group">
                  <label for="suffix">Suffix</label>
                  <input type="text" class="form-control col-5" id="suffix">
                </div>
              </div>

          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>