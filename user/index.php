<?php 
session_start();
unset($_SESSION['title']);
$_SESSION['title'] = 'Home';

include 'include/header.php'
?>

    <div class="container-fluid ">
        <div class="container mt-5 flex justify-center gap-4 row ">

            <!-- This card for view of product -->
            <div class="card" style="width: 288px; height: fit-content">
                <div class="d-flex">
                    <img src="images/2.jpg" class="flex rounded" alt="..."
                        style="width:263px !important; height: 178px !important">
                </div>
                <div class="card-body">
                    <h5 class="">Description: Barter</h5>
                    <p class="card-text ">Price: Php 100.00</p>
                    <p class="card-text">Location: Caradio-an</p>
                    <a href="#" class="btn btn-primary flex justify-center">See more</a>
                </div>
            </div>
            <!-- This card for view of product -->
            <div class="card" style="width: 18rem;">
                <img src="images/1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text ">Price: Php 100.00</p>
                    <p class="card-text">Location: Caradio-an</p>
                    <a href="#" class="btn btn-primary flex justify-center">See more</a>
                </div>
            </div>

            <!-- This card for view of product -->
            <div class="card" style="width: 18rem;">
                <img src="images/1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text ">Price: Php 100.00</p>
                    <p class="card-text">Location: Caradio-an</p>
                    <a href="#" class="btn btn-primary flex justify-center">See more</a>
                </div>
            </div>

            <!-- This card for view of product -->
            <div class="card" style="width: 18rem;">
                <img src="images/1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text ">Price: Php 100.00</p>
                    <p class="card-text">Location: Caradio-an</p>
                    <a href="#" class="btn btn-primary flex justify-center">See more</a>
                </div>
            </div>
            <!-- This card for view of product -->
            <div class="card" style="width: 18rem;">
                <img src="images/1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text ">Price: Php 100.00</p>
                    <p class="card-text">Location: Caradio-an</p>
                    <a href="#" class="btn btn-primary flex justify-center">See more</a>
                </div>
            </div>

            <!-- This card for view of product -->
            <div class="card" style="width: 18rem;">
                <img src="images/1.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text ">Price: Php 100.00</p>
                    <p class="card-text">Location: Caradio-an</p>
                    <a href="#" class="btn btn-primary flex justify-center">See more</a>
                </div>
            </div>

        </div>

<?php include 'include/footer.php';?>