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
    <?php include ('header.php');?>

    <div class="page-content">
        <div class="map-section">
            <div id="map_canvas"></div>

        </div>
        <!-- end .map-section -->
        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-details">
                            <h4>Contact Details</h4>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h5>Rome HQ</h5>
                                    <div class="address clearfix">
                                        <p><i class="fa fa-map-marker"></i>
                                        </p>
                                        <p>Viale della Moschea,85<br>00197 Roma<br>Italy</p>
                                    </div>
                                    <div class="time-to-open clearfix">
                                        <p><i class="fa fa-clock-o"></i>
                                        </p>
                                        <p>
                                            <strong>Monday - Friday:</strong>9am - 11pm<br>
                                            <strong>Saturday:</strong>10am - till last customer<br>
                                            <strong>Sunday:</strong>10am - till last customer</p>
                                    </div>
                                </div>
                                <!-- end .grid-layout -->
                                <div class="col-md-6 col-sm-6">
                                    <h5>Zurich HQ</h5>
                                    <div class="address clearfix">
                                        <p><i class="fa fa-map-marker"></i>
                                        </p>
                                        <p>Viale della Moschea, 85<br>00197 Roma<br>Italy</p>
                                    </div>
                                    <div class="time-to-open clearfix">
                                        <p><i class="fa fa-clock-o"></i>
                                        </p>
                                        <p>
                                            <strong>Monday - Friday:</strong>9am - 11pm<br>
                                            <strong>Saturday:</strong>10am - till last customer<br>
                                            <strong>Sunday:</strong>10am - till last customer</p>
                                    </div>
                                </div>
                                <!-- end .grid-layout -->
                            </div>
                            <!-- end nasted .row -->
                        </div>
                        <!-- end .contact-details -->
                    </div>
                    <!-- end .main-grid-layout -->

                    <div class="col-md-6">
                        <div class="send-message">
                            <h4>Send Us a Message</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" placeholder="Email*">
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                </div>
                                <!-- end nasted .row -->
                                <textarea placeholder="Your message"></textarea>
                                <button><i class="fa fa-paper-plane-o"></i> Submit Message</button>
                            </form>
                        </div>
                        <!-- end .send-message -->
                    </div>
                    <!-- end .main-grid-layout -->
                </div>
                <!-- end .row -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .contact-us -->
    </div>
    <?php include ('footer.php');?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Local jQuery -->
<script>
    window.jQuery || document.write('<script src="resources/frontpage/js/jquery-1.11.0.min.js"><\/script>')
</script>
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