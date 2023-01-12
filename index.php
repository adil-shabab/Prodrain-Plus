<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodrain Plus</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <!-- animate min css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- fonnt awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- data aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- fancy box -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <!-- style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body id="body">


    <!-- LOADER -->

    <div class="loader">
      <lottie-player src="https://lottie.host/309a8571-51aa-43e4-b4d2-82bb73445753/yL3YCwoXzi.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
    </div>
    
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/images/logo/RITHI LOGO new-02.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-offcanvas" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="prodrain-navbar navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="it-services.php">IT Services</a></li>
                            <li><a class="dropdown-item" href="medical-equipments.php">Medical Equipments</a></li>
                            <li><a class="dropdown-item" href="renewable-energy.php">Renewable Energy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start " tabindex="-1" id="navbar-offcanvas" aria-labelledby="offcanvasExampleLabel">
        <div class="d-flex justify-content-between align-items-center py-3 px-4">
            <a class="navbar-brand" href="#"><img src="assets/images/logo/RITHI LOGO new-02.png" alt=""></a>
            <a href="#" style="color: #fff; font-size:24px;"><i class="fa-solid fa-xmark" data-bs-dismiss="offcanvas" aria-label="Close"></i></a>
        </div>
        <ul class="prodrain-navbar navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="it-services.php">IT Services</a></li>
                <li><a class="dropdown-item" href="medical-equipments.php">Medical Equipments</a></li>
                <li><a class="dropdown-item" href="renewable-energy.php">Renewable Energy</a></li>
            </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
        </ul>
        <div class="ftr-sm-icon mt-5">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>

    <!-- navbar end -->



    <!-- social media -->

    <div class="social-media-icons">
        <div class="my-3" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="200">
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <div class="my-3" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="300">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        </div>
        <div class="my-3" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="400">
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="my-3" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="500">
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>

    <!-- hero section -->




    <div class="heroSection" id="home" >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">STRONG VELOCITY</h1>
                    <h2 data-aos="fade-right" data-aos-duration="1300" data-aos-delay="400">HIGH EFFICENCY</h2>
                    <p class="para" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">Our food waste disposer can shared all kinds of food waste such as bones, egg shells, meat, vegetables,fruits etc., into tinypieces in a short time, and all these tiny residues can pass through the drain.</p>
                    <div class="mt-3" data-aos="fade-right" data-aos-duration="1700" data-aos-delay="500">
                        <a href="#" class="prime-btn button-48"> <span>Contact Us</span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-4 d-flex hero-img" data-tilt>
                    <img class="img-fluid"  src="assets/images/prodrain-.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- hero sction end -->


    <!-- about section -->

    <div class="aboutSection" id="about">
        <div class="container">
            <!-- <div class="round-1 move-y"></div>
            <div class="round-2 move-y"></div> -->
            <div class="row">
                <div class="col-12">
                    <p class="sm-head text-center"><span>About Us</span></p>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="d-flex justify-content-center flex-column">
                                <p class="text-center para m-0">Rithi's Enterprise is an export and import house, providing innovative products that enhances the quality of hygienic living in 
                                    every home, office, hospitals, hotels and the society at large.
                                     Offering innovative, effective, practical, and viable waste management solutions beginning at the micro domestic residential level and extending to the macro corporation
                                    /municipality level has been the motivation behind it's products and services. It's Producys promotes hygienic and good quality living conditions of the current and future generation.
                                     Rithi's Enterprise ensure that the products and services that it offers are of the highest quality, with products certified by the most stringent quality certifying authorities and adopted
                                    for use in indian and european conditions.
                                </p>
                            </div>
                        </div>
                    </div>




                    <div class="row counter-section">
                        <div class="col-md-4 col-12 counters" data-aos="fade-up" data-aos-duration="500" data-aos-delay="100">
                            <h1><span class="counter pe-1">40</span>+</h1>
                            <p>Showroom</p>
                        </div>
                        <div class="col-md-4 col-12 counters" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300">
                            <h1><span class="counter pe-1">160</span>+</h1>
                            <p>Service Center</p>
                        </div>
                        <div class="col-md-4 col-12 counters" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
                        <h1><span class="counter pe-1">2000</span>+</h1>
                        <p>Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about section -->


    <!-- how it works section -->

    <div class="how-it-works-section">
        <div class="container">
            <p class="text-center sm-head"  data-aos="fade-up"><span>How It </span>Works</p>
        </div>
        <div class="how-it-works-row">
            <div class="contaner">
                <div class="row no-gutter">
                    <div class="col-md-4 col-12 d-flex flex-column" >
                        <div class="how-it-works">
                            <p class="head">Step 1</p>
                            <p class="desc">Switch on the water tap, turn on the food waste disposer</p>
                            <div class="white-box"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 d-flex flex-column">
                        <div class="how-it-works">
                            <p class="head">Step 2</p>
                            <p class="desc">Pour the food waste into the unit and keep it working for 15-20 seconds</p>
                            <div class="white-box"></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 d-flex flex-column">
                        <div class="how-it-works">
                            <p class="head">Step 3</p>
                            <p class="desc">Turn off the food waste disposer, then switch off the water tap</p>
                            <div class="white-box"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- how it works section end -->

    <!-- video section -->

    <div class="video-section">
        <div class="container">
            <div class="video-area">
                <a  href="https://youtu.be/LR5WDKTp158" data-fancybox="group">
                    <img class="img-fluid thumbnail-img" src="assets/images/thumbnail.png" alt="">
                    <button type="button" class="video-btn">
                        <img class="img-fluid" src="assets/images/play-icon.png" alt="">
                    </button>
                </a>
            </div>
        </div>
    </div>

    <!-- video section end -->

    <!-- features section -->
        <div class="features-section " id="features">
            <div class="row no-gutter">
                <div class="col-md-4 col-12 left d-flex align-items-center justify-content-center">
                    <div class="features-head">
                        <p class="sm-head">Prodrain<br><span class="left-text">Features</span></p>
                    </div>
                </div>
                <div class="col-md-8 col-12" data-aos="fade-left">
                    <div class="owl-carousel feature-carousel" >
                        <div>
                            <div class="feature-slider">
                                <img src="assets/images/features/1.png" alt="">
                                <p>Pestle Grinding Technology</p>
                                <p>Prodrain Plus food waste disposer's alloy hammer on the grinding wheel will combine four actions suc as smash, slice, cut and tear to grind the foodwaste.
                                    it can also adjust its working position automatically according to the solidity of the food waste.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="feature-slider">
                                <img src="assets/images/features/2.png" alt="">
                                <p>Patented Grinding Wheel</p>
                                <p>Prodrain Plus food waste disposer has an unique triple grinding function, the first grinding will seperate the waste into two parts, completely grinded waste
                                    will expel through water, while the remaining will continue for second grinding through auto reverse function and poured out after they are completely ground.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="feature-slider">
                                <img src="assets/images/features/3.png" alt="">
                                <p>Ultra Low Noise</p>
                                <p>Prodrain Plus food waste disposer use equilateral triangle theory to locate the alloy hammer for grinding , by this it can maintain good stability. Low noise of the 
                                motor is prodrain plus disposer's distinct advantage. Automatically adjusting position of the the alloy hammer can greately reduce the noise while working. 
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="feature-slider">
                                <img src="assets/images/features/4.png" alt="">
                                <p>Innovative Patented Design</p>
                                <p>Exquisite craftsmanship and anti-jam technique meets and exceeds international quality standards.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div  class="feature-slider">
                                <img src="assets/images/features/5.png" alt="">
                                <p>Easy Installation</p>
                                <p>Easy to install, users can install the disposer in a very short period by following the instructions mentioned in the user manual.  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- features section end -->

    <!-- color variants section start -->
<!-- 
    <div class="color-variants-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="sm-head text-center mb-md-4 mb-2"><span>Colour </span>Variants</h1>
                    <div class="color-variants">
                        <div class="colorVariantCarousel owl-carousel">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img class="img-fluid color-variant-img" src="assets/images/color-variant/orange1.png" alt="">
                                    <h3 class="text-center color-variant-head">Shiny Orange</h3>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img class="img-fluid color-variant-img" src="assets/images/color-variant/red1.png" alt="">
                                    <h3 class="text-center color-variant-head">China Red</h3>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img class="img-fluid color-variant-img" src="assets/images/color-variant/yellow1.png" alt="">
                                    <h3 class="text-center color-variant-head">Champagne Gold</h3>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <img class="img-fluid color-variant-img" src="assets/images/color-variant/black1.png" alt="">
                                    <h3 class="text-center color-variant-head">Shiny Black</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- color variants section end -->





    <!-- testimonial section -->

        <div class="testimonial-section" id="testimonial">
            <div class="container">
                <h6 class="smallHead text-center">Testimonials</h6>
                <p class="sm-head text-center">Some words from <span> Our Happy Clients</span></p>

                <section id="testimonial-area" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="container">
                        <div class="testi-wrap">
                        
                            <div class="client-single active position-1" data-position="position-1">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-1.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>
                        
                            <div class="client-single inactive position-2" data-position="position-2">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-2.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>
                        
                            <div class="client-single inactive position-3" data-position="position-3">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-3.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>
                        
                            <div class="client-single inactive position-4" data-position="position-4">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-3.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>
                        
                            <div class="client-single inactive position-5" data-position="position-5">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-1.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>
                        
                            <div class="client-single inactive position-6" data-position="position-6">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-3.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>

                            <div class="client-single inactive position-7" data-position="position-7">
                                <div class="client-img">
                                    <img src="assets/images/testimonial/testimonial-1.png" alt="">
                                </div>
                                <div class="client-comment">
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                                    <span><i class="fa fa-quote-left"></i></span>
                                </div>
                                <div class="client-info">
                                    <p>Varun</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
  
            </div>
        </div>
    
    <!-- testimonial section end -->

    <!-- contact section -->
        <div class="contact-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 order-lg-1 order-md-2 order-2">
                        <div class="contact-form">
                            <div class="input" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <input type="text" name="" id="" placeholder="Your Name">
                            </div>
                            <div class="input" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                                <input type="text" name="" id="" placeholder="Your Email">
                            </div>
                            <div class="textarea" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                <textarea name="" id="" cols="30" rows="4" placeholder="Share Your Thoughts"></textarea>
                            </div>
                            <div class="contact-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                                <a href="#" class="button-48"><span class="class="text>SHARE YOUR FEEDBACK</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 d-flex justify-content-center order-lg-2 order-md-1 order-1" style="position: relative;">
                        <div class="contact-head">
                            <div class="contact-head-inner">
                            <p>Contact</p>
                            <span class="left-line">Us</span>
                            <div class="bg-contact move-y">
                                <img src="assets/images/contact-shape-10.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> 

    <!-- contact section end -->

    <!-- footer section -->

    <footer>
            <div class="container">
                <div class="footer-logo d-flex justify-content-center align-items-center">
                    <img src="assets/images/logo/RITHI LOGO new-02.png" alt="">
                </div>
                <div class="d-flex justify-content-center" id="ftr__flex">
                    <div class="ftr-links"><a href="#">Home</a></div>
                    <div class="ftr-links"><a href="#about">About Us</a></div>
                    <div class="ftr-links"><a href="">Download</a></div>
                    <div class="ftr-links"><a href="#contact">Contact Us</a></div>
                </div>
                <div>
                    <div class="ftr-copy-right d-flex justify-content-center">
                        <a class="ftrBtmBarLink" href="https://mentegoz.com"> <p class="text-center">© Rithi's Enterprises 2023 | Powered by Mentegoz.com</span> </a>
                    </div>
                </div>
                <div class="d-flex justify-content-center order-md-2 order-1">
                    <div class="footer-logo">
                        <div class="ftr-sm-icon">
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <!-- footer section end -->


    <div class="fixed-whats-app">
        <a href="#">
            <lottie-player src="https://lottie.host/54a9c099-711a-40e4-ab43-e69ac74c51ba/0z4w5g7JMZ.json" background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></lottie-player>
        </a>
    </div>

    <div id="button" class="fixed-top-arrow">
        <a ><i class="fa-solid fa-arrow-up-long"></i></a>
    </div>




    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <!-- waypoint -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- counter -->
    <script src="assets/js/jquery.countup.js"></script>
    <script src="assets/js/counter.js"></script>
    <!-- tilt -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <!-- burger menu -->
    <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
    <!-- fancybox -->
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- lottie -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- smooth scroll -->
    <script src="assets/js/SmoothScrollMouseWheel.js"></script>

    <!-- slider js -->
    <script src="assets/js/slider.js"></script>
    <!-- main js -->
    <script src="assets/js/main.js"></script>

    <script>
        AOS.init();
    </script>

</body>
</html>









