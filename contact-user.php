<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Unlinked -  Unplug From Reality</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
   <link rel="icon" sizes="64x64" href="images/logo1.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->

    <style>
        .user-profile-image {
    width: 70px;
    height: 70px;
    border-radius: 60%;
    object-fit: cover;
    margin-right: 150px; /* Adjust margin as needed */
    margin-left: -50px; /* Adjust margin as needed */
    margin-top: -20px;
}
    </style>
</head>
<body style="background-color: #06081f;">

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
    <header class="header-area " style="background-color: #06081f; border: solid 2px ;">
        <div class="container" style="height: 80px; margin-top: 20px;">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <div class="logo-box">
                        <a href="index.html" class="logo"><img src="images/logo1.png" alt="logo" style="height: 100px; margin-top: -10px;"></a>
                        <div class="user-action">
                            <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                                <i class="la la-search"></i>
                            </div>
                            <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                <i class="la la-bars"></i>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-2 -->
                <div class="col-lg-10">
                    <div class="menu-wrapper   justify-content-end">
                        
                        <div class="nav-right-button">
                        <img src="image.php" alt="User Profile" class="user-profile-image">
                        </div><!-- end nav-right-button -->
                    </div><!-- end menu-wrapper -->
                </div><!-- end col-lg-10 -->
            </div><!-- end row -->
        </div><!-- end container -->
        
        <div class="body-overlay"></div>
    </header><!-- end header-area -->
<!--======================================
        END HEADER AREA
======================================-->

<!--======================================
        START HERO AREA
======================================-->
<section class="hero-area bg-white shadow-sm pt-80px pb-80px" style="background-color: #06081f; color: #A7C7E7;">
    <span class="icon-shape icon-shape-1"></span>
    <span class="icon-shape icon-shape-2"></span>
    <span class="icon-shape icon-shape-3"></span>
    <span class="icon-shape icon-shape-4"></span>
    <span class="icon-shape icon-shape-5"></span>
    <span class="icon-shape icon-shape-6"></span>
    <span class="icon-shape icon-shape-7"></span>
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="section-title pb-3" style="color: #A7C7E7;">We'd love to here from you</h2>
            <p class="section-desc">Your thoughtful suggestions and sincere feedback is important to us.
                <br> Please, feel free to let us know anything you have in your mind.
            </p>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!--======================================
        START CONTACT AREA
======================================-->
<section class="contact-area pt-80px pb-80px" >
    <div class="container">
        <form action="" class="contact-form card card-item" style="background-color: #0C2340; color: #A7C7E7;">
            <div class="card-body row">
                <div class="col-lg-7">
                    <div class="alert alert-success contact-success-message mb-3" role="alert">
                        Thank You! Your message has been sent.
                    </div>
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-20" style="color: #A7C7E7;">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control form--control fs-14" placeholder="e.g. Alex smith">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-20" style="color: #A7C7E7;">Email</label>
                        <input type="email" id="email" name="email" class="form-control form--control fs-14" placeholder="e.g. alexsmith@gmail.com">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-20" style="color: #A7C7E7;">Phone Number</label>
                        <input type="tel" id="phone-number" name="phone" class="form-control form--control fs-14" placeholder="Your phone number">
                    </div><!-- end form-group -->
                    <div class="form-group">
                        <label class="fs-14 text-black fw-medium lh-20" style="color: #A7C7E7;">Message</label>
                        <textarea id="message" name="message" class="form-control form--control fs-14" rows="6" placeholder="Tell us how we can help you."></textarea>
                    </div><!-- end form-group -->
                    <div class="form-group mb-0">
                        <button id="send-message-btn" class="btn theme-btn" type="submit">Send Message</button>
                    </div><!-- end form-group -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="contact-information-wrap pl-4 border-left border-left-gray h-100">
                        <h3 class="fs-20 pb-3 fw-bold" style="color: #A7C7E7;">Contact Information</h3>
                        <div class="divider"><span></span></div>
                        <p class="pt-3 pb-5">Business consulting excepteur sint occaecat cupidatat consulting non proident.</p>
                        <ul class="generic-list-item fs-15">
                            <li class="mb-3"><div class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#3cb1c6"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.54 5c.06.89.21 1.76.45 2.59l-1.2 1.2c-.41-1.2-.67-2.47-.76-3.79h1.51m9.86 12.02c.85.24 1.72.39 2.6.45v1.49c-1.32-.09-2.59-.35-3.8-.75l1.2-1.19M7.5 3H4c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.49c0-.55-.45-1-1-1-1.24 0-2.45-.2-3.57-.57-.1-.04-.21-.05-.31-.05-.26 0-.51.1-.71.29l-2.2 2.2c-2.83-1.45-5.15-3.76-6.59-6.59l2.2-2.2c.28-.28.36-.67.25-1.02C8.7 6.45 8.5 5.25 8.5 4c0-.55-.45-1-1-1z"/></svg></div> +522 672-452-1120</li>
                            <li class="mb-3"><div class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#3cb1c6"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg></div><a href="mailto:example@yourwebsite.com" class="d-inline-block">example@yourwebsite.com</a></li>
                            <li class="mb-3"><div class="icon-element icon-element-xs shadow-sm d-inline-block mr-2"><svg xmlns="http://www.w3.org/2000/svg" height="19px" viewBox="0 0 24 24" width="19px" fill="#3cb1c6"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z"/><circle cx="12" cy="9" r="2.5"/></svg></div>  Via Ufente, 20 04100 Latina Italy</li>
                        </ul>
                      
                    </div>
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </form>
       
    </div><!-- end container -->
</section>
<!--======================================
        END CONTACT AREA
======================================-->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-80px bg-dark position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Quick Links</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    
                   
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions.html">Terms of Service</a></li>
                      
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="faq.html">Knowledge Base</a></li>
                        <li><a href="contact.html">Support</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-5">
    <div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <a href="index.html" class="d-inline-block">
                    <img src="images/logo1.png" alt="footer logo" class="footer-logo">
                </a>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a href="#">Unlinked</a> Inc.</p>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start back to top -->
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top" style="background-color: black;">
    <i class="la la-arrow-up" style="color: #A7C7E7; background-color: #06081f;"></i>
</div>
<!-- end back to top -->




<!--  js files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/leaflet.js"></script>
<script src="js/map.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Feb 2024 17:20:21 GMT -->
</html>