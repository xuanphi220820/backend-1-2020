<?php include "layouts/layout_top.php" ?>
<?php
    require "models/product.php";
    require "models/manufactures.php";
    require "models/protypes.php";
    $product = new ProductAdmin;
    $manu = new ManufactureAdmin;
    $protype = new ProtypeAdmin;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $productInfo = $product->getProductById($id);
        //var_dump($productInfo);
    }
    $allManus = $manu->getAllManu();
    $allProtypes = $protype->getAllProtype();
?>
<!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Edit Product</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Product info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="action/editProduct.php?id=<?=$productInfo[0]['id']?>" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Product name" name="name" value="<?= $productInfo[0]['name']?>"/> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a manufacture:</label>
                                    <div class="controls">
                                        <select name="manu_id" id="cate">
                                            <?php foreach($allManus as $key => $value) { ?>
                                                <option
                                                value="<?= $key+1?>"
                                                <?php
                                                    if($key+1 == $productInfo[0]['manu_id']) {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    }
                                                ?>
                                                >
                                                    <?= $value['manu_name']?>
                                                </option>
                                            <?php } ?>
                                        </select> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose a product type:</label>
                                    <div class="controls">
                                        <select name="type_id" id="subcate">
                                            <?php foreach($allProtypes as $key => $value) { ?>
                                                <option
                                                value="<?= $key+1?>"
                                                <?php
                                                    if($key+1 == $productInfo[0]['type_id']) {
                                                        echo "selected";
                                                    } else {
                                                        echo "";
                                                    }
                                                ?>
                                                >
                                                    <?= $value['type_name']?>
                                                </option>
                                            <?php } ?>

                                        </select> *
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Choose an image :</label>
                                        <div class="controls">
                                            <?php if(!isset($_FILES['fileUpload'])) { ?>
                                                <img src="../public/images/<?= $productInfo[0]['pro_images']?>" width="150">
                                                <input type="hidden" name="oldfile" value="<?= $productInfo[0]['pro_images']?>">
                                                <br><br>
                                            <?php } ?>
                                            
                                            <input type="file" name="fileUpload" id="fileUpload">
                                            
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                            <textarea class="span11" placeholder="Description"
                                                name="description"><?= $productInfo[0]['description']?>
                                            </textarea>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Price :</label>
                                            <div class="controls">
                                                <input type="text" class="span11" placeholder="price" name="price" value="<?= $productInfo[0]['price']?>" /> *
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Feature :</label>
                                            <div class="controls">
                                                <input type="number" class="span11" name="feature" min="0" max="1" value="<?= $productInfo[0]['feature']?>"/> *
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" name="submit" class="btn btn-success">Edit</button>
                                        </div>
                                    </div>
                            </form>
                            <!-- END USER FORM -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2017 &copy; TDC - Lập trình web 1</div>
    </div>
    <!--end-Footer-part-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.ui.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.uniform.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/matrix.js"></script>
    <script src="js/matrix.tables.js"></script>
</body>

</html>