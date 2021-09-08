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


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"> </head>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    
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
                            <h3>Manage Booking</h3>
                        </div>





                       <!--  <span class="tab_link_right">

                            <button type="button" class="btn btn-sm primary" id="btnNew" data-toggle="modal" data-target="#mmn-new" ui-toggle-class="bounce" ui-target="#animate">

                                Add Booking

                            </button>

                        </span> -->
                     
                        <div class="row p-a">
                            <div class="col-sm-12">
                                <a class="btn btn-fw primary" href="newbooking.php">
                                <i>&#xe02e;</i>
                                &nbsp; New Booking
                            </a>
                            </div>
                        </div>


<h5>Booking</h5>



                        



                        <form method="POST" action="#" accept-charset="UTF-8"><input name="_token" type="hidden" value="jVT7st5GXmYyaFt2sI5Dsrv9UltSNEyQYeP9qJyq">
                            <div class="table-responsive">
                                <table class="table table-striped  b-t">
                                    <thead>
                                        <tr>
                                            
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <!-- <th>Customer</th> -->
                                          
                                            <th>Products detail</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>phone Number</th>
                                            <th>Booking Date</th>

                                            <th class="text-center" style="width:50px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            1
                                               </td>

                                            <td>
                                            Rafay
                                            </td>

                                          

                                            <td>
                                            glasses
                                            </td>

                                            <td>
                                                Rs:600/=
                                            </td>

                                            <td>
                                            2
                                            </td>
                                            
                                            <td>
                                            0213455677
                                            </td>
                                            <td>
                                           02-04-2021
                                            </td>
                                           
                                         
                                            <td class="text-center">
                                                <a class="btn btn-sm success" href="newbooking.php">
                                    <small>
                                        <i class="material-icons">&#xe3c9;</i> Details </small>
                                </a>
                                <!-- Model For View -->
                        
<br>
<br>        


                                <!-- model end -->

                                                <a class="btn btn-sm success" href="#">
                                    Complete
                                </a>


                                            </td>
                                        </tr>

                                        <tr>
                                                                                        <td>

2
</td>

                                            <td>
                                            Rafay
                                            </td>

                                          

                                            <td>
                                            glasses
                                            </td>

                                            <td>
                                                Rs:600/=
                                            </td>

                                            <td>
                                            2
                                            </td>
                                            
                                            <td>
                                            0213455677
                                            </td>
                                            <td>
                                           02-04-2021
                                            </td>
                                          
                                         
                                            <td class="text-center">
                                                <a class="btn btn-sm success" href="newbooking.php">
                 
                                                <small>
                                        <i class="material-icons">&#xe3c9;</i> Details </small>
                                </a>
                                <!-- Model For View -->
                                

<br>
<br>
                                <!-- model end -->

                                                <a class="btn btn-sm success" href="#">
                                    Complete
                                </a>


                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <footer class="dker p-a">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs">
                                    <!-- .modal -->
                                    <div id="m-all" class="modal fade" data-backdrop="true">
                                        <div class="modal-dialog" id="animate">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Confirmation</h5>
                                                </div>
                                                <div class="modal-body text-center p-lg">
                                                    <p>
                                                        Are you sure you want to delete?
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">Sr #</button>
                                                    <button type="submit" class="btn danger p-x-md">Yes</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    </div>
                                    <!-- / .modal -->
                                </button>
                                </div>
                                <div class="col-sm-6 text-right text-center-xs">

                                </div>

                            </div>
                            <div class="padding">
                    <div class="box">
            




                       <!--  <span class="tab_link_right">

                            <button type="button" class="btn btn-sm primary" id="btnNew" data-toggle="modal" data-target="#mmn-new" ui-toggle-class="bounce" ui-target="#animate">

                                Add Booking

                            </button>

                        </span> -->
                     

<h5>Complete Booking</h5>



                        



                        <form method="POST" action="#" accept-charset="UTF-8"><input name="_token" type="hidden" value="jVT7st5GXmYyaFt2sI5Dsrv9UltSNEyQYeP9qJyq">
                            <div class="table-responsive">
                                <table class="table table-striped  b-t">
                                    <thead>
                                        <tr>
                                            
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <!-- <th>Customer</th> -->
                                          
                                            <th>Products detail</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>phone Number</th>
                                            <th>Booking Date</th>
                                           
                                            <th class="text-center" style="width:50px;">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                              1
                                                  </td>

                                            <td>
                                            Rafay
                                            </td>

                                          

                                            <td>
                                            glasses
                                            </td>

                                            <td>
                                                Rs:600/=
                                            </td>

                                            <td>
                                            2
                                            </td>
                                            
                                            <td>
                                            0213455677
                                            </td>
                                            <td>
                                           02-04-2021
                                            </td>
                                         
                                         
                                            <td class="text-center">
                                            <a class="btn btn-sm success" href="newbooking.php">
                                    <small>
                                        <i class="material-icons">&#xe3c9;</i> Details </small>
                                </a>    
    
<br>
<br>
                                <a class="btn btn-sm success" href="#">
                                    <small>
                                        <i class="material-icons">&#xe3c9;</i> Delete </small>
                                </a>
                                <!-- Model For View -->
                                


                                <!-- model end -->

                                              


                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                          2
                                            </td>

                                            <td>
                                            Rafay
                                            </td>

                                         

                                            <td>
                                            glasses
                                            </td>

                                            <td>
                                                Rs:600/=
                                            </td>

                                            <td>
                                            2
                                            </td>
                                            
                                            <td>
                                            0213455677
                                            </td>
                                            <td>
                                           02-04-2021
                                            </td>
                                        
                                         
                                            <td class="text-center">
                                            <a class="btn btn-sm success" href="newbooking.php">
                                    <small>
                                        <i class="material-icons">&#xe3c9;</i> Details </small>
                                </a>
    
<br>
<br>
                                <a class="btn btn-sm success" href="#">
                                    <small>
                                        <i class="material-icons">&#xe3c9;</i> Delete </small>
                                </a>
                                <!-- Model For View -->
                                


                                <!-- model end -->

                                           


                                            </td>
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
            <!-- <i class="fa fa-gear"></i> --><i class="fa fa-bars" aria-hidden="true"></i>
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

                    <form method="POST" action="lang" accept-charset="UTF-8"><input name="_token" type="hidden" value="O78qCGU88WjLpmJiIhAMaJXw3x66XWbVjItm1bcp">

                        <div class="form-group">
                            <select name="locale" id="locale" class="form-control c-select">
                                                                            <option value="en" selected=&#039;selected&#039;>[ English ]</option>
                                            </select>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success btn-sm" type="submit" value="Change">
                        </div>
                    </form>
                    <a href="#" onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear cache & temp files?</small></a>
                </div>
            </div>

        </div>
        <!-- / -->

        <!-- ############ LAYOUT END-->

    </div>


    <script type="text/javascript">
        var public_lang = "en"; // this is a public var used in app.html.js to define path to js files
        var public_folder_path = "http://starholidaysgroup.com/beta"; // this is a public var used in app.html.js to define path to js files
    </script>
    <script src="backEnd1/scripts/app.html.js"></script>


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

</html>s