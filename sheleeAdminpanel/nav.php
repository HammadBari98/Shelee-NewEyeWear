<div id="aside" class="app-aside modal fade folded md nav-expand">

    <div class="left navside dark dk" layout="column">
        <div class="navbar navbar-md no-radius">
            <!-- brand -->
            <a class="navbar-brand" href="#">
                <span style="font-size:16px;">New View Eyewear</span>
            </a>
            <!-- / brand -->
        </div>
        <div flex class="hide-scroll">
            <nav class="scroll nav-active-primary">

                <ul class="nav" ui-nav>
                    <li class="nav-header hidden-folded">
                        <small class="text-muted">Main</small>
                    </li>





                    <!-- <li>
                                    <a href="admin/1/topics">
                      <span class="nav-icon">
                        <i class="material-icons">&#xe3e8;</i>
                      </span>
                                            <span
                                                class="nav-text">Site pages</span>
                                        </a>

                                    </li> -->
                    <li>
                        <a href="admin.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe3fc;</i>
                            </span>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="glassList.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe540;</i>
                            </span>
                            <span class="nav-text">Glasses List</span>
                        </a>
                    </li>
                    <li>
                        <a href="lenseList.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe540;</i>
                            </span>
                            <span class="nav-text">Lenses List</span>
                        </a>
                    </li>
                    <li>

                        <a href="customerList.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe2c8;</i>
                            </span>
                            <span class="nav-text">Customer List</span>
                        </a>
                    </li>
                  
                    <li>

                        <a href="userList.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe2c8;</i>
                            </span>
                            <span class="nav-text">Users List</span>
                        </a>
                    </li>
                    <li> 

<a href="invoices.php">
    <span class="nav-icon">
        <i class="material-icons">&#xe2c8;</i>
    </span>
    <span class="nav-text">Invoices</span>
</a>
</li>
<li>
                        <a href="customerCart.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe2c8;</i>
                            </span>
                            <span class="nav-text">Customer Cart</span>
                        </a>
                    </li>
                    <!-- <li>

                        <a href="customer.php">
                            <span class="nav-icon">
                                <i class="material-icons">&#xe2c8;</i>
                            </span>
                            <span class="nav-text">customer</span>
                        </a>
                    </li> -->

                </ul>
            </nav>
        </div>
    </div>

</div>

<div class="app-content box-shadow-z0" role="main">
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
                            <img src="uploads/users/15791701775245.jpg" alt="admin"
                                title="admin">
                            <i class="on b-white bottom"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-scale">

                        <a class="dropdown-item" href="edit.php"><span>Profile</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php"><span>Logout</span></a>

                        <form action="" method="POST" style="display: none;">
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
                <form method="POST" action="" accept-charset="UTF-8" role="search"
                    class="navbar-form form-inline pull-right pull-none-sm navbar-item v-m"><input name="_token"
                        type="hidden" value="phXc8IdicjP9ZCgZHd8S3W5gEe91osmqrXfgWTvM">

                    <div class="form-group l-h m-a-0">
                        <div class="input-group input-group-sm"><input type="text" name="q"
                                class="form-control p-x b-a rounded" placeholder="Search..." required>
                            <span class="input-group-btn"><button type="submit"
                                    class="btn white b-a rounded no-shadow"><i class="fa fa-search"></i></button></span>
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