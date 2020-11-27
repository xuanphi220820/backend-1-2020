<?php 
class Pagination extends Db {
    function getAllProducts($page,$perPage) {
        // Tính số thứ tự trang bắt đầu
        $firstLink = ($page - 1) * $perPage;
        $sql = "SELECT * FROM products LIMIT $firstLink, $perPage";
        $result = sefl::$connection->query($sql);
        return $this->getData($result);
    }
    
    function paginate($url,$total,$page,$perPage,$key) {
        $totalLinks = ceil($total/$perPage);
        $link ="";
        for($j=1; $j <= $totalLinks ; $j++)
        {
            //$link = $link."<a href='$url?" . isset($_GET['key']) ? "key=" . $_GET['key'] : '' ."page=$j'> $j </a>";
            $link = $link."<a href='$url?$key&page=$j'> $j </a>";

        }
        return $link;
    }
}