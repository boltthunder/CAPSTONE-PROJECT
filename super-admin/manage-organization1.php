<?php 
include 'config/security.php';

unset($_SESSION['title']);
$_SESSION['title'] = "Manage Organization"; 

include 'include/header.php'; 

$check_brgy = new fetchBrgy();
$result = $check_brgy->fetchData();

    if($result->rowCount()<=0){
        ?>
            <script>
                alert("Please Add first in barangay page");
                window.location.href="barangay-list.php";
            </script>
        <?php
    }
$value = $_GET['brgy'];
$checking = new check_page();
$checking->checkData($value);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Organization (<?=$_GET['brgy']?>)</h1>

    </div>
    <div class="d-flex justify-content-end pb-2">
	<div>
		<label class="px-2">Status :</label>

		<select class="custom-select custom-select-sm select2" style="width: 150px; height: auto;" id="org_status">
            <option class="text-center" selected value="All">All</option>
            <option class="text-center" value="Accept">Accept</option>
            <option class="text-center" value="Decline">Decline</option>
            <option class="text-center" value="Pending">Pending</option>
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

<!-- End of Main Content -->

<?php include 'include/in-footer.php'; ?>


<script>
    $(document).ready(function(){
        $("#org_status").change(function(){
            var value = document.getElementById("org_status").value;
            // alert(value);
            $.ajax({
                type: "GET",
                url: "fetchOrg.php",
                data:{value:value, brgy:"<?=$_GET['brgy'];?>", function:"org_status"},
                success:function(response){
                    $("#result").html(response);
                }
            });
        });

        $("#org_status").trigger('change');
    })
</script>