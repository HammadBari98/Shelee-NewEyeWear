<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>New View Eyewear</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="backEnd/assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="backEnd/assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="backEnd/assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="backEnd/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/styles/app.min.css">
    <link rel="stylesheet" href="backEnd/assets/styles/font.css" type="text/css" />


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="backEnd/assets/styles/flags.css" />
</head>

<body>
    <div class="app" id="app">
        <?php
            include('nav.php');
            ?>
        <div id="content" class="app-content box-shadow-z0" role="main">
            <div class="app-header white box-shadow navbar-md">
                <div class="navbar">
                    <!-- Open side - Naviation on mobile -->
                    <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
                        <i class="material-icons">&#xe5d2;</i>
                    </a>
                    <!-- / -->

                    <!-- Page title - Bind to $state's title -->
                    <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle"></div>

                    <!-- navbar right -->
                    <ul class="nav navbar-nav pull-right">

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link clear" href data-toggle="dropdown">
                                <span class="avatar w-32">
                                    <img src="uploads/users/15791701775245.jpg"
                                        alt="admin" title="admin">
                                    <i class="on b-white bottom"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu pull-right dropdown-menu-scale">

                                <a class="dropdown-item" href="admin/users/1/edit.html"><span>Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    class="dropdown-item" href="logout">Logout</a>

                                <form id="logout-form" action="logout" method="POST"
                                    style="display: none;">
                                    <input type="hidden" name="_token" value="phXc8IdicjP9ZCgZHd8S3W5gEe91osmqrXfgWTvM">
                                </form>
                            </div>
                        </li>

                        <li class="nav-item hidden-md-up">
                            <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                                <i class="material-icons">&#xe5d4;</i>
                            </a>
                        </li>
                    </ul>
                    <!-- / navbar right -->

                    <!-- navbar collapse -->
                    <div class="collapse navbar-toggleable-sm" id="collapse">
                        <form method="POST" action="admin/find" accept-charset="UTF-8"
                            role="search" class="navbar-form form-inline pull-right pull-none-sm navbar-item v-m"><input
                                name="_token" type="hidden" value="phXc8IdicjP9ZCgZHd8S3W5gEe91osmqrXfgWTvM">

                            <div class="form-group l-h m-a-0">
                                <div class="input-group input-group-sm"><input type="text" name="q"
                                        class="form-control p-x b-a rounded" placeholder="Search..." required>
                                    <span class="input-group-btn"><button type="submit"
                                            class="btn white b-a rounded no-shadow"><i
                                                class="fa fa-search"></i></button></span>
                                </div>
                            </div>
                        </form>
                        <!-- link and dropdown -->
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-scale">
                                    <a class="dropdown-item"
                                        href="admin/1/topics/create"><span><i
                                                class="material-icons">&#xe3e8;</i> &nbsp;Site pages</span></a>
                                    <a class="dropdown-item"
                                        href="admin/2/topics/create"><span><i
                                                class="material-icons">&#xe540;</i> &nbsp;Services</span></a>
                                    <a class="dropdown-item"
                                        href="admin/3/topics/create"><span><i
                                                class="material-icons">&#xe307;</i> &nbsp;News</span></a>
                                    <a class="dropdown-item"
                                        href="admin/7/topics/create"><span><i
                                                class="material-icons">&#xe2c8;</i> &nbsp;Blog</span></a>
                                    <a class="dropdown-item"
                                        href="admin/9/topics/create"><span><i
                                                class="material-icons">&#xe2c8;</i> &nbsp;Partners</span></a>
                                    <a class="dropdown-item"
                                        href="admin/10/topics/create"><span><i
                                                class="material-icons">&#xe2c8;</i> &nbsp;Our Team</span></a>

                                    <a class="dropdown-item" href="admin/banners"><i
                                            class="material-icons">
                                            &#xe433;</i>
                                        &nbsp;Ad. Banners</a>
                                    <div class="dropdown-divider"></div>


                                </div>
                            </li>
                        </ul>
                        <!-- / -->
                    </div>
                    <!-- / navbar collapse -->
                </div>
            </div>
            <div class="app-footer">
                <div class="p-a text-xs">
                    <div class="pull-right text-muted">
                        &copy; Copyright <strong>New View Eyewear</strong> <span class="hidden-xs-down">- 2021</span>
                        <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
                    </div>
                    <div class="nav">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div ui-view class="app-body" id="view">

                <!-- ############ PAGE START-->
                <div class="padding p-b-0">


                    <div class="container">

                        <h2>Add New Lense </h2>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group">

                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Lense Name:</label>
                                        <input name="lensename" class="form-control" placeholder="Enter Lense Name">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Short Description:</label>
                                        <input name="shortdescription" class="form-control"
                                            placeholder="Short Description">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Long Description:</label>
                                        <input name="longdescription" class="form-control" placeholder="Long Description">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Category Name:</label>
                                        <input name="categoryname" class="form-control" placeholder="Enter Category">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Color:</label>
                                        <input name="color" class="form-control" placeholder="Enter Color">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Brand:</label>
                                        <input name="brand" class="form-control" placeholder="Enter Brand">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Quantity:</label>
                                        <input name="quantity" class="form-control" placeholder="Enter Quantity">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Purchase Price:</label>
                                        <input name="purchaseprice" class="form-control" placeholder="Enter Purchase Price">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="row col-md-6">
                                        <label style="font-weight: bold;">Sale Price:</label>
                                        <input name="saleprice" class="form-control" placeholder="Enter Sale Price">

                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <div class="row col-md-6">
                                            <label for="pwd" style="font-weight: bold;">Image 1:</label>
                                            </br>
                                            </br>
                                            <input name="image1" type="file" name="img" /> 
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <div class="row col-md-6">
                                            <label for="pwd" style="font-weight: bold;">Image 2:</label>
                                            </br>
                                            </br>
                                            <input name="image2" type="file" name="img" />
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>
                                    <div class="form-group">
                                        <div class="row col-md-6">
                                            <label for="pwd" style="font-weight: bold;">Image 3:</label>
                                            </br>
                                            </br>
                                            <input name="image3" type="file" name="img" />
                                        </div>
                                    </div>
                                    </br>
                                    </br>
                                    </br>
                                    </br>





                                    <button name="insertglass" class="btn btn success">Add Lense</button>
                        </form>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>

            <!-- ############ PAGE END-->

        </div>
    </div>
    <!-- / -->

    <!-- theme switcher -->
    <div id="switcher">
        <div class="switcher box-color dark-white text-color" id="sw-theme">
            <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
                <i class="fa fa-gear"></i>
            </a>
            <div class="box-header">
                <h2>Theme Switcher</h2>
            </div>
            <div class="box-divider"></div>
            <div class="box-body">
                <p class="hidden-md-down">
                    <label class="md-check m-y-xs" data-target="folded">
                        <input type="checkbox">
                        <i class="green"></i>
                        <span class="hidden-folded">Folded Aside</span>
                    </label>
                    <label class="md-check m-y-xs" data-target="boxed">
                        <input type="checkbox">
                        <i class="green"></i>
                        <span class="hidden-folded">Boxed Layout</span>
                    </label>
                </p>


                <p>Themes:</p>
                <div data-target="bg" class="text-u-c text-center _600 clearfix">
                    <label class="p-a col-xs-6 light pointer m-a-0">
                        <input type="radio" name="theme" value="" hidden>
                        LIGHT
                    </label>
                    <label class="p-a col-xs-6 grey pointer m-a-0">
                        <input type="radio" name="theme" value="grey" hidden>
                        GREY
                    </label>
                    <label class="p-a col-xs-6 dark pointer m-a-0">
                        <input type="radio" name="theme" value="dark" hidden>
                        Dark
                    </label>
                    <label class="p-a col-xs-6 black pointer m-a-0">
                        <input type="radio" name="theme" value="black" hidden>
                        Black
                    </label>
                </div>
                <br>

                <p>Language:</p>

                <form method="POST" action="lang" accept-charset="UTF-8"><input
                        name="_token" type="hidden" value="phXc8IdicjP9ZCgZHd8S3W5gEe91osmqrXfgWTvM">

                    <div class="form-group">
                        <select name="locale" id="locale" class="form-control c-select">
                            <option value="en" selected=&#039;selected&#039;>[ English ]</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success btn-sm" type="submit" value="Change">
                    </div>
                </form>
                <a href="admin/cache-clear"
                    onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear cache & temp
                        files?</small></a>
            </div>
        </div>

    </div>
    <!-- / -->

    <!-- ############ LAYOUT END-->

    </div>


    <script type="text/javascript">
    var public_lang = "en"; // this is a public var used in app.html.js to define path to js files
    var public_folder_path =
    "http://starholidaysgroup.com/beta"; // this is a public var used in app.html.js to define path to js files
    </script>
    <script src="backEnd/scripts/app.html.js"></script>



</body>

</html>





<?php
include('connection.php');
if (isset($_POST['insertglass'])) {
    $lenseName = $_POST['lensename'];
    $shortDescription = $_POST['shortdescription'];
    $longDescription = $_POST['longdescription'];
    $categoryName = $_POST['categoryname'];
    $color = $_POST['color'];
    $brand = $_POST['brand'];
    $quantity = $_POST['quantity'];
    $purchasePrice = $_POST['purchaseprice'];
    $salePrice = $_POST['saleprice'];
    $image   	= $_FILES['image1']['name'];
    $image1   	= $_FILES['image2']['name'];
    $image2   	= $_FILES['image3']['name'];
    $target   	= "images/".basename($_FILES['image1']['name']);
    $target1  	= "images/".basename($_FILES['image2']['name']);
    $target2  	= "images/".basename($_FILES['image3']['name']);
    

    $insertQuery = "INSERT INTO lense_table (lense_name,short_description,long_description,category_name,color,brand,quantity,purchase_price,sell_price,image1,image2,image3)
values ('$lenseName','$shortDescription','$longDescription','$categoryName','$color','$brand',$quantity,$purchasePrice,$salePrice,'$image','$image1','$image2')";

    $queryrun = mysqli_query($mysqli, $insertQuery);

    if(move_uploaded_file($_FILES['image1']['tmp_name'], $target) && $queryrun) {
        move_uploaded_file($_FILES['image2']['tmp_name'], $target1) && $queryrun;
        move_uploaded_file($_FILES['image2']['tmp_name'], $target2) && $queryrun;
    
?>
        <script>
            alert('Inserted Lense Successfully');
        </script>
    <?php
        //   header('location:product.php'); 

} else {
    ?>
        <script>
            alert('Not Inserted Lense');
        </script>

<?php
    }
} else {
    // echo 'data error';
}


?>