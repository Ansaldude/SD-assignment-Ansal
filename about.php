<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/elegant-fonts.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page about-page">
 <header class="site-header">
 <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">roadrunner@gmail.com</a>
                        </div>

                        <div class="header-bar-text">
                            <p>PHONE: <span>+61643654756 / +6198464655</span></p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                    <div class="donate-btn">
                    <a href="view/register.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="index.php" rel="home"><h4><span style="color:rgb(24, 135, 252);font-weight:bold;font-size:25px;" >Road</span>Runner</h4></a>
                        </div>

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center" style="overflow:visible;">
                                <li ><a href="index.php">Home</a></li>
                                <li class="current-menu-item"><a href="about.php">About us</a></li>
                                <li><a href="view/viewcar.php">Car Schedule</a></li>

                                <li><a href="contact.php">Contact Us</a></li>
                            <li>
                                <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?=isset($_SESSION['funame']) ? $_SESSION['funame'] : 'Login'?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php if (!isset($_SESSION['funame'])): ?>
                                    <a class="dropdown-item px-3" href="view/admin.php">Login Admin</a>
                                    <a class="dropdown-item px-3" href="view/loginuser.php">Login User</a>
                                    <?php else: ?>
                                    <a class="dropdown-item px-3" href="view/book.php">Order History</a>
                                    <a class="dropdown-item px-3" href="logout.php">Logout</a>
                                    <?php endif;?>
                                </div>
                                </div>
                                </li>

                        </ul>
                    </nav>
                    <div class="hamburger-menu d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Welcome to Road Runner</h2>
                        </header>

                        <div class="entry-content mt-5">
                        <p>Welcome to Road Runner, where convenience meets quality in the world of transportation. As a leading player in the car booking industry, we take pride in offering seamless, reliable, and customer-centric solutions that redefine your travel experience.</p> 
                         </div>

                        <div class="entry-footer mt-5">
                            <a href="#" class="btn gradient-bg mr-2">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="img/34.jpg" alt="welcome">
                </div>
            </div>
        </div>
    </div>
    <div class="help-us">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <h2>Connect to us through this.</h2>

                    <a class="btn orange-border" href="contact.php">Contact US</a>
                </div>
            </div>
        </div>
    </div>
   

    <div class="about-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="testimonial-cont">
                        <div class="entry-content">
                        <p>"From the seamless ticketing process to the incredible atmosphere, it was a night to remember. Can't wait for the next one!"</p>
                             </div>

                        <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                            <img src="img/testimonial-1.jpg" alt="">

                            <h4>Priya Raut,<span>Itahari, Nepal</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
                    <div class="testimonial-cont">
                        <div class="entry-content">
                        <p>"The customer service at Road Runner is unparalleled. They went above and beyond to assist me with my issue, and their response time was impressive. Thank you for the exceptional service!" </p>
                            </div>

                        <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                            <img src="img/testimonial-2.jpg" alt="">

                            <h4>Kevin Sharma,<span>Kathmandu,Nepal</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                        <h4><span style="color:rgb(24, 135, 252);font-weight:bold;font-size:25px;" >Road</span>Runner</h4>

                        <p>At Road Runner, our mission is to provide a hassle-free and efficient way for individuals and businesses to access transportation services. We strive to empower our customers with the freedom to move, explore, and reach their destinations with utmost ease. </p>
                      
                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Polticy</a></li>
                            <li><a href="view/feedback.php">Feeedback</a></li>
                            <li><a href="faq.php">Frequently Asked Questions</a></li>
                            <li><a href="#">Blogs & Articles</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Our Services</h2>

                            <ul>
                                <li>                                 Easy ticketing
                                </li>

                                <li>
                                  Online Booking
                                </li>

                                <li>
                                  Secure Payment
                                </li>
                                
                                <li>
                                  Secure website
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Customer Support</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+6145678945</span></li>
                                <li><i class="fa fa-envelope"></i><span>roadrunner@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Sinamangal,Kathmandu-08, Nepal</span></li>
                            </ul>
                        </div>

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <!-- <script type='text/javascript' src='js/custom.js'></script> -->

    <script>
        $(function() {
            // $('.dropdown-toggle').on('click', function($) {
            //     alert('eyea')
            // });
        });
    </script>

</body>
</html>
