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
</head>

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
                        <h3>Services</h3>
                    </div>





                    <!--  <span class="tab_link_right">

                            <button type="button" class="btn btn-sm primary" id="btnNew" data-toggle="modal" data-target="#mmn-new" ui-toggle-class="bounce" ui-target="#animate">

                                Add Booking

                            </button>

                        </span> -->

                    <div class="row p-a">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary" href="newservices.php">
                                <i>&#xe02e;</i>
                                &nbsp; New Services
                            </a>
                        </div>
                    </div>








                    <form method="POST" accept-charset="UTF-8">
                        <input name="_token" type="hidden"
                            value="I0KGyVt2VAOnERrELpYVner9aWG0gr71QyqGezif">

                        <div class="table-responsive">

                            <table class="table table-striped  b-t">
                                <thead>
                                    <tr>
                                    <th>Customer Id</th>
                                            <th>Customer Name</th>
                                            <th>Customer Phone No</th>
                                            <th>Customer Address</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Date</th>
                                            <th>Time</th>                                      
                                        
                                            
                                            <th colspan="2">Operations</th>
                                    </tr>

                                </thead>
                                <tbody>

                                <?php
                                    include('connection.php');
                                        $selectquery = "Select * from customers";
                                        $query = mysqli_query($mysqli,$selectquery);
                                        $nums = mysqli_num_rows($query);
                                        while($res=mysqli_fetch_array($query)){
                                            ?>  
                                            <tr>
                                           
                                            <td><?php echo $res['customer_id'] ?></td>
                                            <td><?php echo $res['customer_name'] ?></td>
                                            <td><?php echo $res['address'] ?></td>
                                            <td><?php echo $res['customer_cell_no'] ?></td> 
                                            <td><?php echo $res['email'] ?></td> 
                                            <td><?php echo $res['password'] ?></td>                                       
                                            <td><?php echo $res['date'] ?></td>
                                            <td><?php echo $res['time'] ?></td>
                                           <!-- <td >  <center>  <a href="updateCustomer.php?id=<?php echo $res['customer_id'] ?>"> <i style="font-size: 18px;" class="fa fa-pencil-square-o" aria-hidden="true" ></i></a></center></td>
                                           <td >  <center> <a href="deleteCustomer.php?id=<?php echo $res['customer_id'] ?>"> <i style="font-size: 18px;" class="fa fa-trash" aria-hidden="true" ></i></center></td>
                                           <td >  <center> <a href="addSale.php?id=<?php echo $res['customer_id'] ?>" > AddSAle</a></center></td> -->

                                                
                                            
                                            </tr>
                                        
                                        <?php
                                        }
                                        ?>



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

                                            <!--  <script type="text/javascript">
                    $("#checkAll").click(function () {
                        $('input:checkbox').not(this).prop('checked', this.checked);
                    });
                    $("#action").change(function () {
                        if (this.value == "delete") {
                            $("#submit_all").css("display", "none");
                            $("#submit_show_msg").css("display", "inline-block");
                        } else {
                            $("#submit_all").css("display", "inline-block");
                            $("#submit_show_msg").css("display", "none");
                        }
                    });
                </script> -->
                                        </div>
                                    </div>
                                    <!-- ############ PAGE END-->

                                </div>
                            </div>
                            <!-- / -->

                            <!-- theme switcher -->
                            <div id="switcher">
                                <div class="switcher box-color dark-white text-color" id="sw-theme">
                                    <a href ui-toggle-class="active" target="#sw-theme"
                                        class="box-color dark-white text-color sw-btn">
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

                                        <form method="POST" action="lang"
                                            accept-charset="UTF-8"><input name="_token" type="hidden"
                                                value="jVT7st5GXmYyaFt2sI5Dsrv9UltSNEyQYeP9qJyq">

                                            <div class="form-group">
                                                <select name="locale" id="locale" class="form-control c-select">
                                                    <option value="en" selected=&#039;selected&#039;>[ English ]
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <input class="btn btn-success btn-sm" type="submit" value="Change">
                                            </div>
                                        </form>
                                        <a href="admin/cache-clear"
                                            onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear
                                                cache & temp files?</small></a>
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

                        <style>
                        .tabheading {
                            background: #ccc;
                            margin-left: 0px !important;
                            margin-right: 0px !important;
                        }

                        .tabheading h1 {
                            font-size: 18px;
                            padding: 15px;
                            padding-left: 10px;
                            margin: 0;
                        }

                        .tabheading h1 .tab_link_right {
                            float: right;
                            font-size: 14px;
                            padding-right: 50px;
                        }

                        .moadl800 {
                            width: 70%;
                        }
                        </style>
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>



                        <script>
                        jQuery(document).ready(function(e) {

                            jQuery('#agent_name_inv').on('change', function(event)

                                {

                                    jQuery('#go_ahead').val(1);

                                    jQuery('#agent_code_inv').val('');

                                    jQuery('#current_balance_inv').val('');

                                    jQuery('#credit_limit_inv').val('');

                                    jQuery('#invoice_erro_msg').css('display', 'none');

                                    jQuery('#invoice_erro_msg_2').css('display', 'none');



                                    jQuery('#add_invoice_sub').css('display', 'none');

                                    jQuery('#add_invoice_btn').css('display', 'inline-block');



                                    jQuery.get(
                                        'accounts/get_details/credit/' +
                                        this.value,
                                        function(account_details)

                                        {


                                            if (account_details.length > 0)

                                            {

                                                account_detail = $.parseJSON(account_details);

                                                var pending_invoice = account_detail.pending_invoice;



                                                if (pending_invoice == 0)

                                                {

                                                    var account_code = account_detail.account_code;

                                                    var available_limit = account_detail
                                                    .available_limit;

                                                    var credit_limit = account_detail.credit_limit;



                                                    jQuery('#agent_code_inv').val(account_code);

                                                    jQuery('#current_balance_inv').val(available_limit);

                                                    jQuery('#credit_limit_inv').val(credit_limit);



                                                    if (account_detail.payment_type == 1)

                                                    {

                                                        jQuery('#agent_payment_types').css('display',
                                                            'block');

                                                        if (available_limit > 0)

                                                        {

                                                            jQuery('#current_balance_inv').css(
                                                                'background', 'green');

                                                            jQuery('#current_balance_inv').css('color',
                                                                'white');



                                                            jQuery('#add_invoice_sub').css('display',
                                                                'inline-block');

                                                            jQuery('#add_invoice_btn').css('display',
                                                                'none');

                                                        } else

                                                        {

                                                            jQuery('#go_ahead').val(0);

                                                            jQuery('#current_balance_inv').css(
                                                                'background', 'red');

                                                            jQuery('#current_balance_inv').css('color',
                                                                'white');

                                                            jQuery('#invoice_erro_msg').css('display',
                                                                'block');

                                                        }

                                                    } else

                                                    {

                                                        jQuery('#agent_payment_types').css('display',
                                                            'none');

                                                    }

                                                } else

                                                {

                                                    jQuery('#go_ahead').val(0);

                                                    jQuery('#invoice_erro_msg_2').css('display',
                                                        'block');

                                                    jQuery('#pending_invoice').attr("href",
                                                        account_detail.pending_url);

                                                }

                                            }

                                        });

                                });

                            jQuery('#add_invoice_btn').click(function(e) {

                                var available_limit = jQuery('#current_balance_inv').val();;

                                var credit_limit = jQuery('#credit_limit_inv').val();

                                var go_ahead = jQuery('#go_ahead').val();

                                if (go_ahead == 1)

                                {

                                    jQuery('#add_invoice_sub').css('display', 'block');

                                    jQuery('#add_invoice_btn').css('display', 'none');

                                } else

                                {

                                    jQuery('#invoice_erro_msg').css('display', 'block');

                                }

                            });



                        });
                        </script>


</body>

</html>