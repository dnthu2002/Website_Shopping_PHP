<?php
require_once("Models/shop.php");
class ShopController
{
    var $shop_model;
    public function __construct()
    {
        $this->shop_model = new Shop();
    }
    
    function list()
    {           
        $brand=$this->shop_model->brand();
        $category=$this->shop_model->category();
        $rating_pro=$this->shop_model->ranting_pro();
        $count_sold = $this->shop_model->count_sold();
        $count_pro_by_cat=$this->shop_model->count_product_by_cat();
        $count_pro_by_bra=$this->shop_model->count_product_by_bra();
        if(isset($_GET['catid'])){
            $count=$this->shop_model->count_all_by_catid($_GET['catid']);
            $page_button=ceil($count/16);
            $cus_one_page=16;
            if(!isset($_GET['page'])){
                $page=1;
            }else{
                $page=$_GET['page'];
            }
            $one_page=($page-1)*$cus_one_page;
            $data=$this->shop_model->all_product_by_catid($one_page,$cus_one_page,$_GET['catid']);
        }elseif(isset($_GET['braid'])){
            $count=$this->shop_model->count_all_by_braid($_GET['braid']);
            $page_button=ceil($count/16);
            $cus_one_page=16;
            if(!isset($_GET['page'])){
                $page=1;
            }else{
                $page=$_GET['page'];
            }
            $one_page=($page-1)*$cus_one_page;
            $data=$this->shop_model->all_product_by_braid($one_page,$cus_one_page,$_GET['braid']);
        }
        else{
            if(isset($_POST['keyword'])){
            $count=$this->shop_model->count_keywork($_POST['keyword']);
            $page_button=ceil($count/16);
            $cus_one_page=16;
            if(!isset($_GET['page'])){
                $page=1;
            }else{
                $page=$_GET['page'];
            }
            $one_page=($page-1)*$cus_one_page;
                $data=$this->shop_model->keywork($one_page,$cus_one_page,$_POST['keyword']);
            }
            else{
                $count=$this->shop_model->count_all();
                $page_button=ceil($count/16);
                $cus_one_page=16;
                if(!isset($_GET['page'])){
                    $page=1;
                }else{
                    $page=$_GET['page'];
                }
                $one_page=($page-1)*$cus_one_page;
                $data=$this->shop_model->all_product($one_page,$cus_one_page);
            }
        }
        require_once('Views/index.php');

    } 
}