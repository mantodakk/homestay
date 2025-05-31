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


    <section class="features-3 mt-n10 py-7">
        <div class="container">
            <div class="row text-center justify-content-center pt-10">
                <div class="col-lg-6">
                    <span class="badge rounded-pill badge-primary mb-2">Homestay</span>
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
                        <div class="card card-background move-on-hover mb-4">
                            <div class="full-background"
                                style="background-image: url('<?php echo $rootPath?>/assets/img/homestay/WhatsApp Image 2025-05-08 at 20.50.04_35d9687d.jpg')">
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
                                style="background-image: url('<?php echo $rootPath?>/assets/img/homestay/IMG-20250422-WA0042.jpg')">
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
                                style="background-image: url('<?php echo $rootPath?>/assets/img/homestay/IMG-20250422-WA0053.jpg')">
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
                                style="background-image: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80')">
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
                                style="background-image: url('https://images.unsplash.com/photo-1522770179533-24471fcdba45?auto=format&fit=crop&w=800&q=80')">
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
                                style="background-image: url('https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=800&q=80')">
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


    <section class="py-5 position-relative">
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
                            <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="0" class="active">
                            </li>
                            <li data-bs-target="#carouselExampleTestimonials-11" data-bs-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner rounded-3">
                            <div class="carousel-item bg-cover active"
                                style="background-image: url(<?php echo $rootPath?>/assets/img/homestay/IMG-20250422-WA0029.jpg)">
                                <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                    <div class="row h-100">
                                        <div class="col-xl-6 my-auto px-6">
                                            <h5 class="text-white font-weight-normal mb-3">"Absolutely loved the
                                                spacious house and peaceful surroundings. Perfect for our family
                                                weekend!"</h5>
                                            <p class="text-white font-weight-bold">Nur Aisyah, <span
                                                    class="text-xs font-weight-normal">Kuala
                                                    Lumpur</span></p>
                                        </div>
                                      
                                    </div>
                                </div>
                                <span class="mask bg-gradient-faded-primary opacity-10 z-index-0 rounded-3"></span>
                            </div>

                            <div class="carousel-item bg-cover active"
                                style="background-image: url(<?php echo $rootPath?>/assets/img/homestay/IMG-20250422-WA0029.jpg)">
                                <div class="z-index-1 my-md-8 my-6 position-relative z-index-2">
                                    <div class="row h-100">
                                        <div class="col-xl-6 my-auto px-6">
                                            <h5 class="text-white font-weight-normal mb-3">"Absolutely loved the
                                                spacious house and peaceful surroundings. Perfect for our family
                                                weekend!"</h5>
                                            <p class="text-white font-weight-bold">Nur Aisyah, <span
                                                    class="text-xs font-weight-normal">Kuala
                                                    Lumpur</span></p>
                                        </div>
                                       
                                    </div>
                                </div>
                                <span class="mask bg-gradient-faded-primary opacity-10 z-index-0 rounded-3"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>

    <section class=" py-7 bg-light">
        <div class="container text-center">
            <h2>Price for Our Hospitality</h2>
            <p class="mb-5">Enjoy your stay with comfort and space perfect for your family.</p>
            <div class="pricing-card mx-auto"
                style="max-width: 400px; border: 1px solid #ddd; border-radius: 8px; padding: 30px; background: #fff; box-shadow: 0 4px 10px rgb(0 0 0 / 0.1);">
                <h3 class="mb-3">Modern Family Homestay</h3>
                <p class="mb-3">Spacious, modern design with swimming pool and parking. Perfect for family getaways.</p>
                <div class="pricing mb-4 fs-4">
                    <span class="text-muted text-decoration-line-through me-3">RM 800/night</span>
                    <div>

                        <span class="fw-bold text-primary">RM 600/night</span>
                    </div>
                </div>
                <a href="#" class="btn btn-primary btn-lg w-100">Book Now</a>
            </div>
        </div>
    </section>

    <section class=" py-7">
        <div class="container text-center">
            <h2>Find Us Here</h2>
            <p class="mb-4">Our homestay is located in a peaceful neighborhood with easy access to local attractions.
            </p>
            <div class="map-container"
                style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.547847198543!2d101.686855!3d3.139003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc49b8b6143a6f%3A0x4a7c4476e6cf63b9!2sKuala%20Lumpur!5e0!3m2!1sen!2smy!4v1717148400000!5m2!1sen!2smy"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>


    <section class="py-5">
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
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desire.jpg"
                                alt="">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow"
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/chair.jpg"
                                alt="">
                            <img class="w-100 border-radius-lg shadow mt-4"
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/facade.jpg"
                                alt="">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow mt-0 mt-lg-5"
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/architecture.jpg"
                                alt="">
                            <img class="w-100 border-radius-lg shadow mt-4"
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/baloon.jpg"
                                alt="">
                        </div>
                        <div class="col-lg-3 col-6">
                            <img class="w-100 border-radius-lg shadow mt-3"
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/seaside.jpg"
                                alt="">
                            <img class="w-100 border-radius-lg shadow mt-4"
                                src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/medusa.jpg"
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