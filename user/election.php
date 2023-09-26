<?php
include 'config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "ELECTION";

include 'include/header.php';
include 'include/navbar.php';
?>

</div>

<div class="container py-5 p-0">
    <div class="row d-flex align-items-center  mx-auto">

        <div class="col-xl-6 col-lg-6 col-12s">
            <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-xl-6 col-lg-6 col-12 py-md-5 green px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5">
            <h1>Celebrate your next  event with us!</h1><br>
            <p>Private event rentals are available at Cafe Flora and The Flora Bakehouse! Our team is ready to put together the perfect celebration for your next special occasion!</p><br>
           
                <a href="" class="mx-1">cafeflora</a>
                <a href="" class="mx-1">floret</a>
                <a href="" class="mx-1">bakehouse</a>  
        </div>

    </div>
</div>

<div class="container py-5">
    <div class="row">

    <div class="col-xl-6 col-lg-6 col-12 p-0" style="background-color:#325C66">
            <img src="img/Untitled-3.jpg" class="img-fluid">
        </div>
        <div class="col-xl-6 col-lg-6 col-12 d-flex align-items-center" style="background-color:#325C66">
            <div class="p-4 text-white">
            <h1>Cafe Flora</h1><br>
            <p>Cafe Flora has been a Seattle institution for over 30 years, capturing the hearts of all our guests with a light-filled atrium, cozy dining room, and covered outdoor patio. Our delicious plant-based menu melds global inspiration with the bounty of the Pacific Northwest.</p><br>
            <p>Our beautiful atrium can seat up to 54 guests or up to 65 guests for a standing cocktail party. Our outdoor patio can seat up to 40 guests or host a standing cocktail party of up to 60 guests</p><br>
            <p>For questions, please reach out to events@cafeflora.com</p>
            <a href="" class="header text-white fs-3"><i class="fa-solid fa-arrow-right"></i> Full event details here</a><br>
            </div>
        </div>
        



        <div class="col-xl-6 col-lg-6 col-12 d-xl-none d-lg-none d-block p-0">
            <img src="img/Untitled-5.jpg" class="img-fluid">
        </div>

        <div class="col-xl-6 col-lg-6 col-12 d-flex align-items-center" style="background-color:#D69994">
            <div class="p-4 text-white">
            <small>The Flora Bakehouse</small>
            <p>Our event space is located upstairs at The Flora Bakehouse and includes our picturesque roof deck with a gorgeous view of Mt. Rainier in the distance as well as our indoor event space. The deck is partially covered and offers a wide variety of seating options as well as our intimate indoor seating area.</p><br>
            <p>Our catering menu offers everything from english teas to roman-style pizza parties. We proudly source fresh, local, and seasonally-inspired ingredients and look forward to working with you to create a beautiful event. </p><br>
            <p>For questions, please reach out to events@florabakehouse.com</p><br>
            <a href="" class="header text-white fs-3"><i class="fa-solid fa-arrow-right"></i> Full event details here</a><br>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-12 d-xl-block d-lg-block d-none p-0">
            <img src="img/Untitled-5.jpg" class="img-fluid">
        </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>