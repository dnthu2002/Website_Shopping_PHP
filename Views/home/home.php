<main class="main">
<div class="intro-slider-container">
                <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl" data-owl-options='{"nav": false}'>
                    <?php
                    if($banner != null){
                        foreach($banner as $value){
                    
                    ?>

                    <div class="intro-slide" style="background-image: url(Admin/upload/<?= $value['img_pro'] ?>);">
                        <div class="container intro-content">
                            <h3 class="intro-subtitle"><?= $value['name_pro'] ?></h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title"><?= $value['content'] ?><span class="text-primary"><?= number_format($value['price_pro'],0,',','.')." "."VNĐ"; ?></span></h1><!-- End .intro-title -->

                            <a href="category.html" class="btn btn-primary">
                                <span>Xem ngay</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .container intro-content -->
                    </div><!-- End .intro-slide -->
<?php  }} ?>
                    
                </div><!-- End .owl-carousel owl-simple -->

                <span class="slider-loader text-white"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->
    <div class="container banner-group">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner banner-border">
                    <a href="#">
                        <img src="assets/images/demos/demo-18/banners/banner-8.jpg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Xu hướng</a></h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title"><a href="#"><span>Mua nhiều nhất<br>tuần này</span></a></h3>
                        <!-- End .banner-title -->
                        <a href="#" class="btn btn-outline-primary-2 banner-link">Xem ngay<i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <!-- End .banner-content -->
                </div>
                <!-- End .banner -->
            </div>
            <!-- End .col-lg-6 -->

            <div class="col-sm-6 col-lg-3">
                <div class="banner banner-border-hover">
                    <a href="#">
                        <img src="assets/images/demos/demo-18/banners/banner-7.jpg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Giảm giá hôm nay</a></h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title"><a href="#"><span>Giảm tới 60%<br>đồ thể thao</span></a></h3>
                        <!-- End .banner-title -->
                        <a href="#" class="btn btn-outline-primary-2 banner-link">Mua ngay<i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <!-- End .banner-content -->
                </div>
                <!-- End .banner -->
            </div>
            <!-- End .col-sm-6 -->

            <div class="col-sm-6 col-lg-3">
                <div class="banner banner-border-hover">
                    <a href="#">
                        <img src="assets/images/demos/demo-18/banners/banner-3.jpg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Yêu thích nhất tuần</a></h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title"><a href="#"><span>Giày Jordan 1</span></a></h3>
                        <!-- End .banner-title -->
                        <a href="#" class="btn btn-outline-primary-2 banner-link">Xem Ngay<i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <!-- End .banner-content -->
                </div>
                <!-- End .banner -->

                <div class="banner banner-border-hover">
                    <a href="#">
                        <img src="assets/images/demos/demo-18/banners/banner-6.jpg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Thay đổi phong cách</a></h4>
                        <!-- End .banner-subtitle -->
                        <h3 class="banner-title"><a href="#"><span> Trẻ trung, sôi động </span></a></h3>
                        <!-- End .banner-title -->
                        <a href="#" class="btn btn-outline-primary-2 banner-link">Xem ngay<i class="far fa-long-arrow-right"></i></a>
                    </div>
                    <!-- End .banner-content -->
                </div>
                <!-- End .banner -->
            </div>
            <!-- End .col-sm-6 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2 class="title">Sản phẩm mới</h2>
                <!-- End .title -->
                <div class="products-container mb-7">
                    <div class="row justify-content-center">
                    <?php 
                            if($data_limit1!=NULL){ 
                                foreach ($data_limit1 as  $value) {		
                        ?>
                        
                        <div class="col-6 col-md-4">
                            <div class="product product-7 text-center">
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

                        <!-- End .col-sm-6 col-md-4 -->
                        <?php }}?>
                    </div>
                    <!-- End .row -->

                    <div class="more-container text-center mt-0 mb-0">
                        <a href="?act=shop" class="btn btn-outline-primary-2 btn-more">
                            <span>Xem thêm sản phẩm</span>
                        </a>
                    </div>
                    <!-- End .more-container -->
                </div>
                <!-- End .products -->
            </div>
            <!-- End .col-lg-9 -->

            <aside class="col-lg-3">
                <div class="sidebar sidebar-home">
                    <div class="row">
                        <div class="col-sm-6 col-lg-12">
                            <div class="widget widget-products">
                                <h4 class="widget-title">Bán chạy nhất</h4>
                                <!-- End .widget-title -->

                                <div class="products">
                                    <?php if($best_seller!=NULL){
                                        foreach($best_seller as $value){
                                    ?>
                                    <div class="product product-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="Admin/upload/<?= $value['Picture'] ?>" alt="Product image" class="product-image product-image-sm">
                                            </a>
                                        </figure>

                                        <div class="product-body">
                                            <!-- End .product-cat -->
                                            <h5 class="product-title"><a href="product.html"><?= $value['ProductName'] ?></a></h5>
                                            <!-- End .product-title -->
                                            <div class="product-price">
                                                Giá: <?= number_format($value['Price'],0,',','.')." "."VNĐ";  ?>
                                            </div>
                                            <div class="product-sold">
                                            Đã bán:        
                                                <?= $value['quantity']; ?>
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
                                            ?>%;"></div>
                                            <!-- End .ratings-val -->
                                        </div>
                                        <!-- End .ratings -->
                                        <span class="ratings-text">(  <?php foreach($rating_pro as $rating){
                                                    if($rating['ProductID']==$value['ProductID']){
                                                        echo $rating['rating_count'];
                                                    }
                                                }
                                            ?> Đánh giá )</span>
                                    </div>
                                        </div>
                                        <!-- End .product-body -->
                                    </div>
                                    <!-- End .product product-sm -->
                                    <?php }}?>
                                </div>
                                <!-- End .products -->
                            </div>
                            <!-- End .widget widget-products -->
                        </div>
                        <!-- End .col-sm-6 col-lg-12 -->

                        <div class="col-sm-6 col-lg-12">
                            <div class="widget widget-subscribe" style="background-image: url(assets/images/demos/demo-18/bg-newsletter.jpg);">
                                <h2 class="widget-title">Đăng ký được <br> giảm giá 20% </h2>
                                <!-- End .widget-title -->
                                <p>Đăng ký để nhận được nhiều mã giảm giá</p>
                                <a href="#" class="btn btn-primary ">Đăng ký</a>

                                

                            </div>
                            <!-- End .widget widget-banner -->
                        </div>
                        <!-- End .col-sm-6 col-lg-12 -->

                        <div class="col-sm-6 col-lg-12">
                            <div class="widget widget-banner">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-18/banners/banner-9.jpg" alt="Banner">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle"><a href="#">Giày Jordan 1</a></h4>
                                        <!-- End .banner-title -->
                                        <h3 class="banner-title"><a href="#">Mới ra mắt</a></h3>
                                        <!-- End .banner-title -->
                                        <a href="#" class="banner-link">Mua ngay</a>
                                    </div>
                                    <!-- End .banner-content -->
                                </div>
                                <!-- End .banner -->
                            </div>
                            <!-- End .widget widget-banner -->
                        </div>
                        <!-- End .col-sm-6 col-lg-12 -->

                        <div class="col-sm-6 col-lg-12">
                            <div class="widget widget-posts">
                                <h4 class="widget-title">Bài đăng diễn đàn</h4>
                                <!-- End .widget-title -->

                                <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                                                "nav":false, 
                                                "dots": true, 
                                                "loop": false, 
                                                "autoHeight": true
                                            }'>
                                    <article class="entry">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="assets/images/demos/demo-18/blog/post-1.jpg" alt="image desc">
                                            </a>
                                        </figure>
                                        <!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <a href="#">21-7-2022</a>, 0 Comments
                                            </div>
                                            <!-- End .entry-meta -->

                                            <h5 class="entry-title">
                                                <a href="single.html">Thay đổi phong cách.</a>
                                            </h5>
                                            <!-- End .entry-title -->

                                            <div class="entry-content">
                                                <p>Thay đổi phong cách thời trang là thay đổi chính con người bạn</p>
                                                <a href="single.html" class="read-more">Xem thêm</a>
                                            </div>
                                            <!-- End .entry-content -->
                                        </div>
                                        <!-- End .entry-body -->
                                    </article>
                                    <!-- End .entry -->

                                    <article class="entry">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="assets/images/demos/demo-18/blog/post-2.jpg" alt="image desc">
                                            </a>
                                        </figure>
                                        <!-- End .entry-media -->

                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <a href="#">24-7-2022</a>, 0 Comments
                                            </div>
                                            <!-- End .entry-meta -->

                                            <h5 class="entry-title">
                                                <a href="single.html">Tuổi trang năng động</a>
                                            </h5>
                                            <!-- End .entry-title -->

                                            <div class="entry-content">
                                                <p>Thời trang năng động cho tuổi trẻ</p>
                                                <a href="single.html" class="read-more">Xem thêm</a>
                                            </div>
                                            <!-- End .entry-content -->
                                        </div>
                                        <!-- End .entry-body -->
                                    </article>
                                    <!-- End .entry -->
                                </div>
                                <!-- End .owl-carousel -->
                            </div>
                            <!-- End .widget widget-posts -->
                        </div>
                        <!-- End .col-sm-6 col-lg-12 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .sidebar sidebar-home -->
            </aside>
            <!-- End .col-lg-3 -->
        </div>
        <!-- End .row -->
        <div class="pt-6 pb-6" style="background-color: #fff;">
            <div class="container">
                <div class="banner-set">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="banner-set-content text-center">
                                <div class="set-content-wrapper">
                                    <h4>Special</h4>
                                    <h2>Refine Your Style.</h2>

                                    <p>Get on our exclusive email list and be the first to hear about sales, coupons, new arrivals and more! </p>

                                    <div class="banner-set-products">
                                        <div class="row">
                                            <div class="products">
                                                <div class="col-6">
                                                    <div class="product product-2 text-center">
                                                        <figure class="product-media">
                                                            <a href="product.html">
                                                                <img src="assets/images/demos/demo-5/products/product-13.jpg" alt="Product image" class="product-image">
                                                            </a>
                                                        </figure>
                                                        <!-- End .product-media -->

                                                        <div class="product-body">
                                                            <h3 class="product-title"><a href="product.html">Rib-knit cardigan</a></h3>
                                                            <!-- End .product-title -->
                                                            <div class="product-price">
                                                                $24.99
                                                            </div>
                                                            <!-- End .product-price -->
                                                        </div>
                                                        <!-- End .product-body -->
                                                    </div>
                                                    <!-- End .product -->
                                                </div>
                                                <!-- End .col-sm-6 -->

                                                <div class="col-6">
                                                    <div class="product product-2 text-center">
                                                        <figure class="product-media">
                                                            <a href="product.html">
                                                                <img src="assets/images/demos/demo-5/products/product-14.jpg" alt="Product image" class="product-image">
                                                            </a>
                                                        </figure>
                                                        <!-- End .product-media -->

                                                        <div class="product-body">
                                                            <h3 class="product-title"><a href="product.html">Linen-blend trousers</a></h3>
                                                            <!-- End .product-title -->
                                                            <div class="product-price">
                                                                $19.99
                                                            </div>
                                                            <!-- End .product-price -->
                                                        </div>
                                                        <!-- End .product-body -->
                                                    </div>
                                                    <!-- End .product -->
                                                </div>
                                                <!-- End .col-sm-6 -->
                                            </div>
                                        </div>
                                        <!-- End .row -->
                                    </div>
                                    <!-- End .banner-set-products -->
                                </div>
                                <!-- End .set-content-wrapper -->
                            </div>
                            <!-- End .banner-set-content -->
                        </div>
                        <!-- End .col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="banner-set-image banner-border-hover">
                                <a href="#">
                                    <img src="assets/images/demos/demo-5/banners/banner-4.jpg" alt="banner">
                                </a>
                                <div class="banner-content">
                                    <h3 class="banner-title"><a href="#"><span>Casual basics and<br>trendy key pieces.</span></a></h3>
                                    <!-- End .banner-title -->
                                    <h4 class="banner-subtitle">in this look</h4>
                                    <!-- End .banner-subtitle -->
                                    <h4 class="banner-detail">• Rib-knit cardigan <br>• Linen-blend paper bag trousers</h4>
                                    <h4 class="banner-price">$19.99 - $48.00</h4>
                                    <a href="#" class="btn btn-outline-primary-2 banner-link">buy all</a>
                                </div>
                                <!-- End .banner-content -->
                            </div>
                            <!-- End .banner-set-image -->
                        </div>
                        <!-- End .col-lg-6 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .banner-set -->
            </div>
            <!-- End .container -->
        </div>
        <!-- End .bg-lighter pt6 pb-6 -->
        <hr class="mt-0 mb-4">
        <h2 class="title text-center brands">Mua sắm theo thương hiệu</h2>
        <!-- End .title -->

        <div class="owl-carousel mt-3 mb-4 owl-simple" data-toggle="owl" data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            },
                            "1200": {
                                "items":6,
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
            <?php
            foreach($brand as $value){
            ?>
            <a href="#" class="brand">
                <img style="width:200px; height: 100px;" src="Admin/upload/<?= $value['Logo']; ?>" alt="Brand Name">
            </a>
            <?php }?>
        </div>
        <!-- End .owl-carousel -->
    </div>
    <!-- End .container -->

    <div class="bg-lighter pt-5 pb-5">
        <div class="container">
            <div class="heading text-center">
                <h2 class="title instagram">Let Us Inspire You On Instagram</h2>
                <!-- End .title -->
                <p class="title-desc">Donec nec justo eget felis facilisis fermentum.</p>
                <!-- End .title-desc -->
            </div>
            <!-- End .heading -->

            <div class="owl-carousel owl-simple mb-3" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": false,
                            "items": 5,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "360": {
                                    "items":2
                                },
                                "600": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                <div class="instagram-feed">
                    <img src="assets/images/demos/demo-18/instagram/1.jpg" alt="img">

                    <div class="instagram-feed-content">
                        <a href="#"><i class="far fa-heart"></i>466</a>
                        <a href="#"><i class="far fa-comments"></i>65</a>
                    </div>
                    <!-- End .instagram-feed-content -->
                </div>
                <!-- End .instagram-feed -->

                <div class="instagram-feed">
                    <img src="assets/images/demos/demo-18/instagram/2.jpg" alt="img">

                    <div class="instagram-feed-content">
                        <a href="#"><i class="far fa-heart"></i>280</a>
                        <a href="#"><i class="far fa-comments"></i>22</a>
                    </div>
                    <!-- End .instagram-feed-content -->
                </div>
                <!-- End .instagram-feed -->

                <div class="instagram-feed">
                    <img src="assets/images/demos/demo-18/instagram/3.jpg" alt="img">

                    <div class="instagram-feed-content">
                        <a href="#"><i class="far fa-heart"></i>123</a>
                        <a href="#"><i class="far fa-comments"></i>10</a>
                    </div>
                    <!-- End .instagram-feed-content -->
                </div>
                <!-- End .instagram-feed -->
                <div class="instagram-feed">
                    <img src="assets/images/demos/demo-18/instagram/4.jpg" alt="img">

                    <div class="instagram-feed-content">
                        <a href="#"><i class="far fa-heart"></i>290</a>
                        <a href="#"><i class="far fa-comments"></i>0</a>
                    </div>
                    <!-- End .instagram-feed-content -->
                </div>
                <!-- End .instagram-feed -->
                <div class="instagram-feed">
                    <img src="assets/images/demos/demo-18/instagram/5.jpg" alt="img">

                    <div class="instagram-feed-content">
                        <a href="#"><i class="far fa-heart"></i>582</a>
                        <a href="#"><i class="far fa-comments"></i>98</a>
                    </div>
                    <!-- End .instagram-feed-content -->
                </div>
                <!-- End .instagram-feed -->
            </div>
            <!-- End .owl-carousel -->

            <div class="more-container text-center">
                <a href="#" class="btn btn-outline-primary-2 btn-more">@Molla Instagram</a>
            </div>
            <!-- End .more-container -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .bg-lighter pt-5 pb-5 -->
</main>
<!-- End .main -->


