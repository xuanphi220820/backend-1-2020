<?php
    require "models/protype.php";
    $protypes = new Protype;
    $all_protype = $protypes->getAllProtype();
    //var_dump($all_protype);
?>
<div class="header-bottom">
    <!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="" /></a> </div>
                </div>
                <div class="mainmenu pull-right">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li class="dropdown"><a href="index.html">Products<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <?php foreach($all_protype as $key => $value) { ?>
                                    <li><a href="cate.php?type=<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></a></li>
                                <?php } ?>
                                <!-- <li><a href="cate.html?2">Tablet</a></li>
                                <li><a href="cate.html?3">Laptop</a></li>
                                <li><a href="cate.html?4">Speaker</a></li> -->
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="#">Blog List</a></li>
                                <li><a href="#">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="cart.html?">Cart</a></li>
                    </ul>
                    <div class="search_box pull-right">
                        <form action="result.php" method="get">
                            <input type="text" placeholder="Search" name="key" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>