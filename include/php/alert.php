<?php
if (isset($_SESSION['decline'])) { ?>
    <script>
        swal({
            title: "<?php echo $_SESSION['title']?>",
            text: "<?php echo $_SESSION['decline']?>",
            icon: "<?php echo $_SESSION['icon']?>",
            button: "OK",
        });
         
    </script>
<?php unset($_SESSION['decline']); }
?>