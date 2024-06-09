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
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- end inject -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Include Bootstrap CSS and JS (assuming you're using Bootstrap) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <style>
    .nav-tabs .nav-link.active,
.nav-tabs .nav-link:hover {
    border: none;
    outline: none;
}

/* Optional: You can also remove the box-shadow if it's applied */
.nav-tabs .nav-link.active,
.nav-tabs .nav-link:hover {
    box-shadow: none;
}
.lh-26.active .nav-link{
    color: #A7C7E7;
}
.nav-tabs .nav-link.active {
    background-color: #06081f;
    color: #A7C7E7;
}

.user-profile-image {
    width: 70px;
    height: 70px;
    border-radius: 60%;
    object-fit: cover;
    margin-right: 150px; /* Adjust margin as needed */
    margin-left: -50px; /* Adjust margin as needed */
    margin-top: -20px;
}

.search{
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
                <div class="menu-wrapper justify-content-start"> <!-- Changed justify-content-end to justify-content-start -->
                    <form method="post" class="mr-auto"> <!-- Changed mr-4 to mr-auto -->
                        <div class="form-group mb-0 search">
                            <input class="form-control form--control form--control-bg-gray" type="text" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    <div class="nav-right-button">
                    <a href="user-profile2.php"><img src="image.php" alt="User Profile" class="user-profile-image"></a>


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


<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-80px pb-40px" >
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
               <div class="sidebar pb-45px is-position-sticky top-0 mt-2" style="box-shadow: 0 0 8px #A7C7E7; border-radius: 10px;">
                
                   <ul class="generic-list-item generic-list-item-highlight fs-15">
                    <br>
                       <li class="lh-26 active nav-item">
                        <a class="nav-link" id="question-tabs" data-toggle="tab" href="#questions"><i class="fa fa-line-chart mr-1 text-black" style="color: #A7C7E7;"></i> Trending</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#gaming"><i class="la la-gamepad mr-1 text-black" style="color: #A7C7E7;"></i> Gaming</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#Sports"><i class="la la-pencil mr-1 text-black" style="color: #A7C7E7;"></i> Sports</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#Business"><i class="la la-business-time mr-1 text-black" style="color: #A7C7E7;"></i> Business</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#Crypto"><i class="la la-bitcoin mr-1 text-black" style="color: #A7C7E7;"></i> Crypto</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#Programming"><i class="la la-code mr-1 text-black" style="color: #A7C7E7;"></i> programming</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#AI"><i class="la la-robot mr-1 text-black" style="color: #A7C7E7;"></i> AI</a>
                    </li>
                       <li class="lh-26 nav-item">
                        <a class="nav-link" id="jobs-tab" data-toggle="tab" href="#Anime"><i class="la la-television mr-1 text-black" style="color: #A7C7E7;"></i> Anime</a>
                       </li>
                   </ul>
                   <script>
                    // jQuery script to switch the active class on tab click
                    $(document).ready(function () {
                        $('.nav-item').on('click', function () {
                            $('.nav-item').removeClass('active');
                            $(this).addClass('active');
                        });
                    });
                </script>
                
               </div><!-- end sidebar -->
               
            </div><!-- end col-lg-2 -->
            <div class="col-lg-7">
                <div class="question-tabs mb-50px">
                    <ul class="nav nav-tabs generic-tabs justify-content-center" id="myTab" role="tablist" style="border: black; background-color: #06081f;">
                        <li class="nav-item"><div class="anim-bar"></div></li>
                        <li class="nav-item">
                            <a class="nav-link active" id="questions-tab" data-toggle="tab" href="#questions" role="tab" aria-controls="questions" aria-selected="true">Questions</a>
                        </li>
                        
                        
                    </ul>
                    <div class="tab-content pt-40px" id="myTabContent">
                        <div class="tab-pane fade show active" id="questions" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="fa fa-line-chart mr-1 text-black" style="color: #A7C7E7;"></i>Trending Questions</h3>
                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">0</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">0</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Unable to get data attribute from button element via Jquery</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 hour ago</span>
                                                <a href="user-profile.html" class="author">edublog</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">css</a>
                                                <a href="#" class="tag-link">bootstrap-4</a>
                                                <a href="#" class="tag-link">grid</a>
                                                <a href="#" class="tag-link">resize</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">How can i change the order of nodes in a list</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 min ago</span>
                                                <a href="user-profile.html" class="author">Epsi95</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">css</a>
                                                <a href="#" class="tag-link">bootstrap-4</a>
                                                <a href="#" class="tag-link">grid</a>
                                                <a href="#" class="tag-link">resize</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">About Create a User Defined Funtion that return a value</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 mins ago</span>
                                                <a href="user-profile.html" class="author">mstdmstd</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">css</a>
                                                <a href="#" class="tag-link">bootstrap-4</a>
                                                <a href="#" class="tag-link">grid</a>
                                                <a href="#" class="tag-link">resize</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Bitcoin Vs. Bitcoin Spot ETFs: the great illusion has started. Beware.</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">41 secs ago</span>
                                                <a href="user-profile.html" class="author">Pratik Singh</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Bitcoin</a>
                                                <a href="#" class="tag-link">Crypto</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">How on earth is this Palworld game so popular</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">55 mins ago</span>
                                                <a href="user-profile.html" class="author">javabeginner</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">PC Gaming</a>
                                                <a href="#" class="tag-link">Open World</a>
                                                <a href="#" class="tag-link">Pokemon</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Why has the hate for Ronaldo grown so much over the last 4 years?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="user-profile.html" class="author">cr7fan</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Football</a>
                                                <a href="#" class="tag-link">CR7</a>
                                                <a href="#" class="tag-link">Celebrity</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Tesla must face class action claims by 6,000 US workers in race bias case</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago</span>
                                                <a href="user-profile.html" class="author">stranger1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Cars</a>
                                                <a href="#" class="tag-link">Business</a>
                                                <a href="#" class="tag-link">Elon Musk</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">python: how to change python-config into my current python version</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">4 days ago</span>
                                                <a href="user-profile.html" class="author">hamilton</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">python</a>
                                                <a href="#" class="tag-link">code</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">People are no longer able to tell AI art from non-AI art. And artists no longer disclose that they've used AI</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Dec 2 '19 at 17:23 </span>
                                                <a href="user-profile.html" class="author">Braiam</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Artificial Intelligence</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">why don’t car manufacturers make cars look like they used to back in the 60s to 80s?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Jan 2 '20 at 7:23</span>
                                                <a href="user-profile.html" class="author">Ajay Patidar</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Cars</a>
                                                <a href="#" class="tag-link">Vintage</a>
                                                <a href="#" class="tag-link">Speed</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Using web3 to call precompile contract</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Meow Meow</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">css</a>
                                                <a href="#" class="tag-link">bootstrap-4</a>
                                                <a href="#" class="tag-link">grid</a>
                                                <a href="#" class="tag-link">resize</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Ambanis paid Rihanna whopping ₹74 crore to perform at the Anant-Radhika pre-wedding festivities</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Dec 2 '19 at 17:23 </span>
                                                <a href="#" class="author">Braiam</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Ambani</a>
                                                <a href="#" class="tag-link">Latest News</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">SpaceX to Deorbit 100 Starlink Satellites Due to Potential Flaw</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Jan 2 '20 at 7:23</span>
                                                <a href="#" class="author">Ajay Patidar</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">SpaceX</a>
                                                <a href="#" class="tag-link">Space</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="gaming" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="la la-gamepad mr-1 text-black" style="color: #A7C7E7;"></i>Gaming Questions</h3>

                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Cons of PC gaming. What are some honest downsides to it that gamers don’t normally talk about?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 days ago</span>
                                                <a href="user-profile.html" class="author">baka1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Pc Gamers</a>
                                                <a href="#" class="tag-link">Gaming</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">For real, what's the point of gaming phones ?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 days ago</span>
                                                <a href="user-profile.html" class="author">ardyn</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gamers</a>
                                                <a href="#" class="tag-link">Mobile Gaming</a>
                                                <a href="#" class="tag-link">Android</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Do you still have time for gaming as an adult?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Feb 2 '24 at 16:23 </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gaming</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Gaming addiction is insanely normalized in our society</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="user-profile.html" class="author">Zubic</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gaming</a>
                                                
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">What strategy or playstyle do you find most effective in DMC5 and why?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gaming</a>
                                                <a href="#" class="tag-link">Devil May Cry</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Is 4K gaming actually that much "better" quality than 1080p?                                            </a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Few min ago </span>
                                                <a href="#" class="author">Crane</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gaming</a>
                                                <a href="#" class="tag-link">4K</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Has anyone completed blood of the dead easter egg?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Jan 7 '24 at 7:23</span>
                                                <a href="#" class="author">Yadav</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gaming</a>
                                                <a href="#" class="tag-link">COD</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="Sports" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="fa fa-line-chart mr-1 text-black" style="color: #A7C7E7;"></i>Sports Questions</h3>
                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Chelsea Footballer Sam Kerr charged with racially aggravated harassment of London police officer</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">4 hr ago</span>
                                                <a href="user-profile.html" class="author">ron1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Football</a>
                                                <a href="#" class="tag-link">EPL</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Michigan Wolverines football legend Braylon Edwards rescues 80-year-old during Farmington Hills locker room attack</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 days ago</span>
                                                <a href="user-profile.html" class="author">messi45</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Football</a>
                                                <a href="#" class="tag-link">Rescue</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Phillies, Zack Wheeler ink 3-year deal reportedly worth $126M</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">12 hr ago </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Baseball</a>
                                                <a href="#" class="tag-link">Sports</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Lyles helps U.S. to world indoor 4x400 podium in possible Paris preview</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 day ago</span>
                                                <a href="user-profile.html" class="author">ayefantasia</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Track and Field</a>
                                                <a href="#" class="tag-link">Sports</a>
                                                
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">LAFC snow game vs. Real Salt Lake called 'absolute joke,' 'disgrace' by losing head coach</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Football</a>
                                                <a href="#" class="tag-link">Sports</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">NASCAR fined Joey Logano for wearing webbed glove in Atlanta</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago </span>
                                                <a href="#" class="author">PrincessBananas85</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Motorsports</a>
                                                <a href="#" class="tag-link">Sports</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Jason Saab with the intercept in Las Vegas</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">Mar 5 '24 at 7:23</span>
                                                <a href="#" class="author">jeuatreize</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Rugby</a>
                                                <a href="#" class="tag-link">Sports</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="Business" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="la la-business-time mr-1 text-black" style="color: #A7C7E7;"></i>Business Questions</h3>

                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Apple hit with more than $1.95 billion EU antitrust fine over music streaming</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">16 hr ago</span>
                                                <a href="user-profile.html" class="author">ron1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Apple</a>
                                                <a href="#" class="tag-link">Business</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">American Express credit cards exposed in vendor data breach</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">14 hr ago</span>
                                                <a href="user-profile.html" class="author">Next-Particular1476</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Finance</a>
                                                <a href="#" class="tag-link">Business</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">How has sustainability impacted your business?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">17 hr ago </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Business</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">US SEC probes whether OpenAI investors were misled, WSJ reports</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 day ago</span>
                                                <a href="user-profile.html" class="author">ayefantasia</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Open AI</a>
                                                <a href="#" class="tag-link">Business</a>
                                                
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Why Wall Street is looking at shorting the Canadian housing market as a hedge strategy</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">5 days ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Wall Street</a>
                                                <a href="#" class="tag-link">Business</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Spotify wins as EU orders Apple to pay $2B and change App Store rules</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago </span>
                                                <a href="#" class="author">sportman45</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Apple</a>
                                                <a href="#" class="tag-link">Spotify</a>
                                                <a href="#" class="tag-link">Business</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">New business idea, where to begin?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">12 hr ago</span>
                                                <a href="#" class="author">BritishDucksGoQuack</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Business</a>
                                                

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="Crypto" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="fa fa-bitcoin mr-1 text-black" style="color: #A7C7E7;"></i>Cryptocurrency Questions</h3>

                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Bitcoin close to hitting $67k - just $2k from record high as baby boomers continue to fuel surge</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">18 hr ago</span>
                                                <a href="user-profile.html" class="author">ron1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Bitcoin</a>
                                                <a href="#" class="tag-link">Business</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">So is nobody going to address what’s currently going on with Coinbase?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">9 hr ago</span>
                                                <a href="user-profile.html" class="author">Next-Particular1476</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Finance</a>
                                                <a href="#" class="tag-link">Crypto</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Founders of $400 Million Cryptocurrency Ponzi Scheme Arrested in Argentina</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">17 hr ago </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Cryptocurrency</a>
                                                <a href="#" class="tag-link">Business</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">What is the best onchain governance system?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 day ago</span>
                                                <a href="user-profile.html" class="author">ayefantasia</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Cryptocurrency</a>
                                    
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Indonesia's Crypto Sector: Evolving Taxation Strategies and Regulatory Outlook</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">News</a>
                                                <a href="#" class="tag-link">Cryptocurrency</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">58 World Currencies Are Above Their 2021 Bitcoin ATH</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago </span>
                                                <a href="#" class="author">sportman45</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Cryptocurrency</a>
                                                <a href="#" class="tag-link">Analysis</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Why are UK banks so against crypto ?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">4 days ago</span>
                                                <a href="#" class="author">BritishDucksGoQuack</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Cryptocurrency</a>
                                                

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="Programming" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="fa fa-code mr-1 text-black" style="color: #A7C7E7;"></i>Programming Questions</h3>

                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Awesome Python Tricks That Make Your Code More Elegant</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 hr ago</span>
                                                <a href="user-profile.html" class="author">ron1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Python</a>
                                                <a href="#" class="tag-link">Programming</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Reverse Engineering Protobuf Definitions From Compiled Binaries</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">16 hr ago</span>
                                                <a href="user-profile.html" class="author">Next-Particular1476</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Engineering</a>
                                                <a href="#" class="tag-link">Programming</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">JavaScript Runs the World</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">17 hr ago </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">JavaScript</a>
                                                <a href="#" class="tag-link">Programming</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Improving Network Performance with Linux Flowtables</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 day ago</span>
                                                <a href="user-profile.html" class="author">ayefantasia</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Programming</a>
                                                <a href="#" class="tag-link">Linux</a>
                                    
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Comparing Postgres Managed Services: AWS, Azure, GCP and Supabase</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Programming</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Top 50 React Interview Questions — Interviews Guide</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago </span>
                                                <a href="#" class="author">sportman45</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">reactjs</a>
                                                <a href="#" class="tag-link">Programming</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Email Verification using JavaScript(Node.js and Nodemailer)</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">4 days ago</span>
                                                <a href="#" class="author">BritishDucksGoQuack</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Programming</a>
                                                <a href="#" class="tag-link">Nodejs</a>

                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="AI" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="la la-robot mr-1 text-black" style="color: #A7C7E7;"></i>Artificial Intelligence Questions</h3>

                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Google apologizes to India over Gemini’s results on PM Modi, calls its own AI platform ‘unreliable’</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 hr ago</span>
                                                <a href="user-profile.html" class="author">ron1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Google</a>
                                                <a href="#" class="tag-link">Artificial Intelligence</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">The most interesting part about Elon's Law Suit Against OpenAI and Sama</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">16 hr ago</span>
                                                <a href="user-profile.html" class="author">Next-Particular1476</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Open AI</a>
                                                <a href="#" class="tag-link">Artificial Intelligence</a>
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Claude 3 Opus told me that the inventors of the USB connector have killed as many as who died in Hiroshima</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">17 hr ago </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Discussion</a>
                                                <a href="#" class="tag-link">Artificial Intelligence</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Anthropic Claims Its New AI Chabot Models Beat Openai’s GPT-4</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">8 hr ago</span>
                                                <a href="user-profile.html" class="author">ayefantasia</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Open AI</a>
                                                <a href="#" class="tag-link">Chatbot</a>
                                    
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Tim Cook Says Apple Will ‘Break New Ground’ in GenAI in 2024</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Apple</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Google, OpenAI and Microsoft are the past, and Meta is the future, of AI</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">2 days ago </span>
                                                <a href="#" class="author">sportman45</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">FAANG</a>
                                                <a href="#" class="tag-link">Artificial Intelligence</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="Anime" role="tabpanel" aria-labelledby="questions-tab">
                            <div class="filters d-flex align-items-center justify-content-between pb-4">
                                <h3 class="fs-17 fw-medium" style="color: #A7C7E7;"><i class="la la-television mr-1 text-black" style="color: #A7C7E7;"></i>Anime Questions</h3>

                                
                            </div><!-- end filters -->
                            <div class="question-main-bar">
                                <div class="questions-snippet">
                                    
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Jujutsu Kaisen Season 2 Episode 17 will have revised cuts and additional scenes in it's Blu-ray/DVD release and it will be screened in theaters.</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">3 hr ago</span>
                                                <a href="user-profile.html" class="author">ron1982</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Jujutsu Kaisen</a>
                                                <a href="#" class="tag-link">Anime</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Seeking Anime Recommendations: Comedy with a Dash of Brutality like Overlord and The Eminence in Shadow</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">16 hr ago</span>
                                                <a href="user-profile.html" class="author">Next-Particular1476</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Anime</a>
                                               
                                               
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">suggest anime like highschool dxd</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">17 hr ago </span>
                                                <a href="user-profile.html" class="author">GhostSpider</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Anime</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes answered-accepted">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">-3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Gintama on Theater 2D: Courtesan of a Nation Arc New Visual</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">8 hr ago</span>
                                                <a href="user-profile.html" class="author">ayefantasia</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Gintama</a>
                                                <a href="#" class="tag-link">Anime</a>
                                    
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Bleach v. Mob Psycho, what to watch?</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago</span>
                                                <a href="#" class="author">Noctis</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Anime</a>
                                                
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                   
                                   
                                    <div class="media media-card media--card align-items-center">
                                        <div class="votes">
                                            <div class="vote-block d-flex align-items-center justify-content-between" title="Votes">
                                                <span class="vote-counts">3</span>
                                                <span class="vote-icon"></span>
                                            </div>
                                            <div class="answer-block d-flex align-items-center justify-content-between" title="Answers">
                                                <span class="vote-counts">1</span>
                                                <span class="answer-icon"></span>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5><a href="post-user.php">Megathread - Blue Lock 253 - Leaks/Raws/Discussion</a></h5>
                                            <small class="meta">
                                                <span class="pr-1">1 day ago </span>
                                                <a href="#" class="author">sportman45</a>
                                            </small>
                                            <div class="tags">
                                                <a href="#" class="tag-link">Blue Lock</a>
                                                <a href="#" class="tag-link">Anime</a>
                                                
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    
                                </div><!-- end questions-snippet -->
                                
                            </div><!-- end question-main-bar -->
                        </div><!-- end tab-pane -->
                        
                        <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                           
                            <div class="jobs-main-bar">
                                <div class="jobs-snippet">
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">React Native Engineer at sustainable mobility Start-up (m/f/x)</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>20 mins ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">£30k - 50k</span>
                                                <span class="pr-1 text-success">| Equity</span>
                                                <span class="pr-1 text-danger">Visa sponsor</span>
                                                <span class="text-info">Paid relocation</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Front-End Engineer (Remote)</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">€60k - 70k</span>
                                                <span class="pr-1 text-warning">Remote</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">html5</a>
                                                <a href="#" class="tag-link">css</a>
                                                <a href="#" class="tag-link">angular</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Senior Java Web Developer</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>5d ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-danger">Visa sponsor</span>
                                                <span class="pl-1 text-info">Paid relocation</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Software Engineer, Full Stack</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>3w ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-danger">Visa sponsor</span>
                                                <span class="text-info">Paid relocation</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Senior Full-Stack (PHP, Node, React) Engineer (Remote)</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-warning">Remote</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Join G2i as a 100% Remote React Engineer (Native or Web) | Fully Remote Position</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-warning">Remote</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">React Native Developer</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-danger"> Visa sponsor</span>
                                                <span class="text-info">Paid relocation</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Software Engineer - Fullstack</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-danger">Visa sponsor</span>
                                                <span class="text-info">Paid relocation</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">PHP & MySQL & HTML/CSS & JS Developers</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-danger">Visa sponsor</span>
                                                <span class="text-info">Paid relocation</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                    <div class="media media-card media--card align-items-center">
                                        <div class="media-body border-left-0">
                                            <h5 class="pb-1"><a href="career-details.html">Web Developer (m/w/d) Magento/Shopware - REMOTE</a></h5>
                                            <small class="meta d-block lh-20 pb-1">
                                                <a href="company-details.html" class="author">Fintech Firm</a>
                                                <span class="px-1">-</span>
                                                <span>Amsterdam, Netherlands</span>
                                                <span class="px-1">-</span>
                                                <span>1 hour ago</span>
                                            </small>
                                            <small class="meta d-block lh-20">
                                                <span class="pr-1 text-success fw-medium">$25k - 65k</span>
                                                <span class="pr-1 text-warning">Remote</span>
                                            </small>
                                            <div class="tags pt-2">
                                                <a href="#" class="tag-link">javascript</a>
                                                <a href="#" class="tag-link">react-native</a>
                                                <a href="#" class="tag-link">typescript</a>
                                                <a href="#" class="tag-link">node.js</a>
                                            </div>
                                        </div>
                                    </div><!-- end media -->
                                </div><!-- end jobs-snippet -->
                                <div class="pager d-flex flex-wrap align-items-center justify-content-between pt-30px pb-20px">
                                    <div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination generic-pagination pr-1">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <p class="fs-13 pt-3">Showing 1-10 results of 1,577 jobs</p>
                                    </div>
                                    <div class="filter-option-box w-20">
                                        <select class="select-container">
                                            <option selected="" value="10">10 per page</option>
                                            <option value="20">20 per page</option>
                                            <option value="30">30 per page</option>
                                            <option value="40">40 per page</option>
                                            <option value="50">50 per page</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="related-links pb-4">
                                    <div class="related-links-item fs-13 lh-18 mb-1">
                                        <span class="text-black fw-medium pr-1">Popular Searches:</span>
                                        <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">javascript developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">postgresql developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">node.js developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">c# developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">reactjs developer jobs</a></li>
                                        </ul>
                                    </div><!-- end related-links-item -->
                                    <div class="related-links-item fs-13 lh-18 mb-1">
                                        <span class="text-black fw-medium pr-1">Experience Level:</span>
                                        <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Student developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Junior developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Senior developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Lead developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Manager developer jobs</a></li>
                                        </ul>
                                    </div><!-- end related-links-item -->
                                    <div class="related-links-item fs-13 lh-18 mb-1">
                                        <span class="text-black fw-medium pr-1">Top Cities:</span>
                                        <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in Munich, Germany</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in Barcelona, Spain</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in New York, NY</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">Developer jobs in Hamburg, Germany</a></li>
                                        </ul>
                                    </div><!-- end related-links-item -->
                                    <div class="related-links-item fs-13 lh-18">
                                        <span class="text-black fw-medium pr-1">Top Technologies:</span>
                                        <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-inline">
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">sql developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">android developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">typescript developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">react-native developer jobs</a></li>
                                            <li class="lh-18 mb-1 d-inline-block"><a href="#" class="hover-underline">rust developer jobs</a></li>
                                        </ul>
                                    </div><!-- end related-links-item -->
                                </div><!-- end related-links -->
                            </div><!-- end jobs-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="tags" role="tabpanel" aria-labelledby="tags-tab">
                            <div class="filters pb-4">
                                <h3 class="fs-17 fw-medium pb-2">Tags</h3>
                                <p class="fs-15 lh-24 pb-4">A tag is a keyword or label that categorizes your question with other, similar questions.
                                    Using the right tags makes it easier for others to find and answer your question.
                                </p>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <form method="post" class="flex-grow-1 mr-3">
                                        <div class="form-group mb-0">
                                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter by tag name...">
                                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                    <div class="filter-option-box w-20">
                                        <select class="select-container mt-2">
                                            <option value="popular" selected="selected">Popular</option>
                                            <option value="name">Name</option>
                                            <option value="new">New</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end filters -->
                            <div class="tags-main-bar">
                                <div class="tags-snippet">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">javascript</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        For questions regarding programming in ECMAScript (JavaScript/JS) and its various dialects/implementations (excluding ActionScript). Please include all relevant tags on your question; e.g., [node.js],…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">java</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a high-level programming language. Use this tag when you're having problems using or understanding the language itself. This tag is rarely used alone and is most often used in conjunction with…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">python</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a multi-paradigm, dynamically typed, multipurpose programming language. It is designed to be quick to learn, understand, and use, and enforce a clean and uniform syntax. Please note that Pyt…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">c#</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a high level, statically typed, multi-paradigm programming language developed by Microsoft. C# code usually targets Microsoft's .NET family of tools and run-times, which…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">php</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a widely used, high-level, dynamic, object-oriented, and interpreted scripting language primarily designed for server-side web development. Used for questions about the PHP language.
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">android</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        Google's mobile operating system, used for programming or developing digital devices (Smartphones, Tablets, Automobiles, TVs, Wear, Glass, IoT). For topics related to Android, use Android-s…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">html</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        the markup language for creating web pages and other information to be displayed in a web browser. Questions regarding HTML should include a minimal reproducible ex…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">jquery</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a JavaScript library, consider also adding the JavaScript tag. jQuery is a popular cross-browser JavaScript library that facilitates Document Object Model (DOM) traversal, event handling…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">c++</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a general-purpose programming language. It was originally designed as an extension to C and has a similar syntax, but it is now a completely different language. Use this tag for questions about…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="card card-item">
                                                <div class="card-body">
                                                    <div class="tags pb-1">
                                                        <a href="#" class="tag-link tag-link-md tag-link-blue">css</a>
                                                    </div>
                                                    <p class="card-text fs-14 truncate-4 lh-24 text-black-50">
                                                        a representation style sheet language used for describing the look and formatting of HTML (HyperText Markup Language), XML (Extensible Markup Language) documents and SV…
                                                    </p>
                                                    <div class="d-flex tags-info fs-14 pt-3 border-top border-top-gray mt-3">
                                                        <p class="pr-1 lh-18">2177849 questions</p>
                                                        <p class="lh-18">901 asked today, 5319 this week</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                </div><!-- end tags-snippet -->
                                <div class="pager d-flex align-items-center justify-content-between pt-10px pb-30px">
                                    <div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination generic-pagination pr-1">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="la la-arrow-left"></i></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="la la-arrow-right"></i></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <p class="fs-13 pt-3">Showing 1-10 results of 50,577 tags</p>
                                    </div>
                                    <div class="filter-option-box w-20">
                                        <select class="select-container">
                                            <option selected="" value="10">10 per page</option>
                                            <option value="20">20 per page</option>
                                            <option value="30">30 per page</option>
                                            <option value="40">40 per page</option>
                                            <option value="50">50 per page</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end tags-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
                            <div class="filters pb-4">
                                <h3 class="fs-17 fw-medium pb-4">Users</h3>
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <form method="post" class="flex-grow-1 mr-3">
                                        <div class="form-group mb-0">
                                            <input class="form-control form--control form-control-sm h-auto lh-34" type="text" name="search" placeholder="Filter by user...">
                                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                    <div class="filter-option-box w-20 mt-2">
                                        <select class="select-container">
                                            <option value="reputation" selected="selected">Reputation</option>
                                            <option value="new-users">New users</option>
                                            <option value="voters">Voters</option>
                                            <option value="editors">Editors</option>
                                            <option value="moderators">Moderators</option>
                                        </select>
                                    </div>
                                </div>
                            </div><!-- end filters -->
                            <div class="users-main-bar">
                                <div class="users-snippet">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Sector labs</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo2.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Barmar</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">CertainPerformance</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo2.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">mck</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo3.jpg" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">LoicTheAztec</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo4.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Günter Zöchbauer</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Suragch</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo2.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Martijn Pieters</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo3.jpg" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Frank van Puffelen</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo4.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Igor Goyda</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Sector labs</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo2.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Barmar</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">CertainPerformance</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo2.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">mck</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo3.jpg" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">LoicTheAztec</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo4.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Günter Zöchbauer</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Suragch</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo2.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Martijn Pieters</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo3.jpg" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Frank van Puffelen</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                        <div class="col-lg-6">
                                            <div class="media media-card p-3">
                                                <a href="#" class="media-img d-inline-block">
                                                    <img src="images/company-logo4.png" alt="company logo">
                                                </a>
                                                <div class="media-body">
                                                    <h5 class="fs-16 fw-medium"><a href="user-profile.html">Igor Goyda</a></h5>
                                                    <small class="meta d-block lh-24 pb-1"><span>New York, United States</span></small>
                                                    <p class="fw-medium fs-15 text-black-50 lh-18">1,200</p>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                        </div><!-- end col-lg-6 -->
                                    </div><!-- end row -->
                                </div><!-- end users-snippet -->
                               
                            </div><!-- end users-main-bar -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="badges" role="tabpanel" aria-labelledby="badges-tab">
                            <div class="filters pb-4">
                                <h3 class="fs-17 fw-medium pb-2">Badges</h3>
                                <p class="fs-15 lh-24 pb-4">Besides gaining reputation with your questions and answers, you receive badges for being especially helpful. Badges appears on your profile page, questions & answers.</p>
                                <div class="filter-option-box w-20">
                                    <select class="select-container">
                                        <option value="all" selected="selected">All</option>
                                        <option value="bronze">Bronze</option>
                                        <option value="silver">Silver</option>
                                        <option value="gold">Gold</option>
                                    </select>
                                </div>
                            </div><!-- end filters -->
                            <div class="badges-main-bar">
                                <div class="badges-snippet">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Altruist</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">First bounty you manually award on another person's question</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Analytical</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>43587</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Visited every section of the FAQ</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Announcer</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>227641</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Share a link to a post later visited by 25 unique IP addresses</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Archaeologist</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>2514</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Edit 100 posts that were inactive for 6 months</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Autobiographer</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>1367031</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Complete "About Me" section of user profile</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Benefactor</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>48793</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">First bounty you manually award on your own question</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Beta</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Voted 10 times, added 3 posts score > 0, and visited the site on 3 separate days during the private beta</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Booster</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Share a link to a post later visited by 300 unique IP addresses</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Census</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Completed the annual Disilab survey; your responses are anonymous</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Citizen Patrol</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">First flagged post</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Civic Duty</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Vote 300 or more times</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Cleanup</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">First rollback</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Commentator</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Leave 10 comments</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-3"></span> Constable</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>0</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Served as a pro-tem moderator for at least 1 year or through site graduation</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-3"></span> Copy Editor</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Edit 500 posts (excluding own or deleted posts and tag edits)</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Critic</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">First down vote</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Curious</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Ask a well-received question on 5 separate days, and maintain a positive question record</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Deputy</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Raise 80 helpful flags</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Disciplined</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Delete own post with score of 3 or higher</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Documentation Beta</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Contributed 3+ substantive pieces of documentation during the private beta</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Documentation Pioneer</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Contributed 3+ substantive pieces of documentation in the first month of documentation</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Editor</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">First edit</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Favorite Question</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Question bookmarked by 25 users</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4">
                                            <div class="card card-item">
                                                <div class="card-body p-3">
                                                    <div class="badge-item">
                                                        <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Generalist</a>
                                                        <span class="item-multiplier fs-13 fw-medium">
                                                            <span>×</span>
                                                            <span>32924</span>
                                                        </span>
                                                        <p class="fs-13 lh-18 pt-2 text-black-50">Provide non-wiki answers of 15 total score in 20 of top 40 tags</p>
                                                    </div>
                                                </div><!-- end card-body -->
                                            </div><!-- end card -->
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12 pb-40px">
                                            <div class="collapse" id="collapseMoreBadges">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Good Answer</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Answer score of 25 or more</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Good Question</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Question score of 25 or more</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Guru</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Accepted answer and score of 40 or more</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Scholar</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Ask a question and accept an answer</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Self-Learner</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Answer your own question with score of 3 or more</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Sportsmanship</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Up vote 100 answers on questions where an answer of yours has a positive score</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-3"></span> Stellar Question</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Question bookmarked by 100 users</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Student</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">First question with score of 1 or more</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Supporter</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">First up vote</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Tag Editor</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">First tag wiki edit</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Taxonomist</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Create a tag used by 50 questions</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Teacher</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Answer a question with score of 1 or more</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Tenacious</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Zero score accepted answers: more than 5 and 20% of total</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Tumbleweed</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Asked a question with zero score, no answers, no comments, and low views for a week</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball"></span> Vox Populi</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Use the maximum 40 votes in a day</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <div class="card card-item">
                                                            <div class="card-body p-3">
                                                                <div class="badge-item">
                                                                    <a href="#" class="badge badge-md badge-dark d-inline-flex align-items-center"><span class="ball bg-gray"></span> Yearling</a>
                                                                    <span class="item-multiplier fs-13 fw-medium">
                                                                        <span>×</span>
                                                                        <span>32924</span>
                                                                    </span>
                                                                    <p class="fs-13 lh-18 pt-2 text-black-50">Active member for a year, earning at least 200 reputation</p>
                                                                </div>
                                                            </div><!-- end card-body -->
                                                        </div><!-- end card -->
                                                    </div><!-- end col-lg-4 -->
                                                </div>
                                            </div>
                                            <a class="collapse-btn btn theme-btn theme-btn-sm text-white w-100" data-toggle="collapse" href="#collapseMoreBadges" role="button" aria-expanded="false" aria-controls="collapseMoreBadges">
                                                <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                                <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                            </a>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                                </div><!-- end badges-snippet -->
                            </div><!-- end badges-main-bar -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end question-tabs -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-3">
                <div class="sidebar">
                    <div class="card card-item" style="background-color: #06081f; color: #A7C7E7; box-shadow: 0 0 5px #A7C7E7;">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Number Achievement</h3>
                            <div class="divider"><span></span></div>
                            <div class="row no-gutters text-center">
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color">980k</span>
                                        <p class="fs-14">Questions</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-2">610k</span>
                                        <p class="fs-14">Answers</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-3">650k</span>
                                        <p class="fs-14">Answer accepted</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-6 responsive-column-half">
                                    <div class="icon-box pt-3">
                                        <span class="fs-20 fw-bold text-color-4">320k</span>
                                        <p class="fs-14">Users</p>
                                    </div><!-- end icon-box -->
                                </div><!-- end col-lg-6 -->
                                <div class="col-lg-12 pt-3">
                                    <p class="fs-14">To get answer of question <a href="signup.html" class="text-color hover-underline">Join<i class="la la-arrow-right ml-1"></i></a></p>
                                </div>
                            </div><!-- end row -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item" style="background-color: #06081f; color: #A7C7E7; box-shadow: 0 0 5px #A7C7E7;">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Related Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="post-user.php">Using web3 to call precompile contract</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="post-user.php">Is it true while finding Time Complexity of the algorithm [closed]</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="post-user.php">image picker and store them into firebase with flutter</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item" style="background-color: #06081f; color: #A7C7E7; box-shadow: 0 0 5px #A7C7E7;">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Questions</h3>
                            <div class="divider"><span></span></div>
                            <div class="sidebar-questions pt-3">
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="post-user.php">How did chickenpox get its name?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">2 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Sudhir Kumbhare</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="post-user.php">How can you cut an onion without crying?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">48 mins ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">wimax</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                                <div class="media media-card media--card media--card-2">
                                    <div class="media-body">
                                        <h5><a href="post-user.php">Does flu vaccine protect against Coronavirus?</a></h5>
                                        <small class="meta">
                                            <span class="pr-1">1 hour ago</span>
                                            <span class="pr-1">. by</span>
                                            <a href="#" class="author">Antonin gavrel</a>
                                        </small>
                                    </div>
                                </div><!-- end media -->
                            </div><!-- end sidebar-questions -->
                        </div>
                    </div><!-- end card -->
                    <div class="card card-item" style="background-color: #06081f; color: #A7C7E7; box-shadow: 0 0 5px #A7C7E7;">
                        <div class="card-body">
                            <h3 class="fs-17 pb-3">Trending Tags</h3>
                            <div class="divider"><span></span></div>
                            <div class="tags pt-4">
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">analytics</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">computer</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">python</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">javascript</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="tag-item">
                                    <a href="#" class="tag-link tag-link-md">c#</a>
                                    <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                </div><!-- end tag-item -->
                                <div class="collapse" id="showMoreTags">
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">java</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">swift</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">html</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">angular</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">flutter</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                    <div class="tag-item">
                                        <a href="#" class="tag-link tag-link-md">machine-language</a>
                                        <span class="item-multiplier fs-13">
                                    <span>×</span>
                                    <span>32924</span>
                                </span>
                                    </div><!-- end tag-item -->
                                </div><!-- end collapse -->
                                <a class="collapse-btn fs-13" data-toggle="collapse" href="#showMoreTags" role="button" aria-expanded="false" aria-controls="showMoreTags">
                                    <span class="collapse-btn-hide">Show more<i class="la la-angle-down ml-1 fs-11"></i></span>
                                    <span class="collapse-btn-show">Show less<i class="la la-angle-up ml-1 fs-11"></i></span>
                                </a>
                            </div>
                        </div>
                    </div><!-- end card -->
                   
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end question-area -->
<!-- ================================
         END QUESTION AREA
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
                        <li><a href="contact-user.php">Support</a></li>
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
<script src="js/selectize.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>