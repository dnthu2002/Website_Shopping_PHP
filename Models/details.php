<?php 
require_once('model.php');
class Details extends Model{

    function detail_pro($id)
    {
        $query =  "SELECT * from product where ProductID = $id";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
}
?>