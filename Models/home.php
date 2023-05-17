<?php
require_once("model.php");
class Home extends Model
{
    
    function best_seller()
    {
        $query="SELECT orderdetail.ProductID,product.Picture,product.ProductName,product.Price,SUM(orderdetail.QuantityOrdered) AS quantity
        FROM orderdetail LEFT JOIN product ON orderdetail.ProductID = product.ProductID 
        GROUP BY orderdetail.ProductID ORDER BY quantity DESC LIMIT 0,5";
        $result = $this->conn->query($query);
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
  
}