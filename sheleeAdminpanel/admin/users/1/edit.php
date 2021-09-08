<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>PROFILE | Star Holidays Group</title>
    <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="../../../backEnd/assets/images/logo.png">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" sizes="196x196" href="../../../backEnd/assets/images/logo.png">

    <!-- style -->
    <link rel="stylesheet" href="../../../backEnd/assets/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="../../../backEnd/assets/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="../../../backEnd/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../../../backEnd/assets/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="../../../backEnd/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../../../backEnd/assets/styles/app.min.css">
    <link rel="stylesheet" href="../../../backEnd/assets/styles/font.css" type="text/css" />


    <link href="../../../backEnd/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"> </head>

<body>

    <div class="app" id="app">

        <!-- ############ LAYOUT START-->

        <!-- SIDE NAVBAR START -->


        <?php 
include('../../../nav.php');
?>           <div ui-view class="app-body" id="view">

                <!-- ############ PAGE START-->
                <div class="padding">
                    <div class="box">
                        <div class="box-header dker">
                            <h3><i class="material-icons">&#xe3c9;</i> Edit Admin</h3>
                            <small>
                    <a href="http://starholidaysgroup.com/beta/admin">Home</a> /
                    <a href="">Settings</a> /
                    <a href="">Users &amp; Permissions</a>
                </small>
                        </div>
                        <div class="box-tool">
                            <ul class="nav">
                                <li class="nav-item inline">
                                    <a class="nav-link" href="#">
                            <i class="material-icons md-18">×</i>
                        </a>
                                </li>
                            </ul>
                        </div>
                        <div class="box-body">
                            <form method="POST" action="http://starholidaysgroup.com/beta/admin/users/1/update" accept-charset="UTF-8" enctype="multipart/form-data"><input name="_token" type="hidden" value="8B3YjHlHA92n9KTfOZDOhQrjpmWGGgK0aK5fh3W7">

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 form-control-label">Full Name
                    </label>
                                    <div class="col-sm-10">
                                        <input placeholder="" class="form-control" id="name" required="" name="name" type="text" value="admin">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 form-control-label">Login Email
                    </label>
                                    <div class="col-sm-10">
                                        <input placeholder="" class="form-control" id="email" required="" name="email" type="email" value="admin@site.com">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 form-control-label">Login Password
                    </label>
                                    <div class="col-sm-10">
                                        <input placeholder="" class="form-control" id="password" name="password" type="text" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="photo_file" class="col-sm-2 form-control-label">Photo</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div id="user_photo" class="col-sm-4 box p-a-xs">
                                                    <a target="_blank" href="http://starholidaysgroup.com/beta/uploads/users/15791701775245.jpg"><img
                                                    src="http://starholidaysgroup.com/beta/uploads/users/15791701775245.jpg"
                                                    class="img-responsive">
                                            15791701775245.jpg
                                        </a>
                                                    <br>
                                                    <a onclick="document.getElementById('user_photo').style.display='none';document.getElementById('photo_delete').value='1';document.getElementById('undo').style.display='block';" class="btn btn-sm btn-default">Delete</a>
                                                </div>
                                                <div id="undo" class="col-sm-4 p-a-xs" style="display: none">
                                                    <a onclick="document.getElementById('user_photo').style.display='block';document.getElementById('photo_delete').value='0';document.getElementById('undo').style.display='none';">
                                            <i class="material-icons">&#xe166;</i> Undo Delete
                                        </a>
                                                </div>

                                                <input id="photo_delete" name="photo_delete" type="hidden" value="0">
                                            </div>
                                        </div>

                                        <input class="form-control" id="photo" accept="image/*" name="photo" type="file">
                                        <small>
                            <i class="material-icons">&#xe8fd;</i>
                            Extensions: .png, .jpg, .jpeg, .gif
                        </small>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permissions1" class="col-sm-2 form-control-label">Permission</label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <select name="permissions_id" id="permissions_id" required class="form-control c-select">
                                    <option value="">- - Select Permissions Type - -</option>
                                                                            <option value="1" selected='selected'>Super Admin</option>
                                                                            <option value="2" >Admin</option>
                                                                            <option value="3" >Limited User</option>
                                                                            <option value="6" >Suppliers</option>
                                                                            <option value="7" >Customers</option>
                                                                    </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="link_status" class="col-sm-2 form-control-label">Status</label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <label class="ui-check ui-check-md">
                                    <input id="status1" class="has-value" checked="checked" name="status" type="radio" value="1">
                                    <i class="dark-white"></i>
                                    Active
                                </label> &nbsp; &nbsp;
                                            <label class="ui-check ui-check-md">
                                    <input id="status2" class="has-value" name="status" type="radio" value="0">
                                    <i class="dark-white"></i>
                                    Not Active
                                </label>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row m-t-md">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary m-t"><i class="material-icons">
                                &#xe31b;</i> Save Changes</button>
                                        <a href="http://starholidaysgroup.com/beta/admin/users" class="btn btn-default m-t"><i class="material-icons">
                                &#xe5cd;</i> Cancel</a>
                                    </div>
                                </div>

                            </form>
                        </div>
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

                    <form method="POST" action="http://starholidaysgroup.com/beta/lang" accept-charset="UTF-8"><input name="_token" type="hidden" value="8B3YjHlHA92n9KTfOZDOhQrjpmWGGgK0aK5fh3W7">

                        <div class="form-group">
                            <select name="locale" id="locale" class="form-control c-select">
                                                                            <option value="en" selected=&#039;selected&#039;>[ English ]</option>
                                            </select>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success btn-sm" type="submit" value="Change">
                        </div>
                    </form>
                    <a href="http://starholidaysgroup.com/beta/admin/cache-clear" onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear cache & temp files?</small></a>
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
    <script src="../../../backEnd/scripts/app.html.js"></script>



</body>

</html>