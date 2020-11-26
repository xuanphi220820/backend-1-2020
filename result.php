<?php include "layouts/layout_top.php" ?>
<?php include "layouts/layout_menu.php" ?>
<?php
    require "models/product.php";
    $product = new Product;

    if(isset($_REQUEST['key'])) {
        $search = addslashes($_GET['key']);
        if(empty($search)) {
            echo "Please enter data to search !!!";
        }
        else {
            $key_word = $_GET['key'];
            $search_lists = $product->searchProduct($key_word);
            //var_dump($search_lists);
            // if ($search_lists == null) {
            //     echo "Not Found !!!";
            // }
        }
    }
    else {
        echo "Not found !!!";
    }
    //Pagination
    
?>
    <!--/header-bottom-->
    </header>
    <!--/header-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="features_items">
                        <!--features_items-->
                        <h2 class="title text-center">
                        <?php
                            if (isset($search_lists) && $search_lists == null) {
                                echo "Product not Found";
                            }
                            else {
                                echo "Search Result";
                            }
                        ?>
                        </h2>
                        <?php foreach($search_lists as $key => $value) { ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="public/images/<?php echo $value['pro_images'] ?>" alt="" />
                                        <h2><?php echo $product->formatPrice($value['price']) ?></h2>
                                        <p><?php echo $value['name'] ?></p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
                                                class="fa fa-shopping-cart"></i>Add to cart</a>
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
                        <!-- <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center"> <img
                                            src="images/iphone-6s-plus-128gb-400-1-400x450.png" alt="" />
                                        <h2>24,490,000 VND</h2>
                                        <p>Điện thoại iPhone 6s Plus 64GB</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i
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
                                        <a href="#" class="btn btn-default add-to-cart"><i
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