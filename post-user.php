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
    <link rel="stylesheet" href="css/upvotejs.min.css">
    <link rel="stylesheet" href="css/selectize.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
    <style>
        a,p{
            color: #A7C7E7 !important;
        }

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
                
    </style>
</head>
<body>

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


<!-- ================================
         START QUESTION AREA
================================= -->
<section class="question-area pt-40px pb-40px" style="background-color: #06081f; color: #A7C7E7;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="question-main-bar mb-50px">
                    <div class="question-highlight">
                        <div class="media media-card shadow-none rounded-0 mb-0 bg-transparent p-0">
                            <div class="media-body">
                                <h5 class="fs-20"><a href="#">Unable to get data attribute from button element via Jquery</a></h5>
                                
                               
                            </div>
                        </div><!-- end media -->
                    </div><!-- end question-highlight -->
                    <div class="question d-flex">
                        <div class="votes votes-styled w-auto">
                            <div id="vote" class="upvotejs">
                                <a class="upvote upvote-on" data-toggle="tooltip" data-placement="right" title="This question is useful"></a>
                                <span class="count">1</span>
                                <a class="downvote" data-toggle="tooltip" data-placement="right" title="This question is not useful"></a>
                                <a class="star" data-toggle="tooltip" data-placement="right" title="Bookmark this question."></a>
                            </div>
                        </div><!-- end votes -->
                        <div class="question-post-body-wrap flex-grow-1">
                            <div class="question-post-body">
                                <p style="color: #A7C7E7;">I'm not able to get the data attribute from a button element.</p>
                                <pre class="code-block custom-scrollbar-styled">
                                <code>&lt;button
                                <span class="code-attr">class</span>=<span class="code-string">"btn btn-solid navigate"</span>
                                <span class="code-attr">value</span>=<span class="code-string">"2"</span>
                                <span class="code-attr">data-productId</span>={{$product-&gt;id}}
                                <span class="code-attr">id</span>=<span class="code-string">"size-click"</span>
                                &gt;
                                Next
                                &lt;/button&gt;
                                </code></pre>
                                                                <p>Then I attempt to get it like so:</p>
                                                                <pre class="code-block custom-scrollbar-styled">
                                <code>$(<span class="code-string">"#size-click"</span>).click(<span class="code-function">() =&gt;</span> {
                                <span class="code-keyword">let</span> width = $(<span class="code-string">"#prod-width"</span>).val();
                                <span class="code-keyword">let</span> height = $(<span class="code-string">"#prod-height"</span>).val();
                                <span class="code-keyword">var</span> prodId = $(<span class="code-built-in">this</span>).data(<span class="code-string">"productId"</span>);

                                <span class="code-built-in">console</span>.log(<span class="code-string">'this is prodId'</span>);
                                <span class="code-built-in">console</span>.log(prodId);

                                <span class="code-keyword">const</span> data = {
                                    <span class="code-attr">prodId</span>: prodId,
                                    <span class="code-attr">step</span>: <span class="code-string">'Size'</span>,
                                    <span class="code-attr">width</span>: width,
                                    <span class="code-attr">height</span>: height,
                                    }

                                    postDataEstimate(data);

                                })
                                </code></pre>
                                <p>I'm also trying this:</p>
                                <pre class="code-block custom-scrollbar-styled">
                                <code><span class="code-keyword">var</span> prodId = $(<span class="code-built-in">this</span>).attr(<span class="code-string">'data-productId'</span>);
                                </code></pre>
                                <p>Can you let me know what I'm missing?</p>
                            </div><!-- end question-post-body -->
                           
                            <div class="comments-wrap">
                                <ul class="comments-list" id="commentsList">
                                    
                                    <li>
                                       
                                    </li>
                                </ul>
                                <div class="comment-form">
                                    <div class="comment-link-wrap text-center">
                                        <a class="collapse-btn comment-link" data-toggle="collapse" href="#addCommentCollapse" role="button" aria-expanded="false" aria-controls="addCommentCollapse" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments.">Add a comment</a>
                                    </div>
                                    <div class="collapse border-top border-top-gray mt-2 pt-3" id="addCommentCollapse">
                                        <form class="row pb-3" id="commentForm">
                                            <div class="col-lg-12">
                                                <h4 class="fs-16 pb-2" style="color: #A7C7E7;">Leave a Comment</h4>
                                                <div class="divider mb-2"><span></span></div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20" style="color: #A7C7E7;">Name</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13" type="text" name="name" placeholder="Your name">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            <div class="col-lg-6">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20" style="color: #A7C7E7;">Email</label>
                                                    <div class="form-group">
                                                        <input class="form-control form--control form-control-sm fs-13" type="text" name="email" placeholder="Your email">
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-6 -->
                                            
                                            <div class="col-lg-12">
                                                <div class="input-box">
                                                    <label class="fs-13 text-black lh-20" style="color: #A7C7E7;">Message</label>
                                                    <div class="form-group">
                                                        <textarea class="form-control form--control form-control-sm fs-13" name="message" rows="5" placeholder="Your comment here..."></textarea>
                                                       
                                                    </div>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                            <div class="col-lg-12">
                                                <div class="input-box d-flex flex-wrap align-items-center justify-content-between">
                                                    
                                                    <button class="btn theme-btn theme-btn-sm theme-btn-outline theme-btn-outline-gray" type="submit">Post Comment</button>
                                                </div>
                                            </div><!-- end col-lg-12 -->
                                        </form>
                                    </div><!-- end collapse -->
                                </div>
                            </div>
                            
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Get the form and comments list
                                    var form = document.getElementById('commentForm');
                                    var commentsList = document.getElementById('commentsList');

                                    // Load existing comments from localStorage on page load
                                    loadComments();

                                    // Add submit event listener to the form
                                    form.addEventListener('submit', function(event) {
                                        // Prevent the default form submission
                                        event.preventDefault();

                                        // Extract values from form fields
                                        var name = form.querySelector('input[name="name"]').value;
                                        var message = form.querySelector('textarea[name="message"]').value;
                                        var date = new Date().toLocaleString(); // Current date and time

                                        // Create a new comment element
                                        var newComment = document.createElement('li');
                                        newComment.innerHTML = `
                                            <li>
                                                <div class="comment-actions">
                                                    <span class="comment-score">0</span>
                                                </div>
                                                <div class="comment-body">
                                                    <span class="comment-copy">${message}</span>
                                                    <span class="comment-separated">-</span>
                                                    <span class="comment-user">${name}</span>
                                                    <span class="comment-separated">-</span>
                                                    <span class="comment-date">${date}</span>
                                                </div>
                                            </li>
                                        `;

                                        // Append the new comment to the comments list
                                        commentsList.appendChild(newComment);

                                        // Save the comment to localStorage
                                        saveComment(name, message, date);

                                        // Clear form fields after submission
                                        form.reset();
                                    });

                                    // Function to save comment to localStorage
                                    function saveComment(name, message, date) {
                                        // Get existing comments from localStorage
                                        var existingComments = JSON.parse(localStorage.getItem('comments')) || [];

                                        // Add the new comment
                                        existingComments.push({ name: name, message: message, date: date });

                                        // Save updated comments to localStorage
                                        localStorage.setItem('comments', JSON.stringify(existingComments));
                                    }

                                    // Function to load existing comments from localStorage
                                    function loadComments() {
                                        // Get existing comments from localStorage
                                        var existingComments = JSON.parse(localStorage.getItem('comments')) || [];

                                        // Display existing comments
                                        existingComments.forEach(function(comment) {
                                            var newComment = document.createElement('li');
                                            newComment.innerHTML = `
                                                <li>
                                                    <div class="comment-actions">
                                                        <span class="comment-score">0</span>
                                                    </div>
                                                    <div class="comment-body">
                                                        <span class="comment-copy">${comment.message}</span>
                                                        <span class="comment-separated">-</span>
                                                        <span class="comment-user">${comment.name}</span>
                                                        <span class="comment-separated">-</span>
                                                        <span class="comment-date">${comment.date}</span>
                                                    </div>
                                                </li>
                                            `;
                                            commentsList.appendChild(newComment);
                                        });
                                    }
                                });

                            </script>
                            
                        </div><!-- end question-post-body-wrap -->
                    </div><!-- end question -->
                    <div class="subheader">
                        <div class="subheader-title">
                            <h3 class="fs-16" style="color: #A7C7E7;">Your Answer</h3>
                        </div><!-- end subheader-title -->
                    </div><!-- end subheader -->
                    <div class="answer-wrap d-flex">
                        <div class="answer-body-wrap flex-grow-1">
                            
                           <!--  <div class="answer-body">
                                <p>Since you're using an <code class="code">arrow-function</code>, <code class="code">this</code> does not refer to the <code class="code">button</code>:</p>
                                <pre class="code-block custom-scrollbar-styled">
                                <code>$(<span class="code-string">"#size-click"</span>).click(<span class="code-function"><span class="code-keyword">function</span>() </span>{
                                <span class="code-keyword">var</span> prodId = $(<span class="code-built-in">this</span>).attr(<span class="code-string">"data-productId"</span>);
                                <span class="code-built-in">console</span>.log(<span class="code-string">'this is prodId'</span>);
                                <span class="code-built-in">console</span>.log(prodId);
                                });</code></pre>
                                <pre class="code-block custom-scrollbar-styled"><code><span class="code-tag">&lt;<span class="code-name">script</span> <span class="code-attr">src</span>=<span class="code-string">"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"</span>&gt;</span><span class="code-tag">&lt;/<span class="code-name">script</span>&gt;</span>

                                <span class="code-tag">&lt;<span class="code-name">button</span>
                                <span class="code-attr">class</span>=<span class="code-string">"btn btn-solid navigate"</span>
                                <span class="code-attr">value</span>=<span class="code-string">"2"</span>
                                <span class="code-attr">data-productId</span>=<span class="code-string">"1"</span>
                                <span class="code-attr">id</span>=<span class="code-string">"size-click"</span>
                                &gt;</span>Next<span class="code-tag">&lt;/<span class="code-name">button</span>&gt;</span></code></pre>
                                                                <p>If you still want to use it, you can use the <code class="code">event</code> passed to the function:</p>
                                                                <pre class="code-block custom-scrollbar-styled"><code>$(<span class="code-string">"#size-click"</span>).click(<span class="code-function"><span class="code-params">e</span> =&gt;</span> {
                                <span class="code-keyword">var</span> prodId = $(e.currentTarget).attr(<span class="code-string">"data-productId"</span>);
                                <span class="code-built-in">console</span>.log(<span class="code-string">'this is prodId'</span>);
                                <span class="code-built-in">console</span>.log(prodId);
                                });</code></pre>
                                <pre class="code-block custom-scrollbar-styled"><code><span class="code-tag">&lt;<span class="code-name">script</span> <span class="code-attr">src</span>=<span class="code-string">"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"</span>&gt;</span><span class="code-tag">&lt;/<span class="code-name">script</span>&gt;</span>

                                <span class="code-tag">&lt;<span class="code-name">button</span>
                                <span class="code-attr">class</span>=<span class="code-string">"btn btn-solid navigate"</span>
                                <span class="code-attr">value</span>=<span class="code-string">"2"</span>
                                <span class="code-attr">data-productId</span>=<span class="code-string">"1"</span>
                                <span class="code-attr">id</span>=<span class="code-string">"size-click"</span>
                                &gt;</span>Next<span class="code-tag">&lt;/<span class="code-name">button</span>&gt;</span></code></pre>
                            </div> end answer-body -->
                           
                           
                        </div><!-- end answer-body-wrap -->
                    </div><!-- end answer-wrap -->
                   
                    <div class="post-form">
                        <form method="post" class="pt-3 post-form">
                            <div class="input-box">
                                
                                <div class="form-group" style="background-color: #A7C7E7;">
                                    <textarea class="form-control form--control form-control-sm fs-13 user-text-editor" name="message" rows="6" placeholder="Your answer here...">Your answer here...</textarea>
                                </div>
                            </div>
                            <button class="btn theme-btn theme-btn-sm" type="submit">Post Your Answer</button>
                        </form>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                // Get the form element
                                var form = document.querySelector('.post-form form');

                                // Load existing answers from localStorage on page load
                                loadAnswers();

                                // Add event listener for form submission
                                form.addEventListener('submit', function (event) {
                                    // Prevent the default form submission
                                    event.preventDefault();

                                    // Get the entered answer from the textarea
                                    var answer = form.querySelector('textarea[name="message"]').value.trim();

                                    // If the answer is empty, do not proceed
                                    if (answer === '') {
                                        return;
                                    }

                                    // Save the answer to localStorage
                                    saveAnswer(answer);

                                    // Display the answer
                                    displayAnswer(answer);

                                    // Clear the textarea
                                    form.querySelector('textarea[name="message"]').value = '';
                                });

                                // Function to format code blocks within the answer
                                function formatCodeBlocks(answer) {
                                    // Regular expression to match code blocks
                                    var codeRegex = /```[\s\S]+?```/g;

                                    // Replace code blocks with properly formatted <pre> tags
                                    var formattedAnswer = answer.replace(codeRegex, function (match) {
                                        var codeContent = match.slice(3, -3).trim(); // Remove ``` from both ends
                                        return '<pre class="code-block custom-scrollbar-styled">' + codeContent + '</pre>';
                                    });

                                    return formattedAnswer;
                                }

                                // Function to save answer to localStorage
                                function saveAnswer(answer) {
                                    // Get existing answers from localStorage
                                    var existingAnswers = JSON.parse(localStorage.getItem('answers')) || [];

                                    // Add the new answer
                                    existingAnswers.push(answer);

                                    // Save updated answers to localStorage
                                    localStorage.setItem('answers', JSON.stringify(existingAnswers));
                                }

                                // Function to load existing answers from localStorage
                                function loadAnswers() {
                                    // Get existing answers from localStorage
                                    var existingAnswers = JSON.parse(localStorage.getItem('answers')) || [];

                                    // Display existing answers
                                    existingAnswers.forEach(function (answer) {
                                        displayAnswer(answer);
                                    });
                                }

                                // Function to display answer
                                function displayAnswer(answer) {
                                    // Create the answer HTML structure
                                    var answerHTML = `
                                        <div class="answer-body">
                                            ${formatCodeBlocks(answer)}
                                        </div>
                                    `;

                                    // Get the answer body wrap element
                                    var answerBodyWrap = document.querySelector('.answer-body-wrap');

                                    // Append the answer HTML to the answer body wrap
                                    answerBodyWrap.insertAdjacentHTML('afterbegin', answerHTML);
                                }
                            });


                        </script>
                    </div>
                </div><!-- end question-main-bar -->
            </div><!-- end col-lg-9 -->
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
<script src="js/upvote.vanilla.js"></script>
<script src="js/upvote-script.js"></script>
<script src="js/selectize.min.js"></script>
<script src="js/jquery.multi-file.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>