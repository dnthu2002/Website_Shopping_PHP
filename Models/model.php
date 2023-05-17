<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query="SELECT product.*,category.CategoryName,brand.BrandName,productstatus.ProductStatusName 
        FROM product INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID 
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID
        order by UpdateDate ASC LIMIT  $a,$b";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        return $data;
    }
    function category()
    {
        $query =  "SELECT * from category";

        require("result.php");
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function brand()
    {
        $query =  "SELECT * from brand";
        require("result.php");
        
        return $data;
    }

    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
        require("result.php");
        
        return $data;
    }
    function banner()
    {
        $query =  "SELECT * from banner ";

        require("result.php");
        
        return $data;
    }
    function product_by_catid($a, $b, $cat)
    {
        $query="SELECT product.*,category.CategoryName,brand.BrandName,productstatus.ProductStatusName 
        FROM product INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID 
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID
        WHERE category.CategoryID=$cat
        order by UpdateDate DESC LIMIT $a,$b";
        require("result.php");
        
        return $data;
    }

    function ranting_pro()
    {
        $query="SELECT rating.ProductID,SUM(rating.Rating_Star) AS rating,count( product.ProductID) AS rating_count 
        FROM rating LEFT JOIN product ON rating.ProductID = product.ProductID GROUP BY rating.ProductID";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function count_sold()
    {
        $query="SELECT orderdetail.ProductID,SUM(orderdetail.QuantityOrdered) AS quantity FROM orderdetail 
        LEFT JOIN product ON orderdetail.ProductID = product.ProductID GROUP BY orderdetail.ProductID";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
