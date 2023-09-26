<?php
include 'config/security.php';
unset($_SESSION['title']);
$_SESSION['title'] = "EVENTS";

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
                        <a href="#About1" class="nav-link mx-1 header">About</a>
                    </li>

                    <li class="mav-item">
                        <a href="#Gallery" class="nav-link mx-1 header">Gallery</a>
                    </li>

                    <li class="mav-item">
                    <a href="#LocationHours" class="nav-link mx-1 header">Location & Hours</a>
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


    <!-- About -->
    <div class="container py-5">
        <div class="row d-flex align-items-center" id="About1">

            <div class="col-xl-6 col-lg-6 col-12 d-xl-none d-lg-none d-block">
                <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 py-md-5 green">
                <h1>Freshly baked pastries with local, seasonal ingredients.</h1><br>
                <h6>Fresh, local, vibrant vegetarian fare to fuel your journey ahead.</h6><br>
                <p>The newest addition to our family, the Flora Bakehouse is the perfect connection between Cafe Flora and Floret. This sun-filled cafe brings the Beacon Hill neighborhood freshly baked sweet and savory pastries, freshly baked bread, and inventive espresso drinks each and every day. From twice baked almond croissants, kouign amann and farmers market inspired danishes and savory croissants to our selection of gluten-free and vegan delights including our famous vegan cinnamon rolls, there is something for everyone! Freshly baked loaves of bread are now available to purchase seven days a week! Our rooftop deck is now open for your enjoyment, complete with Adirondack chairs, shaded plus full-sun areas, and a perfect view of Mt. Rainier. Also enjoy carefully curated natural wines, local beers, and other cold beverages from our Bakehouse Bottle Shop.</p>
            </div>

            <div class="col-xl-6 col-lg-6 col-12 d-xl-block d-lg-block d-none">
                <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- Gallery -->
<div style="background-color:#D69994" id="Gallery">
    <div class="container py-5" >
        <div class="row py-5 d-flex align-items-center">

            <div class="col-xl-6 col-lg-6 col-12">
                <img src="img/Untitled-5.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-xl-6 col-lg-6 col-12 text-white px-xxl-5 px-xl-5 px-lg-5 py-md-5 py-sm-5 ">
                <h2>Celebrate your next occasion with us in our private event space!</h2>
                <p>Our event space is located upstairs at The Flora Bakehouse and includes our picturesque roof deck with a gorgeous view of Mt. Rainier in the distance as well as our indoor event space. The deck is partially covered and offers a wide variety of seating options as well as our intimate indoor seating area.</p><br>
                <p>Our catering menu offers everything from english teas to roman-style pizza parties. We proudly source fresh, local, and seasonally-inspired ingredients and look forward to working with you to create a beautiful event.</p><br>
                <p>For questions, please reach out to events@florabakehouse.com</p>
                <br>
                <button type="button" class="btn btn-outline-light">More event info here</button>

            </div>

        </div>
    </div>

    <div style="background-color:#ffff" id="Gallery">
        <div class="container py-5">
            <div class="row d-flex align-items-center" id="Gallery">

                <div class="col-xl-6 col-lg-6 col-12 d-xl-none d-lg-none d-block">
                    <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
                </div>

                <div class="col-xl-6 col-lg-6 col-12 py-md-5 green">
                    <h1><a href="">Pre-Orders</a></h1><br>
                    <p>Our celebration cakes make a perfect centerpiece for your next birthday, anniversary, or even just a weekday night! Offerings include: 9” Coconut Cake (vegan)</p><br>                
                    <small>Pick up at:</small>
                    <p>The Flora Bakehouse</p>
                    1511 S. Lucile St.<br>
                    Seattle, WA 98108
                </div>

                <div class="col-xl-6 col-lg-6 col-12 d-xl-block d-lg-block d-none">
                    <img src="img/Untitled-1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

</div>


    <!-- Location & Hours -->


    <div class="container py-5" id="LocationHours">
        <div class="row d-flex align-items-center">

            <div class="col-xl-6 col-lg-6 col-12 text-white  py-md-5 py-sm-5 green">
                <h2 class="green">Location & Hours</h2><br>
                <small>Daily: 7:00am – 5:00pm</small><br>

                <h5 class="green">1511 S. Lucile St.</h5>
                <h5 class="green">Seattle, WA 98108.</h5>
                <h5 class="green">(206) 762 – 0418</h5>

            </div>

            <div class="col-xl-6 col-lg-6 col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5378.222673351253!2d-122.295081!3d47.623967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906b2c98844cf7%3A0xaf7a813970ea2d12!2sJinx%20Brows!5e0!3m2!1sen!2sus!4v1683911542160!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>


    <!-- gift cards -->
    <div style="background-color:#D69994;">
        <div class="container py-5" id="GiftCards">
            <div class="row d-flex justify-content-center">
                <div class="col-6 text-white">
                    <div class="text-center">
                        <h5>Gift Certificates</h5>
                        <small>Order online for a digital copy to be emailed to you instantly or come in to the bakery for other payment methods. Gift Cards are for Bakehouse purchase only and cannot be used at Cafe Flora or Floret.</small><br><br>
                        <a href="" class="header text-white"><i class="fa-solid fa-arrow-right"></i> Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include 'include/footer.php';
?>
