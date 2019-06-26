<?php
include_once('vendor/autoload.php');
use App\Product;
$product = new Product();
$products = $product->index();
?>
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home-TakeAway</title>
    <!-- Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="resources/frontpage/css/bootstrap.css">
    <link rel="stylesheet" href="resources/frontpage/css/font-awesome.min.css">
    <link rel="stylesheet" href="resources/frontpage/js/masterslider/style/masterslider.css">
    <link rel="stylesheet" href="resources/frontpage/js/masterslider/skins/black-2/style.css">
    <link rel="stylesheet" href="resources/frontpage/css/style.css">
    <link rel="stylesheet" href="resources/frontpage/css/responsive.css">
    <link rel="stylesheet" href="resources/frontpage/css/owl.theme.css">
    <link rel="stylesheet" href="resources/frontpage/css/owl.carousel.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="main-wrapper">
    <header id="header">
        <div class="header-top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="header-login">
                            <a href="./views/login.php">Login</a>
                            <a href="./views/register.php">Register</a>
                        </div>
                        <!-- end .header-login -->
                        <!-- Header Social -->
                        <ul class="header-social">
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <p class="call-us">
                            Call Us: <a class="font" href="#">+0000 0000</a>
                            <span class="open-now"><i class="fa fa-check-square"></i>We are open now(9am-10pm)</span>
                            <span class="close-now"><i class="fa fa-square"></i>We are close now(10pm-9am)</span>
                        </p>
                    </div>
                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </div>
        <!-- end .header-top-bar -->

        <div class="header-nav-bar">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="./" style="margin-top: 10px">
                            Shupershop
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>
        <!-- end .header-nav-bar -->
        <!-- small menu section -->
        <div class="small-menu">
            <div class="container">
                <ul class="list-unstyled list-inline">


                </ul>
            </div>
            <!-- end .container-->
        </div>
        <!--end .small-menu -->
    </header>
    <!-- end #header -->

    <!-- all page-content star -->
    <div id="page-content">
        <!-- masterslider -->
        <div class="master-slider ms-skin-black-2 round-skin" id="masterslider">
            <!-- new slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="resources/frontpage/js/masterslider/blank.gif" data-src="resources/frontpage/img/content/home-slide-1.jpg" alt="">
                <!-- slide text layer -->
                <div class="ms-layer ms-caption" style="">
                    <h1 class="text-right">
                        <span>Hungry?!</span>
                        <br>Good, we are here
                        <br>to
                        <span class="bold">serve</span>you
                    </h1>
                    <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Read  More</a>
                </div>

            </div>
            <!-- end of slide -->
            <!-- new slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="resources/frontpage/js/masterslider/blank.gif" data-src="resources/frontpage/img/content/home-slide-1.jpg" alt="">
                <!-- slide text layer -->
                <div class="ms-layer ms-caption" style="">
                    <h1 class="text-right">
                        <span>Hungry?!</span>
                        <br>Good, we are here
                        <br>to
                        <span class="bold">serve</span>you
                    </h1>
                    <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i>Read  More</a>
                </div>
            </div>

            <!-- new slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="resources/frontpage/js/masterslider/blank.gif" data-src="resources/frontpage/img/content/home-slide-1.jpg" alt="">
                <!-- slide text layer -->
                <div class="ms-layer ms-caption" style="">
                    <h1>
                        <span>Hungry?!</span>
                        <br>Good, we are here
                        <br>to
                        <span class="bold">serve</span>you</h1>
                    <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Read  More</a>
                </div>
            </div>
            <!-- end of slide -->
        </div>
        <!-- end of masterslider -->

        <!-- purchase TakeAway section start -->
        <div class="container">
            <div class="call-to-action-section">
                <div class="css-table-cell">
                    <div class="icon">
                        <img src="resources/frontpage/img/content/call-to-action-icon1.png" alt="">
                    </div>
                </div>
                <div class="text css-table">
                    <div class="css-table-cell">
                        <h4>Purchase TakeAway</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi..</p>
                    </div>

                    <div class="css-table-cell">
                        <a href="#" class="btn btn-default-red  pad-bottom"><i class="fa fa-file-text-o"></i> Read  More</a>
                    </div>

                    <div class="css-table-cell">
                        <a href="#" class="btn btn-default-red-inverse pad-top"><i class="fa fa-shopping-cart"></i> Purchase Now!</a>
                    </div>
                </div>
            </div>
            <!-- end .call-to-action-section -->
        </div>
        <!-- end .container -->
        <!-- end purchase TakeAway section  -->

        <!-- start .category box section -->
        <div class="category-boxes-icons">
            <div class=" container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img src="resources/frontpage/img/content/starter.jpg">
                                <h4>Starters</h4>
                                <figcaption> <a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12  text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img src="resources/frontpage/img/content/main-dish.jpg">
                                <h4>Main Dishes</h4>
                                <figcaption><a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img src="resources/frontpage/img/content/desserts.jpg">
                                <h4>Desserts</h4>
                                <figcaption> <a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img class="img-responsive" src="resources/frontpage/img/content/drinks.jpg">
                                <h4>Drinks</h4>
                                <figcaption> <a href="#" class="btn btn-default-white"><i class="fa fa-file-text-o"></i> Read  More</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- end .row -->
            </div>
            <!-- end .category-boxes-icons -->
        </div>
        <!-- container -->

        <!-- star.chef-welcome -->
        <div class="chef-welcome">
            <div class="container">
                <h1>Welcome</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
                <a href="#" class="btn btn-default-red"><i class="fa fa-file-text-o"></i> Read  More</a>
            </div>
            <!-- end .container -->
        </div>
        <!--end .chef-welcome-->

        <!--start small-slide section -->
        <div id="sm-slide-section">
            <div class="container">
                <div class="slide-heading text-center">
                    <h4>Our Clients Say</h4>
                </div>
                <!--end .clients heading-->
                <div id="slide-content" class="owl-carousel">
                    <div class="item">
                        <img src="resources/frontpage/img/content/sm-slide-img1.jpg" alt="img-1">
                        <div class="details">
                            <h5><a href="#">jane doe</a>
                            </h5>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                        </div>
                    </div>
                    <!-- end item class div-->

                    <div class="item">
                        <img src="resources/frontpage/img/content/sm-slide-img-2.jpg" alt="img-2">
                        <div class="details">
                            <h5><a href="#">chrich woods</a>
                            </h5>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                        </div>
                    </div>
                    <!-- end item class div-->

                    <div class="item">
                        <img src="resources/frontpage/img/content/sm-slide-img1.jpg" alt="img-1">
                        <div class="details">
                            <h5><a href="#">jane doe</a>
                            </h5>
                            <ul class="list-unstyled list-inline">
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                        </div>
                    </div>
                    <!-- end item class div-->

                    <div class="item">
                        <img src="resources/frontpage/img/content/sm-slide-img-2.jpg" alt="img-2">
                        <div class="details">
                            <h5><a href="#">chrich woods</a>
                            </h5>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                        </div>
                    </div>
                    <!-- end item class div-->

                    <div class="item">
                        <img src="resources/frontpage/img/content/sm-slide-img1.jpg" alt="img-1">
                        <div class="details">
                            <h5><a href="#">jane doe</a>
                            </h5>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                        </div>
                    </div>
                    <!-- end item class div-->

                    <div class="item">
                        <img src="resources/frontpage/img/content/sm-slide-img-2.jpg" alt="img-2">
                        <div class="details">
                            <h5><a href="#">chrich woods</a>
                            </h5>
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-star"></i></a>
                                </li>
                            </ul>
                            <p>Absolutely delicious! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi.</p>
                        </div>
                    </div>
                    <!-- end item class div-->
                </div>
                <!-- end i.slide-content -->
            </div>
            <!-- end .container-->
        </div>
        <!-- end .sm-slide-section-->

        <!--Start blog feed section-->
        <div class="latest-from-blog text-center">
            <div class="container">
                <h4>Products</h4>
                <div class="row">
                <?php
                foreach($products as $p){
                    echo "<div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-12\">
                        <div class=\"blog-latest\">
                            <div class=\"row\">
                                <div class=\"col-md-6 col-sm-12\">
                                    <img class=\"\" src=\"views/Uploads/".$p->photo."\" alt=\"blog-image\">
                                </div>
                                <div class=\"col-md-6 col-sm-12\">
                                    <h5><a href=\"#\">$p->name</a>
                                    </h5>
                                    <p><i class=\"fa fa-clock-o\"></i>
                                        <span class=\"date\">$p->quantity</span>at
                                        <span class=\"time\">$p->price</span>
                                    </p>
                                    <a href=\"#\" class=\"btn btn-default-red\"><i class=\"fa fa-file-text-o\"></i> Read  More</a>
                                </div>
                                <!--end .blog-details-->
                            </div>
                            <!--end .row-->
                        </div>
                        <!--end .blog-latest -->
                    </div>";
                }
                ?>
                    
                </div>
                <!--end .row main-->
                <!-- read older button -->
                <div class="read-older">

                </div>
            </div>
            <!--end container-->
        </div>
        <!--end .latest-from-blog-->

    </div>
    <!-- end #page-content -->
    <!--footer start-->
    <footer id="footer">
        <div class="container">
            <div class="main-footer">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <img src="resources/frontpage/img/header-logo.png" alt="">
                        <p>
                            
                        </p>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <h5>Quick Links</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="footer-links padd">
                                    <li><a href="#">Home</a>
                                    </li>
                                    <li><a href="#">Menu Card</a>
                                    </li>
                                    <li><a href="#">reservation</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="footer-links">
                                    <li><a href="#">about us</a>
                                    </li>
                                    <li><a href="#">news & events</a>
                                    </li>
                                    <li><a href="#">contact us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <h5>Latest Tweets
                            <span><i class="fa fa-chevron-left"></i>  <i class="fa fa-chevron-right"></i>
								</span>
                        </h5>

                        <p><a href="#">takeaway:</a> Take a (Photo) Tour of #Envato's #Melbourne Headquarters (...)
                            <br>
                            <span>7 hours ago</span>
                        </p>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <h5>Newsletter</h5>
                        <p>Sign up for our newsletter!</p>
                        <div class="footer-subscribe">
                            <form>
                                <input type="Email" placeholder="Email address...">
                                <button type="submit" value=""><i class="fa fa-plus-circle-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <p>Copyright 2014 © TakeAway. All rights reserved. Powered by <a href="#">UOUapps</a>.</p>
                <ul class="footer-social">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a>
                    </li>
                </ul>
                <!-- end .footer-social -->
            </div>
        </div>
    </footer>
    <!-- end #footer -->

</div>
<!-- end #main-wrapper -->
<!-- Scripts -->
<!-- CDN jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Local jQuery -->
<script>
    window.jQuery || document.write('<script src="resources/frontpage/js/jquery-1.11.0.min.js"><\/script>')
</script>
<script src="resources/frontpage/js/masterslider/masterslider.min.js"></script>
<script src="resources/frontpage/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
<script src="resources/frontpage/js/jquery.magnific-popup.min.js"></script>
<script src="resources/frontpage/js/owl.carousel.js"></script>
<script src="resources/frontpage/js/bootstrap.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="resources/frontpage/js/jquery.ui.map.js"></script>
<script src="resources/frontpage/js/scripts.js"></script>

<script>

    var slider = new MasterSlider();
    slider.setup('masterslider', {
        width: 1140,
        height: 500,
        space: 5,
        fullwidth: true,
        speed: 25,
        view: 'flow',
        centerControls: false
    });
    slider.control('bullets', {
        autohide: false
    });


</script>

</body>

</html>

