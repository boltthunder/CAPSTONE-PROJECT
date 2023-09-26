<?php
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Manage Election";

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
    <h1 class="h3 mb-0 text-gray-800">Manage Elections</h1>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#run-officer">Run For Officer</button>

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

<?php include 'include/in-footer.php'; ?>
<div class="modal fade" id="run-officer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-gray-200">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register For Officer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class=" sm:flex p-4">
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
            <div class="form-group grid sm:grid-cols-2">
              <div class="form-group sm:ml-2">
                <label for="civilStatus">Civil Status</label>
                <input type="text" class="form-control" id="civilStatus">
              </div>
              <div class="form-group sm:ml-2">
                <label for="phone">Phone no.</label>
                <input type="text" class="form-control" id="phone">
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
                <label for="province">Province</label>
                <input type="text" class="form-control" id="province">
              </div>
              <div class="form-group sm:ml-2">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
            </div>

            <div class="form-group">
              <div class="form-group ">
                <label for="org">organization</label>
               <select name="" id="org" class="form-control text-center">
                <option disabled selected>-----Please Select-----</option>
                <option value="">epreketik</option>
               </select>
              </div>
              <div class="form-group">
                <label for="position">Position Applied for:</label>
                <select id="position" class="form-control text-center">
                  <option disabled selected>-----Please Select Position-----</option>
                  <option value="President">President</option>
                  <option value="Vice-President">Vice-President</option>
                  <option value="Secretary">Secretary</option>
                  <option value="Tresurer">Tresurer</option>
                  <option value="Auditor">Auditor</option>
                  <option value="PIO">PIO</option>
                  <option value="Representative">Representative</option>
                </select>
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