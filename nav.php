<?php 
//session_start();
?>
<header class="header">

<div class="header-top" style="background-color: rgba(32,64,102,255); color: white; padding: 16px;">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5" style="font-size:14px">
            <ul class="top-menu">
                <li>
                    <ul>
                        <li><a href="tel:#"><i class="icon-phone"></i>Call: +92-000-1112233</a></li>
                        <li><a href="tel:#"><i class="icon-phone"></i>Email: newview.eyewear.com</a></li>


                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3" style="display: flex; ">
            <a href="#" style="margin-right: 5%; height: 16px;"> <img src="images/icons/facebook.png"> </a>
            <a href="#" style="margin-right: 5%; height: 16px;"> <img src="images/icons/twitter.png"> </a>
            <a href="#" style="margin-right: 5%; height: 16px;"> <img src="images/icons/linkedin.png"> </a>
            <a href="#" style="margin-right: 5%; height: 16px;"> <img src="images/icons/instagram.png"> </a>
            
            <li style="list-style-type: none; font-size: 14px;">
                <!-- <a href="login.php"><i class="icon-user"></i>Login</a> -->
                <?php if (isset($_SESSION['login_user'])) { ?>
            <!-- <li><a class="fa fa-user-circle" href="javascript:void(0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> -->
            
                    <?php echo   $_SESSION['login_name']; ?>
                   <?php  echo $_SESSION['login_id'];?>
                    <li><a href="logout.php">Logout</a></li>  
            <ul class="dd_menu">
                    <!-- <li><?php echo $_SERVER['QUERY_STRING']; ?></li> -->
                    <!-- <li><a href="agentupdate.ph $row['customer_name'];p?<?php echo $_SERVER['QUERY_STRING']; ?>">&nbsp;Profile</a></li> -->
                   <!-- <img src="https://png.pngtree.com/png-vector/20190307/ourmid/pngtree-vector-edit-profile-icon-png-image_762931.jpg" height="50ox" width="50px" alt="">
                    <?php echo   $_SESSION['login_name']; ?>
                   <?php  echo $_SESSION['login_id'];?> -->
                    <!-- <li><a href="logout.php">&nbsp;Logout</a></li> -->
                </ul>
             
            </li>


            <?php } else { ?>
            <li>  <a href="login.php"><i class="icon-user"></i>Login</a></li> <?php } ?>
    
        
        </div>

    </div>
</div><!-- End .header-top -->

<div class="header-middle sticky-header">
    <div class="container">
        <div class="header-left">
            <button class="mobile-menu-toggler">
                <span class="sr-only">Toggle mobile menu</span>
                <i class="icon-bars"></i>
            </button>
            <a href="index.php" class="logo">
                <img src="assets/images/logo-black.png" alt="plug Logo" width="105" height="25">
            </a>

            <nav class="main-nav">
                <ul class="menu sf-arrows ">
                    <li class="megamenu-container  ">
                        <a href="index.php" style="margin-left: 120px;">Home</a>
                    </li>

                    <!-- End .demo-list -->

                    <li>
                        <a href="frames-offer.php">Frames We Offer</a>

                    </li>
                    <li>
                        <a href="shop-page.php">New View Eyewear Shop</a>

                    </li>
                    <!-- <li>
                        <a href="about.php">About us</a>


                    </li> -->
                    <li>
                        <a href="contact.php">contact us</a>
                    </li>

                </ul><!-- End .menu -->
            </nav><!-- End .main-nav -->
        </div><!-- End .header-left -->

        <div class="header-right">
            <div class="header-search">
                <a href="#" class="search-toggle" role="button" title="Search"><i
                        class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper">
                        <label for="q" class="sr-only">Search</label>
                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..."
                            required>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div><!-- End .header-search -->
<!-- 

            <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            <!-- </form>
                        </div><!-- End .header-search -->
                      
                            
                   
                        <?php
include('connection.php');

if(isset($_SESSION['login_user'])){
    $count=0;
    $_id=$_SESSION['login_id'];
    $result= mysqli_query($mysqli,"SELECT COUNT(cart_id) as countt FROM cart where customer_id=$_id");
    
    $row = mysqli_fetch_assoc($result); 
    
    $count = $row['countt'];
}

else{
    $count=0;
}

?>


                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" 
                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count"><?php echo $count ?></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
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
                                        <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="#"><?php echo $res['product_name'] ?></a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty"><?php echo $res['quantity'] ?></span>
                                                x <?php echo $res['sell_price'] ?>
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <!-- <figure class="product-image-container">
                                            <a href="#" class="product-image">
                                                <img src="<?php echo 'sheleeAdminpanel/images/' . $res['image1'] ?>" alt="product">
                                            </a>
                                        </figure> -->
                                        <a href="delete_product_cart.php?id=<?php echo $res['cart_id'] ?>" class="btn-remove" title="Remove Product"><i
                                                class="icon-close"></i></a>
                                        </div><!-- End .product -->

                                        <?php
                                    }
                                        ?>
                                        <?php
                                        }


?>
                                </div><!-- End .cart-product -->
                                <?php
include('connection.php');
if(isset($_SESSION['login_user'])){
$count=0;
$_id=$_SESSION['login_id'];
$result= mysqli_query($mysqli,"SELECT SUM(sell_price) as total FROM cart where customer_id=$_id");

$row = mysqli_fetch_assoc($result); 

$total = $row['total'];
}
else {
    $total=0;
}

?>
                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price"><?php echo $total?></span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.php" class="btn btn-primary"
                                        style="background-color: #204066 !important;">View Cart</a>
                                    <a href="cart.php" class="btn btn-outline-primary-2"
                                        style="background-color: #12b48b !important; color: white;"><span>Checkout</span><i
                                            class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header><!-- End .header -->