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