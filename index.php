<?php include "layouts/layout_top.php" ?>
<?php    
    require "models/product.php";
    $product = new Product;
    $feature_products = $product->getAllFeatureProducts();
    $new_products = $product->getNewProducts();
    //var_dump($product->getAllFeatureProducts());
    //var_dump($new_products);
?>
<?php include "layouts/layout_menu.php" ?>
    <!--/header-bottom-->
    </header>
    <!--/header-->
    <section>
        <div class="container">
            <div class="row">
                <!-- Layout Category -->
                <?php include "layouts/layout_category.php" ?>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">Features Items</h2>
                        <?php foreach ($feature_products as $key => $value) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="public/images/<?php echo $value['pro_images'] ?>" alt="" />
                                        <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                        <p></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to
                                            cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                            <p><a href="detail.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></p>
                                            <a href="cart.html?<?php echo $value['id'] ?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!--features_items-->
                    <h2 class="title text-center">New Items</h2>
                        <?php foreach ($new_products as $key => $value) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="public/images/<?php echo $value['pro_images'] ?>" alt="" />
                                        <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                        <p></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to
                                            cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                            <p><a href="detail.php?id=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></p>
                                            <a href="cart.html?<?php echo $value['id'] ?>" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                </div>
            </div>
    </section>
    <?php include "layouts/layout_bottom.php" ?>