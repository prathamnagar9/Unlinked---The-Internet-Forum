<?php
session_start();
?>
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
    <link rel="stylesheet" href="css/jquery-te-1.4.0.css">
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->

    <style>
        .user-profile-image {
    width: 70px;
    height: 70px;
    border-radius: 60%;
    object-fit: cover;
    margin-right: 180px; /* Adjust margin as needed */
    margin-left: -50px; /* Adjust margin as needed */
    margin-top: -20px;
}

.search{
    margin-top: -20px;
    margin-left: 50px;
}

.user-profile-image2{
    width: max-content;
    height: max-content;
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
                        <a href="index - user.php" class="logo"><img src="images/logo1.png" alt="logo" style="height: 100px; margin-top: -10px;"></a>
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
                    <div class="menu-wrapper justify-content-start"> <!-- Changed justify-content-end to justify-content-start -->
                        <form method="post" class="mr-auto"> <!-- Changed mr-4 to mr-auto -->
                            <div class="form-group mb-0 search">
                                <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                                <button class="form-btn" type="button"><i class="la la-search"></i></button>
                            </div>
                        </form>
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
<section class="hero-area bg-white shadow-sm overflow-hidden pt-60px" style="background-color: #06081f; color: #A7C7E7;">
    <span class="stroke-shape stroke-shape-1"></span>
    <span class="stroke-shape stroke-shape-2"></span>
    <span class="stroke-shape stroke-shape-3"></span>
    <span class="stroke-shape stroke-shape-4"></span>
    <span class="stroke-shape stroke-shape-5"></span>
    <span class="stroke-shape stroke-shape-6"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="hero-content">
                    <div class="media media-card align-items-center shadow-none p-0 mb-0 rounded-0 bg-transparent">
                        <div class="media-img media--img">
                            <img class="user-profileimage" src="image.php" alt="avatar">
                        </div>
                        <div class="media-body">
                        <h5 style="color: #A7C7E7;"><?php include 'username.php'; ?></h5>
                        </div>
                    </div><!-- end media -->
                </div><!-- end hero-content -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="hero-btn-box text-right py-3" >
                    <a href="logout.php?logout=true" class="btn theme-btn theme-btn-outline theme-btn-outline-gray" style="color: #A7C7E7;"> Log Out</a>
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs generic-tabs generic--tabs generic--tabs-2 mt-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="user-profile-tab" data-toggle="tab" href="#user-profile" role="tab" aria-controls="user-profile" aria-selected="true">Profile</a>
                    </li>
                </ul>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!--======================================
        END HERO AREA
======================================-->

<!-- ================================
         START USER DETAILS AREA
================================= -->
<section class="user-details-area pt-30px pb-60px">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="user-profile" role="tabpanel" aria-labelledby="user-profile-tab">
                        <div class="user-panel-main-bar">
                            <div class="user-panel mb-30px">
                                <p class="pb-2">I am a programmer. My principal language is C++. I've also done commercial work in Java, C, Perl, Python, Javascript and APL. I've also been known to dabble in lisp, Haskell, assembler (ARM, x86, amd64) and probably a few other languages that haven't left as big a mark.</p>
                               </div><!-- end user-panel -->
                          
                           
                            
                            <div class="user-panel mb-30px">
                                <div class="bg-gray p-3 rounded-rounded d-flex align-items-center justify-content-between">
                                    <h3 class="fs-17"> Posts </h3>
                                    
                                </div>
                                <div class="vertical-list">
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">6475</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">22</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="post.html">How to make Git “forget” about a file that was tracked but is now in .gitignore?</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">4711</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">-2</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="post.html">Undoing a git rebase</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">4448</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">11</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="post.html">Difference between “git add -A” and “git add .”</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">3274</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">33</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="post.html">How to find and restore a deleted file in a Git repository</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">2822</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">11</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="post.html">How to undo “git commit --amend” done instead of “git commit”</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    <div class="item p-0">
                                        <div class="media media-card media--card align-items-center shadow-none rounded-0 mb-0 bg-transparent">
                                            <div class="votes py-2 answered-accepted">
                                                <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                    <span class="vote-counts">2741</span>
                                                    <span class="vote-icon"></span>
                                                </div>
                                                <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                    <span class="vote-counts">33</span>
                                                    <span class="answer-icon"></span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="post.html">Branch from a previous commit using Git</a></h5>
                                                <small class="meta">
                                                    <span>May 12 '20</span>
                                                </small>
                                            </div>
                                        </div><!-- end media -->
                                    </div><!-- end item -->
                                    
                                </div><!-- end vertical-list -->
                            </div><!-- end user-panel -->
                           
                        </div><!-- end user-panel-main-bar -->
                    </div><!-- end tab-pane -->
                    
                </div>
            </div><!-- end col-lg-9 -->
            
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end user-details-area -->
<!-- ================================
         END USER DETAILS AREA
================================= -->

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
<script src="js/jquery-te-1.4.0.min.js"></script>
<script src="js/selectize.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>