<?php
include_once('vendor/autoload.php');
use App\Product;
$product = new Product();
$products = $product->index();
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
                            <li class="dropdown">
                                <a href="./">Home</a>
                            </li>
                            <li><a href="events.php">Events</a>
                            </li>
                            <li><a href="about.php">About</a>
                            </li>
                            <li><a href="contact.php">Contact us</a>
                            </li>
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
                <img src="https://res.cloudinary.com/dd14wkl4h/image/upload/v1538744101/superstore-pos.jpg" data-src="https://res.cloudinary.com/dd14wkl4h/image/upload/v1538744101/superstore-pos.jpg" alt="">
                <!-- slide text layer -->
                <div class="ms-layer ms-caption" style="">
                    <h1 class="text-right">
                        <span>Hungry?!</span>
                        <br>Good, we are here
                        <br>to
                        <span class="bold">serve</span>you
                    </h1>
                </div>

            </div>
            <!-- end of slide -->
            <!-- new slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="https://img-aws.ehowcdn.com/700x/cdn.onlyinyourstate.com/wp-content/uploads/2018/09/10553839_824945270850624_2543305775750823311_o-700x299.jpg" data-src="https://img-aws.ehowcdn.com/700x/cdn.onlyinyourstate.com/wp-content/uploads/2018/09/10553839_824945270850624_2543305775750823311_o-700x299.jpg" alt="">
                <!-- slide text layer -->
                <div class="ms-layer ms-caption" style="">
                    <h1 class="text-right">
                        <span>Hungry?!</span>
                        <br>Good, we are here
                        <br>to
                        <span class="bold">serve</span>you
                    </h1>
                </div>
            </div>

            <!-- new slide -->
            <div class="ms-slide">
                <!-- slide background -->
                <img src="https://img-aws.ehowcdn.com/700x/cdn.onlyinyourstate.com/wp-content/uploads/2018/09/10553839_824945270850624_2543305775750823311_o-700x299.jpg" data-src="https://img-aws.ehowcdn.com/700x/cdn.onlyinyourstate.com/wp-content/uploads/2018/09/10553839_824945270850624_2543305775750823311_o-700x299.jpg" alt="">
                <!-- slide text layer -->
                <div class="ms-layer ms-caption" style="">
                    <h1>
                        <span>Hungry?!</span>
                        <br>Good, we are here
                        <br>to
                        <span class="bold">serve</span>you</h1>
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
                        <h4>Purchase your order</h4>
                        <p>Take your oder , an purchase now</p>
                    </div>

                    <div class="css-table-cell">

                    </div>

                    <div class="css-table-cell">

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
                                <img src="data:image/jpeg;base64,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">
                                <h4>Dresses</h4>
                                <figcaption>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12  text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img src="data:image/jpeg;base64,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">
                                <h4>Cosmetics</h4>
                                <figcaption>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img src="https://previews.123rf.com/images/jackf/jackf1710/jackf171006401/88350015-young-man-seller-helping-to-buy-fruit-and-vegetables-in-grocery-shop.jpg">
                                <h4>Vegetables</h4>
                                <figcaption>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="category-boxes-item">
                            <figure>
                                <img class="img-responsive" src="https://ae01.alicdn.com/kf/HTB1fpH5c5ERMeJjy0Fcq6A7opXa3/0-53x10m-Pizza-shop-wallpaper-western-restaurant-fast-food-restaurant-fried-chicken-burger-shop-hot-dog.jpg">
                                <h4>Fast food</h4>
                                <figcaption>
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
                <p>Supershop system is an online based supermarket system where you can puchase products after collecting on the cart</p>

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
                        <img src="data:image/jpeg;base64,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" alt="img-1">
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
                        <img src="https://content-static.upwork.com/uploads/2014/10/01073427/profilephoto1.jpg" alt="img-2">
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
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMVFRUXFRUVFxUXFRUXFRUXFxUWFxcVFRUYHSggGBolGxUVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy0mICUtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAM0A9gMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAgMFBgcBAP/EAEsQAAEDAgMEBQYJCQcEAwAAAAEAAhEDIQQSMQVBUWEGEyJxgQcjkaGx0SQyUnJzssHj8BQzQkRigpKT4jRDU2Ojs+FUg5SiFdPx/8QAGgEAAwEBAQEAAAAAAAAAAAAAAQIDBAAFBv/EACkRAAICAQQABQQDAQAAAAAAAAABAhEDBBIhMRMyQVFxBSJhwSOBoZH/2gAMAwEAAhEDEQA/ANuVU2lVf1jocQATvKtaqO0Xedf84rPqHwimPsMwNUkXJ9KkGlROFeEaHWXRlwBoJdVCYqVZQWJJ3FdpvMXXOd8HJHsTWgan0lRjsa75R9JS9o1TBUW0krytQ909psxuolhw+JJGp9KkaVQEKqtqOCKoYtyrHWQxPbIR4nPlFge/mmH1TxUY7EE6pLcSdJTS+oR7QFp2NYys4EnO6PnFM4bHEu+M7+IrmMdZRdSsWNc7fBj3rNp03PcXmqjRZH7YYyxJJ7/eonae1mvHZqub+8R7CqNisVVedO/j4uOp5CyArY1zTBfEbon/APF7ThujTMm2nZa37VcD+ff/ADHR7UbhtpucLVnGbfHd71RXY0vaRMTvgEe8KPdtJ1FsODiAZzydfC3ioz0kZLtj+IarTxNT5b/4ne9FtrVI+O7+IrM8P0xrhoJeI0EtF1bOjvSdtfsOgPibfFcOR3FeNqdJqsEXLG7X9miEoT4ZJYvG1AYzv/id71HYnaFUf3lT+N3vReOkmyj6uHcbEKGJzl90rBKKTpEa7bdbN+dqfzH+9P0tq1XH87U/mP8AehMXs1wOiaw9Ig8Fu8SNWmTLNgMbUBvUqH993vRNTaTh/eP/AIne9RFJxATRdeVmjrpN7UdsDH7Rq3ipU/jd71FYzate/nqg7qjh9qKfUEKOr08ytp8jUuTmgb/5PEf49b+bU9643aWIkefrfzanvRdHC8kk4W69Dx10LtLt0Oxjnky957B1c4728SvIboWIeR+wfrNXk+Ftx/sSa5NOVR2i3zr/AJxVvVJ2jX89UH7RXa6SjBNi4VbGalQgiEfhsQYuo9rwdU43FgLydNrccpN2XyY3VBWLxNk0MbG5CVsRmXM9k0ta3kddBWJbT2LrF+5N4dl7ohiZxj401TRwtz8Vs6+NoWITbSAUDSxu4rlevPJLqfDmh4JokqjxEpoOCg3492m5P4bGHRZXiUlSLRlTJSvTGpMCJVf23iZDQ3S1uMmxKK2/WcWsY3V5vyY2MxPpA8VHFweSTqGzHDcPV7V6umxqEUyc7ZXNsYiNDE7v0jz5BVavTk3e6eYspvH0Hve7e8nTc0bkbsnos43cZ5XXo70jNsbKvhqLwbTHFStPCVH2gjdZXzB9GmCJCmcHsmmwyGhHcwbUZFtboviOqDgIykmO+5KT0bqGnUY+bzBB3/snmtqrYZrgRFlnvSfYHVO6xreybOHrBSu/UKSfRctngVBbW3oKNOFEKj7G2kWFsHtDjo4cCrvQxLXNDgbH0jkea8L6lDNiaeNWn/jNGJxlwxFTCAhRG0sGGjMFN0aokoLat2O7ip6fDKcLl2HI16FeNYJD3hAvJCJpaJZQ8IjbY0Xp5o3pusEltQrVFpxsF0Fl8Jl9USmKtZM0zJUcUJOW5j7i49ED50/Rn6zFxN9DqbhWM/4bvrMXl6+nacCGTzF66Q7dFEZW3ed3DmVSevcXFxuSZJVt6S7Cz+dYO1vHFVUUl52u8WWRqfXoUwqNWh8V011qSWptrbrycWmSnaNLYt9RJOKSniyDLbrTKKYlBDsW4aJp+JJ1KWGWQWKbC0Rm4rbYK9Rb6oF10YiQggZRVBqlNfgZSEkXT7AnA0Jqq+FOCluOZJVcPNIVCbwG38T6yVHYTY1Wo59aMrGnfaw4cVL4jAufQowSIId36QPUpllXs9WBYiO6V62NcUzm+OChUsA0PLjqTPhuVhw7QAF3E7Pg8tBzhOU2gWK140CbTHpXc6TK614VyVDrXrmIoNqNIcJBXQ9Ly2TImzNNr4EUqpYPikyDwVi2XVIZG8aoXb+Gmr2rJez3Q1yjqY/ws6D+4k6OIvKTiqsghCYW8pVZ0WK8fTy45NEgWpgN6GNMtUxTrAi6YxNNJqFJgSRGhspT6aXUEKOxWLKlUq4Fao9iE9s3DyZUca0qTwFYKsZSUaKYYxlLku3R2nFQ/MPtavIDotjJrFsz5tx/9me9cXp6RPwyOorfwaeqDtWBWqD9sq/rPttGK9T5xSfVZbccfn9E9N5mCVCmoT6Q6AvEc65N20HfUTXNP5ZTjsLZdG8itABmVUl9KVyqyEplYb06g+2CwV2FAKbc+ERicQFGPqyeCpibk/wB0gsYtNvqSksAhN5FsiorsRl+wNYPoUyLSPQW2IRVJoDpcQAJJPIb1V+j9U9U6ZhlRscswk28PWp3pBeg4A5cwDZ4AkT6lfG9ys78FN250xcajmYek6plMTu9CjML0rqh2WtSLeZBhFY1tYWwlNtGnoKj4NSpFi+DoCmqWy67x5ytJ33zNIjQWtda07XB1clgwONNUEsvyUPtnG18xbT3COEc1L9GsOKRLeN09tjZLasyCZ1gwuqVWG1dMquBpvcfOY9lMm2TrG+tWbZba2Hc1jnirSfo+btP2hRjOilEOBNHNz8IuPBTWztm06Qy0wWNOrDOUniAdCnUmTlFCOleG7LanAwfFQdOiW0c+4uiJvprHBXHG0s1FwIm2igNuUmml1rNMrWnlBtb0pNVL+JpC4o82wTB1BCa2lUshsG6xXMb8VePs/jstKVnMPibqVo1LKuomhjSLG6ODI2qkISWKw86KExWEcNQVPUMSHQiBSDitLgmuDqsqHVJ/CqexuyJEt19qjMPRgmRfRQra+QxjyTfQxvwhx/ynfXYvIvofHWu49W76zF5elp39hHKvuNRWc7ff5+p84rR1m+3RNer88qP1RJ4437/AKBpvMwJmJS23TBoEIjDgrw6izbbHGiNU86oITdYWQhqK2KUWuAMTiUEXQiDUBKYrUzquhkjJ0wUMVzIQTKZm6OySvUqV1qTUVQrXIw98LjHcVI1KHJQe29p08ODnN9zRqfcFkePLlmoQVsMmoq2Tmw8U1r3uc4hrG5jH6X6IBG+5CstWp1jGkaEB0cjx9kDVZJ0X6SGrjWUXNAZVa6nAuc2rTJ5j1rTqbzTyiR2AWmNJAsfQSvXx4JYIqMgRmskbXoLqbPa49oSfUEzXpsYNwH40CYftnUC6hcTjC9xdOhsOfPktKkukHa+2WfAUAG9YSZzQB3ako1/ECZWcYnbeMDu1lc0fFygiJ9qKpbUquIb1haLEwYJ368E8W+qEkl7lvp7SbOV3ZdMR7lIU6zTwhUrG15aOOs7xPtROycWajTe7TlMbjuMcDxSuUovkNRa4LXiaga07xax5mI7lC4vBn8nePlwW8hNvFM4fEOqU2kmfjA+BmT6FKPxdOr2GVGuIMmCCeVkmeaWJyfsxcad7fcpYouZYobF17QrRtjB2lU7GWMLzlJSx8BnHa6FsqJZQlN6KYZQpRQqH6LDqjcNjiwiSSE2IAUbiq/aTxmFqi+YOo17ZBkFMY7Zgd2m2d6j3qq7L2s6keLTqPtCu2yMeyq2Wnv4jvVHG1yGMiP6LUnNxLg4R5p312LqtWAwzc8xfKRPIke5eWvAqgRy+YtSz3bbYr1PnFaGs26RVPP1PnFZfq8bxR+f0dpvMxnMCuCoBdCtKbrOK8FYX7m2yQqP3qNrG8pTSlFt02mjtuwyBGVcpXqmJC5i6UKPFIytUMeP0EbZIMcvUnXXaAC49sXTSkrAkL21jxRouqbwIHMnRY9tjFuqEucZJOqv/S3FktYydZJHGFnW1Hbua97Q41HDu9WYc8ryV7A1HEupvbUYYcxwc08CLha5szpjQxhDQCyu9pLmmQJDbwdDxWNIzY+N6ivTq/IcCe7Q+qVWcFI6GRxNdwogPH6QFvETKhW7SFPsvBF4zQbuO4RxRuMxEZa1My0wJG8G4Kc2a0Pc8Edlws0i3EqEVRqbtpM7h6FWrGWhVdJgdmBIE6mwtvUth+j9dwzdQGyD8Z4BGXcRu0svYXHGjIDyORJ4e5Pt2219nPc6d17+Covyx3S6oi9pbNrfEp9Wdc72uJyADjoTyXejDixtRxMuIy31tJFlZ+uZ1UgZQQRwVXZTFNxAM576QI3kcdAucSMpKyYwD8lIzYhjzfuJKw3AY1zHZ2OLXTMgkLZ67TUw+Jg2/J6wBjQ5Du7pWIPw5AB1Eajd3q2NNIz5Wmy60PKBioy1MlQcSIPpCKG0mVrtsd7SfYd6z9lROmtw1SS02GSrbXxwL4k/f/poLGInDjeqds3bzqcBxLm8PcdyteFxLajczD4bx3rJl0jgrXKLY8qbp9htbEQFFvuZTtZ+5Dlyy8JDydsfpFFYPaD6LszD3jce9Roqwll0qkPuiCzTOiHSZtd5YWlrgwu4izmjXxXlVfJ4PhT/AKF/16S6tWHyk5u2bksz6Qf2ir88rTFlPSSr8JrD9srH9XV44/P6G03mYyHgLr3IAVU5ntqvEnjfcWbExZenadUKPqPSOvhaceJ7QOQdiqohRrqqW6rNihnmF3h7WduCqGIun6j5ChOuhEUsRKM8Lbs7cQ3Suk6WEaQQVTNqUTE7x7FoW2mZqZ5doeCpWIaHAyvotDLdhUX6Hn5lU7IAUyuliIeIXKbN60bRLL30eqO/JaTheAWubxAOnfdTWEf2G5I7Ji0jjZw7vYq/0LrTh3N+S8+sSpCrmYczDBOo3HkVmfEjUuYosNCiyrdwAOk+G7wROCwTWGQZjSALTxKgMNtsSQRlndziCB+N6ksPjrEgtaBJG/TSbpkkHcSO0MO98gk8hzO+UG9heQwfoiMx/RveBp4CyUdol2YDU6mZA5AbkVhGAR+LrpSXSAot8h1PDjqnUxvpvZ6WEfasIwTuyO5b1RdFz3rBqR38SSO6SrYHyR1C4Qxi8LHabpvHD/hDBykyVH4mnFxp7FSca5RCMvRiBUVn6OVXNiD84d6rWGw5ebeJ3BT+COUgDcdfejjjffQMj9ixVKiYc5Jqm5TRevBnB2bexyU9SKHpp8WQjcWGi2eT4fCXfQu+vTXlzyeO+Eu+hd9emvLfi8pKfZt6ybpOz4VW+eVrSyDpNX+F1h+2Vl+qJvGq9x9P5iOcyLpp1RLqVLJh+i8nBGTNUmI65Ka6UFVMJdKotu1iWE1HWQj6hS6j01CZRsDYgJ9hXGhIqp9oUPucCqNtSn1dUt3A27t3qVzoYWoROjflGw8OKq/SprOtGR2aGw47sw1A8IWzRqUZP2M+emiGxFPNcajdxQ6cZVunH0g6419q9Lvoy9E70HqQareJafsVoxGHm4/HeqV0VflrEcR7Ff6Wix5FybsTuIE7ZodqJRFHY7R7k9hsRldBEhSzmjKHBRceS6obw2GAFk+DBSQ4wutTpAGdv43qsPUdN8jo8QVjVIQAtC6cY3zRbxt6VnrATYLVhRi1D6R1zl1tAu1sPWUtrQ02uePuXnvued1oMo9nAblAiNE9grvHeEFTFwVN7C2a95LwJAv3nkg5UrDtvgPqtQrkc9CvZdeHaNx2m5OOcmmU08GJG+Qln8nDvhTvoX/7lJeXPJyyMU/6B/8AuUl5bMPlJz7N2WNdKT8Mr/SFbKsY6Vf2yv8ASFLrI3FfIMPYB1ZKS9E03WQOLq3WSMUkaWDVTdcD0kgleyQmQBD6yTTfJROD2d1roJytGrtT3Abypwmhhx5pgzG2Ykud6Tp4J4YZTFcqItuBeBmeQwbp+Me5qcljItJ3Td3huakYjEEnMbu9iGe7L23XO4fatsMMYiOTYz0h2mWtibgacCq+MK00TnEkmRxk6XTmIJqVL6BPYr41McST6BAVRCvY3ZFRgDtbSRvA+3co9lbgrfV2iTUbTeLuBbO4fjiq9tTYpYC4XE+o6LlJoWUfYI2XtHI7NAO4zrHIq97KxjarczfEbx3rKcO7ddSeA2k5hlriDxBTtKffYITcPg0vEUN4TmDqOZYyRwUR0f6QCtFOpAefikaP5RuKnzSWecHF8myE1JWh9laU1isUGNJJAHElQO2OkTKDnMDS+oALaNE6Sd/gqXtPbVSse24kfJFmjuCeONvlk8mZR4XYf0l2sys6BJAMzoD3KE6ydLJoulIaSTABlXtRRkdydsee5PYLDPeYaJME8oG9FbJ2YXzIEjQGSCrFhIY4EsDHNIkbi07x+N6VzGUCI2fsrzoY68tPpi3rUxhauRjWaEFKqsy4jlqO43C9j6VzHeijqLAaNKqwEtGaLkWd3jj3KPr7Afc0yKgiY0dHEDf4LmzK+il6dYj2g8CpzwQny0FSaKw6nBgggjUGxTtMWVreadcRUaCYs7Rw/eCgtq7O6rtMJezeY7TTpDhw5rFl08oc9otCafBJ+T/+1O+hf/uUl5J8nh+FO+gf/uUl5Ph8os+zdFivS0/DK/0hW1LFOmH9sr/SFdqvKvkGLsiTWQ1QyuPXAsdUaRyk9cqVNw1OiGrBdw7CAX7h2R3n3BNjVtIMnwTGDqQBG8kT3cO8puq65cfBCUK+XJyzAeKexVTdqAYtvO9elHjgzsSz5R8BxUfiqmaU/icRcWItYIVzhEfYnFBsLTgFyTih5xo+S1EAfFAvFzCaIkuceMIHA9XDziKZ5OPqQOPztflJ7JMidJn4p5FTmFpEvadYzbiYkJnbmDlhMaX9F/sQoNlbrUgXl2XK6+Zo0nlwUTUaQT3lWKs+ZdxuPxxUK74zu9UirRKXDF7LruY8OBIcDIPNWqr0rrmnmsHmxgWaOIHFVFuqmsZXpljg0NFm5XAy58cRuR2p0dGTV0QuMquLiZMnUzqh854ImV4MuO9FxsRM7ieyGgC8etWPo5sIvBOZrQ0Xe7T8SoXB0usrAATG7nuVzZVbQYMxGVgJcNb7geKSfZSHVjGFqdRWyOAGaIiHAzMZXDiBopqpiGOaAWTJLQI3xJBI+LujmqLs/FmpimECGl+Yj3DcAFc20mgkg2k6fpQTEjjc3F7ofAwJjo8w/WWR6DaeadxTczJ4exM12+ap8A9w7rp/DGzmH8SmQonBtlncjMDir5DrFkxgxDS063A8EJj3FhbUG43RujqsmaD9e5PdbLKh1hoPfvg+lC03iC7iF7CVh1dQ/Ksi3wBLkkuglINxbo0NBxHcX07eC8iPJzTD6rjMFtNwHMFzD7W+teWVY9tpDuVmzLFelx+GV/pCtpWJdMT8Mr/SFT1PlQcXZC1imWFLcvALPXBc45s23lPbS7LGMG4T4nenMFSmXHQWHMn3BC7Wf2x3D1BWwQrkWb4BH1Yjk4Hwm6MrPnLG/M7/ANiB6goyreEUHSGndlGnitKEZ2d+bXl7lyqDG4zHLTvXHxfspDgJABIvxMAeKYU4+lNy0668AhS4DRzhe1ynqgMWcLnhf0hMBziRdsRM/wDCJwoVZIzPe7xMDwRtQi8TEDiZJ3QhqmNJAp9WwOcR2m6ADWOFkUbxOuvhouRzIDHMyy3gAPWoE/Hd3qZ2vWHWOB5eoKGY4FxImOapHolI6NV4jXvXW/GSXHXvTCHmLtM9ruBK8zRP7Lw3WVMu609wufxzQ6CuyydFcDkaapHacM0cBo0d5UdtmuXuc2AGhxkz8YjeeQU5tDEGlS7MZjpyJHZtyCrLmiA0TwtclRfJboc2LTivTI0zR6lcalNud5LZIcLB0GDMvHyiLWsqnRIYGPyuDwZ1EGDHxdZhWZ20aFQZi9rTYkGxBFvYu9DkPin5uJ0qGSL2veEwDuuTMeG5Lw+ObDmghxc4dq8eNhuQ9YyQcw37uBTAD2hsg5d0G49K9iKDS1wAIcL7oINrjemc0gg1JgCIAunxEE5gezGgm10TgSnXyUoNyMzT4aFLpHzQHKSo/H1BJG7OD4ZB/wAJ/r/Nzx9iFhLX5MH+eqD/ACz9di6ueTFsVXHjTd9di8gxWbWsV6X0/hdc/wCYVtSxfpe74XX+kKy6ryr5KYeytvN16V6pcp/AU+3mOjb+O71qEVZYXiXZGgA6a951QOL7TRxyz/wl4txzT6ULiHxB3buS1pUIAl953bxwRVBogSNR9qCxwjtDQ6wimOs08gmYo7RAk8J4lLLbEgkeu5701hyTI5ot7IAHOSmQGCVWnTsnS8R7FF4mqNxDTJtMjsmPapYOzOncLqLo0Q5xBEiTr3ymfQAnAYQZRUeO1Byidx5KUpgwXOEWAHcF6k0HcJC9inHIeK5HMru3KwYx2kv7M8tSoDDtRW1quaoeDeyPtKHoqkUQk7Og3Kd2hQyQOLWk95TA1PcuVqhIklFs5I6zRT3RLD3LvlOj91tyfTCr5dbwV02VR6ui0b3CPDV347ks3wPjXILtyoXVAAdIJjdm/wCAgssOEcfxKWzt1nuM/FbobReB3J59IAi2/wBCQcKrPD2MtEOA4k9k2suDBXHZ1tciLdyLp0x2I0mTeZgH3oiq3TkUaOsTQw0Bp7In9kn1ynOrN+0BeLNHpunntljSNyRSfmkaFE4Zry0EhxtyHjuXqVWWuIcbC0wRfiEQ8XI4hQ5cWsqR8pv2pGEaxMkidSSfRACdxDtBwEJpz+0Cfk25yvUe0eWpPJFHF+8nFqpH+U76zF5N+TtxOIcdB1LoH79O68gKzbFifS/+2V/pCttWb7c6KdbiKtTrozPJjq5jxzXUM8XJcBxtJ8lCp0UztCpkAaN/aP2K7M6Gkf3/APp/1prGdB85Pn/9L+tSxY5XyWc1RRw7ML6jX3odx3a624q6UugTh+sj+T94uYjyfEmRiY/7P3i0UxNyM8rPAtoDuP2J8Hst7grpW8nJcIOJB/7J/wDsXGeTk5APyoWET1P3iNA3Ip+GqEX5oqu+VaqPk8I/WR/J+8TzugB/6kfyfvEyA2iltMNKE2UyczvxdX2p5PzlI/KRff1P3i5gfJ6WMj8pBuZPUx6usTAtFWo3suYx3ZjifZdXFnQIj9YH8r+ter9Ayf1iLH+6/rXILaMa2pTy1XjnPpCGpLUdpeS0vqOd+VgTFuonQcetQ7PJOR+uD/x/vVTciFGbMFz3Jp/xfFacPJOf+sH/AI/3qS7ySGI/LB/4/wB6uckdRnWEpZnsbxc0etXfGvIBDdJFPuGWXEczYSpnZXktyVWvOLDsu7qI3cesUvU6Ak/rI4/md5cT/id3oSN2ykeEZxgacdZ+6jMPQDtbhXOl5OSA74SLmfzP3iew/k+IH9pH8n7xAaypbPwjWklohFOarfT6DEfrA/lf1pb+hBj8/wD6X9aPALKphm9mExWZlfKutLoUQPz/APpf1rlboTP9/wD6X9aLZ1lPxEEAqIDMzKo5T6DK0R3Qg5Y/KP8AS/rQuH6AET8J1BH5riPnpGNaMsNXM4gcY14W8ApOm0NbG/WOJ4nkrdhPJoWtj8qB59R7fOJyn5N3TJxYP/Y+8XAtCfJvWJxLp/wXW/fprqtHRLoj+TVS7rc00y2Ory6uYZnMeC8uFbP/2Q==" alt="img-1">
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
                        <img src="https://www.morpht.com/sites/morpht/files/styles/landscape/public/dalibor-matura_1.jpg?itok=gxCAhwAV" alt="img-2">
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
                        <img src="https://www.morpht.com/sites/morpht/files/styles/landscape/public/dalibor-matura_1.jpg?itok=gxCAhwAV" alt="img-1">
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
                        <img src="https://www.morpht.com/sites/morpht/files/styles/landscape/public/dalibor-matura_1.jpg?itok=gxCAhwAV" alt="img-2">
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
                                    <li><a href="./">Home</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="footer-links">
                                    <li><a href="about.php">about us</a>
                                    </li>
                                    <li><a href="events.php">news & events</a>
                                    </li>
                                    <li><a href="contact.php">contact us</a>
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
                <p>Copyright 2014 © supershop system.</p>
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

