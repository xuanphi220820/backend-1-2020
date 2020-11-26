<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mobile Shopping</title>
    <link rel="icon" href="./images/logo.png" type="image/icon type">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/prettyPhoto.css" rel="stylesheet">
    <link href="public/css/price-range.css" rel="stylesheet">
    <link href="public/css/animate.css" rel="stylesheet">
    <link href="public/css/main.css" rel="stylesheet">
    <link href="public/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="public/js/html5shiv.js"></script>
    <script src="public/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
                                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="" /></a> </div>
                    </div>
                    <div class="mainmenu pull-right">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li class="dropdown"><a href="index.html">Products<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="?type_id=1">Cellphone</a></li>
                                    <li><a href="?type_id=2">Tablet</a></li>
                                    <li><a href="?type_id=3">Laptop</a></li>
                                    <li><a href="?type_id=4">Speaker</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="#">Blog List</a></li>
                                    <li><a href="#">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="cart.html?">Cart</a></li>
                        </ul>
                        <div class="search_box pull-right">
                            <form action="result.html" method="get">
                                <input type="text" placeholder="Search" name="key" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
    </header>
    <!--/header-->
    <section>
        <section id="cart_items">
            <div class="container">
                <h3>Your shopping cart</h3>
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td class="image">Item</td>
                                <td class="description">Name</td>
                                <td class="price">Price</td>
                                <td class="quantity">Quantity</td>
                                <td class="total">Total</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="images/iphone-6s-plus-128gb-400-1-400x450.png" alt=""
                                            width=110></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="detail.html?45">Điện thoại iPhone 6s Plus 128GB</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>27,490,000 VND</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="#"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="4"
                                            autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="#"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">109,960,000 VND</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="#"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="cart_product">
                                    <a href=""><img src="images/lenovo-phab-2gb-400x460-400x460.png" alt=""
                                            width=110></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href="detail.html?77">Máy tính bảng Lenovo Phab 2GB</a></h4>
                                </td>
                                <td class="cart_price">
                                    <p>4,490,000 VND</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="#"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="1"
                                            autocomplete="off" size="2">
                                        <a class="cart_quantity_down" href="#"> - </a>
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">4,490,000 VND</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="#"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <form id="main-contact-form" class="contact-form row" name="contact-form" method="post"
                        action="?order=ordered">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" name="subject" class="form-control" placeholder="Phone number">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="message" id="message" class="form-control" rows="3"
                                placeholder="Your Message Here"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <a class="btn btn-default update" href="index.html">Continue Buying</a>
                            <a class="btn btn-default check_out" href="#">Delete All</a>
                            <input type="submit" name="submit" class="btn btn-primary pull-right" value="Order">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--/#cart_items-->
        <!--features_items-->
        </div>
        </div>
    </section>
    <footer id="footer">
        <!--Footer-->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>
    </footer>
    <!--/Footer-->
    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.scrollUp.min.js"></script>
    <script src="public/js/price-range.js"></script>
    <script src="public/js/jquery.prettyPhoto.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>