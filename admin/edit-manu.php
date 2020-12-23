<?php include "layouts/layout_top.php" ?>
<?php
    require "models/manufactures.php";
    $manu = new ManufactureAdmin;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $manuInfo = $manu->getManuById($id);
        //var_dump($manuInfo);
    }
?>
<!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom current"><i class="icon-home"></i>
                    Home</a></div>
            <h1>Edit Manufacture</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                            <h5>Manufacture info</h5>
                        </div>
                        <div class="widget-content nopadding">

                            <!-- BEGIN USER FORM -->
                            <form action="action/editManu.php?id=<?=$manuInfo[0]['manu_id']?>" method="post" class="form-horizontal"
                                enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label">Name :</label>
                                    <div class="controls">
                                        <input type="text" class="span11" placeholder="Manufacture name" name="name" value="<?= $manuInfo[0]['manu_name']?>"/> *
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Choose an image :</label>
                                    <div class="controls">
                                        <?php if(!isset($_FILES['fileUpload'])) { ?>
                                            <img src="../public/images/manu/<?= $manuInfo[0]['manu_img']?>" width="150">
                                            <input type="hidden" name="oldfile" value="<?= $manuInfo[0]['manu_img']?>">
                                            <br><br>
                                        <?php } ?>
                                        <input type="file" name="fileUpload" id="fileUpload">
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