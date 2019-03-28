<?php
if(!isset($_SESSION) )session_start();
include_once('../vendor/autoload.php');
use App\Auth;
use Model\Message;
use Model\Utility;
use App\Product;
use App\Cart;

$auth= new Auth();
$status = $auth->setData($_SESSION)->logged_in();
if(!$status) {
    Utility::redirect('login.php');
    return;
}
$product = new Product();
$products= $product->index();
$cart = new Cart();
$carts = $cart->index();

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
    <title>POS | ADMIN Panel</title>

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
    <?php
    include ('inc/topbar.php');
    include ('inc/leftsidebar.php')
    ?>
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
                                    <a href="#">Poss Page </a>
                                </li>
                                <li class="active">
                                   Pos Terminal
                                </li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="cart">
                            <div class="bg-white p-20">
                                <h3>CART</h3>
                                <hr>
                                <form action="post.php" method="post">
                                <div class="demo-box">
                                    <h4 class="m-t-0 header-title"><b>products added on carts</b></h4>
                                    <table class="table m-0">
                                        <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($carts as $ca){ ?>
                                        <tr>
                                            <th scope="row"><?php echo  $ca->id; ?></th>
                                            <td><?php echo  $ca->name; ?><input type="hidden" name="sale_id[]" value="<?php echo  $ca->product_id; ?>"></td>
                                            <td><span class="varies"><?php echo $ca->price?></span>taka</td>
                                        </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <h5>Total: <span class="totalPrice"></span> taka</h5>
                                    <input type="hidden" name="totalAmount" id="totalInput">
                                <br>
                                <button class="btn btn-primary clicked" type="submit">Checkout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-list">
                            <div class="bg-white p-20">
                                <div class="">
                                    <?php
                                    foreach ($products as $pro)
                                    {
                                    ?>
                                    <div class="card m-b-5" style="width: 13rem;">
                                        <img src="Uploads/<?php echo $pro->photo; ?>" height="100px" width="100px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <form action="post.php" method="post">
                                                <input type="hidden" name="product_id" value="<?php echo $pro->id; ?>">
                                                <input type="hidden" name="name" value="<?php echo $pro->name; ?>">
                                                <input type="hidden" name="cart_price" value="<?php echo $pro->price; ?>">
                                            <h5 class="card-title"><?php echo $pro->name ; ?></h5>
                                            <p class="card-text">Price: <?php echo $pro->price; ?></p>
                                            <button class="btn btn-primary" type="submit">Add To Cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- content -->
        <?php
        include ('inc/footer.php');
        ?>
    </div>

    <?php
    include ('inc/rightsidebad.php');
    ?>
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
<script src="../resources/js/script.js"></script>
</body>
</html>