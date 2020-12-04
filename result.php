<?php include "layouts/layout_top.php" ?>
<?php include "layouts/layout_menu.php" ?>
<?php
    require "models/product.php";
    require "models/pagination.php";
    $product = new Product;

    if(isset($_REQUEST['key'])) {
        $search = addslashes($_GET['key']);
        if(empty($search)) {
            echo "Please enter data to search !!!";
        }
        else {
            
            //Pagination
            $paginate = new Pagination;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $perPage = 3;
            $url = $_SERVER['PHP_SELF'];
            //Search
            $key_word = $_GET['key'];
            $total = count($product->getAllSearch($key_word));
            //var_dump($total);
            $search_lists = $product->searchProduct($key_word,$page,$perPage);
            //var_dump($search_lists);
        }
    }
    else {
        echo "Not found !!!";
    }
    

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
                        <ul class="pagination col-sm-12">
                            <?php
                            if (isset($_GET['key'])) {
                                $key = "key=$key_word";
                            }
                            echo $paginate->paginate($url,$total,$page,$perPage,$key); ?>
                        </ul>