<?php
    require "models/manufacture.php";
    $manufactures = new Manufacture;
    $all_manu = $manufactures->getAllManufactures();
    //var_dump($all_manu);
?>
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            <?php foreach($all_manu as $key => $value) { ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title"><a href="cate.php?manufacture=<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></a></h4>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>