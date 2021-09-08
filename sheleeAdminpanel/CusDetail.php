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
    <div ui-view class="app-body" id="view">

                <!-- ############ PAGE START-->
                <div class="padding p-b-0">
                    
                    
                    <div class="container">

  <h2>Details Customer form</h2>
  <form action="/action_page.php">
<div class="column">
    <div class="form-group">

<div class="row col-md-6">
      <label >Client Name</label>
      <br>
    
      <input  class="form-control" placeholder="Bilal" >
    </div>
</div>
</br>
</br>
</br>
</br>

<div class="form-group">
                <div class="row col-md-6">
      <label >Cell Email</label>
      <input  class="form-control" placeholder="03003302234" >
    </div>
</div>
</br>
</br>
</br>
</br>



    <div class="form-group">
                <div class="row col-md-6">
      <label >Cell Number</label>
      <input  class="form-control" placeholder="03003302234" >
    </div>
</div>
</br>
</br>
</br>
</br>


    <div class="form-group">
                        <div class="row col-md-6">
      <label >Client Address</label>
    
    <input  class="form-control" placeholder="Block-13, Gulshan e Iqbal" >
    </div>
</div>
</br>
</br>
</br>
</br>


    <button class="btn btn-primary">Update</button>
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

                    <form method="POST" action="lang" accept-charset="UTF-8"><input name="_token" type="hidden" value="phXc8IdicjP9ZCgZHd8S3W5gEe91osmqrXfgWTvM">

                        <div class="form-group">
                            <select name="locale" id="locale" class="form-control c-select">
                                                                            <option value="en" selected=&#039;selected&#039;>[ English ]</option>
                                            </select>
                        </div>

                        <div class="form-group">
                            <input class="btn btn-success btn-sm" type="submit" value="Change">
                        </div>
                    </form>
                    <a href="admin/cache-clear" onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear cache & temp files?</small></a>
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
    <script src="backEnd/scripts/app.html.js"></script>



</body>

</html>