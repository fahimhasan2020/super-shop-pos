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
            <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-cube"></i></a>
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
                    <li class="hidden-xs">
                        <a href="#" class="menu-item waves-effect waves-light">New</a>
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
                        <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge up bg-primary">4</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                            <li>
                                <h5>Notifications</h5>
                            </li>
                            <li>
                                <a href="#" class="user-list-item">
                                    <div class="icon bg-info">
                                        <i class="mdi mdi-account"></i>
                                    </div>
                                    <div class="user-desc">
                                        <span class="name">New Signup</span>
                                        <span class="time">5 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-list-item">
                                    <div class="icon bg-danger">
                                        <i class="mdi mdi-comment"></i>
                                    </div>
                                    <div class="user-desc">
                                        <span class="name">New Message received</span>
                                        <span class="time">1 day ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-list-item">
                                    <div class="icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                    <div class="user-desc">
                                        <span class="name">Settings</span>
                                        <span class="time">1 day ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="all-msgs text-center">
                                <p class="m-0"><a href="#">See all Notification</a></p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                            <i class="mdi mdi-email"></i>
                            <span class="badge up bg-danger">8</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                            <li>
                                <h5>Messages</h5>
                            </li>
                            <li>
                                <a href="#" class="user-list-item">
                                    <div class="avatar">
                                        <img src="../resources/assets/images/users/avatar-2.jpg" alt="">
                                    </div>
                                    <div class="user-desc">
                                        <span class="name">Patricia Beach</span>
                                        <span class="desc">There are new settings available</span>
                                        <span class="time">2 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-list-item">
                                    <div class="avatar">
                                        <img src="../resources/assets/images/users/avatar-3.jpg" alt="">
                                    </div>
                                    <div class="user-desc">
                                        <span class="name">Connie Lucas</span>
                                        <span class="desc">There are new settings available</span>
                                        <span class="time">2 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="user-list-item">
                                    <div class="avatar">
                                        <img src="../resources/assets/images/users/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="user-desc">
                                        <span class="name">Margaret Becker</span>
                                        <span class="desc">There are new settings available</span>
                                        <span class="time">2 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="all-msgs text-center">
                                <p class="m-0"><a href="#">See all Messages</a></p>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                            <i class="mdi mdi-settings"></i>
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
                            <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
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
                        <li><a href="javascript:void(0)"><i class="mdi mdi-face-profile m-r-5"></i> Profile</a></li>
                        <li><a href="javascript:void(0)"><i class="mdi mdi-account-settings-variant m-r-5"></i> Settings</a></li>
                        <li><a href="javascript:void(0)"><i class="mdi mdi-lock m-r-5"></i> Lock screen</a></li>
                        <li><a href="javascript:void(0)"><i class="mdi mdi-logout m-r-5"></i> Logout</a></li>
                    </ul>
                </div>

                <ul>
                    <li class="menu-title">Navigation</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="badge badge-success pull-right">2</span> <span> Dashboard </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="index.html">Dashboard 1</a></li>
                            <li><a href="dashboard_2.html">Dashboard 2</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-panels.html">Panel</a></li>
                            <li><a href="ui-portlets.html">Portlets</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-checkbox-radio.html">Checkboxs-Radios</a></li>
                            <li><a href="ui-tabs.html">Tabs</a></li>
                            <li><a href="ui-progressbars.html">Progress Bars</a></li>
                            <li><a href="ui-notifications.html">Notification</a></li>
                            <li><a href="ui-alerts.html">Alerts</a>
                            <li><a href="ui-carousel.html">Carousel</a>
                            <li><a href="ui-video.html">Video</a>
                            <li><a href="ui-tooltips-popovers.html">Tooltips & Popovers</a></li>
                            <li><a href="ui-images.html">Images</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap UI</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Admin UI </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin-sweet-alert.html">Sweet Alert</a></li>
                            <li><a href="admin-widgets.html">Widgets</a></li>
                            <li><a href="admin-nestable.html">Nestable List</a></li>
                            <li><a href="admin-rangeslider.html">Range Slider</a></li>
                            <li><a href="admin-ratings.html">Ratings</a></li>
                            <li><a href="admin-animation.html">Animation</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Email </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="email-inbox.html"> Inbox</a></li>
                            <li><a href="email-read.html"> Read Mail</a></li>
                            <li><a href="email-compose.html"> Compose Mail</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-heart-outline"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                            <li><a href="icons-colored.html">Colored Icons</a></li>
                            <li><a href="icons-materialdesign.html">Material Design</a></li>
                            <li><a href="icons-ionicons.html">Ion Icons</a></li>
                            <li><a href="icons-fontawesome.html">Font awesome</a></li>
                            <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                            <li><a href="icons-typicons.html">Typicons</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond"></i><span class="badge badge-danger pull-right">New</span> <span> Forms </span></a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="form-advanced.html">Form Advanced</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-mask.html">Form Masks</a></li>
                            <li><a href="form-summernote.html">Summernote</a></li>
                            <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                            <li><a href="form-uploads.html">Multiple File Upload</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-layouts.html">Tables Layouts</a></li>
                            <li><a href="tables-datatable.html">Data Table</a></li>
                            <li><a href="tables-responsive.html">Responsive Table</a></li>
                            <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                            <li><a href="tables-editable.html">Editable Table</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">Extra</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-google.html">Google Chart</a></li>
                            <li><a href="chart-chartist.html">Chartist Charts</a></li>
                            <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                            <li><a href="chart-c3.html">C3 Chart</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-knob.html">Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="maps-google.html">Google Maps</a></li>
                            <li><a href="maps-vector.html">Vector Maps</a></li>
                            <li><a href="maps-mapael.html">Mapael Maps</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="page-starter.html">Starter Page</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-logout.html">Logout</a></li>
                            <li><a href="page-recoverpw.html">Recover Password</a></li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                            <li><a href="page-404.html">Error 404</a></li>
                            <li><a href="page-404-alt.html">Error 404-alt</a></li>
                            <li><a href="page-500.html">Error 500</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="extras-profile.html">Profile</a></li>
                            <li><a href="extras-sitemap.html">Sitemap</a></li>
                            <li><a href="extras-about.html">About Us</a></li>
                            <li><a href="extras-contact.html">Contact</a></li>
                            <li><a href="extras-members.html">Members</a></li>
                            <li><a href="extras-timeline.html">Timeline</a></li>
                            <li><a href="extras-invoice.html">Invoice</a></li>
                            <li><a href="extras-search-result.html">Search Result</a></li>
                            <li><a href="extras-emailtemplate.html">Email Template</a></li>
                            <li><a href="extras-maintenance.html">Maintenance</a></li>
                            <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                            <li><a href="extras-faq.html">FAQ</a></li>
                            <li><a href="extras-gallery.html">Gallery</a></li>
                            <li><a href="extras-pricing.html">Pricing</a></li>
                        </ul>
                    </li>

                    <li class="menu-title">More</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-comment-text-outline"></i><span> Blog </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="blogs-dashboard.html">Dashboard</a></li>
                            <li><a href="blogs-blog-list.html">Blog List</a></li>
                            <li><a href="blogs-blog-column.html">Blog Column</a></li>
                            <li><a href="blogs-blog-post.html">Blog Post</a></li>
                            <li><a href="blogs-blog-add.html">Add Blog</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-home-map-marker"></i><span> Real Estate </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="real-estate-dashboard.html">Dashboard</a></li>
                            <li><a href="real-estate-list.html">Property List</a></li>
                            <li><a href="real-estate-column.html">Property Column</a></li>
                            <li><a href="real-estate-detail.html">Property Detail</a></li>
                            <li><a href="real-estate-agents.html">Agents</a></li>
                            <li><a href="real-estate-profile.html">Agent Details</a></li>
                            <li><a href="real-estate-add.html">Add Property</a></li>
                        </ul>
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
                            <h4 class="page-title">Starter Page </h4>
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