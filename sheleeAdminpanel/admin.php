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
    <link rel="stylesheet" type="text/css" href="backEnd1/assets/styles/flags.css" />
</head>

<body>

    <div class="app" id="app">
    <?php
            include('nav.php');
            ?>            
            <div ui-view class="app-body" id="view">

                <!-- ############ PAGE START-->
                <div class="padding p-b-0">
                    <div class="margin">
                        <h5 class="m-b-0 _300">Hi <span class="text-primary">admin</span>, Welcome back
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-4">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="box p-a" style="cursor: pointer">
                                        <a href="">
                                            <div class="pull-left m-r">
                                                <i class="material-icons  text-2x text-info m-y-sm">&#xe3e8;</i>
                                            </div>
                                            <div class="clear">
                                                <div class="text-muted">Site pages</div>
                                                <h4 class="m-a-0 text-md _600">20</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="box p-a" style="cursor: pointer" >
                                        <a href="#">
                                            <div class="pull-left m-r">
                                                <i class="material-icons  text-2x text-danger m-y-sm">&#xe540;</i>
                                            </div>
                                            <div class="clear">
                                                <div class="text-muted">Services</div>
                                                <h4 class="m-a-0 text-md _600">5</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="box p-a" style="cursor: pointer" >
                                        <a href="">
                                            <div class="pull-left m-r">
                                                <i class="material-icons  text-2x text-success m-y-sm">&#xe307;</i>
                                            </div>
                                            <div class="clear">
                                                <div class="text-muted">News</div>
                                                <h4 class="m-a-0 text-md _600">6</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="box p-a" style="cursor: pointer" >
                                        <a href="">
                                            <div class="pull-left m-r">
                                                <i class="material-icons  text-2x text-accent m-y-sm">&#xe2c8;</i>
                                            </div>
                                            <div class="clear">
                                                <div class="text-muted">Blog</div>
                                                <h4 class="m-a-0 text-md _600">8</h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row-col box-color text-center primary">
                                        <div class="row-cell p-a">
                                            Visitors
                                            <h4 class="m-a-0 text-md _600"><a href>1</a></h4>
                                        </div>
                                        <div class="row-cell p-a dker">
                                            Page Views
                                            <h4 class="m-a-0 text-md _600"><a href>3</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-8">
                            <div class="row-col box bg">
                                <div class="col-sm-8">
                                    <div class="box-header">
                                        <h3>Visitors</h3>
                                        <small>Visitors for the last 7 Days</small>
                                    </div>
                                    <div class="box-body">
                                        <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
			              [
			                {
			                  data: [
                                              
                                                                                                                                                                                                                                        [1, 1]
                                                                                                                                                                                                                                            ],
                                  points: { show: true, radius: 0},
                                  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
                                },
                                {
                                  data: [
                                                                                                              
                                                                                                                                                                                                                                                                                                [1, 3]
                                                                                                                                                                                    ],
      points: { show: true, radius: 0},
      splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0 }
    }
  ],
  {
    colors: ['#0cc2aa','#fcc100'],
    series: { shadowSize: 3 },
    xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
    yaxis:{ show: true, font: { color: '#ccc' }},
    grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
    tooltip: true,
    tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
  }
" style="height:162px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 dker">
                                    <div class="box-header">
                                        <h3>Reports</h3>
                                    </div>
                                    <div class="box-body">
                                        <p class="text-muted">
                                            You can view more reports : <br>
                                            <a href="admin/analytics/date">By date</a>,
                                            <a href="admin/analytics/country">Country</a>,
                                            <a href="admin/analytics/city">City</a>,
                                            <a href="admin/analytics/os">Operating system</a>,
                                            <a href="admin/analytics/browser">Browser</a>,
                                            <a href="admin/analytics/referrer">Reach way</a>,
                                            <a href="admin/analytics/hostname">Host name</a>,
                                            <a href="admin/analytics/org">Organization</a>
                                        </p>
                                        <a href="" style="margin-bottom: 5px;" class="btn btn-sm btn-outline rounded b-success">View More</a><br>
                                        <a href="" class="btn btn-sm btn-outline rounded b-info">Visitors History</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xl-4">
                            <div class="box">
                                <div class="box-header">
                                    <h3>Visitors Rate</h3>
                                    <small>Visitors rate over the current day [ 2021-03-03 ]</small>
                                </div>
                                <div class="box-body">

                                    <div ui-jp="plot" ui-options="
              [
                {
                  data: [[0,1], [2,1], [4,1], [6,1], [8,1], [10,1], [12,1], [14,1], [16,1], [18,1], [20,1], [22,1]],
                  points: { show: true, radius: 5},
                  splines: { show: true, tension: 0.45, lineWidth: 0, fill: 0.4}
                }
              ],
              {
                colors: ['#0cc2aa'],
                series: { shadowSize: 3 },
                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
                yaxis:{ show: true, font: { color: '#ccc' }, min:1},
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
                tooltip: true,
                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
              }
            " style="height:200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="box" style="min-height: 300px">
                                <div class="box-header">
                                    <h3>Browsers</h3>
                                    <small>Calculated in last 7 days</small>
                                </div>

                                <div class="text-center b-t">
                                    <div class="row-col">
                                        <div class="row-cell p-a">
                                            <div class="inline m-b">
                                                <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw='true' data-percent="55" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#0cc2aa',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
                                                    <div>
                                                        <h5>
                                                            100% </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                Chrome
                                                <small class="block m-b">1</small>
                                                <a href="" class="btn btn-sm white text-u-c rounded">More</a>
                                            </div>
                                        </div>
                                        <div class="row-cell p-a dker">
                                            <div class="inline m-b">
                                                <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw='true' data-percent="45" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#fcc100',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
                                                    <div>
                                                        <h5>
                                                            0% </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                Other Browsers
                                                <small class="block m-b">0</small>
                                                <a href="" class="btn btn-sm white text-u-c rounded">More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="box light lt" style="min-height: 300px">
                                <div class="box-header">
                                    <h3> Today by country</h3>
                                </div>
                                <div class="box-tool">
                                    <ul class="nav">
                                        <li class="nav-item inline">
                                            <a href="" class="btn btn-sm white text-u-c rounded">More</a>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="list no-border p-b">
                                    <li class="list-item">


                                        <a herf class="list-left">
	                  <span class="w-40 rounded dker">
		                  <span>PK</span>
		              </span>
                                        </a>
                                        <div class="list-body">
                                            <div>
                                                <div class='flag flag-pk' style='display: inline-block'></div> Pakistan</div>
                                            <small class="text-muted text-ellipsis">
                                                Visitors : 1,
                                                Page Views : 3
                                            </small>
                                        </div>


                                    </li>

                                </ul>
                            </div>
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
                    <a href="backEnd1/scripts/app.html.js" onclick="return confirm('Are you sure to clear cache &amp; temp files?')"><small>Clear cache & temp files?</small></a>
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