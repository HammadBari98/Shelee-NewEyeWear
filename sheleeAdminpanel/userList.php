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
    <!-- <link rel="apple-touch-icon" href="http://starholidaysgroup.com/beta/backEnd/assets/images/logo.png"> -->
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <!-- <link rel="shortcut icon" sizes="196x196" href="http://starholidaysgroup.com/beta/backEnd/assets/images/logo.png"> -->

    <!--   style -->
    <link rel="stylesheet" href="backEnd/assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="backEnd/assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="app.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="http://starholidaysgroup.com/beta/backEnd/assets/styles/font.css" type="text/css" /> -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>

</style>

<body>

    <div class="app" id="app">
        <?php 
        include('nav.php');
         
     
     ?>
        <div ui-view class="app-body" id="view">

            <!-- ############ PAGE START-->
            <div class="padding">
                <div class="box">
                    <div class="box-header dker leftHead">

                        <h3>Manage USers</h3>
                    </div>
                    <div class="row p-a">
                            <div class="col-sm-12">
                                <a class="btn btn-fw primary" href="addUser.php">
                                <i>&#xe02e;</i>
                                &nbsp; Add New User
                            </a>
                            </div>
                        </div>





                    <form method="POST" accept-charset="UTF-8"><input name="_token" type="hidden"
                            value="I0KGyVt2VAOnERrELpYVner9aWG0gr71QyqGezif">

                        <div class="table-responsive">

                            <table class="table table-striped  b-t">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>User Name</th>
                                        <th>Password</th>
                                  
                                        <th>Date</th>
                                        <th>Time</th>


<th colspan="2"> <center>
Operations 
</center> </th>

                                      
                                    </tr>

                                </thead>
                                <tbody>

                                    <tr>

                                      
                                <?php
                                    include('connection.php');
                                        $selectquery = "Select * from users";
                                        $query = mysqli_query($mysqli,$selectquery);
                                        $nums = mysqli_num_rows($query);
                                        while($res=mysqli_fetch_array($query)){
                                            ?>  
                                            <tr>
                                           
                                            <td><?php echo $res['user_id'] ?></td>
                                            <td><?php echo $res['username'] ?></td>
                                            <td><?php echo $res['user_password'] ?></td>
                                                                   
                                            <td><?php echo $res['date'] ?></td>
                                            <td><?php echo $res['time'] ?></td>
                                          
                                            <td >  <center>  <a href="updateUser.php?id=<?php echo $res['user_id'] ?>"> <i style="font-size: 18px;" class="fa fa-pencil-square-o" aria-hidden="true" ></i></a></center></td>
                                           <td >  <center> <a href="deleteUser.php?id=<?php echo $res['user_id'] ?>"> <i style="font-size: 18px;" class="fa fa-trash" aria-hidden="true" ></i></center></td>
                                          

                                                
                                            
                                            </tr>
                                        
                                        <?php
                                        }
                                        ?>

                                       
                                       

                                      

                                    </tr>
                              
                                  

                                </tbody>
                            </table>
                            

                        </div>
                    </form>
                        <script type="text/javascript">
                        $("#checkAll").click(function() {
                            $('input:checkbox').not(this).prop('checked', this.checked);
                        });
                        $("#action").change(function() {
                            if (this.value == "delete") {
                                $("#submit_all").css("display", "none");
                                $("#submit_show_msg").css("display", "inline-block");
                            } else {
                                $("#submit_all").css("display", "inline-block");
                                $("#submit_show_msg").css("display", "none");
                            }
                        });
                        </script>

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

                <form method="POST" action="http://starholidaysgroup.com/beta/lang" accept-charset="UTF-8"><input
                        name="_token" type="hidden" value="I0KGyVt2VAOnERrELpYVner9aWG0gr71QyqGezif">

                    <div class="form-group">
                        <select name="locale" id="locale" class="form-control c-select">
                            <option value="en" selected=&#039;selected&#039;>[ English ]</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success btn-sm" type="submit" value="Change">
                    </div>
                </form>
                <a href="#" onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear cache
                        & temp files?</small></a>
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


    <script type="text/javascript">
    $("#checkAll").click(function() {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $("#action").change(function() {
        if (this.value == "delete") {
            $("#submit_all").css("display", "none");
            $("#submit_show_msg").css("display", "inline-block");
        } else {
            $("#submit_all").css("display", "inline-block");
            $("#submit_show_msg").css("display", "none");
        }
    });
    </script>

</body>

</html>