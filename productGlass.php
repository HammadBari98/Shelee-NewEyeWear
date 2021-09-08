<?php session_start(); ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New View Eyewear Shop | Glass</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="New View Eyewear Shop | Product">
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
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">

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

    .product-details-action .btn-cart:hover {
        padding: 1rem 1.5rem;
        max-width: 198px;
        background-color: #12b48b;
    }

    .product-details-action .btn-cart {
        padding: 1rem 1.5rem;
        max-width: 198px;
        color: black;
        border: 0.1rem solid #12b48b;
    }

    .product-gallery-item:before {
        border-color: #12b48b;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <?php include('nav.php'); ?>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                include('connection.php');
                                     $product_id=$_GET['product_id'];
                                     // $customer_id=$_GET['customer_id'];
                                    $selectquery = "Select * from glasses_table where glass_id=$product_id";
                                              $query = mysqli_query($mysqli,$selectquery);
                   
                                        $res=mysqli_fetch_assoc($query);
                   
                                        ?>
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="<?php echo 'sheleeAdminpanel/images/' . $res['image1'] ?>">

                                            <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a>
                                        </figure><!-- End .product-main-image -->

                                        <div id="product-zoom-gallery" class="product-image-gallery">
                                            <a class="product-gallery-item active" href="#"
                                                data-image="<?php echo 'sheleeAdminpanel/images/' . $res['image1'] ?>"
                                                data-zoom-image="<?php echo 'sheleeAdminpanel/images/' . $res['image1'] ?>">
                                                <img src="<?php echo 'sheleeAdminpanel/images/' . $res['image1'] ?>"
                                                    alt="product side">
                                            </a>

                                            <a class="product-gallery-item" href="#"
                                            data-image="<?php echo 'sheleeAdminpanel/images/' . $res['image2'] ?>"
                                                data-zoom-image="<?php echo 'sheleeAdminpanel/images/' . $res['image2'] ?>">
                                                <img src="<?php echo 'sheleeAdminpanel/images/' . $res['image2'] ?>"
                                                    alt="product cross">
                                            </a>

                                            <a class="product-gallery-item" href="#"
                                            data-image="<?php echo 'sheleeAdminpanel/images/' . $res['image3'] ?>"
                                                data-zoom-image="<?php echo 'sheleeAdminpanel/images/' . $res['image3'] ?>">
                                                <img src="<?php echo 'sheleeAdminpanel/images/' . $res['image3'] ?>"
                                                    alt="product cross">
                                            </a>


                                        </div><!-- End .product-image-gallery -->
                                        
                                    </div><!-- End .row -->
                                    
                                </div><!-- End .product-gallery -->
                                
                            </div><!-- End .col-md-6 -->
                            









                            <!-- -------------------------------------------------------------------------------------------------- -->
                            <div class="col-md-6">
                                <?php
                    include('connection.php');
                    $product_id=$_GET['product_id'];
                    // $customer_id=$_GET['customer_id'];
                    $selectquery = "Select * from glasses_table where glass_id=$product_id";
                    $query = mysqli_query($mysqli,$selectquery);
                   
                    $res=mysqli_fetch_assoc($query);
                   
                    ?>








                                <div class="product-details">
                                    <h1 class="product-title"><?php echo $res['glass_name'] ?></h1>
                                    <!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-review-link" id="review-link">( 5 Reviews
                                            )</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price" style="color: #12b48b;">
                                        Rs.<?php echo $res['sell_price'] ?>
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p><?php echo $res['short_description'] ?></p>

                                    </div><!-- End .product-content -->
                                    <form action="" method="POST">
                                        <!-- <label for="qty">Qty:</label> -->
                                        <div class="product-details-quantity">
                                            <!-- <input type="number" name="quantity"  class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required> -->
                                        </div><!-- End .product-details-quantity -->
                                        <!-- <input type="text" name="quantity" id="">  -->
                                        <!-- <button type="submit">Confirm quantity</button> -->
                                        <?php if (isset($_SESSION['login_user'])) { ?>
                                        <a href="shop-page.php?glass_id=<?php echo $product_id ?>">
                                            <button name="add_to_cart" class="btn btn-primary">Add to cart</button>
                                        </a>
                                        <?php } else { ?>
                                        <a href="login.php">
                                            <button class="btn btn-primary">Add to cart</button>
                                        </a>

                                        <?php  } ?>
                                        <div class="product-details-action">
                                            <!-- <a href="shop-page.php?glass_id=<?php echo $product_id ?>"   class="btn-product btn-cart"><span>add to cart</span>  -->
                                            </a>



                                        </div>
                                    </form>
                                </div><!-- End .details-filter-row -->


                                <!-- End .product-details-action -->




                                <?php 
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_to_cart"])) {
// $quantity=mysqli_real_escape_string($mysqli, $_POST['quantity']);

// echo $quantity;
// $quantity=$_POST['quantity'];

// $result= mysqli_query($mysqli,"SELECT MAX(cart_id) AS maximum FROM cart");

// $row = mysqli_fetch_assoc($result); 

// $maximum = $row['maximum'];

// echo ("This is the maximum value: $maximum");


//inserting into cart 
$customer_id=$_SESSION['login_id'];

$customer_name=$_SESSION['login_name'];
$address=$_SESSION['login_customer_address'];
$cell_no=$_SESSION['login_cell_no'];
$glass_id=$res['glass_id'];
$glassName = $res['glass_name'];

    $categoryName = $res['category_name'];
    $color = $res['color'];
    $brand = $res['brand'];
    $quantity = 1;
    $purchasePrice = $res['purchase_price'];
    $salePrice = $res['sell_price'];


    $insertQuery = "INSERT INTO cart(customer_id ,customer_name,address,cell_no,product_id ,product_name,product_category,color,brand,quantity,sell_price)
values ($customer_id,'$customer_name','$address',$cell_no,$glass_id,'$glassName','$categoryName','$color','$brand',$quantity,$salePrice)";

   if (mysqli_query($mysqli, $insertQuery)){

        
   // if ($queryrun) {
        ?>
                                <script>
                                alert('Inserted into Cart Successfully');
                                </script>
                                <?php
        //    if($count == 1) {
                //  session_register("myusername");
          
            //    $_SESSION['glass_id'] = $customer_id;
           header('location:shop-page.php'); 
        //    }
        } else {
        ?>
                                <script>
                                alert('Not Inserted into cart');
                                </script>

                                <?php
    

            } 


}
?>























                                <div class="container mt-3">
                                    <!-- <h2>Activate Modal with JavaScript</h2> -->
                                    <!-- Trigger the modal with a button -->
                                    <!-- <button type="button" class="btn btn-primary" id="myBtn">Open Modal</button> -->

                                    <!-- The Modal -->
                                    <div class="modal fade" id="myModal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                    <!-- <h4 class="modal-title">Modal Heading</h4> -->
                                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <div class="form-box">
                                                        <div class="form-tab">
                                                            <ul class="nav nav-pills nav-fill" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="signin-tab"
                                                                        data-toggle="tab" href="#signin" role="tab"
                                                                        aria-controls="signin" aria-selected="true">Sign
                                                                        In</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="register-tab"
                                                                        data-toggle="tab" href="#register" role="tab"
                                                                        aria-controls="register"
                                                                        aria-selected="false">Register</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content" id="tab-content-5">
                                                                <div class="tab-pane fade active show" id="signin"
                                                                    role="tabpanel" aria-labelledby="signin-tab">
                                                                    <form
                                                                        action="frames-offer.php?id=<?php echo $customer_id ?>"
                                                                        method="POST">
                                                                        <div class="form-group">
                                                                            <label for="singin-email">Username or email
                                                                                address *</label>
                                                                            <input type="text" class="form-control"
                                                                                id="singin-email" name="email"
                                                                                required="">
                                                                        </div><!-- End .form-group -->

                                                                        <div class="form-group">
                                                                            <label for="singin-password">Password
                                                                                *</label>
                                                                            <input type="password" class="form-control"
                                                                                id="singin-password" name="password"
                                                                                required="">
                                                                        </div><!-- End .form-group -->

                                                                        <div class="form-footer">
                                                                            <a href=""> <button type="submit"
                                                                                    name="signin"
                                                                                    class="btn btn-outline-primary-2">
                                                                                    <span>LOG IN</span>
                                                                                    <i
                                                                                        class="icon-long-arrow-right"></i>
                                                                                </button></a>


                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="signin-remember">
                                                                                <label class="custom-control-label"
                                                                                    for="signin-remember">Remember
                                                                                    Me</label>
                                                                            </div><!-- End .custom-checkbox -->

                                                                            <a href="#" class="forgot-link">Forgot Your
                                                                                Password?</a>
                                                                        </div><!-- End .form-footer -->
                                                                    </form>

                                                                </div><!-- .End .tab-pane -->
                                                                <div class="tab-pane fade" id="register" role="tabpanel"
                                                                    aria-labelledby="register-tab">
                                                                    <form action="#" method="POST">
                                                                        <div class="form-group">
                                                                            <label for="register-email">Your name
                                                                                *</label>
                                                                            <input type="text" class="form-control"
                                                                                id="register-email" name="name"
                                                                                required="">
                                                                        </div><!-- End .form-group -->
                                                                        <div class="form-group">
                                                                            <label for="register-email">Your email
                                                                                address *</label>
                                                                            <input type="email" class="form-control"
                                                                                id="register-email" name="email"
                                                                                required="">
                                                                        </div><!-- End .form-group -->

                                                                        <div class="form-group">
                                                                            <label for="register-password">Password
                                                                                *</label>
                                                                            <input type="password" class="form-control"
                                                                                id="register-password" name="password"
                                                                                required="">
                                                                        </div><!-- End .form-group -->
                                                                        <div class="form-group">
                                                                            <label for="register-address">Address
                                                                                *</label>
                                                                            <input type="address" class="form-control"
                                                                                id="register-address" name="address"
                                                                                required="">
                                                                        </div><!-- End .form-group -->
                                                                        <div class="form-group">
                                                                            <label for="register-number">Number
                                                                                *</label>
                                                                            <input type="number" class="form-control"
                                                                                id="register-number" name="number"
                                                                                required="">
                                                                        </div><!-- End .form-group -->

                                                                        <div class="form-footer">
                                                                            <button type="submit" name="register"
                                                                                class="btn btn-outline-primary-2">
                                                                                <span>SIGN UP</span>
                                                                                <i class="icon-long-arrow-right"></i>
                                                                            </button>

                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="custom-control-input"
                                                                                    id="register-policy" required="">
                                                                                <label class="custom-control-label"
                                                                                    for="register-policy">I agree to the
                                                                                    <a href="#">privacy policy</a>
                                                                                    *</label>
                                                                            </div><!-- End .custom-checkbox -->
                                                                        </div><!-- End .form-footer -->
                                                                    </form>

                                                                </div><!-- .End .tab-pane -->
                                                            </div><!-- End .tab-content -->
                                                        </div><!-- End .form-tab -->
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div> -->

                                            </div>
                                        </div>
                                    </div>

                                </div>



















                                <div class="product-details-footer">
                                    <div class="product-cat">
                                        <span>Category: <?php echo $res['category_name'] ?></span>
                                        <!-- <a href="#">Men</a>,
                                            <a href="#">Square</a>,
                                            <a href="#">Black</a> -->
                                    </div><!-- End .product-cat -->


                                </div><!-- End .product-details-footer -->
                            </div><!-- End .product-details -->
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </div><!-- End .product-details-top -->

                <div class="product-details-tab">
                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab"
                                role="tab" aria-controls="product-desc-tab" aria-selected="true"
                                style="color: #12b48b;">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab"
                                role="tab" aria-controls="product-info-tab" aria-selected="false">Additional
                                information</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel"
                            aria-labelledby="product-desc-link">
                            <div class="product-desc-content">
                                <h3>Product Information</h3>
                                <p><?php echo $res['long_description'] ?></p>

                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-info-tab" role="tabpanel"
                            aria-labelledby="product-info-link">
                            <div class="product-desc-content">
                                <h3>Information</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque
                                    volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non,
                                    semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                    Aliquam porttitor mauris sit amet orci. </p>

                                <h3>Fabric & care</h3>
                                <ul>
                                    <li>Faux suede fabric</li>
                                    <li>Gold tone metal hoop handles.</li>
                                    <li>RI branding</li>
                                    <li>Snake print trim interior </li>
                                    <li>Adjustable cross body strap</li>
                                    <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                </ul>

                                <h3>Size</h3>
                                <p>one size</p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel"
                            aria-labelledby="product-shipping-link">
                            <div class="product-desc-content">
                                <h3>Delivery & returns</h3>
                                <p>We deliver to over 100 countries around the world. For full details of the delivery
                                    options we offer, please view our <a href="#">Delivery information</a><br>
                                    We hope you’ll love every purchase, but if you ever need to return an item you can
                                    do so within a month of receipt. For full details of how to make a return, please
                                    view our <a href="#">Returns information</a></p>
                            </div><!-- End .product-desc-content -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane fade" id="product-review-tab" role="tabpanel"
                            aria-labelledby="product-review-link">
                            <div class="reviews">
                                <h3>Reviews (2)</h3>
                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">Samanta J.</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">6 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Good, perfect size</h4>

                                            <div class="review-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum
                                                    dolores assumenda asperiores facilis porro reprehenderit animi culpa
                                                    atque blanditiis commodi perspiciatis doloremque, possimus,
                                                    explicabo, autem fugit beatae quae voluptas!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->

                                <div class="review">
                                    <div class="row no-gutters">
                                        <div class="col-auto">
                                            <h4><a href="#">John Doe</a></h4>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div>
                                                    <!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                            </div><!-- End .rating-container -->
                                            <span class="review-date">5 days ago</span>
                                        </div><!-- End .col -->
                                        <div class="col">
                                            <h4>Very good</h4>

                                            <div class="review-content">
                                                <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum
                                                    blanditiis laudantium iste amet. Cum non voluptate eos enim, ab
                                                    cumque nam, modi, quas iure illum repellendus, blanditiis
                                                    perspiciatis beatae!</p>
                                            </div><!-- End .review-content -->

                                            <div class="review-action">
                                                <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                            </div><!-- End .review-action -->
                                        </div><!-- End .col-auto -->
                                    </div><!-- End .row -->
                                </div><!-- End .review -->
                            </div><!-- End .reviews -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .product-details-tab -->


            </div><!-- End .page-content -->
        </main><!-- End .main -->

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
                                    <li style="list-style-type: none; font-size: 14px;"><a href="login.php">Login</a>
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
                                    <li style="list-style-type: none; font-size: 14px;"><a href="login.php">Sign in</a>
                                    </li>
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
            <!-- 
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" style="background-color: #12b48b;" type="submit"><i class="icon-search"></i></button>
            </form> -->

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
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
    function openModal() {
        $(document).ready(function() {
            $("#myBtn").click(function() {
                $("#myModal").modal();
            });
        });
    }

    openModal();
    </script>

</body>


<!-- molla/about.php  22 Nov 2019 10:03:54 GMT -->

</html>