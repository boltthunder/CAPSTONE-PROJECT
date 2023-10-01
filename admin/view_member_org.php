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
        <h1 class="h3 mb-0 text-gray-800">Manage Organization(<?=$_GET['org_name']?>)</h1>
        <div class="flex">
            <button data-toggle="modal" data-target="#add-organization" class="btn btn-success">Add Member</button>
        </div>
    </div>
    <div class="d-flex justify-content-end pb-2">
	<div>
		<label class="px-2">Position </label>

		<select class="custom-select custom-select-sm select2 text-center" style="width: 150px; height: auto;" id="position">
            <option selected value="All">All</option>
            <option>President</option>
            <option>Vice-President</option>
            <option>Secretary</option>
            <option>P.I.O</option>
            <option>Business Manager</option>
            <option>Representative </option>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="inputConfig.php" method="post" class="form-group">
                    <input type="hidden" name="function" value="add_org_member">
                    <div class="modal-body">
                            <label for="">Name:</label>
                            <select name="member_id" class="form-control org-box text-center" required>
                                <option value="" selected disabled>---Please Select---</option>
                                <?php
                                $org = $_GET['org_name'];
                                $member = new memberOrg();
                                $result = $member->fetchData($org);
                                if($result){
                                    while($fetch = $result->fetch()){
                                        ?>
                                                <option value="<?=$fetch['acc_admin_id']?>">
                                                    <?=$fetch['acc_fname']." ".$fetch['acc_mname']." ".$fetch['acc_lname']?>
                                                </option>
                                            <?php
                                        }
                                    }
                                ?>
                            </select>
                            <label for="">Position:</label>
                            <select name="mem_position" id="mem_position" class="form-control org-box text-center" required>
                                <option value="" selected disabled>---Please Select---</option>
                                <option>President</option>
                                <option>Vice-President</option>
                                <option>Secretary</option>
                                <option>P.I.O</option>
                                <option>Business Manager</option>
                                <option>Representative </option>
                            </select>

                    </div>
                    <div class="modal-footer">
                        <button class="btn text-white" style="background-color:gray;" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit" name="add_org_member" style="background-color:#4e73df;">Add</button>
                    </div>
                </form>
            </div>
            
        </div>
<?php include 'include/in-footer.php'; ?>


<script>
    $(document).ready(function(){
        $("#position").change(function(){
            var value = document.getElementById("position").value;
            // alert(value);
            $.ajax({
                type: "GET",
                url: "fetchOrgMem.php",
                data:{value:value, function:"fetchOrgMem",org_name:"<?=$_GET['org_name']?>"},
                success:function(response){
                    $("#result").html(response);
                }
            });
        });

        $("#position").trigger('change');
    })
</script>