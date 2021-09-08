<?php session_start(); ?>
<?php
$cus_name=$_SESSION['login_user'];
$_id=$_SESSION['login_id'];
$amount=$_GET['amount'];
require_once "config.php";

$type = "";
$message = "";
if (!empty($_POST["pay_now"])) {
    require_once 'AuthorizeNetPayment.php';
    $authorizeNetPayment = new AuthorizeNetPayment();
    
    $response = $authorizeNetPayment->chargeCreditCard($_POST);
    
    if ($response != null)
    {
        $tresponse = $response->getTransactionResponse();
        
        if (($tresponse != null) && ($tresponse->getResponseCode()=="1"))
        {
            $authCode = $tresponse->getAuthCode();
            $paymentResponse = $tresponse->getMessages()[0]->getDescription();
            $reponseType = "success";
            $message = "This transaction has been approved. <br/> Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() .  " <br/>Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "\n";
        }
        else
        {
            $authCode = "";
            $paymentResponse = $tresponse->getErrors()[0]->getErrorText();
            $reponseType = "error";
            $message = "Charge Credit Card ERROR :  Invalid response\n";
        }
        
        $transactionId = $tresponse->getTransId();
        $responseCode = $tresponse->getResponseCode();
        $paymentStatus = $authorizeNetPayment->responseText[$tresponse->getResponseCode()];
        require_once "DBController.php";
        $dbController = new DBController();
        
        $param_type = 'sssdss';
        $param_value_array = array(
            $transactionId,
            $authCode,
            $responseCode,
            $_POST["amount"],
            $paymentStatus,
            $paymentResponse
        );
        /*print "<PRE>";
        print_r($param_value_array);
        exit; */
        $query = "INSERT INTO tbl_authorizenet_payment (custormer_id, `custormer_name`,transaction_id, auth_code, response_code, amount, payment_status, payment_response) values ('$_id','$cus_name',?, ?, ?, ?, ?, ?)";
        $id = $dbController->insert($query, $param_type, $param_value_array);
    }
    else
    {
        $reponseType = "error";
        $message= "Charge Credit Card Null response returned";
    }
}
?>

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


#frmPayment {
    max-width: 300px;
    padding: 25px;
    border: #D0D0D0 1px solid;
    border-radius: 4px;
}

.test-data {
    margin-top: 40px;
}

.tutorial-table {
    border: #D0D0D0 1px solid;
    font-size: 0.8em;
    color: #4e4e4e;
}

.tutorial-table th {
    background: #efefef;
    padding: 12px;
    border-bottom: #e0e0e0 1px solid;
    text-align: left;
}

.tutorial-table td {
    padding: 12px;
    border-bottom: #D0D0D0 1px solid;
}

#frmPayment .field-row {
    margin-bottom: 20px;
}

#frmPayment div label {
    margin: 5px 0px 0px 5px;
    color: #49615d;
    width: auto;
}

.demoInputBox {
    padding: 10px;
    border: #d0d0d0 1px solid;
    border-radius: 4px;
    background-color: #FFF;
    width: 100%;
    margin-top: 5px;
    box-sizing:border-box;
}

.demoSelectBox {
    padding: 10px;
    border: #d0d0d0 1px solid;
    border-radius: 4px;
    background-color: #FFF;
    margin-top: 5px;
}

select.demoSelectBox {
    height: 35px;
    margin-right: 10px;
}

.info {
    font-size: .8em;
    color: #FF6600;
    letter-spacing: 2px;
    padding-left: 5px;
}

.btnAction {
    padding: 5px 20px;
    color: #FFF;
    border: #ef6901 1px solid;
    border-radius: 4px;
    cursor: pointer;
    width:100% ;
}

.column-right {
    margin-right: 6px;
}

.contact-row {
    display: inline-block;
}

.cvv-input {
    width: 60px;
}

#error-message {
    margin: 0px 0px 10px 0px;
    padding: 5px 25px;
    border-radius: 4px;
    line-height: 25px;
    font-size: 0.9em;
    color: #ca3e3e;
    border: #ca3e3e 1px solid;
    display: none;
    width: 300px;
}

#response-message {
    margin: 0px 0px 10px 0px;
    padding: 5px 25px;
    border-radius: 4px;
    line-height: 25px;
    font-size: 0.9em;
    width: 300px;
}

.success {
    color: #3da55d;
    border: #43b567 1px solid;
}

.error {
    color: #ca3e3e;
    border: #ca3e3e 1px solid;
}

.display-none {
    display:none;
}

#loader {
    display: none;
}

#loader img {
    width: 45px;
    vertical-align: middle;
}



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
        @media screen and (max-width: 768px) {
            .inpForm{
                margin-left: 0% !important;
            }
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
    <?php include('nav.php'); ?>
    <?php if(!empty($message)) { ?>
    <div id="response-message" class="<?php echo $reponseType; ?>"><?php echo $message; ?></div>
    <?php  } ?>
    <div class="container inpForm" style="margin-left:37%;margin-top:10px">  
    <div id="error-message"></div>
            
            <form id="frmPayment" action=""
                method="post"
                        onSubmit="return cardValidation();">
                <div class="field-row">
                <label>Card Number</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text" id="card-number" name="card-number"
                        class="demoInputBox">
              
                </div>
                <label>Amount</label> <span
                        id="card-number-info" class="info"></span><br> <input
                        type="text"  name="amount" value="<?php echo $amount; ?>"
                        class="demoInputBox">

                        <br>
                        <br>
                        <input  type="hidden" value="09" name="month" id="month">
                        <input
                        type="hidden" value="2018" name="year" id="year">
                <!-- <input  name='amount'>  -->

                    <input type="submit" name="pay_now" value="Submit"
                        id="submit-btn" class="btnAction" style="background-color: rgba(32,64,102,255); border:0px">

                    <div id="loader">
                        <img alt="loader" src="LoaderIcon.gif">
                    </div>
                </div>
            
                </div>
            </form>
            </div>
      

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
    <script src="vendor/jquery/jquery-3.2.1.min.js"
        type="text/javascript"></script>
    <script>
function cardValidation () {
    var valid = true;
    var cardNumber = $('#card-number').val();
    var month = $('#month').val();
    var year = $('#year').val();

    $("#error-message").html("").hide();

    if (cardNumber.trim() == "") {
    	   valid = false;
    }

    if (month.trim() == "") {
    	    valid = false;
    }
    if (year.trim() == "") {
        valid = false;
    }

    if(valid == false) {
        $("#error-message").html("All Fields are required").show();
    }

    return valid;
}
</script>
    </body>


<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->
</html>