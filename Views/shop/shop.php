        <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Grid 4 Columns<span>Shop</span></h1>
                </div>
                <!-- End .container -->
            </div>
            <!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grid 4 Columns</li>
                    </ol>
                </div>
                <!-- End .container -->
            </nav>
            <!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="products mb-3">
                                <div class="row justify-content-center filter_data">
                                <?php foreach($data as $value){ ?>
                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                    <div class="product product-7 text-center ">
                                    <figure class="product-media">
                                            <span class="product-label label-<?php
                                    if($value['ProductStatusID']=='1'){
                                        echo "new";
                                    }elseif($value['ProductStatusID']=='2'){
                                        echo "top";
                                    }else{
                                        echo "sale";
                                    }
                                    ?>"><?= $value['ProductStatusName']; ?></span>
                                    <a href="?act=detail&id=<?= $value['ProductID']?>">
                                        <img src="Admin/upload/<?= $value['Picture'] ?>" alt="Product image" class="product-image">
                                        <img src="Admin/upload/<?= $value['Picture2'] ?>" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div>
                                    <!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="?act=detail&id=<?= $value['ProductID']; ?>" class="btn-product btn-cart"><span>Xem chi tiết</span></a>
                                    </div>
                                    <!-- End .product-action -->
                                </figure>
                                <!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#"><?= $value['CategoryName'] ?></a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="?act=detail&id=<?= $value['ProductID']; ?>"><?= $value['ProductName']?></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price-sold" >
                                        <div class="product-price">
                                            Giá: <?= number_format($value['Price'],0,',','.')." "."VNĐ"; ?>
                                        </div>
                                        <div class="product-sold">
                                            Đã bán:
                                            <?php
                                            if(isset($count_sold)){
                                                foreach($count_sold as $sold){
                                                    if($sold['ProductID']==$value['ProductID'])                                                   
                                                            echo $sold['quantity'];
                                                                    
                                                }
                                            }
                                                                                                                        
                                            
                                            ?>
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <!-- End .product-price -->
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width:
                                            <?php if($rating_pro!=NULL){
                                                foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$value['ProductID']){
                                                        $rating_avg=($rating['rating']/(5*$rating['rating_count']))*100;
                                                        echo $rating_avg;
                                                    }
                                                }
                                            }
                                            ?>%"></div>
                                        </div>
                                        <span class="ratings-text">( 
                                           <?php foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$value['ProductID']){
                                                        echo $rating['rating_count'];
                                                    }
                                                }
                                            ?>
                                        Đánh giá )</span>
                                    </div>
                                    <!-- End .rating-container -->
                                </div>
                                <!-- End .product-body -->
                            </div>
                            <!-- End .product -->
                                    </div>
                                    <!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                                    <?php }?>
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- End .products -->


                      
                        </div>
                        <!-- End .col-lg-9 -->
                        <aside class="col-lg-3 order-lg-first">
                            <div class="sidebar sidebar-shop">
                                <div class="widget widget-clean">
                                    <label>Bộ lọc:</label>
                                    <a href="#" class="sidebar-filter-clear">Xóa tất cả</a>
                                </div>
                                <!-- End .widget widget-clean -->

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
									        Danh mục
									    </a>
                                    </h3>
                                    <!-- End .widget-title -->

                                    <div class="collapse show" id="widget-1">
                                        <div class="widget-body">
                                            <div class="filter-items filter-items-count">
                                                <?php $i=0;
                                                foreach($count_pro_by_cat as $value){ 
                                                    $i++;?>
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="cat-<?= $i; ?>">
                                                        <label class="custom-control-label" for="cat-<?= $i; ?>"><?= $value['CategoryName']; ?></label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                    <span class="item-count"><?= $value['product_count'];?></span>
                                                </div>
                                                <!-- End .filter-item -->
                                                <?php }?>
                                            </div>
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                    <!-- End .collapse -->
                                </div>
                                <!-- End .widget -->

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-2" role="button" aria-expanded="true" aria-controls="widget-2">
									        Kích cỡ
									    </a>
                                    </h3>
                                    <!-- End .widget-title -->

                                    <div class="collapse show" id="widget-2">
                                        <div class="widget-body">
                                            <div class="filter-items">
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="size-1">
                                                        <label class="custom-control-label" for="size-1">XS</label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                </div>
                                                <!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="size-2">
                                                        <label class="custom-control-label" for="size-2">S</label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                </div>
                                                <!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked id="size-3">
                                                        <label class="custom-control-label" for="size-3">M</label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                </div>
                                                <!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked id="size-4">
                                                        <label class="custom-control-label" for="size-4">L</label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                </div>
                                                <!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="size-5">
                                                        <label class="custom-control-label" for="size-5">XL</label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                </div>
                                                <!-- End .filter-item -->

                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="size-6">
                                                        <label class="custom-control-label" for="size-6">XXL</label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                </div>
                                                <!-- End .filter-item -->
                                            </div>
                                            <!-- End .filter-items -->
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                    <!-- End .collapse -->
                                </div>
                                <!-- End .widget -->

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-3" role="button" aria-expanded="true" aria-controls="widget-3">
									        Màu sắc
									    </a>
                                    </h3>
                                    <!-- End .widget-title -->

                                    <div class="collapse show" id="widget-3">
                                        <div class="widget-body">
                                            <div class="filter-colors">
                                                <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                                <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                            </div>
                                            <!-- End .filter-colors -->
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                    <!-- End .collapse -->
                                </div>
                                <!-- End .widget -->

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
									        Thương hiệu
									    </a>
                                    </h3>
                                    <!-- End .widget-title -->

                                    <div class="collapse show" id="widget-4">
                                        <div class="widget-body">
                                            <div class="filter-items filter-items-count">
                                                <?php $i=0;
                                                foreach($count_pro_by_bra as $value){ 
                                                    $i++;?>
                                                <div class="filter-item">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input brand" id="brand-<?=  $i; ?>">
                                                        <label class="custom-control-label" for="brand-<?= $i;?>"><?= $value['BrandName']; ?></label>
                                                    </div>
                                                    <!-- End .custom-checkbox -->
                                                    <span class="item-count"><?= $value['brand_count'];?></span>

                                                </div>
                                                <!-- End .filter-item -->
                                                <?php } ?>

                                            </div>
                                            <!-- End .filter-items -->
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                    <!-- End .collapse -->
                                </div>
                                <!-- End .widget -->

                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title">
                                        <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
									        Giá
									    </a>
                                    </h3>
                                    <!-- End .widget-title -->
                                    <div class="collapse show" id="widget-5">
                                        <div class="widget-body">
                                            <div class="filter-price">
                                                <div class="filter-price-text">
                                                    Phạm vi giá:
                                                    <div class="travel-budget">
                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <div class="travel-filter">
                                                                    <div class="info_widget">
                                                                        <div class="price_filter">
                                                                            <div id="slider-range"></div>
                                                                            <div class="price_slider_amount">
                                                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End .filter-price-text -->

                                            </div>
                                            <!-- End .filter-price -->
                                        </div>
                                        <!-- End .widget-body -->
                                    </div>
                                    <!-- End .collapse -->
                                </div>
                                <!-- End .widget -->
                            </div>
                            <!-- End .sidebar sidebar-shop -->
                        </aside>
                        <!-- End .col-lg-3 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .container -->
            </div>
            <!-- End .page-content -->
        </main>
        <!-- End .main -->
    <script>
$(document).ready(function(){ 

    function filter_data()
    {
        var action = 'fetch_data';
        var brand = get_filter('brand');
        $.ajax({
            url:"?act=shop",
            method:"POST",
            data:{action:action, brand:brand},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.custom-control-input').click(function(){
        filter_data();
    });

});
</script>
