<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.php  22 Nov 2019 10:03:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New View Eyewear Shop</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="New View Eyewear Shop">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/fabicon.png">
   
    <meta name="apple-mobile-web-app-title" content="plug">
    <meta name="application-name" content="plug">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .cart-count{
            background-color: #12b48b  !important;        
        }
        .menu li:hover>a, .menu li.show>a, .menu li.active>a{
            color: #204066 !important;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
    <?php include('nav.php'); ?>

       <iframe src="about-body.php" width="100%" height=2300px; class="about-frame"></iframe>

       <footer class="footer" style="background-color: #204066; color: white;">
        <div class="footer-middle border-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="widget widget-about">
                            <img src="assets/images/logo-new.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                            <p style="color: white;"> New View Eyewear Shop has emerged as a household name when it comes to buying eyeglasses and sunglasses online for men, women and kids. For years. </p>

                            <div class="social-icons">
                                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </div><!-- End .soial-icons -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title" style="color: white !important;">Useful Links</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.php">About New View Eyewear</a></li>
                                <li><a href="#">How to shop on New View Eyewear</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a href="login.php">Log in</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title"style="color: white !important;">Customer Service</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Payment Methods</a></li>
                                <li><a href="#">Money-back guarantee!</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Terms and conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="widget">
                            <h4 class="widget-title"style="color: white !important;">My Account</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="login.php">Sign In</a></li>
                                <li><a href="cart.php">View Cart</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .footer-middle -->

        <div class="footer-bottom" >
            <div class="container">
                <p class="footer-copyright"style="color: white !important;">Copyright © 2019 New View Eyewear. All Rights Reserved.</p><!-- End .footer-copyright -->
                <figure class="footer-payments">
                    <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
                </figure><!-- End .footer-payments -->
            </div><!-- End .container -->
        </div><!-- End .footer-bottom -->
    </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container" style="background-color: rgba(32,64,102,255);">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" style="background-color: #12b48b;" type="submit"><i class="icon-search"></i></button>
            </form>
            
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li >
                        <a href="index.php">Home</a>

                 
                    </li>
                    <li>
                        <a href="frames-offer.php">Frames We Offer</a>
                  
                    </li>
                    <li>
                        <a href="shop-page.php" class="sf-with-ul">Shellee 's Spectacles Shop</a>
                 
                    </li>
                    <li class="active">
                        <a href="about.php" class="sf-with-ul">About Us</a>
               
                    </li>
                    <li class="">
                        <a href="contact.php" class="sf-with-ul">Contact Us</a>
                    </li>
                    <li>
                        <a href="login.php"><i class="icon-user"></i>Login</a>
                    </li>
                    
             
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>