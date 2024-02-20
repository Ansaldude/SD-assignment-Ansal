<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Road Runner</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/elegant-fonts.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="style.css">


</head>
<body>
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
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About us</a></li>
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

    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="img/1.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                <h2>Delivering top-notch services</h2>
						<h1>A Diverse fleet of well-maintained vehicles</h1>
						<p>Our user-friendly platform allows you to book a vehicle in just a few clicks.</p>
						
                                </header>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        

            <div class="swiper-slide hero-content-wrap">
                <img src="img/5.jpg" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div>
        </div>


        <!-- <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div> -->
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box active">
           

                            <h3 class="entry-title"><i class="fa fa-credit-card"></i>Easy ticketing</h3>

                        <div class="entry-content">
                        <p>Experience swift and secure transactions with our state-of-the-art payment system. Your data's safety is our priority, and we've implemented robust security measures for worry-free purchases.</p>
                       </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="images/donation-gray.png" alt="">
                            <img src="images/donation-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title"><i class="fa fa-thumbs-up"></i>User friendly</h3>
                        </header>

                        <div class="entry-content">
                        <p>Our user-friendly platform is designed with simplicity in mind. Finding, selecting, and purchasing tickets is a breeze, ensuring you can focus on what matters – the event itself.</p>
                          </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="images/charity-gray.png" alt="">
                            <img src="images/charity-white.png" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title"><i class="fa fa-user-secret"></i>Secure</h3>
                        </header>

                        <div class="entry-content">
                        <p>Experience swift and secure transactions with our state-of-the-art payment system. Your data's safety is our priority, and we've implemented robust security measures for worry-free purchases.</p>
                    </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Welcome to Road Runner</h2>
                        </header><!-- .entry-header -->
                        <div class="entry-content mt-5">
                        <p>Welcome to Road Runner, where convenience meets quality in the world of transportation. As a leading player in the car booking industry, we take pride in offering seamless, reliable, and customer-centric solutions that redefine your travel experience.</p> 
                           </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="#" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="img/rara.jpg" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
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
                        <h4><span style="color:rgb(24, 135, 252) ;font-weight:bold;font-size:25px;" >Road</span>Runner</h4>

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
