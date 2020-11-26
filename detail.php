<?php include "layouts/layout_top.php" ?>
<?php
    require "models/product.php";
    $product = new Product;
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $product_detail = $product->getProductById($id);
        $relate_id = $product_detail[0]['manu_id'];
        //var_dump($relate_id);
        $relate_products = $product->getRelateProduct($relate_id);
    }
    
    //var_dump($relate_products);
?>
    <?php include "layouts/layout_menu.php" ?>
    <!--/header-bottom-->
    </header>
    <!--/header-->
    <section>
        <div class="container">
            <div class="row">
            <?php include "layouts/layout_category.php" ?>
                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="public/images/<?php echo $product_detail[0]['pro_images'] ?>" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="product-information">
                                <!--/product-information-->
                                <h2><?php echo $product_detail[0]['name'] ?></h2>
                                <span>
                                    <span><?php echo $product->formatPrice($product_detail[0]['price']) ?></span>
                                    <label>Quantity:</label>
                                    <input type="text" value="3" />
                                    <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                </span>
                                <p><b>Availability:</b> In Stock</p>
                                <p><b>Condition:</b> New</p>
                                <p><b>Brand:</b> Apple</p>
                                <p><b>Description:</b> <?php echo $product_detail[0]['description'] ?></p>
                            </div>
                            <!--/product-information-->
                        </div>
                    </div>
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title">Relate products</h2>
                        <?php foreach ($relate_products as $key => $value) { ?>
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
                    <!--/product-details-->
                    <!--features_items-->
                </div>
            </div>
    </section>
<?php include "layouts/layout_bottom.php" ?>