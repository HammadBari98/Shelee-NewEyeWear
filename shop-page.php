<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- molla/about.php  22 Nov 2019 10:03:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New View Eyewear Shop "Glasses | SHOP</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="New View Eyewear Shop">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo-black.png">
    <meta name="apple-mobile-web-app-title" content="plug">
    <meta name="application-name" content="plug">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }

    body {
        background: #ffffff;
    }

    .content {
        width: 260px;
    }

    .colors {
        width: 260px;
        float: left;
        margin: 20px auto;
    }

    .colors a {
        width: 43.3px;
        height: 30px;
        float: left;
    }

    .colors .default {
        background: #ffffff;
    }

    .colors .blue {
        background: #4A89DC;
    }

    .colors .green {
        background: #03A678;
    }

    .colors .red {
        background: #ED5565;
    }

    .colors .white {
        background: #fff;
    }

    .colors .black {
        background: #ffffff;
    }

    @import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700);

    .jquery-accordion-menu,
    .jquery-accordion-menu * {
        font-family: 'Open Sans', sans-serif;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        outline: 0
    }

    .jquery-accordion-menu {
        min-width: 260px;
        float: left;
        position: relative;
    }

    .jquery-accordion-menu .jquery-accordion-menu-footer,
    .jquery-accordion-menu .jquery-accordion-menu-header {
        width: 100%;
        height: 50px;
        padding-left: 22px;
        float: left;
        line-height: 50px;
        font-weight: 600;
        color: #f0f0f0;
        background: #ffffff
    }

    .jquery-accordion-menu ul {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .jquery-accordion-menu ul li {
        width: 100%;
        display: block;
        float: left;
        position: relative
    }

    .jquery-accordion-menu ul li a {
        width: 100%;
        padding: 14px 22px;
        float: left;
        text-decoration: none;
        color: #f0f0f0;
        font-size: 13px;
        background: #414956;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
        -o-transition: color .2s linear, background .2s linear;
        -moz-transition: color .2s linear, background .2s linear;
        -webkit-transition: color .2s linear, background .2s linear;
        transition: color .2s linear, background .2s linear
    }

    .jquery-accordion-menu>ul>li.active>a,
    .jquery-accordion-menu>ul>li:hover>a {
        color: #fff;
        background: #12b48b
    }

    .jquery-accordion-menu>ul>li>a {}

    .jquery-accordion-menu ul li a i {
        width: 34px;
        float: left;
        line-height: 18px;
        font-size: 16px;
        text-align: left
    }

    .jquery-accordion-menu .submenu-indicator {
        float: right;
        right: 22px;
        position: absolute;
        line-height: 19px;
        font-size: 20px;
        -o-transition: transform .3s linear;
        -moz-transition: transform .3s linear;
        -webkit-transition: transform .3s linear;
        -ms-transition: transform .3s linear
    }

    .jquery-accordion-menu ul ul.submenu .submenu-indicator {
        line-height: 16px
    }

    .jquery-accordion-menu .submenu-indicator-minus>.submenu-indicator {
        -ms-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg)
    }

    .jquery-accordion-menu ul ul.submenu,
    .jquery-accordion-menu ul ul.submenu li ul.submenu {
        width: 100%;
        display: none;
        position: static
    }

    .jquery-accordion-menu ul ul.submenu li {
        clear: both;
        width: 100%
    }

    .jquery-accordion-menu ul ul.submenu li a {
        width: 100%;
        float: left;
        font-size: 11px;
        background: #ffffff;
        border-top: none;
        position: relative;
        border-left: solid 6px transparent;
        -o-transition: border .2s linear;
        -moz-transition: border .2s linear;
        -webkit-transition: border .2s linear;
        transition: border .2s linear
    }

    .jquery-accordion-menu ul ul.submenu li:hover>a {
        border-left-color: #414956
    }

    .jquery-accordion-menu ul ul.submenu>li>a {
        padding-left: 30px
    }

    .jquery-accordion-menu ul ul.submenu>li>ul.submenu>li>a {
        padding-left: 45px
    }

    .jquery-accordion-menu ul ul.submenu>li>ul.submenu>li>ul.submenu>li>a {
        padding-left: 60px
    }

    .jquery-accordion-menu ul li .jquery-accordion-menu-label,
    .jquery-accordion-menu ul ul.submenu li .jquery-accordion-menu-label {
        min-width: 20px;
        padding: 1px 2px 1px 1px;
        position: absolute;
        right: 18px;
        top: 14px;
        font-size: 11px;
        font-weight: 800;
        color: #555;
        text-align: center;
        line-height: 18px;
        background: #f0f0f0;
        border-radius: 100%
    }

    .jquery-accordion-menu ul ul.submenu li .jquery-accordion-menu-label {
        top: 12px
    }

    .ink {
        display: block;
        position: absolute;
        background: rgba(255, 255, 255, .3);
        border-radius: 100%;
        -webkit-transform: scale(0);
        -moz-transform: scale(0);
        -ms-transform: scale(0);
        -o-transform: scale(0);
        transform: scale(0)
    }

    .animate-ink {
        -webkit-animation: ripple .5s linear;
        -moz-animation: ripple .5s linear;
        -ms-animation: ripple .5s linear;
        -o-animation: ripple .5s linear;
        animation: ripple .5s linear
    }

    @-webkit-keyframes ripple {
        100% {
            opacity: 0;
            -webkit-transform: scale(2.5)
        }
    }

    @-moz-keyframes ripple {
        100% {
            opacity: 0;
            -moz-transform: scale(2.5)
        }
    }

    @-o-keyframes ripple {
        100% {
            opacity: 0;
            -o-transform: scale(2.5)
        }
    }

    @keyframes ripple {
        100% {
            opacity: 0;
            transform: scale(2.5)
        }
    }

    .blue.jquery-accordion-menu .jquery-accordion-menu-footer,
    .blue.jquery-accordion-menu .jquery-accordion-menu-header,
    .blue.jquery-accordion-menu ul li a {
        background: #4A89DC
    }

    .blue.jquery-accordion-menu>ul>li.active>a,
    .blue.jquery-accordion-menu>ul>li:hover>a {
        background: #3e82da
    }

    .blue.jquery-accordion-menu>ul>li>a {
        border-bottom-color: #3e82da
    }

    .blue.jquery-accordion-menu ul ul.submenu li:hover>a {
        border-left-color: #3e82da
    }

    .green.jquery-accordion-menu .jquery-accordion-menu-footer,
    .green.jquery-accordion-menu .jquery-accordion-menu-header,
    .green.jquery-accordion-menu ul li a {
        background: #03A678
    }

    .green.jquery-accordion-menu>ul>li.active>a,
    .green.jquery-accordion-menu>ul>li:hover>a {
        background: #049372
    }

    .green.jquery-accordion-menu>ul>li>a {
        border-bottom-color: #049372
    }

    .green.jquery-accordion-menu ul ul.submenu li:hover>a {
        border-left-color: #049372
    }

    .red.jquery-accordion-menu .jquery-accordion-menu-footer,
    .red.jquery-accordion-menu .jquery-accordion-menu-header,
    .red.jquery-accordion-menu ul li a {
        background: #ED5565
    }

    .red.jquery-accordion-menu>ul>li.active>a,
    .red.jquery-accordion-menu>ul>li:hover>a {
        background: #DA4453
    }

    .red.jquery-accordion-menu>ul>li>a {
        border-bottom-color: #DA4453
    }

    .red.jquery-accordion-menu ul ul.submenu li:hover>a {
        border-left-color: #DA4453
    }

    .white.jquery-accordion-menu .jquery-accordion-menu-footer,
    .white.jquery-accordion-menu .jquery-accordion-menu-header,
    .white.jquery-accordion-menu ul li a {
        background: #fff;
        color: #555
    }

    .white.jquery-accordion-menu>ul>li.active>a,
    .white.jquery-accordion-menu>ul>li:hover>a {
        background: #f0f0f0
    }

    .white.jquery-accordion-menu>ul>li>a {
        border-bottom-color: #f0f0f0
    }

    .white.jquery-accordion-menu ul ul.submenu li:hover>a {
        border-left-color: #f0f0f0
    }

    .white.jquery-accordion-menu ul ul.submenu li a {
        color: #f0f0f0
    }

    .white.jquery-accordion-menu>ul>li>a>.ink {
        background: rgba(0, 0, 0, .1)
    }

    .black.jquery-accordion-menu .jquery-accordion-menu-footer,
    .black.jquery-accordion-menu .jquery-accordion-menu-header,
    .black.jquery-accordion-menu ul li a {
        background: #292929
    }

    .black.jquery-accordion-menu>ul>li.active>a,
    .black.jquery-accordion-menu>ul>li:hover>a {
        background: #222
    }

    .black.jquery-accordion-menu>ul>li>a {
        border-bottom-color: #222
    }

    .black.jquery-accordion-menu ul ul.submenu li:hover>a {
        border-left-color: #222
    }

    .jquery-accordion-menu ul li a {
        background-color: white;
        color: black;
        border-right: 1px solid black;
        border-left: 1px solid black;
        font-size: 16px !important;
    }

    .card cardaz {
        width: 130px;
        height: 195px;
        position: relative;
        display: inline-block;
        margin: 50px;
    }

    .card cardaz .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }

    .card cardaz:hover .img-top {
        display: inline;
    }

    .cart-count {
        background-color: #12b48b !important;
    }

    .menu li:hover>a,
    .menu li.show>a,
    .menu li.active>a {
        color: #204066 !important;
    }

    .custom-file-uploader {
        position: relative;


    }

    input[type='file'] {
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 5;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: default;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <?php include('nav.php'); ?>

        <main class="main">
            <h3 style="text-align: center; ">Enter Your Prescription Details</h3>

            <!-- 

            <div class="container">
                <h3>Left</h3>
                <form class="form-inline" action="/action_page.php" method="POST">
                    <div class="form-group">
                        <label for="Power">Power:</label>
                        <input type="Power" class="form-control" id="Power" placeholder="Enter Power" name="leftpower">
                    </div>
                    <div class="form-group">
                        <label for="cylinder">Cylinder:</label>
                        <input type="Cylinder" class="form-control" id="cylinder" placeholder="Enter Cylinder"
                            name="leftcylinder">
                    </div>
                    <div class="form-group">
                        <label for="Axis">Axis:</label>
                        <input type="Axis" class="form-control" id="Axis" placeholder="Enter Axis" name="leftaxis">
                    </div>
                    <div class="form-group">
                        <label for="add">Add:</label>
                        <input type="Add" class="form-control" id="add" placeholder="Enter Add" name="leftadd">
                    </div>

                </form>

                <h3>Right</h3>
                <form class="form-inline" action="/action_page.php" method="POST">
                    <div class="form-group">
                        <label for="Power">Power:</label>
                        <input type="Power" class="form-control" id="Power" placeholder="Enter Power" name="rightpower">
                    </div>
                    <div class="form-group">
                        <label for="cylinder">Cylinder:</label>
                        <input type="Cylinder" class="form-control" id="cylinder" placeholder="Enter Cylinder"
                            name="rightcylinder">
                    </div>
                    <div class="form-group">
                        <label for="Axis">Axis:</label>
                        <input type="Axis" class="form-control" id="Axis" placeholder="Enter Axis" name="rightaxis">
                    </div>
                    <div class="form-group">
                        <label for="add">Add:</label>
                        <input type="Add" class="form-control" id="add" placeholder="Enter Add" name="rightadd">
                    </div>

                </form>
            </div>
            <hr> -->
            <br>
            <div class="container opt">
                <div class="row" style="padding:30px">


                    <form action="" method="POST">


                        <h3>Left</h3>

                        <div class="form-group">
                            <label for="Power">Power:</label>
                            <input type="Power" class="form-control" id="Power" placeholder="Enter Power"
                                name="leftpower">
                        </div>
                        <div class="form-group">
                            <label for="cylinder">Cylinder:</label>
                            <input type="Cylinder" class="form-control" id="cylinder" placeholder="Enter Cylinder"
                                name="leftcylinder">
                        </div>
                        <div class="form-group">
                            <label for="Axis">Axis:</label>
                            <input type="Axis" class="form-control" id="Axis" placeholder="Enter Axis" name="leftaxis">
                        </div>
                        <div class="form-group">
                            <label for="add">Add:</label>
                            <input type="Add" class="form-control" id="add" placeholder="Enter Add" name="leftadd">
                        </div>



                        <h3>Right</h3>

                        <div class="form-group">
                            <label for="Power">Power:</label>
                            <input type="Power" class="form-control" id="Power" placeholder="Enter Power"
                                name="rightpower">
                        </div>
                        <div class="form-group">
                            <label for="cylinder">Cylinder:</label>
                            <input type="Cylinder" class="form-control" id="cylinder" placeholder="Enter Cylinder"
                                name="rightcylinder">
                        </div>
                        <div class="form-group">
                            <label for="Axis">Axis:</label>
                            <input type="Axis" class="form-control" id="Axis" placeholder="Enter Axis" name="rightaxis">
                        </div>
                        <div class="form-group">
                            <label for="add">Add:</label>
                            <input type="Add" class="form-control" id="add" placeholder="Enter Add" name="rightadd">
                        </div>


                        <?php
                                        include('connection.php');
                                        // $customer_id=$_GET['id'];
                                        
                                        $imageQuery= mysqli_query($mysqli,"SELECT * FROM cart");

                                        $gotImage = mysqli_fetch_assoc($imageQuery); 
                                        $nums = mysqli_num_rows($query);
                                        while($res=mysqli_fetch_array($query)){

                                        }
                                        ?>



                        <div class="row" style="padding:30px">
                            <div class="col-md-4 col-sm-12 col-lg-4">
                                <!-- Image -->
                                <div class="container">
                                    <img src="images/test-image.PNG" class="img-fluid">

                                    <p>* Please select a lens</p>
                                </div>
                            </div>






                            <br><br>
                            <div class="col-md-2 col-sm-12 col-lg-2">
                                <input type="checkbox" id="transistions" name="transistions" value="transition">
                                <label for="transistions"> Transitions</label><br><br>
                                <label><b>Multi Focal Lenses</b></label>
                            </div>
                            <div class="col-md-2 col-sm-12 col-lg-2">
                                <input type="checkbox" id="Thinner lens" name="thinners" value="thinner">
                                <label for="Thinner lens"> Thinner lens</label><br><br>


                                <div class="row">
                                    <div class="col-sm-7 col-md-6 col-lg-5">

                                        <div class="form-group">
                                            <label for="file" class="sr-only">File</label>
                                            <select name="multifocallense">
                                                <option value="Distance Only">Select</option>
                                                <option value="distance only">Distance Only</option>
                                                <option value="reading only">Reading Only</option>
                                                <option value="computer only">Computer Only</option>
                                                <option value="progressive only">Progressive</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="container">
                            <a href="">
                                <button name="add_to_cart" class="btn btn-primary" style="width: 100%;">continue to
                                    Check Out</button>
                            </a>
                        </div>
                    </form>




                    <?php 
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {



    // $quantity=$_POST['quantity'];

    $result= mysqli_query($mysqli,"SELECT MAX(cart_id) AS maximum FROM cart");

    $row = mysqli_fetch_assoc($result); 

    $maximum = $row['maximum'];

    echo ("This is the maximum value: $maximum");

    $leftpower=$_POST['leftpower'];
    $leftcylinder=$_POST['leftcylinder'];
    $leftaxis=$_POST['leftaxis'];
    $leftadd=$_POST['leftadd'];
    $rightpower=$_POST['rightpower'];
    $rightcylinder=$_POST['rightcylinder'];
    $rightaxis=$_POST['rightaxis'];
    $rightadd=$_POST['rightadd'];
    $transitionlens=$_POST['transistions'];
    $thinnerlense=$_POST['thinners'];
    $multifocallength=$_POST['multifocallense'];
 
    echo $transitionlens;
    echo $thinnerlense;

    $sql = "UPDATE cart SET left_power=$leftpower,left_cylinder=$leftcylinder,left_axis=$leftaxis,Left_add='$leftadd',right_power=$rightpower,right_cylinder=$rightcylinder,right_axis=$rightaxis,right_add='$rightadd',transition='$transitionlens',thinner_lens='$thinnerlense',multifocal_lens='$multifocallength' WHERE cart_id=$maximum";

    if (mysqli_query($mysqli, $sql)){

        
       ?>
                    <!-- <script>
            alert('updated preception into Cart Successfully');
            </script> -->
                    <?php
  } else {
        ?>
                    <script>
                    alert('Not Inserted into cart');
                    </script>

                    <?php
    

             } 


}
else{
    ?>


                    <?php
   
}
?>




                </div>

        </main>






        <!-- End main -->
        <br><br>

        <footer class="footer" style="background-color: #204066; color: white;">
            <div class="footer-middle border-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-about">
                                <img src="assets/images/logo-new.png" class="footer-logo" alt="Footer Logo" width="105"
                                    height="25">
                                <p style="color: white;"> New View Eyewear Shop has emerged as a household name when
                                    it comes to buying eyeglasses and sunglasses online for men, women and kids. For
                                    years. </p>

                                <div class="social-icons">
                                    <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                                            class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                                            class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                                            class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                                            class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon" target="_blank" title="Pinterest"><i
                                            class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title" style="color: white !important;">Useful Links</h4>
                                <!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.php">About New View Eyewear</a></li>
                                    <li><a href="#">How to shop on New View Eyewear</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                    <li style="list-style-type: none; font-size: 14px;">
                                        <a href="login.php">Login</a>
                                    </li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title" style="color: white !important;">Customer Service</h4>
                                <!-- End .widget-title -->

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
                                <h4 class="widget-title" style="color: white !important;">My Account</h4>
                                <!-- End .widget-title -->

                                <ul class="widget-list">
	            					<li style="list-style-type: none; font-size: 14px;"><a href="login.php" >Sign in</a></li>
	            					<li><a href="cart.php">View Cart</a></li>
	            					<li><a href="#">Track My Order</a></li>
	            					<li><a href="#">Help</a></li>
	            				</ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright" style="color: white !important;">Copyright © 2019 New View Eyewear.
                        All Rights Reserved.</p><!-- End .footer-copyright -->
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
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" style="background-color: #12b48b;" type="submit"><i
                        class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="">
                        <a href="index.php">Home</a>


                    </li>
                    <li>
                        <a href="frames-offer.php">Frames We Offer</a>

                    </li>
                    <li class="active">
                        <a href="shop-page.php" class="sf-with-ul">Shellee 's Spectacles Shop</a>

                    </li>
                    <li>
                        <a href="about.php" class="sf-with-ul">About Us</a>

                    </li>
                    <li>
                        <a href="contact.php" class="sf-with-ul">Contact Us</a>
                    </li>
                    <li>
                    <li style="list-style-type: none; font-size: 14px;">
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