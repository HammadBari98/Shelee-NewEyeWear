

<?php include('connection.php');

// session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signin"])) {



  $myusername = mysqli_real_escape_string($mysqli, $_POST['email']);
  $mypassword = mysqli_real_escape_string($mysqli, $_POST['password']);

  $sql = "SELECT user_id FROM users WHERE username = '$myusername' and user_password = '$mypassword'";

  $result = mysqli_query($mysqli, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);


  if ($count >= 1) {
    //  session_register("myusername");
    $_SESSION['login_user'] = $myusername;
    // $_SESSION['login_id'] = $id1;
    echo '<script>
    alert("login successfully");
    </script>';
    header("location:admin.php");
  } else {
    //  $error = "Your Login Name or Password is invalid";
    echo '<script>
 alert("invalid name and password");
 </script>';
  }
}
?>





<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New View Eyewear</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="backEnd1/assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="backEnd1/assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="backEnd1/assets/animate.css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="backEnd1/assets/glyphicons/glyphicons.css" type="text/css">
    <link rel="stylesheet" href="backEnd1/assets/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="backEnd1/assets/material-design-icons/material-design-icons.css" type="text/css">

    <link rel="stylesheet" href="backEnd1/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="backEnd1/assets/styles/app.min.css">
    <link rel="stylesheet" href="backEnd1/assets/styles/font.css" type="text/css">


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #312482;
        }

        #center {
            width: 360Px;
            padding: 100px;
        }
    </style>

</head>

<body class=" smart pace-done" ui-class="">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="app" id="app">

        <!-- ############ LAYOUT START-->
        <div class="center-block w-xxl w-auto-xs p-y-md">
            <div class="navbar">
                <div class="pull-center">
                    <div>
                        <a class="navbar-brand"> </a>
                    </div>
                </div>
            </div>

            <div id="center" class="p-a-md box-color r box-shadow-z1 text-color">

                <img src="logo1.png" style="width:250px;" />
                <div class="m-b text-sm">
                    Sign in to CONTROL
                </div>
                <form  method="POST">
                    <input type="hidden" name="_token" value="taxf2uB6I24pbD9JmAFaxnoWQbJYeUg26VHxVHMU" class="has-value">

                    <div class="md-form-group float-label ">
                        <input type="text" name="email" value="" class="md-input">
                        <label>Email</label>
                    </div>
                    <div class="md-form-group float-label ">
                        <input type="password" name="password" class="md-input">
                        <label>Password</label>
                    </div>
                    <div class="m-b-md">
                        <label class="md-check">
                            <input type="checkbox" name="remember" class="has-value"><i class="primary"></i> Keep me signed in
                        </label>
                    </div>
                   
                        <center> <button name="signin" class="btn btn-sm primary ">Sign in
                    </button></center>

                </form>
                <hr>


            </div>



        </div>

        <!-- ############ LAYOUT END-->


    </div>
    <script type="text/javascript">
        var public_lang = "en"; // this is a public var used in app.html.js to define path to js files
        var public_folder_path = "http://starholidaysgroup.com/beta"; // this is a public var used in app.html.js to define path to js files
    </script>
   
    <script src="backEnd1/scripts/app.html.js"></script>
    <script src="backEnd1/libs/jquery/screenfull/dist/screenfull.min.js"></script>





</body>

</html>
