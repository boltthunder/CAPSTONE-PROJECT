<?php
include 'include/autoload.php';

unset($_SESSION['title']);
$_SESSION['title'] = "ORGANIZATION LIST";

include 'include/header.php';
include 'include/navbar.php';
?>

<div class="bg-white">
<div class="container py-2">
    <div class="row">
        <div class="col-12  text-xl-start text-lg-start text-center">

            <div class="mx-auto">
            <ul class="nav nav-pills">

                <li class="nav-item">
                     <a href="#About" class="nav-link mx-1 header">About</a>
                </li>

                <li class="mav-item">
                    <a href="#Gallery" class="nav-link mx-1 header">Gallery</a>
                </li>

                <li class="mav-item">
                    <a href="#Menu" class="nav-link mx-1 header">Menu</a>
                </li>

                <li class="mav-item">
                <a href="#Hours" class="nav-link mx-1 header">Hours</a>
                </li>
                <li class="mav-item">
                <a href="#Location" class="nav-link mx-1 header">Location</a>
                </li>
                <li class="mav-item">
                <a href="#GiftCards" class="nav-link mx-1 header">Gift Cards</a>
                </li>
            </ul>

            </div>
        </div>
    </div>
</div>
</div>


</div>





<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">

<div class="container py-5" id="About">
    <div class="row d-flex align-items-center">

        <div class="col-xl-6 col-lg-6 col-12 d-xl-none d-lg-none d-block">
            <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
        </div>

        <div class="col-xl-6 col-lg-6 col-12 py-md-5 green">
            <h1>(Domain Name)</h1><br>
            <h6>Inspiring and delicious vegetarian cuisine for all</h6><br>
            <p>Cafe Flora has been a Seattle institution for over 30 years, capturing the hearts of all our guests with a light-filled atrium, cozy dining room, and a beautiful outdoor patio. Our delicious vegetarian menu melds global inspiration with the bounty of the Pacific Northwest. We do our best to source from many Washington Farmers and accommodate dietary needs, while holding true to our belief in delightful and satisfying vegetarian cuisine. Join us for brunch, breakfast, lunch, or dinner with some friends or the whole family.</p>
        </div>

        <div class="col-xl-6 col-lg-6 col-12 d-xl-block d-lg-block d-none">
            <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
        </div>
    </div>
</div>

<div style="background-color:#325C66">
    <div class="container py-5" id="Gallery">
        <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active">
        <img src="img/Untitled-2.jpg" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>

        <div class="carousel-item">
        <img src="img/Untitled-3.jpg" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>

        <div class="carousel-item">
        <img src="img/Untitled-4.jpg" class="img-fluid">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
        </div>
    </div>
</div>


<div style="background-color: #D69994">
    <div class="container py-5" id="Menu">
        <div class="row py-5 d-flex align-items-center">

            <div class="col-xl-6 col-lg-6 col-12">
                <img src="img/Untitled-5.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 text-white px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5 ">
                <h2>Celebrate your next special occasion with us!</h2>
                <p>We house a beautiful atrium which can seat up to 54 guests or accommodate up to 65 guests for a standing cocktail party. Our outdoor patio can seat up to 40 guests or host a standing cocktail party of up to 60 guests</p>
                <p>For questions, please reach out to events@cafeflora.com</p>
                <br>
                <button type="button" class="btn btn-outline-light">Private event packet</button>

            </div>

        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row d-flex justify-content-center">
        <div class="col-6 green">
            <div class="text-center">
                <h5>Menus</h5>
                <small>All of our menus except Weekend Brunch are available for takeout as well as dine in.</small>
                <small>Please order via the takeout link or call the restaurant to place a takeout order.</small><br>
                <small>Menus change often with seasons and ingredients.</small> <br><br>

                <a href="">Dinner</a><br>
                <a href="">Weekend Brunch</a><br>
                <a href="">Breakfast & Lunch</a><br>
                <a href="">Dessert</a><br>
                <a href="">Drinks</a><br><br>
                <a href="">Takeout</a><br>
            </div>
        </div>
    </div>
</div>


<div style="background-color: #366554">
    <div class="container py-5" id="Hours">
        <div class="row d-flex align-items-center">

            <div class="col-xl-6 col-lg-6 col-12">
                <img src="img/Untitled-6.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 text-white px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5 ">
                <h2>Hours</h2><br>
                <p>We do not take reservations with the exception of Mother’s Day, Valentine’s Day, and Thanksgiving.  Guests are seated on a first come first serve basis.  Parties must be complete in order to get a table.</p>
                <p>MONDAY – FRIDAY: 9AM – 9PM</p>
                <p>SATURDAY & SUNDAY: 8AM – 2:30PM  // 5PM – 9PM</p>

            </div>

        </div>
    </div>
</div>

<div class="container py-5" id="Location">
    <div class="row d-flex align-items-center">

        <div class="col-xl-6 col-lg-6 col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5378.222673351253!2d-122.295081!3d47.623967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906b2c98844cf7%3A0xaf7a813970ea2d12!2sJinx%20Brows!5e0!3m2!1sen!2sus!4v1683911542160!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-xl-6 col-lg-6 col-12 px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5 green">
            <h2>Location</h2>
            <h6>2901 E. Madison St<br>Seattle, WA 98112</h6>
            <p>Free street parking is available in the surrounding neighborhood.</p>
        </div>

    </div>
</div>

<div style="background-color:#D69994;">
    <div class="container py-5" id="GiftCards">
        <div class="row d-flex align-items-center">
        
        <div class="col-xl-6 col-lg-6 col-12 d-xxl-none d-xl-none d-lg-none d-block text-md-center text-sm-center">
                <img src="img/Untitled-7.jpg" class="img-fluid">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 text-white px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5">
                    <h2>Gift Certificates</h2><br>
                    <p>For that Cafe Flora lover in your life, give the gift of a delightful meal in a beautiful space. Order online for a digital copy to be emailed to you instantly or come in to the restaurant for other payment methods. Gift Cards are for Cafe Flora purchase only and cannot be used at Floret or The Flora Bakehouse.</p>
                    <br>
                    <button type="button" class="btn btn-outline-light">Private event packet</button>

                </div>

            <div class="col-xl-6 col-lg-6 col-12 d-xxl-block d-xl-block d-lg-block d-none">
                <img src="img/Untitled-7.jpg" class="img-fluid">
            </div>

        </div>
    </div>
</div>

</div>

<?php
include 'include/footer.php';
?>