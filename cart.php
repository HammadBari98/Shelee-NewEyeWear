<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<!-- molla/cart.php  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New View Eyewear Shop | Cart</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="S">
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
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css"><link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .cart-count{
            background-color: #12b48b  !important;        
        }
        .menu li:hover>a, .menu li.show>a, .menu li.active>a{
            color: #204066 !important;
        }
        .btn:hover{
                background-color: #12b48b;
               
                color: white !important;
        }
        .btn{
            border-color:#12b48b ;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
    <?php include('nav.php'); ?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Shopping Cart<span style="color: #12b48b;">Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="cart">
	                <div class="container">
	                	<div class="row">
	                		<div class="col-lg-9">
	                			<table class="table table-cart table-mobile">
									<thead>
										<tr>
											<th>Product</th>
											<th>Price</th>
											
											
											<th></th>
										</tr>
									</thead>

									<tbody>
                                    <?php
                                        include('connection.php');
                                        // $customer_id=$_GET['id'];
                                        if(isset($_SESSION['login_user'])){
                                        $_id=$_SESSION['login_id'];
                                        $selectquery = "Select * from cart where customer_id=$_id";
                                        $query = mysqli_query($mysqli,$selectquery);
                                        $nums = mysqli_num_rows($query);
                                        
                                        while($res=mysqli_fetch_array($query)){
                                            
                                            ?>
										<tr>
											<td class="product-col">
												<div class="product">
													<figure class="product-media">
														<a href="#">
															<img src="images/products/lens1.jpg" alt="Product image">
														</a>
													</figure>

													<h3 class="product-title">
														<a href="#"><?php echo $res['product_name'] ?></a>
													</h3><!-- End .product-title -->
												</div><!-- End .product -->
											</td>
											<td class="price-col" ><?php echo $res['sell_price'] ?></td>
                                            <td >  <center> <a href="delete_product_cart.php?id=<?php echo $res['cart_id'] ?>"> <i style="font-size: 18px;" class="fa fa-trash" aria-hidden="true" ></i></center></td>
											<a href="delete_product_cart.php?id=<?php echo $res['cart_id'] ?>">

                                            <!-- <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td> -->
                                            </a>
											
										</tr>
                                        <?php
                                        }
                                    }
                                        ?>
									</tbody>
								</table><!-- End .table table-wishlist -->

	                			<div class="cart-bottom">
			            			<div class="cart-discount">
			            				
			            			</div><!-- End .cart-discount -->

			            			<a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i class="icon-refresh"></i></a>
		            			</div><!-- End .cart-bottom -->
	                		</div><!-- End .col-lg-9 -->
	                		<aside class="col-lg-3">
	                			<div class="summary summary-cart">
	                				<h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->
                                    <?php
include('connection.php');
$total=0;
$subtotal=0;
if(isset($_SESSION['login_user'])){
$count=0;
$_id=$_SESSION['login_id'];
$result= mysqli_query($mysqli,"SELECT SUM(sell_price) as total FROM cart where customer_id=$_id");

$row = mysqli_fetch_assoc($result); 

$subtotal = $row['total'];
$total=$subtotal+50;
}
else{
    $total=0;
}

?>

	                				<table class="table table-summary">
	                					<tbody>
	                						<tr class="summary-subtotal">
	                							<td>Subtotal:</td>
	                							<td><?php echo $subtotal?></td>
	                						</tr><!-- End .summary-subtotal -->
	                						
	                						</tr><!-- End .summary-shipping-row -->
                                            <tr class="summary-total">
	                							<td style="color: #202020;">Delivery Charger:</td>
	                							<td style="color: #202020;">50</td>
	                						</tr>
	                						<tr class="summary-total">
	                							<td style="color: #202020;">Total:</td>
	                							<td style="color: #202020;" ><?php echo $total  ?> </td>
	                						</tr><!-- End .summary-total -->
	                					</tbody>
	                				</table><!-- End .table table-summary -->
                                    <div class="field-row">
                  
                </div>
	                				<a href="checkout.php?amount=<?php echo $total ?>" class="btn btn-outline-primary-2 btn-order btn-block" style="color: #204066;">PROCEED TO CHECKOUT</a>
	                			</div><!-- End .summary -->
		            			<a href="frames-offer.php" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
	                		</aside><!-- End .col-lg-3 -->
	                	</div><!-- End .row -->
	                </div><!-- End .container -->
                </div><!-- End .cart -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

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
	            					<li style="list-style-type: none; font-size: 14px;"><a href="login.php" >Login</a></li>
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
                    <li  class="active">
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

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                   
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-address">Address *</label>
                                            <input type="address" class="form-control" id="register-address" name="register-address" required>
                                        </div><!-- End .form-group -->
                                        <div class="form-group">
                                            <label for="register-number">Number *</label>
                                            <input type="number" class="form-control" id="register-number" name="register-number" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                   
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
  <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    </body>


<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>