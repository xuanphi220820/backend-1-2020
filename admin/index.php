<?php 
include "layouts/layout_top.php" 
?>
<?php 

    require "models/product.php";
    $product = new ProductAdmin;
    $allProduct = $product->getAll();
    //var_dump($allProduct);
    var_dump($_SESSION['username']);
    
?>
<!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h1>Manage Products</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form-product.php"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Manufactures</th>
                                        <th>Product type</th>
                                        <th>Description</th>
                                        <th>Price (VND)</th>
                                        <th>Feature</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($allProduct as $key => $value) { ?>
                                        <tr class="">
                                        <td width="250"><img
                                                src="../public/images/<?= $value['pro_images']?>" />
                                        </td>
                                        <td><?= $value['name']?></td>
                                        <td><?= $value['manu_name']?></td>
                                        <td><?= $value['type_name']?></td>
                                        <td><?= $value['description']?></td>
                                        <td><?= number_format($value['price']) ?></td>
                                        <td><?= $value['feature']?></td>
                                        <td><?= $value['created_at']?></td>
                                        <td>
                                            <a href="edit-product.php?id=<?= $value['id']?>" class="btn btn-success btn-mini">Edit</a>
                                            <a href="action/delete.php?id=<?= $value['id']?>" class="btn btn-danger btn-mini">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <li class="active"><a href="">1</a>  </li>
                                    <li><a href="">2</a></li>
                                    <li><a href="">3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->
    <?php include "layouts/layout_bottom.php" ?>