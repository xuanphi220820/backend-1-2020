<?php include "layouts/layout_top.php" ?>
<?php include "layouts/layout_menu.php" ?>
    <!--/header-bottom-->
    </header>
    <!--/header-->
    <section>
        <div class="container">
            <div class="row">
                <!-- Layout Category -->
                <?php include "layouts/layout_category.php" ?>
                <?php
                    require "models/product.php";
                    $product = new Product;
                    if (isset($_GET['manufacture'])) {
                        $manu_id = $_GET['manufacture'];
                        $products_list = $manufactures->getProductByManuId($manu_id);
                        //var_dump($products_list); die();
                    } 
                    else if (isset($_GET['type'])) {
                        $type_id = $_GET['type'];
                        $products_list = $protypes->getProductByProtype($type_id);
                        //var_dump($products_list);
                    }
                    
                ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <?php if (isset($_GET['manufacture'])) { ?>
                            <h2 class="title text-center"><?php echo $products_list[0]['manu_name'] ?></h2>
                        <?php } elseif (isset($_GET['type'])) { ?>
                            <h2 class="title text-center"><?php echo $products_list[0]['type_name'] ?></h2>
                        <?php } ?>
                        
                        <?php foreach($products_list as $key => $value) { ?>
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center"> <img
                                                src="public/images/<?php echo $value['pro_images'] ?>" alt="" />
                                            <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                            <p><?php echo substr($value['name'],0, 30) ?></p>
                                            <a href="cart.html?45" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                                <p><a href="detail.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></p>
                                                <a href="cart.html?45" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/iphone-6s-plus-128gb-400-1-400x450.png" alt="" />
                                        <h2>24,490,000 VND</h2>
                                        <p>Điện thoại iPhone 6s Plus 64GB</p>
                                        <a href="cart.html?46" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>24,490,000 VND</h2>
                                            <p><a href="detail.html?46">Điện thoại iPhone 6s Plus 64GB</a></p>
                                            <a href="cart.html?46" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/sony-xperia-z5-premium-detail-400x460.png" alt="" />
                                        <h2>19,990,000 VND</h2>
                                        <p>Điện thoại Sony Xperia Z5 Premium Dual
                                        </p>
                                        <a href="cart.html?47" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>19,990,000 VND</h2>
                                            <p><a href="detail.html?47">Điện thoại Sony Xperia Z5 Premium Dual
                                                </a></p>
                                            <a href="cart.html?47" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <ul class="pagination col-sm-12">