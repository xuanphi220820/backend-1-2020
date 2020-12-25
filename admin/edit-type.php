<?php include "layouts/layout_top.php" ?>
<?php
    require "models/protypes.php";
    $protype = new ProtypeAdmin;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $typeInfo = $protype->getTypeById($id);
        //var_dump($typeInfo);
    }
?>
<!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Edit Protype</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Protype info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="action/editProtype.php?id=<?=$typeInfo[0]['type_id']?>" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Protype name" name="name" value="<?=$typeInfo[0]['type_name']?>"/> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-actions">
                                        <button type="submit" name="submit" class="btn btn-success">Add</button>
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
    <?php include "layouts/layout_bottom.php" ?>