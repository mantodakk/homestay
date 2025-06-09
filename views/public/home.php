<!--
=========================================================
* Soft UI Design System PRO - v1.1.0
=========================================================

* Product Page:  https://themes.getbootstrap.com/product/soft-ui-design-system-pro/ 
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/head.php"); ?>

<body class="presentation-page">
    <!-- Navbar -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/nav.php"); ?>


    <!-- -------- START HEADER 10 w/ carousel ------- -->
    <header>


        <!-- Start Card Blog Fullbackground - text centered -->
        <div class="card card-background  border-radius-xl min-vh-75 m-3  ">
            <div class="full-background "
                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0029.jpg');">
            </div>
            <div class="card-body pt-12 text-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 my-auto">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Villa D'hati</h4>
                            <h1 class="text-white fadeIn2 fadeInBottom">Feel at Home in Our Homestay</h1>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth creation is an
                                evolutionarily recent positive-sum game. Status is an old zero-sum game. Those
                                attacking wealth creation are often just seeking status.</p>
                            <div class="buttons fadeIn1 fadeInBottom">
                                <button type="button" class="btn btn-lg bg-gradient-primary mt-4">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </header>


    <section class="features-3 mt-n10 py-7" id="facilities">
        <div class="container">
            <div class="row text-center justify-content-center pt-10">
                <div class="col-lg-6">
                    <span class="badge rounded-pill badge-primary mb-2">Facilities</span>
                    <h2>Discover the Unique Comforts of Our Homestay</h2>
                    <p>
                        Experience modern design in a spacious homestay area perfect for families. Enjoy relaxing
                        amenities, ample parking, and a refreshing swimming pool—all crafted for your comfort.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <!-- Cozy Rooms -->
                    <a href="javascript:;">
                        <div class="card card-background move-on-hover mb-4 ">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/WhatsApp Image 2025-05-08 at 20.50.04_35d9687d.jpg')">
                            </div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Modern Cozy Rooms</h4>
                                <p>Our rooms feature sleek, modern decor combined with plush bedding, offering a
                                    peaceful retreat for the whole family.</p>
                            </div>
                        </div>
                    </a>
                    <!-- Swimming Pool -->
                    <a href="javascript:;">
                        <div class="card card-background move-on-hover">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0042.jpg')">
                            </div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Swimming Pool</h4>
                                <p>Dive into our pristine swimming pool surrounded by lush greenery, perfect for
                                    relaxation and fun.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-4">
                    <!-- Large Homestay Area -->
                    <a href="javascript:;">
                        <div class="card card-background move-on-hover mb-4">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0053.jpg')">
                            </div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Spacious Area</h4>
                                <p>Our expansive homestay grounds offer plenty of space for kids to play and families to
                                    relax together.</p>
                            </div>
                        </div>
                    </a>
                    <!-- Parking Available -->
                    <a href="javascript:;">
                        <div class="card card-background move-on-hover">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0044.jpg')">
                            </div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Ample Parking</h4>
                                <p>Enjoy convenient and secure parking spaces for all guests, making your arrival and
                                    departure hassle-free.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <!-- Perfect for Family -->
                    <a href="javascript:;">
                        <div class="card card-background move-on-hover mb-4">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/WhatsApp Image 2025-05-08 at 20.50.04_ca4ee373.jpg')">
                            </div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Family Friendly</h4>
                                <p>Our homestay is thoughtfully designed with families in mind, providing a safe and
                                    welcoming environment for all ages.</p>
                            </div>
                        </div>
                    </a>
                    <!-- Cozy Lounge Areas -->
                    <a href="javascript:;">
                        <div class="card card-background move-on-hover">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0047.jpg')">
                            </div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Cozy Lounge Areas</h4>
                                <p>Relax in our inviting lounge spaces with comfortable seating, perfect for unwinding
                                    or socializing.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 position-relative" id="testimonials">
        <div class="container-fluid">
            <div class="container text-center">
                <h2>What Our Guests Say</h2>
                <p class="mb-5">Real stories from families who’ve experienced our homestay comfort.</p>
            </div>

            <div class="row">

                <div class="col-10 mx-auto">
                    <div id="carouselExampleTestimonials-11" class="carousel carousel-fade slide shadow-lg"
                        data-bs-ride="carousel">
                        <ol class="carousel-indicators z-index-2">
                            <?php
                            foreach ($reviews as $index => $review) {
                                $activeClass = $index === 0 ? 'active' : ''; ?>
                                <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="<?php echo $index ?>"
                                    class="<?php echo $activeClass ?>"></li>
                                <?php

                            }
                            ?>
                        </ol>
                        <div class="carousel-inner rounded-3">
                            <?php
                            foreach ($reviews as $index => $review) {
                                $activeClass = $index === 0 ? 'active' : '';
                                $rating = $review['star'];
    $stars = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $rating) {
            $stars .= '<span class="fa fa-star"></span>'; // Filled star
        } else {
            $stars .= '<span class="fa fa-star-o"></span>'; // Empty star
        }
    }

                                ?>



                                <div class="carousel-item bg-cover active"
                                    style="background-image: url(<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0029.jpg)">
                                    <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                        <div class="row h-100">
                                            <div class="col-xl-6 my-auto px-6">
                                                <h5 class="text-white font-weight-normal mb-3">
                                                    "<?php echo $review['description'] ?>"</h5>
                                                <div class="stars">
                                                    <?php echo $stars ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <span class="mask bg-gradient-faded-primary opacity-10 z-index-0 rounded-3"></span>
                                </div>

                            <?php }
                            ?>



                        </div>
                    </div>

                </div>
            </div>
    </section>



    <section class="py-sm-7 bg-light" id="pricing">
        <div class="bg-gradient-primary position-relative m-3 border-radius-xl">
            <img src="<?php echo $rootPath ?>/assets/img/shapes/pattern-lines.svg" alt="pattern-lines"
                class="position-absolute start-0 top-md-0 w-100 opacity-6">
            <div class="container pb-lg-8 pb-7 pt-5 postion-relative z-index-2 position-relative">
                <div class="row">
                    <div class="col-md-7 mx-auto text-center">
                        <span class="badge bg-gradient-dark mb-2">Booking Rates</span>
                        <h3 class="text-white">Ready to book your stay at our Homestay?</h3>
                        <p class="text-white">Choose your preferred plan based on your stay duration and guest count.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-lg-n8 mt-n6">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 p-md-0 mb-lg-auto mb-4 z-index-2 mx-auto">
                        <div class="card shadow-lg ">
                            <div class="card-header text-center pt-5 pb-3">
                                <h6 class="text-dark opacity-8 text mb-0 my-2">1 Night Stay</h6>

                                <?php if ($discountedPrice > 0): ?>
                                    <span class="text-muted text-decoration-line-through font-weight-bolder me-3">RM
                                        <?php echo number_format($originalPrice, 2); ?>/night
                                    </span>
                                    <h1 class="font-weight-bolder">
                                        <small>RM</small><?php echo number_format($discountedPrice, 2); ?>
                                    </h1>
                                <?php else: ?>
                                    <!-- Display only Original Price -->
                                    <h1 class="font-weight-bolder">
                                        <small>RM</small><?php echo number_format($originalPrice, 2); ?>
                                    </h1>
                                <?php endif; ?>
                            </div>

                            <div class="card-body mx-auto pt-0">

                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">Free Wi-Fi</span>
                                    </div>
                                </div>
                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">Breakfast Included</span>
                                    </div>
                                </div>

                                <div class="justify-content-start d-flex px-2 py-1">
                                    <div>
                                        <i class="fas fa-check text-dark opacity-6 text-sm"></i>
                                    </div>
                                    <div class="ps-2">
                                        <span class="text-sm">Access to All Amenities</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer pt-0">
                                <a href="<?php echo $rootPath?>/tempah/baharu"
                                    class="btn btn-icon bg-gradient-primary d-block mb-0 icon-move-right">Book Now</a>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center mt-5">
                            <i class="fa fa-lock"></i> Secured Payment by <b>DuitNow QR</b>:
                            <br><br>
                            <i class="fa fa-qrcode fa-2x"></i> <span>Pay via DuitNow QR Code</span>
                        </p>
                        <p class="text-center max-width-500 mx-auto"> <b>Info:</b> Enjoy a seamless payment experience
                            with DuitNow QR. Be sure to uploaded the receipts of payment.</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class=" py-7" id="location">
        <div class="container text-center">
            <h2>Find Us Here</h2>
            <p class="mb-4">Our homestay is located in a peaceful neighborhood with easy access to local attractions.
            </p>
            <div class="map-container"
                style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d243.29792621347867!2d103.10571955422071!3d5.277168071858043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smy!4v1717932000000!5m2!1sen!2smy"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


    <section class="py-5" id="faq">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-6 mx-auto text-center">
                    <h2>Frequently Asked Questions</h2>
                    <p>Got questions about booking your stay? We’ve got you covered with all the info you need!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="accordion" id="accordionBooking">
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How do I book a homestay room?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                                </button>
                            </h5>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionBooking">
                                <div class="accordion-body text-sm opacity-8">
                                    Booking is easy! Simply visit our website or contact us directly via phone or email.
                                    Choose your preferred dates, room type, and number of guests, then confirm your
                                    reservation through our secure booking system. You’ll receive a confirmation email
                                    with all details.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingTwo">
                                <button class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How many guests (pax) can stay in one room?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                                </button>
                            </h5>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionBooking">
                                <div class="accordion-body text-sm opacity-8">
                                    Each room has a maximum occupancy limit depending on its size and bed configuration.
                                    Typically, our cozy rooms accommodate 2 guests, while larger family rooms can host
                                    up to 4. Please specify the number of guests during booking to ensure the best fit
                                    and comfort.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingThree">
                                <button class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What are the standard operating procedures (SOP) during the stay?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                                </button>
                            </h5>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionBooking">
                                <div class="accordion-body text-sm opacity-8">
                                    To ensure a safe and comfortable stay for everyone, we follow these SOPs: regular
                                    cleaning and sanitization of rooms, mandatory mask-wearing in common areas, social
                                    distancing protocols, and contactless check-in/out options. Please adhere to these
                                    guidelines during your stay. For any concerns, our team is always available to
                                    assist you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFour">
                                <button class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    What payment methods do you accept?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                                </button>
                            </h5>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionBooking">
                                <div class="accordion-body text-sm opacity-8">
                                    We accept multiple payment options including credit/debit cards, bank transfers, and
                                    popular online payment gateways. Full or partial payment may be required to confirm
                                    your booking. Payment details will be shared during the reservation process.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mb-3">
                            <h5 class="accordion-header" id="headingFive">
                                <button class="accordion-button border-bottom font-weight-bold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    Can I modify or cancel my booking?
                                    <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                    <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                                </button>
                            </h5>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionBooking">
                                <div class="accordion-body text-sm opacity-8">
                                    Yes! You can modify or cancel your booking subject to our cancellation policy.
                                    Please check the terms and conditions or contact our support team for assistance. We
                                    recommend notifying us as early as possible to avoid any charges.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h1 class="text-gradient text-primary mb-2">Experience</h1>
                    <h1 class="mb-3">Authentic Malaysian Homestay</h1>
                    <p class="lead text-secondary">
                        Relax in cozy, comfortable rooms surrounded by lush greenery. Dive into our refreshing swimming
                        pool and enjoy the true warmth of Malaysian hospitality.
                    </p>
                    <div class="buttons mt-4">
                        <button type="button" class="btn btn-primary btn-lg">Book Your Stay</button>
                    </div>
                </div>
                <div class="col-lg-8 ps-md-5  ps-0 pe-0 mt-auto mt-md-3">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow mt-0 mt-lg-7"
                                src="<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0045.jpg" alt="">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow"
                                src="<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0041.jpg" alt="">
                            <img class="w-100 border-radius-lg shadow mt-4"
                                src="<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0043.jpg" alt="">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow mt-0 mt-lg-5"
                                src="<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0047.jpg" alt="">
                            <img class="w-100 border-radius-lg shadow mt-4"
                                src="<?php echo $rootPath ?>/assets/img/homestay/WhatsApp Image 2025-05-08 at 20.50.04_01d1fa71.jpg"
                                alt="">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow mt-3"
                                src="<?php echo $rootPath ?>/assets/img/homestay/IMG-20250422-WA0049.jpg" alt="">
                            <img class="w-100 border-radius-lg shadow mt-4"
                                src="<?php echo $rootPath ?>/assets/img/homestay/WhatsApp Image 2025-05-08 at 20.50.04_69b9402b.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/footer.php"); ?>

    <!--   Core JS Files   -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . $basePath2 . "/views/public/template/script.php"); ?>


    <script>
    </script>
    <script type="text/javascript">
        if (document.getElementById('state1')) {
            const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        }
        if (document.getElementById('state2')) {
            const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
            if (!countUp1.error) {
                countUp1.start();
            } else {
                console.error(countUp1.error);
            }
        }
        if (document.getElementById('state3')) {
            const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
            if (!countUp2.error) {
                countUp2.start();
            } else {
                console.error(countUp2.error);
            };
        }
    </script>
</body>

</html>