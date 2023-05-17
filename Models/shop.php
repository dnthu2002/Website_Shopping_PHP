<?php 
require_once('model.php');
class Shop extends Model{
    function all_product($a, $b)
    {
        $query="SELECT product.*,category.CategoryName,brand.BrandName,productstatus.ProductStatusName 
        FROM product INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID 
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID
        order by UpdateDate ASC LIMIT $a,$b";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function all_product_by_catid($a, $b,$cat)
    {
        $query="SELECT product.*,category.CategoryName,brand.BrandName,productstatus.ProductStatusName 
        FROM product INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID 
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID
        WHERE category.CategoryID= $cat
        order by UpdateDate ASC LIMIT $a,$b";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function all_product_by_braid($a, $b,$bra)
    {
        $query="SELECT product.*,category.CategoryName,brand.BrandName,productstatus.ProductStatusName 
        FROM product INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID 
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID
        WHERE brand.BrandID= $bra
        order by UpdateDate ASC LIMIT $a,$b";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function count_all(){
        $query="SELECT * FROM product";
        $result = $this->conn->query($query);
        $count= mysqli_num_rows($result);
        return $count;

    }
    function count_all_by_catid($catid){
        $query="SELECT * FROM product WHERE CategoryID=$catid ";
        $result = $this->conn->query($query);
        $count= mysqli_num_rows($result);
        return $count;
    }
    function count_all_by_braid($braid){
        $query="SELECT * FROM product WHERE BrandID=$braid ";
        $result = $this->conn->query($query);
        $count= mysqli_num_rows($result);
        return $count;
    }
    public function count_product_by_cat(){
        $query="SELECT c.CategoryID, c.CategoryName , count( p.CategoryID) AS product_count FROM category c LEFT JOIN product p ON c.CategoryID = p.CategoryID GROUP BY c.CategoryID, c.CategoryName";
        return $this->conn->query($query);
    }
    public function count_product_by_bra(){
        $query="SELECT b.BrandID, b.BrandName , count( p.BrandID) AS brand_count FROM brand b LEFT JOIN product p ON b.BrandID = p.BrandID GROUP BY b.BrandID, b.BrandName";
        return $this->conn->query($query);
    }
    function keywork($a,$b,$key)
    {
        $key = "'%".$key."%'";
        $query = "SELECT * FROM product
        INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID  
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID WHERE ProductName LIKE $key  or ProductStatusName LIKE $key LIMIT $a,$b";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function count_keywork($key)
    {
        $key = "'%".$key."%'";
        $query = "SELECT * FROM product
        INNER JOIN category ON product.CategoryID=category.CategoryID
        INNER JOIN brand ON product.BrandID=brand.BrandID  
        INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID WHERE ProductName LIKE $key  or ProductStatusName LIKE $key";
        $result = $this->conn->query($query);
        $count= mysqli_num_rows($result);
        return $count;
        
    }
    // function brand_filter($a){
    //     $query = "SELECT * FROM product
    //     INNER JOIN category ON product.CategoryID=category.CategoryID
    //     INNER JOIN brand ON product.BrandID=brand.BrandID  
    //     INNER JOIN productstatus ON product.ProductStatusID = productstatus.ProductStatusID WHERE product.ProductStatusID !=''  AND product.BrandID IN('".$a."')";
    //     $result = $this->conn->query($query);
    //     $data = array();
    //     while ($row = $result->fetch_assoc()) {
    //         $data[] = $row;
    //     }
    //     return $data;

    // }
    function dongia($a,$b,$c)
    {
        if($a ==0 ){
            $a = "10000";
        }else{
            $a = $a."000";
        }
        $b = $b."000";
        $query = "SELECT * FROM product WHERE CategoryID=$c AND  Price > $a AND Price < $b  LIMIT 0, 9";

        require("result.php");
    
        return $data;
    }

    function dongiashop($a,$b)
    {
        if($a ==0 ){
            $a = "10000";
        }else{
            $a = $a."000";
        }
        $b = $b."000";
        $query = "SELECT * FROM product WHERE  Price > $a AND Price < $b  LIMIT 0, 9";

        require("result.php");
    
        return $data;
    }

}
?>