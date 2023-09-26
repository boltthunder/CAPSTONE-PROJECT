
     <!-- delete Barangay Modal-->
     <div class="modal fade" id="deleteBrgy<?=$row['brgy_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="inputConfig.php" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="function" value="delete_brgy">
                        <input type="hidden" name="delete_brgy_id" value="<?=$row['brgy_id']?>">
                        Are you sure to delete this?
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal" style="background-color:#858796">Cancel</button>
                        <button class="btn btn-danger" type="submit" name="delete_brgy" style="background-color:#e74a3b">Delete</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
