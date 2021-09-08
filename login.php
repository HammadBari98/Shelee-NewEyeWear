<?php session_start(); ?>
<?php ob_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- molla/about.php  22 Nov 2019 10:03:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New View Eyewear Shop | Login</title>
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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">


    <style>
    .cart-count {
        background-color: #12b48b !important;
    }

    .menu li:hover>a,
    .menu li.show>a,
    .menu li.active>a {
        color: #204066 !important;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
    <?php include('nav.php'); ?>

        <?php include('connection.php');
// session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {



  $myusername = mysqli_real_escape_string($mysqli, $_POST['email']);
  $mypassword = mysqli_real_escape_string($mysqli, $_POST['password']);

  $sql = "SELECT * FROM customers WHERE email = '$myusername' and password = '$mypassword'";

  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 $res  =$row['customer_name'];
 $customer_id =$row['customer_id'];
 $address=$row['address'];
 $cell_no=$row['customer_cell_no'];
  $count = mysqli_num_rows($result);


  if ($count == 1) {
 //  session_register("myusername");
   
 $_SESSION['login_user'] = $myusername;
   $_SESSION['login_name'] = $res;
   $_SESSION['login_id'] = $customer_id; 
   $_SESSION['login_customer_address']=$address;
   $_SESSION['login_cell_no']=$cell_no;
    echo '<script>
    alert("login successfully ");
    
    </script>';
     
   header("location:frames-offer.php");
  } else {
    //  $error = "Your Login Name or Password is invalid";
    echo '<script>
 alert("invalid name and password");
 </script>';
  }
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {


    $username = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $address = mysqli_real_escape_string($mysqli, $_POST['address']);
    $number = mysqli_real_escape_string($mysqli, $_POST['number']);
    $sql = "SELECT customer_id FROM customers WHERE email = '$username' and password = '$password'";
  
    $result = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  
    $count = mysqli_num_rows($result);
  
    

    $insertQuery = "INSERT INTO customers (customer_name,address,customer_cell_no,email,password)
    values ('$username','$address',$number,'$email','$password')";

    $queryrun = mysqli_query($mysqli, $insertQuery);

        
    if ($queryrun) {
        ?>
        <script>
        alert('registered Successfully');
        </script>
        <?php
        //   header('location:product.php'); 
        } else {
        ?>
        <script>
        alert('invalid');
        </script>

        <?php
    

            } 
  }
?>


        <!-- Main body --><br>
        <div class="form-box">
            <div class="form-tab">
                <ul class="nav nav-pills nav-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab"
                            aria-controls="signin" aria-selected="true">Sign In</a>
                    </li>
                    <?php
//echo $row['customer_id'];
                    ?>
                     
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                            aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="tab-content-5">
                    <div class="tab-pane fade active show" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="singin-email">Email *</label>
                                <input type="text" class="form-control" id="singin-email" name="email" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="singin-password">Password *</label>
                                <input type="password" class="form-control" id="singin-password" name="password"
                                    required="">
                            </div><!-- End .form-group -->

                            <div class="form-footer">

                            <!-- <button name="signin" class="btn btn-outline-primary-2"> -->
                                        <!-- LOG IN -->
                                        <!-- <i class="icon-long-arrow-right"></i> -->
                                    <!-- </button> -->
                                    <input class="btn btn-outline-primary-2" type="submit" name="signin" value="LOG IN"/> <i class="icon-long-arrow-right"></i>
                                    </form>
            

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                                    <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                </div><!-- End .custom-checkbox -->

                                <a href="#" class="forgot-link">Forgot Your Password?</a>
                            </div><!-- End .form-footer -->

                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <form action="#" method="POST">
                            <div class="form-group">
                                <label for="register-email">Your name *</label>
                                <input type="text" class="form-control" id="register-email" name="name" required="">
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label for="register-email">Your email address *</label>
                                <input type="email" class="form-control" id="register-email" name="email" required="">
                            </div><!-- End .form-group -->

                            <div class="form-group">
                                <label for="register-password">Password *</label>
                                <input type="password" class="form-control" id="register-password" name="password"
                                    required="">
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label for="register-address">Address *</label>
                                <input type="address" class="form-control" id="register-address" name="address"
                                    required="">
                            </div><!-- End .form-group -->
                            <div class="form-group">
                                <label for="register-number">Number *</label>
                                <input type="number" class="form-control" id="register-number" name="number"
                                    required="">
                            </div><!-- End .form-group -->

                            <div class="form-footer">
                                <button type="submit" name="register" class="btn btn-outline-primary-2">
                                    <span>SIGN UP</span>
                                    <i class="icon-long-arrow-right"></i>
                                </button>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="register-policy"
                                        required="">
                                    <label class="custom-control-label" for="register-policy">I agree to the <a
                                            href="#">privacy policy</a> *</label>
                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-footer -->
                        </form>

                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .form-tab -->
        </div>
        <br>

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
                    <li>
                        <a href="shop-page.php" class="sf-with-ul">Shellee 's Spectacles Shop</a>

                    </li>
                    <li>
                        <a href="about.php" class="sf-with-ul">About Us</a>

                    </li>
                    <li>
                        <a href="contact.php" class="sf-with-ul">Contact Us</a>
                    </li>
                    <li>
                    <li style="list-style-type: none; font-size: 14px;" class="active">
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