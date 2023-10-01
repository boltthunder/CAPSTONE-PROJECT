<?php 
include 'config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "Manage Organization"; 

include 'include/header.php'; 

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Organization</h1>
        <div class="flex">
            <button data-toggle="modal" data-target="#add-organization" class="btn btn-success">Add Organization</button>
        </div>
    </div>
    <div class="d-flex justify-content-end pb-2">
	<div>
		<label class="px-2">Status </label>

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
</div><!-- End of Main Content -->

<!-- add Organization-->
<div class="modal fade" id="add-organization" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Organization</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="inputConfig.php" method="post">
                    <input type="hidden" name="function" value="add_org_list">
                    <div class="modal-body">
                        <div>
                                <div>
                                    <div class="form-group">
                                        <label for="">Organization Name</label>
                                        <input type="text" name="org_name" class="form-control org-box" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Year Establish:</label>
                                        <input type="date" name="org_date" class="form-control" required>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn text-white" style="background-color:gray;" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit" name="add_org_list" style="background-color:#4e73df;">Add</button>
                    </div>
                </form>
            </div>
            
        </div>
<?php include 'include/in-footer.php'; ?>


<script>
    $(document).ready(function(){
        $("#org_status").change(function(){
            var value = document.getElementById("org_status").value;
            // alert(value);
            $.ajax({
                type: "GET",
                url: "fetchOrg.php",
                data:{value:value, function:"fetchOrg"},
                success:function(response){
                    $("#result").html(response);
                }
            });
        });

        $("#org_status").trigger('change');
    })
</script>