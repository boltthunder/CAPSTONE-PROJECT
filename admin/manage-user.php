<?php 
include 'config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "Manage User";

include 'include/header.php'; 

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage User Account</h1>
    </div>
    <div class="d-flex justify-content-end pb-2">
	<div>
		<label class="px-2">Account Status </label>

		<select class="custom-select custom-select-sm select2" style="width: 150px; height: auto;" id="account_status">
            <option class="text-center" value="All" selected>All</option>
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
        $("#account_status").change(function(){
            var account_status = document.getElementById("account_status").value;
            // alert(value);
            $.ajax({
                method: "GET",
                url: "fetchUser.php",
                data: {value:account_status, function:"fetch_user"},
                success:function(response){
                    $("#result").html(response);
                }
            })
        });
        $("#account_status").trigger('change');
    });

</script>