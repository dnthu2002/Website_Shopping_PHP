<?php
require_once("Models/details.php");
class DetailController
{
    var $detail_model;
    public function __construct()
    {
       $this->detail_model = new Details();
    }
    
    function list()
    {

        // $data_category = $this->detail_model->category();

        // $data_chitietDM = array();

        // for($i=1; $i <=count($data_category);$i++){
        //     $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
        // }

        $id = $_GET['id'];

        $data = $this->detail_model->detail_pro($id);
        $rating_pro=$this->detail_model->ranting_pro();
        $count_sold = $this->detail_model->count_sold();
        $brand=$this->detail_model->brand();
        $category=$this->detail_model->category();

        if($data!=null){
        $data_lq = $this->detail_model->product_by_catid(0,4,$data['CategoryID']);
        }
        require_once('Views/index.php');
    }
}