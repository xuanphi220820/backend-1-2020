<?php include "layouts/layout_top.php" ?>
<?php
require "models/user.php";
$user = new User;
$allUser = $user->getAllUser();
//var_dump($allUser);
?>
<!-- BEGIN CONTENT -->
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom current"><i
                        class="icon-home"></i> Home</a></div>
            <h1>Manage User</h1>
        </div>
        <div class="container-fluid">
            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"><a href="form.html"> <i class="icon-plus"></i>
                                </a></span>
                            <h5>Products</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($allUser as $key => $value) { ?>
                                        <tr class="">
                                            <td><?= $key+1?></td>
                                            <td><?=$value['username']?></td>
                                            <td><?=substr_replace($value['password'],'*******************',0)?></td>
                                            <td>
                                                <?php if ($value['role_id'] == 1) { ?>
                                                admin
                                                <?php } elseif ($value['role_id']== 2) { ?>
                                                user
                                                <?php } else { ?>
                                                guest
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a href="edit.html" class="btn btn-success btn-mini">Edit</a>
                                                <form action="" method="">
                                                    <input type="submit" class="btn btn-danger btn-mini" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="row" style="margin-left: 18px;">
                                <ul class="pagination">
                                    <li class="active">1</li>
                                    <li>2</li>
                                    <li>3</li>
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