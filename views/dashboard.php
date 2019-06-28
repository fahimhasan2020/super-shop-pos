<?php
if(!isset($_SESSION) )session_start();
include_once('../vendor/autoload.php');
use App\Auth;
use Model\Message;
use Model\Utility;

$auth= new Auth();
$status = $auth->setData($_SESSION)->logged_in();
if(!$status) {
    Utility::redirect('login.php');
    return;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../resources/assets/images/favicon.ico">
    <!-- App title -->
    <title>Zircos - Responsive Admin Dashboard Template</title>

    <!-- App css -->
    <link href="../resources/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="../resources/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../resources/plugins/switchery/switchery.min.css">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="../resources/assets/js/modernizr.min.js"></script>

</head>
<body class="fixed-left">
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="spinner-wrapper">
                <div class="rotator">
                    <div class="inner-spin"></div>
                    <div class="inner-spin"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="dashboard.php" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-cube"></i></a>
            <!-- Image logo -->
            <!--<a href="index.html" class="logo">-->
            <!--<span>-->
            <!--<img src="assets/images/logo.png" alt="" height="30">-->
            <!--</span>-->
            <!--<i>-->
            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
            <!--</i>-->
            <!--</a>-->
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Navbar-left -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                    <li class="hidden-xs">
                        <form role="search" class="app-search">
                            <input type="text" placeholder="Search..."
                                   class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="dropdown-toggle menu-item waves-effect waves-light" href="#" aria-expanded="false">English
                            <span class="caret"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Right(Notification) -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                            <i class="mdi mdi-settings"></i>
                        </a>
                    </li>
                    <li>
                        <a href="pos.php" class="right-menu-item">
                            <i class="mdi mdi-cart"></i>
                        </a>
                    </li>
                    <li class="dropdown user-box">
                        <a href="" class="dropdown-toggle waves-effect waves-light user-link" data-toggle="dropdown" aria-expanded="true">
                            <img src="../resources/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle user-img">
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                            <li>
                                <h5>Hi, John</h5>
                            </li>
                            <li><a href="auth/logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul> <!-- end navbar-right -->
            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- User detail -->
                <div class="user-details">
                    <div class="overlay"></div>
                    <div class="text-center">
                        <img src="../resources/assets/images/users/avatar-1.jpg" alt="" class="thumb-md img-circle">
                    </div>
                    <div class="user-info">
                        <div>
                            <a href="#setting-dropdown" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Daniel Syme <span class="mdi mdi-menu-down"></span></a>
                        </div>
                    </div>
                </div>
                <!-- end user detail -->
                <div class="dropdown" id="setting-dropdown">
                    <ul class="dropdown-menu">
                        <li><a href="auth/logout.php"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                    </ul>
                </div>
                <ul>
                    <li class="menu-title">Navigation</li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span> </a>

                    </li>
                    <li>
                        <a href="user.php" class="waves-effect"><i class="mdi mdi-account-circle"></i><span> User </span></a>
                    </li>
                    <li>
                        <a href="sales.php" class="waves-effect"><i class="mdi mdi-cart-outline"></i><span> Sales </span></a>
                    </li>
                    <li>
                        <a href="" class="waves-effect"><i class="mdi mdi-clipboard-text"></i><span> Invoices </span></a>
                    </li>
                    <li>
                        <a href="pos.php" class="waves-effect"><i class=" mdi mdi-buffer"></i><span> Pos </span></a>
                    </li>
                    <li>
                        <a href="products.php" class="waves-effect"><i class=" mdi mdi-cart"></i><span> Products </span></a>
                    </li>
                </ul>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>
            <div class="help-box">
                <h5 class="text-muted m-t-0">For Help ?</h5>
                <p class=""><span class="text-dark"><b>Email:</b></span> <br/> support@support.com</p>
                <p class="m-b-0"><span class="text-dark"><b>Call:</b></span> <br/> (+123) 123 456 789</p>
            </div>
        </div>
        <!-- Sidebar -left -->
    </div>
    <!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Dashboard </h4>
                            <ol class="breadcrumb p-0 m-0">
                                <li>
                                    <a href="#">Zircos</a>
                                </li>
                                <li>
                                    <a href="#">Pages </a>
                                </li>
                                <li class="active">
                                    Blank Page
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <!-- end row -->

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Statistics</p>
                                <h2>34578 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                <p class="text-muted m-0"><b>Last:</b> 30.4k</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-account-convert widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User Today">User Today</p>
                                <h2>895 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                                <p class="text-muted m-0"><b>Last:</b> 1250</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-layers widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">User This Month</p>
                                <h2>52410 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                <p class="text-muted m-0"><b>Last:</b> 40.33k</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-av-timer widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Request Per Minute">Request Per Minute</p>
                                <h2>652 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                                <p class="text-muted m-0"><b>Last:</b> 956</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-account-multiple widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Total Users">Total Users</p>
                                <h2>3245 <small><i class="mdi mdi-arrow-down text-danger"></i></small></h2>
                                <p class="text-muted m-0"><b>Last:</b> 20k</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="card-box widget-box-one">
                            <i class="mdi mdi-download widget-one-icon"></i>
                            <div class="wigdet-one-content">
                                <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="New Downloads">New Downloads</p>
                                <h2>78541 <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
                                <p class="text-muted m-0"><b>Last:</b> 50k</p>
                            </div>
                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->
            </div> <!-- container -->
        </div> <!-- content -->
        <footer class="footer text-right">
            2016 - 2018 © Zircos.
        </footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        <a href="javascript:void(0);" class="right-bar-toggle">
            <i class="mdi mdi-close-circle-outline"></i>
        </a>
        <h4 class="">Settings</h4>
        <div class="setting-list nicescroll">
            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Notifications</h5>
                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>
            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">API Access</h5>
                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Auto Updates</h5>
                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>

            <div class="row m-t-20">
                <div class="col-xs-8">
                    <h5 class="m-0">Online Status</h5>
                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                </div>
                <div class="col-xs-4 text-right">
                    <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                </div>
            </div>
        </div>
    </div>
    <!-- /Right-bar -->
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="../resources/assets/js/jquery.min.js"></script>
<script src="../resources/assets/js/bootstrap.min.js"></script>
<script src="../resources/assets/js/detect.js"></script>
<script src="../resources/assets/js/fastclick.js"></script>
<script src="../resources/assets/js/jquery.blockUI.js"></script>
<script src="../resources/assets/js/waves.js"></script>
<script src="../resources/assets/js/jquery.slimscroll.js"></script>
<script src="../resources/assets/js/jquery.scrollTo.min.js"></script>
<script src="../resources/plugins/switchery/switchery.min.js"></script>
<!-- App js -->
<script src="../resources/assets/js/jquery.core.js"></script>
<script src="../resources/assets/js/jquery.app.js"></script>
</body>
</html>